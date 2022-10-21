<?php

namespace Rafaelneris\ObjectCalisthenics\Case2;

class Customer
{
    public function __construct(protected string $name, private Birthday $birthday)
    {
        // Validar Aqui?
    }

    public function getBirthDay(): string
    {
        return $this->birthday->format();
    }
}