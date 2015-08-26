<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class LocationListController extends Controller
{
    /**
     * @Route("/veranstaltungsorte", name="location_list")
     */
    public function listAction(  )
    {
        return $this->render('location/list.html.twig');
    }
}
