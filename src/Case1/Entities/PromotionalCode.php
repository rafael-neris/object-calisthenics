<?php

declare(strict_types=1);

namespace Rafaelneris\ObjectCalisthenics\Case1;

class PromotionalCode
{
    public function __construct(
        private string $promotionalCode,
        private string $promotionalName,
        private bool $isExpired) {
    }

    public function getPromotionalCode()
    {
        return $this->promotionalCode;
    }

    public function isBrazilianPromotion()
    {
        str_contains("BR", $this->promotionalName);
        return $this->promotionalName;
    }

    public function isExpired(): bool
    {
        return $this->isExpired;
    }
}