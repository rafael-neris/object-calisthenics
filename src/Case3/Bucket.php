<?php

declare(strict_types=1);

namespace Rafaelneris\ObjectCalisthenics\Case3;

class Bucket
{
    public function __construct(private ProductCollection $productCollection) {}

    public function getCountOfProducts(): int
    {
        return $this->productCollection->count();
    }
}