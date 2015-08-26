<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class EventListController extends Controller
{
    /**
     * @Route("/veranstaltungen", name="event_list")
     */
    public function listAction( $location_name)
    {
        return $this->render('event/list.html.twig', array(
            'location_name' => $location_name
        ));
    }
}
