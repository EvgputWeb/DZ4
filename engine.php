<?php

require_once 'cooler.php';


class Engine
{
    protected $power;
    protected $temperature;
    protected $cooler;

    public function __construct($power)
    {
        $this->power = $power;
        $this->temperature = 20;
        $this->cooler = new Cooler();
    }

    public function on()
    {
        echo "<b>Двигатель включен</b><br>\n";
    }

    public function off()
    {
        echo "<b>Двигатель вЫключен</b><br>\n";
    }

    public function heat($increase)
    {
        $this->temperature += $increase;
        echo "--= Температура двигателя = $this->temperature °<br>\n";

        if ($this->temperature >= 90) {
            // Охлаждаем двигатель
            $this->cool();
        }
    }

    private function cool()
    {
        $this->cooler->on();
        $this->temperature -= 10;
        $this->cooler->off();
    }
}
