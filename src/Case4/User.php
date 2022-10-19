<?php


namespace Rafaelneris\ObjectCalisthenics\Case4;


class User
{
    public function __construct(private Email $email) {}

    public function getEmail(): Email
    {
        return $this->email;
    }
}