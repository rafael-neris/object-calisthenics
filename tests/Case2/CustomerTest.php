<?php

namespace Case2;

use PHPUnit\Framework\TestCase;
use Rafaelneris\ObjectCalisthenics\Case2\Birthday;
use Rafaelneris\ObjectCalisthenics\Case2\Customer;
use Rafaelneris\ObjectCalisthenics\Case2\InvalidBirthdayException;

class CustomerTest extends TestCase
{
    public function testInstantiateCustomer()
    {
        $customer = new Customer('John Doe', new Birthday('1983-02-10'));

        self::assertEquals('1983-02-10', $customer->getBirthDay());
    }

    public function testInstantiateCustomerWithBrazilianDate()
    {
        $customer = new Customer('John Doe', new Birthday('10/02/1983'));

        self::assertEquals('1983-02-10', $customer->getBirthDay());
    }

    public function testInstantiateCustomerWithOtherDate()
    {
        self::expectException(InvalidBirthdayException::class);
         new Customer('John Doe', new Birthday('10/]2331/1983'));
    }
}