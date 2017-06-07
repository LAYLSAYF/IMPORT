<?php
namespace FMI\ImportBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use FMI\ImportBundle\Entity\Price;
use FMI\ImportBundle\Model\File;

class ImportCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
        ->setName('fuel:import')
        ->setDescription('extraire les prix moyen de fioul et les stocker en BDD')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $em = $this->getContainer()->get('doctrine')->getManager();
        $items = $em->getRepository('FMIImportBundle:Price')->findAll();
        $filename = "prices";
        $path = realpath($this->getContainer()->getParameter('kernel.root_dir'). "/../src/FMI/ImportBundle/Documents/" . $filename . '.csv');
        $file = new File($path);
        $tab = [];
        $tab = $file->getTaille();
        foreach ($tab as $key => $value) {
            $price = new Price();
            $price->setDateprice($value[0]);
            $price->setAverageprice($value[3]);
            $em->persist($price);
        }
        if (count($items) == 0) {
            $em->flush();
            $output->writeln("L'import du fichier CSV en BDD est réalisé avec succès."); 
        }else {
            $output->writeln("L'import est déjà fait.");  
        }

        
        
   

    }
}