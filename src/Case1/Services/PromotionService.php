<?php

namespace Rafaelneris\ObjectCalisthenics\Case1;

use Rafaelneris\ObjectCalisthenics\Case1\Repositories\PromotionalCodeRepository;

class PromotionService
{
    public function __construct(private PromotionalCodeRepository $promotionalCodeRepository) {}

    public function applyPromotionalCode(Order $order, string $promotionalName): Order
    {
        if ($order->isElegibleForPromotion()) {
            $promotionalCode = $this->promotionalCodeRepository->getPromotionalCode($promotionalName);
            if ($promotionalCode) {
                if ($promotionalCode->isExpired() === false) {
                    return $order->applyPromotionalCode($promotionalCode);
                } else {
                    throw new \Exception("Promoção Expirada");
                }
            } else {
                throw new \Exception("Promoção informada não existe");
            }
        } else {
            throw new \Exception("Pedido não elegível a promoção");
        }
    }
}