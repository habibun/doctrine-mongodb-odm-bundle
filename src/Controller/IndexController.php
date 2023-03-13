<?php

namespace App\Controller;

use App\Document\User;
use Doctrine\ODM\MongoDB\DocumentManager;
use Doctrine\ODM\MongoDB\MongoDBException;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    /**
     * @Route("/", "GET", name="homepage")
     */
    public function homepage(DocumentManager $dm)
    {
        $users = $dm->getRepository(User::class)->findAll();

        return $this->render('index/homepage.html.twig', [
            'users' => $users
        ]);
    }

    /**
     * @Route("/mongo-test", "GET", name="mongo_test")
     * @throws MongoDBException
     */
    public function mongoTest(DocumentManager $dm)
    {
        $user = new User();
        $user->setEmail("hello@medium.com");
        $user->setFirstname("Matt");
        $user->setLastname("Matt");
        $user->setPassword(md5("123456"));

        $dm->persist($user);
        $dm->flush();

        return $this->redirectToRoute('homepage');
    }

}
