<?php


trait TransmissionMode
{
    protected $mode;

    public function getMode()
    {
        return $this->mode;
    }

    public function setMode($mode)
    {
        $this->mode = $mode;
        if ($mode == 'forward') {
            echo '__# Трансмиссия: режим "Вперёд"' . "<br>\n";
        } else {
            echo '__# Трансмиссия: режим "Назад"' . "<br>\n";
        }
    }
}


class TransmissionAuto
{
    use TransmissionMode;
}


class TransmissionMechanic
{
    use TransmissionMode;

    protected $gear;

    public function getGear()
    {
        return $this->gear;
    }

    public function setGear($gear)
    {
        $this->gear = $gear;
        echo "__# Трансмиссия: передача <b>$gear</b> <br>\n";
    }
}
