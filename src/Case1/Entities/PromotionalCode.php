<?php

declare(strict_types=1);

namespace Rafaelneris\ObjectCalisthenics\Case1\Entities;

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

    public function isExpired(): bool
    {
        return $this->isExpired;
    }

    /**
     * @return string
     */
    public function getPromotionalName(): string
    {
        return $this->promotionalName;
    }
}