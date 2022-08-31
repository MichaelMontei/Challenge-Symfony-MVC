<?php

// src/Controller/BlogController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    #[Route('/blog', name: 'blog_list')]
    public function list(): Response
    {
        $blogpost = "Hello this is my Blogpost test";

        return $this->render('lucky/blog.html.twig', [
            'blogpost' => $blogpost,
        ]);
    }
}
