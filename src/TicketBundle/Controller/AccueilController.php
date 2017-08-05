<?php
/**
 * Created by PhpStorm.
 * User: Emmanuel
 * Date: 05/08/2017
 * Time: 12:30
 */

namespace TicketBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class AccueilController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(){
        return $this->render('TicketBundle:accueil:index.html.twig');
    }
}