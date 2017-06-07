<?php

namespace FMI\ImportBundle\Controller;

use FMI\ImportBundle\Entity\Prices;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * Price controller.
 *
 * @Route("prices")
 */
class PricesController extends Controller
{
    /**
     * Lists all price entities.
     *
     * @Route("/", name="prices_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $prices = $em->getRepository('FMIImportBundle:Prices')->findAll();

        return $this->render('prices/index.html.twig', array(
            'prices' => $prices,
        ));
    }

    /**
     * Finds and displays a price entity.
     *
     * @Route("/{id}", name="prices_show")
     * @Method("GET")
     */
    public function showAction(Prices $price)
    {

        return $this->render('prices/show.html.twig', array(
            'price' => $price,
        ));
    }
}
