<?php

namespace Case4;

use PHPUnit\Framework\TestCase;
use Rafaelneris\ObjectCalisthenics\Case4\Email;
use Rafaelneris\ObjectCalisthenics\Case4\User;

class UserTest extends TestCase
{
    public function testGetUserEmailDomain()
    {
        $email = new Email("rafaelneris@phpsp.com");
        $user = new User($email);

        $domain = $user->getEmail()->getDomain();

        self::assertIsString($domain);
        self::assertEquals("phpsp.com", $domain);
    }
}