<?php

namespace App\Tests\AppBundle\Entity;

use App\Entity\Carrier;

class CarrierTest extends \PHPUnit\Framework\TestCase
{

    public function testCarrierTrue(): void
    {
        $carrier = new Carrier();

        $carrier->setName('Name')
                ->setDescription('Description')
                ->setPrice(3.14);

        $this->assertSame($carrier->getName(), 'Name');
        $this->assertSame($carrier->getDescription(), 'Description');
        $this->assertSame($carrier->getPrice(), 3.14);
    }

    public function testCarrierFalse(): void
    {
        $carrier = new Carrier();

        $carrier->setName('Name')
                ->setDescription('Description')
                ->setPrice(3.14);

        $this->assertNotSame('Named', $carrier->getName());
        $this->assertNotSame('Desc', $carrier->getDescription());
        $this->assertNotSame(3,$carrier->getPrice());
    }

    public function testCarrierEmpty(): void
    {
        $carrier = new Carrier();

        $this->assertEmpty($carrier->getName());
        $this->assertEmpty($carrier->getDescription());
        $this->assertEmpty($carrier->getPrice());
    }

}