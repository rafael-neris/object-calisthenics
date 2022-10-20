<?php

namespace Rafaelneris\ObjectCalisthenics\Case6\Solved;

class Company
{
    public function __construct(
        public readonly string $companyName,
        public readonly string $fantasyName,
        public readonly Document $document,
        public readonly Address $address,
    ) {
    }
}