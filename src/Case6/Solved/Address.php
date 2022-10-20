<?php

namespace Rafaelneris\ObjectCalisthenics\Case6\Solved;

class Address
{
    public function __construct(
        public readonly string $street,
        public readonly string $number,
        public readonly string $neighborhood,
        public readonly string $city,
        public readonly string $state,
    ) {
    }
}