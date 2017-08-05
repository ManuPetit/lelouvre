<?php
/**
 * Created by PhpStorm.
 * User: Emmanuel
 * Date: 05/08/2017
 * Time: 14:21
 */

namespace TicketBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class TicketController extends Controller
{
    /**
     * @Route("/billetterie", name="ticket")
     */
    public function indexAction()
    {
        return $this->render('TicketBundle:ticket:index.html.twig');
    }
}