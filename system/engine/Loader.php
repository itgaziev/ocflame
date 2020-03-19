<?php
namespace Engine;

/**
 * Class Loader
 * @package Engine
 */
final class Loader
{
    protected $registry;

    public function __construct(Registry $registry)
    {
        $this->registry = $registry;
    }

    public function controller($route, ...$args) {
        $route = preg_replace('/[^a-zA-Z0-9_\/]/', '', (string)$route);

        $trigger = $route;

        $result = $this->registry->get('event')->trigger('controller/' . $trigger . '/before', [&$route, &$args]);

        if ($result != null && !$result instanceof \Exception) {
            $output = $result;
        } else {
            $action = new Action($route);
            $output = $action->execute($this->registry, $args);
        }

        $result = $this->registry->get('event')->trigger('controller/' . $trigger . '/after', [&$route, &$args, &$output]);

        if ($result && !$result instanceof \Exception) {
            $output = $result;
        }

        if (!$output instanceof \Exception) {
            return $output;
        }
    }

    public function view($route, $data = [], $path = '') {
        $route = preg_replace('/[^a-zA-Z0-9_\/]/', '', (string)$route);

        $trigger = $route;

        $code = '';

        $result = $this->registry->get('event')->trigger('view/' . $trigger . '/before', [&$route, &$data, &$code]);

        if ($result && !$result instanceof \Exception) {
            $output = $result;
        } else {
            $template = new Template();

            foreach ($data as $key => $value) {
                $template->set($key, $value);
            }

            $output = $template->render($this->registry->get('config')->get('template_directory') . '/' . $route, $code);
        }

        $result = $this->registry->get('event')->trigger('view/' . $trigger . '/after', [&$route, &$data, &$output]);

        if ($result && !$result instanceof \Exception) {
            $output = $result;
        }

        return $output;
    }

    public function config($route) {
        $this->registry->get('event')->trigger('config/' . $route . '/before', array(&$route));

        $this->registry->get('config')->load($route);

        $this->registry->get('event')->trigger('config/' . $route . '/after', array(&$route));
    }
}