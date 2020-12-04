<?php

namespace App\Controller;

use App\Entity\Categories;
use App\Entity\Jobs;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(EntityManagerInterface $em): Response
    {
        $repo = $em->getRepository(Jobs::class);
        $jobs = $repo->findBy([],['updated'=> 'DESC'],10);

        $repo2 =$em->getRepository(Categories::class);
        $categories = $repo2->findAll();

        return $this->render('home/index.html.twig', ['jobs' => $jobs, 'categories' => $categories]);
    }

}
