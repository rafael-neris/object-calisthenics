<?php

namespace Rafaelneris\ObjectCalisthenics\Case1\Entities;

class Order
{
    private ?PromotionalCode $promotionalCode;

    public function __construct(private array $items, private bool $elegibleForPromotion) {}

    public function isElegibleForPromotion(): bool {
        return $this->elegibleForPromotion;
    }

    public function applyPromotionalCode(PromotionalCode $promotionalCode): Order
    {
        $this->promotionalCode = $promotionalCode;
        return $this;
    }

    public function isPromotionalCodeApplied(): bool
    {
        if (isset($this->promotionalCode)) {
            return true;
        }
        return false;
    }
}