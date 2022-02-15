<?php

namespace App\Tests\AppBundle\Entity;

use App\Entity\Order;
use App\Entity\User;
use DateTime;
use PHPUnit\Framework\TestCase;

class OrderTest extends TestCase
{
    public function testOrderTrue() :void
    {
        $order = new Order();
        $user = new User();
        $dateTime = new DateTime();

        $order  ->setUser($user)
                ->setCreatedAt($dateTime)
                ->setDelivery('Delivery')
                ->setReference('Reference')
                ->setState(TRUE);

        $this->assertSame($order->getUser(), $user);
        $this->assertSame($order->getCreatedAt(), $dateTime);
        $this->assertSame($order->getDelivery(), 'Delivery');
        $this->assertSame($order->getReference(), 'Reference');
        $this->assertTrue($order->getState());
    }

    public function testOrderFalse() :void
    {
        $order = new Order();
        $user = new User();
        $dateTime = new DateTime();

        $order  ->setUser($user)
                ->setCreatedAt($dateTime)
                ->setDelivery('Delivery')
                ->setReference('Reference')
                ->setState(TRUE);

        $this->assertNotSame($user, new User());
        $this->assertNotSame($dateTime, new DateTime());
        $this->assertNotSame('Delivered', $order->getDelivery());
        $this->assertNotSame('Referenced', $order->getReference());
        $this->assertNotTrue($order->setState(FALSE));
    }

    public function testOrderEmpty() : void
    {
        $order = new Order();
        $user = new User();
        $dateTime = new DateTime();

        $this->assertEmpty($order->getUser());
        $this->assertEmpty($order->getCreatedAt());
        $this->assertEmpty($order->getDelivery());
        $this->assertEmpty($order->getReference());
        $this->assertEmpty($order->getState());
    }
}