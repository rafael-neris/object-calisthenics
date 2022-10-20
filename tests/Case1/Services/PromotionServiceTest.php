<?php

declare(strict_types=1);

namespace Case1\Services;

use Exception;
use Mockery;
use PHPUnit\Framework\TestCase;
use Rafaelneris\ObjectCalisthenics\Case1\Entities\Product;
use Rafaelneris\ObjectCalisthenics\Case1\Entities\Order;
use Rafaelneris\ObjectCalisthenics\Case1\Entities\PromotionalCode;
use Rafaelneris\ObjectCalisthenics\Case1\Repositories\PromotionalCodeRepository;
use Rafaelneris\ObjectCalisthenics\Case1\Services\PromotionService;

class PromotionServiceTest extends TestCase
{
    private PromotionService $promotionService;

    protected function setUp(): void
    {
        $this->promotionRepository = Mockery::mock(PromotionalCodeRepository::class);
        $this->promotionService = new PromotionService($this->promotionRepository);
        parent::setUp();
    }

    protected function tearDown(): void
    {
        unset($this->promotionService, $this->promotionRepository);
        parent::tearDown();
    }

    public function testApplyPromotionalCode(): void
    {
        $this->promotionRepository
            ->shouldReceive('getPromotionalCode')
            ->andReturn(
                new PromotionalCode(promotionalCode: "PHPCOMMUNITYSUMMIT", promotionalName: "PHP", isExpired: false )
            );
        $order = new Order(items: [new Product('123', 3, 2)], elegibleForPromotion: true);

        $order = $this->promotionService->applyPromotionalCode($order, promotionalName: "PHP");

        self::assertTrue($order->isPromotionalCodeApplied());
    }

    public function testApplyPromotionalCodeWithInvalidPromotionalCode(): void
    {
        self::expectException(Exception::class);
        $this->promotionRepository
            ->shouldReceive('getPromotionalCode')
            ->andReturnNull();
        $order = new Order(items: [new Product('123', 3, 2)], elegibleForPromotion: true);

       $this->promotionService->applyPromotionalCode($order, promotionalName: "PHP");

    }

    public function testApplyPromotionalCodeWithExpiredPromotionalCode(): void
    {
        self::expectException(Exception::class);
        $this->promotionRepository
            ->shouldReceive('getPromotionalCode')
            ->andReturn(
                new PromotionalCode(promotionalCode: "PHPCOMMUNITYSUMMIT", promotionalName: "PHP", isExpired: true )
            );
        $order = new Order(items: [new Product('123', 3, 2)], elegibleForPromotion: true);

        $this->promotionService->applyPromotionalCode($order, promotionalName: "PHP");
    }
}