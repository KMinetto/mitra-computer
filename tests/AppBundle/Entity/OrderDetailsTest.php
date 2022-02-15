<?php

namespace App\Tests\AppBundle\Entity;

use App\Entity\Order;
use App\Entity\OrderDetails;
use PHPUnit\Framework\TestCase;

class OrderDetailsTest extends TestCase
{
    public function testOrderDetailsTrue(): void
    {
        $orderDetails = new OrderDetails();
        $order = new Order();

        $orderDetails   ->setMyOrder($order)
                        ->setProduct('Product')
                        ->setQuantity(3)
                        ->setPrice(3.14)
                        ->setTotal(3.14);

        $this->assertSame($orderDetails->getMyOrder(), $order);
        $this->assertSame($orderDetails->getProduct(), 'Product');
        $this->assertSame($orderDetails->getQuantity(), 3);
        $this->assertSame($orderDetails->getPrice(), 3.14);
        $this->assertSame($orderDetails->getTotal(), 3.14);
    }

    public function testOrderDetailsFalse() : void
    {
        $orderDetails = new OrderDetails();
        $order = new Order();

        $orderDetails   ->setMyOrder($order)
                        ->setProduct('Product')
                        ->setQuantity(3)
                        ->setPrice(3.14)
                        ->setTotal(3.14);

        $this->assertNotSame($orderDetails->getMyOrder(), new Order());
        $this->assertNotSame('Products', $orderDetails->getProduct());
        $this->assertNotSame(2, $orderDetails->getQuantity());
        $this->assertNotSame(3, $orderDetails->getPrice());
        $this->assertNotSame(3, $orderDetails->getTotal());
    }

    public function testOrderDetailsEmpty(): void
    {
        $orderDetails = new OrderDetails();

        $this->assertEmpty($orderDetails->getMyOrder());
        $this->assertEmpty($orderDetails->getProduct());
        $this->assertEmpty($orderDetails->getQuantity());
        $this->assertEmpty($orderDetails->getPrice());
        $this->assertEmpty($orderDetails->getTotal());
    }
}