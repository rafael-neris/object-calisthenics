<?php

namespace Rafaelneris\ObjectCalisthenics\Case3;

class ProductCollection extends \ArrayIterator
{
    private array $products = [];

    public function add(Product $product): ProductCollection
    {
        $this->products[] = $product;
        $this->append($product);
        return $this;
    }
}