<?php

namespace FMI\ImportBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use FMI\ImportBundle\Entity\Prices;

class DefaultController extends Controller
{
    /**
     * @Route("/import")
     */
    public function indexAction()
    {
        $em= $this->getDoctrine()->getManager();
    	$filename = "prices";
        $path = realpath($this->container->getParameter('kernel.root_dir'). "/../src/FMI/ImportBundle/Documents/" . $filename . '.csv');
         //var_dump($path); die ;
       	$this->readfileCSV($path);
        return $this->render('FMIImportBundle:Default:index.html.twig');
    }

    /**
     * Read file type CSV and persist  entity Prices into BDD 
     *
     * @param File $amount
     * @param String $separateur
     * @return Boolean
     */
    private function readFileCSV($file, $separateur = ","){

        $em= $this->getDoctrine()->getManager();
        $donnee = array();    
    	$f = fopen ($file,"r");
        $taille = filesize($file)+1;
        $donnee = fgetcsv($f, $taille, $separateur); 
        while ($donnee = fgetcsv($f, $taille, $separateur)) {
    		$prices = new Prices();
    		$prices->setPostalCode($donnee[0]);
			$prices->setAmount($donnee[1]);
    		$prices->setDate($donnee[2]);
            $em->persist($prices);
            $em->flush();
        }
        
        return true ;
    }



}
