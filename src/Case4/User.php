<?php


namespace Rafaelneris\ObjectCalisthenics\Case4;


class User
{
    public function __construct(private Email $email) {}

    public function getEmailDomain(): string
    {
        return $this->email->getDomain();
    }
}