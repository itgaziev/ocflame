<?php


namespace Engine;


class Event
{
    protected $registry;
    protected $data = [];

    public function __construct(Registry $registry)
    {
        $this->registry = $registry;
    }

    public function register($trigger, Action $action, $priority = 0) {
        $this->data[] = [
          'trigger'  => $trigger,
          'action'   => $action,
          'priority' => $priority
        ];

        $sort_order = [];

        foreach ($this->data as $key => $value) {
            $sort_order[$key] = $value['priority'];
        }

        array_multisort($sort_order, SORT_ASC, $this->data);
    }

    public function trigger($event, array $args = []) {
        foreach ($this->data as $value) {
            if (preg_match('/^' . str_replace(['\*', '\?'], ['.*', '.'], preg_quote($value['trigger'], '/')) . '/' . $event)) {
                $result = $value['action']->execute($this->registry, $args);

                if (!is_null($result) && !($result instanceof \Exception)) {
                    return $result;
                }
            }
        }
    }

    public function unregister($trigger, $route) {
        foreach ($this->data as $key => $value) {
            if ($trigger == $value['trigger'] && $value['action']->getId() == $route) {
                unset($this->data[$key]);
            }
        }
    }

    public function clear($trigger) {
        foreach ($this->data as $key => $value) {
            if ($trigger == $value['trigger']) {
                unset($this->data[$key]);
            }
        }
    }
}