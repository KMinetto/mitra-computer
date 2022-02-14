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

        $this->assertEquals('First Name', $user->getFirstName());
        $this->assertEquals('Last Name', $user->getLastname());
        $this->assertEquals('email@example.com', $user->getEmail());
        $this->assertEquals('password', $user->getPassword());
    }

    public function testUserCreateFalse(): void
    {
        $user = new User();

        $user->setFirstName('First');
        $user->setLastName('Last');
        $user->setEmail('emaille@example.com');
        $user->setPassword('pass');

        $this->assertNotEquals('First Name', $user->getFirstName());
        $this->assertNotEquals('Last Name', $user->getLastname());
        $this->assertNotEquals('email@example.com', $user->getEmail());
        $this->assertNotEquals('password', $user->getPassword());
    }

    public function testUserCreateEmpty(): void
    {
        $user = new User();

        $user->setFirstName('');
        $user->setLastName('');
        $user->setEmail('');
        $user->setPassword('');

        $this->assertEmpty($user->getFirstName());
        $this->assertEmpty( $user->getLastname());
        $this->assertEmpty($user->getEmail());
        $this->assertEmpty($user->getPassword());
    }

}