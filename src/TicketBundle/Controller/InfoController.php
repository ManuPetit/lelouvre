<?php
/**
 * Created by PhpStorm.
 * User: Emmanuel
 * Date: 05/08/2017
 * Time: 14:30
 */

namespace TicketBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class InfoController extends Controller
{
    /**
     * @Route("/infos", name="info")
     */
    public function indexAction()
    {
        return $this->render('TicketBundle:info:index.html.twig');
    }
}