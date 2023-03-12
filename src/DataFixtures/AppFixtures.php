<?php

namespace App\DataFixtures;

use App\Document\Product;
use Doctrine\Bundle\MongoDBBundle\Fixture\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        for ($i=1; $i <= 10; $i++) {
            $product = (new Product())
                ->setName(sprintf('product %d', $i))
                ->setPrice(sprintf('%d%d', $i, 0))
            ;
            $manager->persist($product);
        }

        $manager->flush();
    }
}
