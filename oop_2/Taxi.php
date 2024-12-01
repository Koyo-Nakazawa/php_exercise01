<?php

require_once __DIR__ . '/Car.php';

class Taxi extends Car
{
    private $passenger;
    public function __construct($name, $number, $color)
    {
        parent::__construct($name, $number, $color);
        $this->passenger = 0;
    }

    public function pickup($passenger)
    {
        $this->passenger += $passenger;
        return "{$passenger}人乗車しました" . PHP_EOL;
    }

    public function lower($passenger)
    {
        if ($this->passenger >= $passenger) {
            $this->passenger -= $passenger;
            return "{$passenger}人降車しました" . PHP_EOL;
        } else {
            return "{$passenger}人は降車できません" . PHP_EOL;
        }
    }

    public function information()
    {
        $result = parent::information();
        $result = $result . "乗車人数:{$this->passenger}人" . PHP_EOL;
        return $result;
    }

}
