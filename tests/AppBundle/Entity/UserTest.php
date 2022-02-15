<?php

namespace App\Tests\AppBundle\Entity;

use App\Entity\User;

class UserTest extends \PHPUnit\Framework\TestCase
{

    public function testUserCreateTrue(): void
    {
        $user = new User();

        $user->setFirstName('First Name');
        $user->setLastName('Last Name');
        $user->setEmail('email@example.com');
        $user->setPassword('password');

        $this->assertSame($user->getFirstName(), 'First Name');
        $this->assertSame($user->getLastname(), 'Last Name');
        $this->assertSame($user->getEmail(), 'email@example.com');
        $this->assertSame($user->getPassword(), 'password');
    }

    public function testUserCreateFalse(): void
    {
        $user = new User();

        $user->setFirstName('First Name');
        $user->setLastName('Last Name');
        $user->setEmail('emal@example.com');
        $user->setPassword('password');

        $this->assertNotSame('First', $user->getFirstName());
        $this->assertNotSame('Last', $user->getLastname());
        $this->assertNotSame('emaille@example.com', $user->getEmail());
        $this->assertNotSame('pass', $user->getPassword());
    }

    public function testUserCreateEmpty(): void
    {
        $user = new User();

        $this->assertEmpty($user->getFirstName());
        $this->assertEmpty( $user->getLastname());
        $this->assertEmpty($user->getEmail());
    }

}