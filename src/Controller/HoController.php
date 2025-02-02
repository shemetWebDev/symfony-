<?php

namespace App\Controller;

use App\Entity\Products;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class HoController extends AbstractController
{
    #[Route('/ho', name: 'app_ho')]
    public function index(EntityManagerInterface $entityManager): Response
    {

        $products = $entityManager->getRepository(Products::class)->findAll();
        return $this->render('ho/index.html.twig', [
            'products' => $products,
        ]);
    }
}
