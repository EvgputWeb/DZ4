<?php

trait OneFloatPositiveArgument {
    // Проверка:
    // аргумент должен быть только один,
    // только положительным
    public function is_correct_arguments(array $arguments)
    {
        $this->correctArguments = parent::is_correct_arguments($arguments);

        if ($this->correctArguments) {

            if (count($arguments)!=1)
            {
                $this->correctArguments = false;
                $this->errorMessage = 'Должен быть только один аргумент';
            } else {
                if (!is_numeric($arguments[0])) {
                    $this->correctArguments = false;
                    $this->errorMessage = 'Аргумент должен быть числом';
                } else {
                    $this->correctArguments = ($arguments[0]>0);
                    if (!$this->correctArguments) {
                        $this->errorMessage = 'Число должно быть положительным';
                    }
                }
            }
        }
        return $this->correctArguments;
    }
}
