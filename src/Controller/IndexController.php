<?php

namespace App\Controller;

use App\Entity\Contacto;
use App\Form\ContactoType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class IndexController extends AbstractController
{

    #[Route('/index', name: 'app_index')]
    public function index(): JsonResponse
    {

        $data = file_get_contents('../assets/json/index.json');
        $json = json_decode($data, true);

        return new JsonResponse($json);
    }

    #[Route('/about_us', name: 'about_us')]
    public function about_us(): JsonResponse
    {

        $data = file_get_contents('../assets/json/aboutUs.json');
        $json = json_decode($data, true);

        return new JsonResponse($json);
    }

    #[Route('/contact', name: 'contact')]
    public function contact(): JsonResponse
    {
        $data = file_get_contents('../assets/json/contact.json');
        $json = json_decode($data, false);

        return new JsonResponse($json);
    }
}
