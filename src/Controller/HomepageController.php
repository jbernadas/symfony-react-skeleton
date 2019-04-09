<?php
/**
 * Created by PhpStorm.
 * User: jbernadas
 * Date: 4/9/2019
 * Time: 11:04 AM
 */

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

final class HomepageController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function homepage(): Response
    {
        return $this->render('homepage/index.html.twig');
    }
}
