<?php

declare(strict_types=1);

namespace Rafaelneris\ObjectCalisthenics\Case3;

class Bucket
{
    public function __construct(private array $products = []) {}

    public function getCountOfProducts(): int
    {
        return count($this->products);
    }
}