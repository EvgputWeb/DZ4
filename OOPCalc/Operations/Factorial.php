<?php

require_once __DIR__ . '/../MathematicAction.php';
require_once __DIR__ . '/../ArgTests/OneIntegerPositiveArgument.php';


class Factorial extends MathematicAction
{
    use OneIntegerPositiveArgument;

    public function calc(array $arguments)
    {
        $res = 1;
        for ($i = 1; $i <= $arguments[0]; $i++) {
            $res *= $i;
        }
        return $res;
    }
}
