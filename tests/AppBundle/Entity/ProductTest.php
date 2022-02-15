<?php

namespace App\Tests\AppBundle\Entity;

use App\Entity\Category;
use App\Entity\Product;

class ProductTest extends \PHPUnit\Framework\TestCase
{
    public function testProductCreateTrue() :void
    {
        $product = new Product();
        $category = new Category();

        $product->setName('Name')
                ->setDescription('Description')
                ->setSlug('Slug')
                ->setPrice(3.14)
                ->setImage('Image')
                ->setCategory($category);

        $this->assertSame($product->getName(), 'Name');
        $this->assertSame($product->getDescription(), 'Description');
        $this->assertSame($product->getSlug(), 'Slug');
        $this->assertSame($product->getPrice(), 3.14);
        $this->assertSame($product->getImage('Image'), 'Image');
        $this->assertSame($category, $product->getCategory());
    }

    public function testProductCreateFalse() :void
    {
        $product = new Product();
        $category = new Category();

        $product->setName('Named')
                ->setDescription('Desc')
                ->setSlug('Smurf')
                ->setPrice(38)
                ->setImage('https://image.com')
                ->setCategory($category);

        $this->assertNotSame('Name', $product->getName());
        $this->assertNotSame('Description', $product->getDescription());
        $this->assertNotSame('Slug', $product->getSlug());
        $this->assertNotSame(3.14, $product->getPrice());
        $this->assertNotSame('Image', $product->getImage());
        $this->assertNotSame(new Category(), $product->getCategory());
    }

    public function testProductCreateEmpty() :void
    {
        $product = new Product();
        $category = new Category();

        $this->assertEmpty($product->getName());
        $this->assertEmpty($product->getDescription());
        $this->assertEmpty($product->getSlug());
        $this->assertEmpty($product->getPrice());
        $this->assertEmpty($product->getImage());
        $this->assertEmpty($product->getCategory());
    }
}