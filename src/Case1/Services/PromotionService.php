<?php

namespace Rafaelneris\ObjectCalisthenics\Case1\Services;

use Exception;
use Rafaelneris\ObjectCalisthenics\Case1\Entities\Order;
use Rafaelneris\ObjectCalisthenics\Case1\Entities\PromotionalCode;
use Rafaelneris\ObjectCalisthenics\Case1\Repositories\PromotionalCodeRepository;

class PromotionService
{
    public function __construct(private PromotionalCodeRepository $promotionalCodeRepository) {}

    public function applyPromotionalCode(Order $order, string $promotionalName): Order
    {
        if (!$order->isElegibleForPromotion()) {
            throw new Exception("Pedido não elegível a promoção");
        }
        return $this->executePromotionalCodeRules($promotionalName, $order);
    }

    protected function executePromotionalCodeRules(string $promotionalName, Order $order): Order
    {
        $promotionalCode = $this->promotionalCodeRepository->getPromotionalCode($promotionalName);
        if (!$promotionalCode) {
            throw new Exception("Promoção informada não existe");
        }

        return $this->executeValidPromoCode($promotionalCode, $order);
    }


    private function executeValidPromoCode(PromotionalCode $promotionalCode, Order $order): Order
    {
        if ($promotionalCode->isExpired()) {
            throw new Exception("Promoção Expirada");
        }

        return $order->applyPromotionalCode($promotionalCode);

    }
}