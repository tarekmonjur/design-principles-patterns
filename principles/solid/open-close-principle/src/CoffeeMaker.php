<?php


namespace Solid;


class CoffeeMaker
{
    protected $tarek;

    public function __construct(InstructionInterface $InstructionInterface)
    {
        $this->instruction = $InstructionInterface;
    }

    public function makeCoffee()
    {
        return "your coffee is ready by the instruction is - ".$this->instruction->makeCoffeeInstruction()."</br>";
    }
}