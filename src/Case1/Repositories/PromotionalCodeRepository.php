<?php

namespace Rafaelneris\ObjectCalisthenics\Case1\Repositories;

use Rafaelneris\ObjectCalisthenics\Case1\PromotionalCode;

interface PromotionalCodeRepository
{
    public function getPromotionalCode(string $name): ?PromotionalCode;
}