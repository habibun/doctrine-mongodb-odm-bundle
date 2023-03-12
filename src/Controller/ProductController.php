<?php

namespace App\Controller;

use App\Document\Product;
use Doctrine\ODM\MongoDB\DocumentManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{
    #[Route('/product', name: 'app_product')]
    public function index(DocumentManager $dm): Response
    {
        $products = $dm->getRepository(Product::class)->findAll();
        return $this->render('product/index.html.twig', [
            'products' => $products
        ]);
    }

    #[Route('/product/create', name: 'app_product_create')]
    public function create(DocumentManager $dm)
    {
        $product = new Product();
        $product->setName('A Foo Bar');
        $product->setPrice('19.99');

        $dm->persist($product);
        $dm->flush();

        return new Response('Created product id ' . $product->getId());
    }

    #[Route('product/{id}/show', name: 'app_product_show')]
    public function showAction(DocumentManager $dm, $id)
    {
        $product = $dm->getRepository(Product::class)->find($id);

        if (! $product) {
            throw $this->createNotFoundException('No product found for id ' . $id);
        }

        return $this->render('product/show.html.twig', [
            'product' => $product,
        ]);
    }
}
