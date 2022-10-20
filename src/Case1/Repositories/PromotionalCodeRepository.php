<?php

namespace Rafaelneris\ObjectCalisthenics\Case1\Repositories;

use Rafaelneris\ObjectCalisthenics\Case1\Entities\PromotionalCode;

interface PromotionalCodeRepository
{
    public function getPromotionalCode(string $name): ?PromotionalCode;
}