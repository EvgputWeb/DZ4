<?php

require_once __DIR__ . '/../MathematicAction.php';


class Summator extends MathematicAction
{
    public function calc(array $arguments)
    {
        $res = 0;
        foreach ($arguments as $arg) {
            $res += $arg;
        }
        return $res;
    }
}
