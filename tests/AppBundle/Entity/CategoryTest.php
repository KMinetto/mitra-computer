<?php

namespace App\Tests\AppBundle\Entity;

use App\Entity\Category;

class CategoryTest extends \PHPUnit\Framework\TestCase
{
    public function testCategoryTrue() :void
    {
        $category = new Category();

        $category->setName('Name');

        $this->assertSame($category->getName(), 'Name');
    }

    public function testCategoryFalse() :void
    {
        $category = new Category();

        $category->setName('Name');

        $this->assertNotSame('Named', $category->getName());
    }

    public function testCategoryEmpty(): void
    {
        $category = new Category();

        $this->assertEmpty($category->getName());
    }
}