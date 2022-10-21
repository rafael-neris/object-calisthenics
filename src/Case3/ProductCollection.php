<?php

namespace Rafaelneris\ObjectCalisthenics\Case3;

class ProductCollection extends \ArrayIterator
{
    public function add(Product $product): ProductCollection
    {
        $this->append($product);
        return $this;
    }
}