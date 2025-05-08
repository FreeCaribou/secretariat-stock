<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Repository\StoredThingRepository;
use App\Entity\StoredThing;
use Symfony\Component\HttpFoundation\Request;
use App\Form\StoredThingType;
use Doctrine\ORM\EntityManagerInterface;

// TODO refactor to divide the action in other php file

class StoredThingController extends AbstractController
{

    #[Route('/stored-thing', name: 'stored_thing', methods: ['GET', 'POST'])]
    public function storedThing(StoredThingRepository $repo, Request $request, EntityManagerInterface $entityManager): Response
    {
        // The form to add a new stored thing
        $storedThing = new StoredThing();
        $form = $this->createForm(StoredThingType::class, $storedThing);

        // Verification if we have a new one
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $storedThing = $form->getData();
            $entityManager->persist($storedThing);
            $entityManager->flush();
            $this->addFlash('success', 'storedThing.add.success');
            return $this->redirectToRoute('stored_thing');
        }

        // All the stored thing in the store
        $storedThings = $repo->findAll();

        return $this->render('stored_thing/index.html.twig', [
            'storedThings' => $storedThings,
            'form' => $form,
        ]);
    }

}
