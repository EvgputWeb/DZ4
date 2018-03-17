<?php

require_once 'MathematicAction.php';

class Calculator
{
    private $arguments;
    private $action;

    public function __construct()
    {
        $this->arguments = [];
        $this->action = new MathematicAction();
    }

    public function setArguments(array $arguments)
    {
        $this->arguments = $arguments;
    }

    public function setAction(MathematicAction $action)
    {
        $this->action = $action;
    }

    public function result()
    {
        ($this->action->is_correct_arguments($this->arguments)) ?
            ($res = $this->action->calc($this->arguments)) :
            ($res = $this->action->error_message());
        return $res;
    }
}
