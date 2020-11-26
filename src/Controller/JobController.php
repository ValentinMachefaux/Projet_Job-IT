<?php

namespace App\Controller;

use App\Entity\Jobs;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class JobController extends AbstractController
{
    /**
     * @Route("/job", name="job")
     */
    public function index(EntityManagerInterface $em): Response
    {
        $repo = $em->getRepository(Jobs::class);
        $job = $repo->find($_GET['id']);
        return $this->render('job/index.html.twig', ['job'=> $job]);
    }
}
