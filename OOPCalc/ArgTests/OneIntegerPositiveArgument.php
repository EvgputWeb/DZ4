<?php

trait OneIntegerPositiveArgument
{
    // Проверка:
    // аргумент должен быть только один,
    // только целым,
    // только положительным
    public function is_correct_arguments(array $arguments)
    {
        $this->correctArguments = parent::is_correct_arguments($arguments);

        if ($this->correctArguments) {
            if (count($arguments) != 1) {
                $this->correctArguments = false;
                $this->errorMessage = 'Должен быть только один аргумент';
            } else {
                if (!is_int($arguments[0])) {
                    $this->correctArguments = false;
                    $this->errorMessage = 'Аргумент должен быть целым числом';
                } else {
                    $this->correctArguments = ($arguments[0] > 0);
                    if (!$this->correctArguments) {
                        $this->errorMessage = 'Число должно быть положительным';
                    }
                }
            }
        }
        return $this->correctArguments;
    }
}
