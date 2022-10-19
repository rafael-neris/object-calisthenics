<?php

namespace Case2;

use PHPUnit\Framework\TestCase;
use Rafaelneris\ObjectCalisthenics\Case2\Customer;

class CustomerTest extends TestCase
{
    public function testInstantiateCustomer()
    {
        $customer = new Customer('John Doe', '1983-02-10');

        self::assertEquals('1983-02-10', $customer->getBirthDay());
    }

    public function testInstantiateCustomerWithBrazilianDate()
    {
        $customer = new Customer('John Doe', '10/02/1983');

        self::assertEquals('1983-02-10', $customer->getBirthDay());
    }

    public function testInstantiateCustomerWithOtherDate()
    {
        $customer = new Customer('John Doe', '10/31/1983');

        self::assertEquals('1983-10-31', $customer->getBirthDay());
    }
}