<?php

namespace Case3;

use PHPUnit\Framework\TestCase;
use Rafaelneris\ObjectCalisthenics\Case3\Bucket;
use Rafaelneris\ObjectCalisthenics\Case3\Product;
use Rafaelneris\ObjectCalisthenics\Case3\ProductCollection;

class BucketTest extends TestCase
{
    public function testAddProductAndGetProduct(): void
    {
        $bucket = new Bucket([new Product()]);

        self::assertEquals( 1, $bucket->getCountOfProducts());
    }
}