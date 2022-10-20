<?php

namespace Rafaelneris\ObjectCalisthenics\Case6;

class Company
{
    public function __construct(
        public readonly string $companyName,
        public readonly string $fantasyName,
        public readonly string $documentNumber,
        public readonly string $documentType,
        public readonly string $street,
        public readonly string $number,
        public readonly string $neighborhood,
        public readonly string $city,
        public readonly string $state,
    ) {
    }
}