<?php

class Car 

{

    // Définitions des propriétés 

    private int $nbWheels = 4;
    private int $currentSpeed;
    private string $color;
    private int $nbSeats;
    private string $energy;
    private int $energyLevel;

    // Les constructeurs

    public function __construct(string $color,
    int $nbSeats,
    string $energy 
    )
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;
    }

    // Définitions des méthodes 

    public function start(): string
    {
        $this->currentSpeed = 15;
        return "The engine just started. We are going slowly";
    }

    public function forward(): string
    {
        $sentence = "";
        while ($this->currentSpeed < 45) {
            $this->currentSpeed++;
            $sentence .= "Faster !";
        }
        return $sentence;
    }

    public function brake(): string
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Slowly !";
        }
        $sentence .= " You stopped thee car !";
        return $sentence;
    }

    // Les accesseurs des propriétés

    /**
     * Get the value of currentSpeed
     *
     * @return int
     */
    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }


    /**
     * Get the value of color
     *
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * Get the value of nbSeats
     *
     * @return int
     */
    public function getNbSeats(): int
    {
        return $this->nbSeats;
    }

    /**
     * Get the value of energy
     *
     * @return string
     */
    public function getEnergy(): string
    {
        return $this->energy;
    }

    /**
     * Get the value of nbWheels
     *
     * @return int
     */
    public function getNbWheels(): int
    {
        return $this->nbWheels;
    }


    /**
     * Get the value of energyLevel
     *
     * @return int
     */
    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

}