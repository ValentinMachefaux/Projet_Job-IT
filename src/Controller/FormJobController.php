<?php

namespace App\Controller;

use App\Repository\CategoriesRepository;
use App\Entity\Categories;
use App\Entity\Jobs;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class FormJobController extends AbstractController
{
    /**
     * @Route("/newJob", name="form_job")
     */
    public function index(Request $request, CategoriesRepository $categories, EntityManagerInterface $em): Response
    {

        $form = $this->createFormBuilder()
                    ->add('categorie_id', EntityType::class,[
                        'label' => 'Categorie du job : ',
                        'class' => Categories::class,
                        'placeholder' => '-- Choisir une catégorie --',
                        'choice_label' =>  function ($categories){ return $categories->getNom() ;}])
                    ->add('entreprise', TextType::class, ['label' => 'Nom de l\'entreprise : '])
                    ->add('logo', TextType::class, ['label' => 'Logo de l\'entreprise : '])
                    ->add('url', TextType::class, ['label' => 'Lien de l\'entreprise : '])
                    ->add('contrat', TextType::class, ['label' => 'Nom du Job : '])
                    ->add('lieu', TextType::class, ['label' => 'Lieu : '])
                    ->add('pays', TextType::class, ['label' => 'Pays : '])                    
                    ->add('description', TextType::class, ['label' => 'Description : '])
                    ->add('postuler', TextType::class, ['label' => 'Comment postuler : '])
                    ->add('email', TextType::class, ['label' => 'Votre email : '])
                    ->add('submit',SubmitType::class, ['label' => 'Ajouter le job'])
                    ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();

            $Jobs = new Jobs;
            $Jobs->setEntreprise($data['entreprise']);
            $Jobs->setLogo($data['logo']);
            $Jobs->setUrl($data['url']);
            $Jobs->setContrat($data['contrat']);
            $Jobs->setLieu($data['lieu']);
            $Jobs->setPays($data['pays']);
            $Jobs->setCategorie($data['categorie_id']);
            $Jobs->setDescription($data['description']);
            $Jobs->setPostuler($data['postuler']);
            $Jobs->setEmail($data['email']);

            $em->persist($Jobs);
            $em->flush();

            return $this->redirectToRoute('home');
        }

        return $this->render('form_job/index.html.twig', ['formJob' => $form->createView()]);
    }
}
