<?php

namespace Rafaelneris\ObjectCalisthenics\Case4;

use Exception;

class Email
{
    public function __construct(public string $value)
    {
        if (!filter_var($value, FILTER_VALIDATE_EMAIL)) {
            throw new Exception('Invalid e-mail got [ ' . $value . ' ]');
        }
    }

    public function getDomain(): string
    {
        return explode('@', $this->value)[1];
    }
}