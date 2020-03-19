<?php


namespace Engine;


final class Router
{
    private $registry;
    private $pre_action = [];
    private $error;

    public function __construct(Registry $registry)
    {
        $this->registry = $registry;
    }

    public function addPreAction(Action $pre_acton) {
        $this->pre_action[] = $pre_acton;
    }

    public function dispatch(Action $action, Action $error) {
        $this->error = $error;

        foreach ($this->pre_action as $pre_action) {
            $result = $this->execute($pre_action);

            if ($result instanceof Action) {
                $action = $result;

                break;
            }
        }

        while ($action instanceof Action) {
            $action = $this->execute($action);
        }
    }

    private function execute(Action $action) {
        $result = $action->execute($this->registry);

        if ($result instanceof Action) {
            return $result;
        }

        if ($result instanceof \Exception) {
            $action = $this->error;

            $this->error = null;

            return $action;
        }
    }
}