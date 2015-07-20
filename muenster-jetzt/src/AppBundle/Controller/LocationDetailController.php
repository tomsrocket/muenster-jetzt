<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class LocationDetailController extends Controller
{
    /**
     * @Route("/ort/{location_name}", name="location_detail")
     */
    public function detailAction( $location_name)
    {
        return $this->render('location/detail.html.twig', array(
            'location_name' => $location_name
        ));
    }
}
