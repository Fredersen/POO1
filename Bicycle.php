<?php

class Bicycle
{

    // Définitions des propriétés 

    private string $color;

    private int $currentSpeed;

    public int $nbSeats = 1;

    public int $nbWheels = 2;

    // Accesseurs et mutateurs 

    public function getColor(): string
    {
        return $this->color;
    }

    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

    public function setCurrentSpeed(int $currentSpeed): void
    {
        if ($currentSpeed >= 0) {
            $this->currentSpeed = $currentSpeed;
        }
    }

    // Définition des méthodes 

    public function __construct(string $color)
    {
        $this->color = $color;
    }


    public function forward(): string
    {
        $this->currentSpeed = 15;

        return "Go !";
    }

    public function brake(): string
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Brake !!!";
        }
        $sentence .= "I'm stopped !";
        return $sentence;
    }
}
