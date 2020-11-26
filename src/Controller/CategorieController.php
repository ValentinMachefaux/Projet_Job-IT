<?php

namespace App\Controller;

use App\Entity\Categories;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CategorieController extends AbstractController
{
    /**
     * @Route("/categories", name="categories")
     */
    public function index(EntityManagerInterface $em): Response
    {
        $repo = $em->getRepository(Categories::class);
        $categs = $repo->findAll();

        return $this->render('categorie/index.html.twig', ['categs' => $categs]);
    }

    /**
     * @Route("/categorie", name="categorie")
    */
    public function categ(EntityManagerInterface $em): Response
    {

        $repo2 = $em->getRepository(Categories::class);
        $categs = $repo2->jointure($_GET['id']);

        return $this->render('categorie/categ.html.twig', ['categs' => $categs]);

    }
}
