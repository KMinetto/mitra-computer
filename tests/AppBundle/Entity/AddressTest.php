<?php

namespace App\Tests\AppBundle\Entity;

use App\Entity\Address;
use App\Entity\User;

class AddressTest extends \PHPUnit\Framework\TestCase
{
    public function testAddressTrue(): void
    {
        $address = new Address();
        $user = new User();

        $address->setUser($user)
                ->setFirstName('First Name')
                ->setLastName('Last Name')
                ->setName('Name')
                ->setCompany('Company')
                ->setAddress('Address')
                ->setPostal('Postal')
                ->setCity('City')
                ->setCountry('Country')
                ->setPhoneNumber('Phone')
                ->setCellphoneNumber('Cell');

        $this->assertSame($address->getUser(), $user);
        $this->assertSame($address->getFirstName(), 'First Name');
        $this->assertSame($address->getLastName(), 'Last Name');
        $this->assertSame($address->getName(), 'Name');
        $this->assertSame($address->getCompany(), 'Company');
        $this->assertSame($address->getAddress(), 'Address');
        $this->assertSame($address->getPostal(), 'Postal');
        $this->assertSame($address->getCity(), 'City');
        $this->assertSame($address->getCountry(), 'Country');
        $this->assertSame($address->getPhoneNumber(), 'Phone');
        $this->assertSame($address->getCellphoneNumber(), 'Cell');
    }

    public function testAddressFalse(): void
    {
        $address = new Address();
        $user = new User();

        $address->setUser($user)
                ->setFirstName('First Name')
                ->setLastName('Last Name')
                ->setName('Name')
                ->setCompany('Company')
                ->setAddress('Address')
                ->setPostal('Postal')
                ->setCity('City')
                ->setCountry('Country')
                ->setPhoneNumber('Phone')
                ->setCellphoneNumber('Cell');

        $this->assertNotSame($address->getUser(), new User());
        $this->assertNotSame('First', $address->getFirstName());
        $this->assertNotSame('Last', $address->getFirstName());
        $this->assertNotSame('Named', $address->getName());
        $this->assertNotSame('Industry', $address->getCompany());
        $this->assertNotSame('Adresse', $address->getAddress());
        $this->assertNotSame('Code', $address->getPostal());
        $this->assertNotSame('Village', $address->getCity());
        $this->assertNotSame('State', $address->getCountry());
        $this->assertNotSame('03.03.03.03.03', $address->getPhoneNumber());
        $this->assertNotSame('06.06.06.06.06', $address->getCellphoneNumber());
    }

    public function testOrderDetailsEmpty(): void
    {
        $address = new Address();

        $this->assertEmpty($address->getUser());
        $this->assertEmpty($address->getFirstName());
        $this->assertEmpty($address->getLastName());
        $this->assertEmpty($address->getName());
        $this->assertEmpty($address->getCompany());
        $this->assertEmpty($address->getAddress());
        $this->assertEmpty($address->getPostal());
        $this->assertEmpty($address->getCity());
        $this->assertEmpty($address->getCountry());
        $this->assertEmpty($address->getPhoneNumber());
        $this->assertEmpty($address->getCellphoneNumber());
    }
}