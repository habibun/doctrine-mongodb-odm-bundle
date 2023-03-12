<?php

namespace App\Repository;

use App\Document\Product;
use Doctrine\Bundle\MongoDBBundle\ManagerRegistry;
use Doctrine\Bundle\MongoDBBundle\Repository\ServiceDocumentRepository;

class ProductRepository extends ServiceDocumentRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Product::class);
    }

    public function save(Product $entity, bool $flush = false): void
    {
        $this->getDocumentManager()->persist($entity);

        if ($flush) {
            $this->getDocumentManager()->flush();
        }
    }

    public function remove(Product $entity, bool $flush = false): void
    {
        $this->getDocumentManager()->remove($entity);

        if ($flush) {
            $this->getDocumentManager()->flush();
        }
    }
}
