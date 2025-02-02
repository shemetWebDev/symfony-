<?php

namespace App\Controller;

use App\Entity\Contacts;
use App\Form\ContactType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class ContactsController extends AbstractController
{
    #[Route('/contacts', name: 'app_contacts')]
    public function index(): Response
    {

        $contacts = new Contacts();
        $form = $this->createForm(ContactType::class, $contacts);
        return $this->render('contacts/index.html.twig', [
            'contactForm' => $form,
        ]);
    }
}
