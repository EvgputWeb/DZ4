<?php

interface IMathematicAction
{
    public function calc(array $arguments);
}

interface ITestArguments
{
    public function is_correct_arguments(array $arguments);
    public function error_message();
}


class MathematicAction implements ITestArguments, IMathematicAction
{
    protected $correctArguments = true;
    protected $errorMessage = '';

    public function is_correct_arguments(array $arguments)
    {
        $correctArguments = true;
        if (count($arguments) == 0) {
            $this->correctArguments = false;
            $this->errorMessage = 'Нет аргументов';
        } else {
            // массив должен быть не ассоциативным
            if (array_keys($arguments) != range(0, count($arguments) - 1)) {
                $this->correctArguments = false;
                $this->errorMessage = 'Неверные аргументы';
            } else {
                // в массиве должны быть только числовые значения
                foreach ($arguments as $arg) {
                    if (!is_numeric($arg)) {
                        $this->correctArguments = false;
                        $this->errorMessage = 'Аргументы должны быть числами';
                        break;
                    }
                }
            }
        }
        return $this->correctArguments;
    }

    public function error_message()
    {
        return $this->errorMessage;
    }

    public function calc(array $arguments)
    {
        // надо реализовать в потомках
    }
}
