<?php

namespace Rafaelneris\ObjectCalisthenics\Case1\Entities;

class Product
{
    public function __construct(
        public string $sku,
        public int $amount,
        public int $quantity,
    ) {
    }
}