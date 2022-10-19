<?php

namespace Case3;

use PHPUnit\Framework\TestCase;
use Rafaelneris\ObjectCalisthenics\Case3\Bucket;
use Rafaelneris\ObjectCalisthenics\Case3\Product;
use Rafaelneris\ObjectCalisthenics\Case3\ProductCollection;

class BucketTest extends TestCase
{
    public function testAddAndGetProduct(): void
    {
        $productCollection = (new ProductCollection())->add(new Product());

        $bucket = new Bucket($productCollection);

        self::assertEquals( 1, $bucket->getCountOfProducts());
    }

}