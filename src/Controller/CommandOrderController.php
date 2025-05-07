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

class CommandOrderController extends AbstractController
{

    #[Route('/command-order', name: 'command_order', methods: ['GET', 'POST'])]
    public function makeCommandOrder(Request $request): Response
    {
        return $this->render('command_order/index.html.twig', []);
    }

}
