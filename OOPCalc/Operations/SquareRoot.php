<?php

require_once __DIR__ . '/../MathematicAction.php';
require_once __DIR__ . '/../ArgTests/OneFloatPositiveArgument.php';

class SquareRoot extends MathematicAction {

    use OneFloatPositiveArgument;

    public function calc(array $arguments)
    {
        return sqrt($arguments[0]);
    }
}
