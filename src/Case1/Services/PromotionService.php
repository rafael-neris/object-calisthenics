<?php

namespace Rafaelneris\ObjectCalisthenics\Case1\Services;

use Exception;
use Rafaelneris\ObjectCalisthenics\Case1\Entities\Order;
use Rafaelneris\ObjectCalisthenics\Case1\Repositories\PromotionalCodeRepository;

class PromotionService
{
    public function __construct(private PromotionalCodeRepository $promotionalCodeRepository) {}

    public function applyPromotionalCode(Order $order, string $promotionalName): Order
    {
        if ($order->isElegibleForPromotion()) {
            $promotionalCode = $this->promotionalCodeRepository->getPromotionalCode($promotionalName);
            //2
            if ($promotionalCode) {
                // 1
                if ($promotionalCode->isExpired() === false) {
                    return $order->applyPromotionalCode($promotionalCode);
                } else {
                    throw new Exception("Promoção Expirada");
                }
            } else {
                throw new Exception("Promoção informada não existe");
            }
        } else {
            throw new Exception("Pedido não elegível a promoção");
        }
    }
}