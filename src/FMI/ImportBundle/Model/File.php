<?php

namespace FMI\ImportBundle\Model;


/**
 * File
 *
 */
class File
{
    /**
     * @var string
     */
    public $fileName;

    /**
     * @var Array
     */
    public $taille=[];

    
	/**
     * Constructor
     */
    public function __construct($file)
    {
        $this->fileName = $file;
        $this->read_file_csv($this->fileName)
        ;
    }

    /**
     * @return Array
     */
    public function getTaille()
    {
        return $this->taille ;
    }

    /**
     * @var Array $taille
     */
    public function setTaille($taille)
    {
        $this->taille = $taille ;
        
        return $this;
    }
      
    /**
     * @param \String $fileName
     *
     * @return Array
     */
    function read_file_csv($fileName, $separateur =","){
        $row = 0;
        $donnee = array();    
        $f = fopen ($fileName,"r");
        $taille = filesize($fileName)+1;
        $somme1 = $somme2 = $somme3= $somme4 = $somme5 = $somme6=0;
        $somme7 = $somme7 = $somme8= $somme9 = $somme10 = $somme11 = 0;
        $somme12 = $somme13 = $somme14= $somme15 = $somme16  = $somme17 = 0;
        $i =  $j= $k = $l=  0;
        $m =  $n= $o = $p=  0;
        $q =  $r= $s = $t=  0;
        $u =  $v= $w = $x=  $y= 0;
        while ($donnee = fgetcsv($f, $taille, $separateur)) {
            
            if ($donnee[2] == "2015-08-01") {

                $somme1 = $somme1 + $donnee[1];
                $i++;
            }
            else if ($donnee[2] == "2015-08-02") {
                
                $somme2 = $somme2 + $donnee[1];
                $j++;
            }
            else if ($donnee[2] =="2015-08-03") {
                $somme3 = $somme3 + $donnee[1];
                $k++;
            }
            else if ($donnee[2] == "2015-08-04") {
                $somme4 = $somme4 + $donnee[1];
                $l++;
            }
            else if ($donnee[2] == "2015-08-05") {
                $somme5 = $somme5 + $donnee[1];
                $m++;
            }
            else if ($donnee[2] == "2015-08-06") {
                $somme6 = $somme6 + $donnee[1];
                $n++;
            }
            else if ($donnee[2] == "2015-08-07") {
                $somme7 = $somme7 + $donnee[1];
                $o++;
            }
            else if ($donnee[2] == "2015-08-08") {
                $somme8 = $somme8 + $donnee[1];
                $p++;
            }
            else if ($donnee[2] == "2015-08-09") {
                $somme9 = $somme9 + $donnee[1];
                $q++;
            }
            else if ($donnee[2] == "2015-08-10") {
                $somme10 = $somme11 + $donnee[1];
                $r++;
            }
            else if ($donnee[2] == "2015-08-11") {
                $somme11 = $somme11 + $donnee[1];
                $s++;
            }
            else if ($donnee[2] == "2015-08-12") {
                $somme12 = $somme12 + $donnee[1];
                $t++;
            }
            else if ($donnee[2] == "2015-08-13") {
                $somme13 = $somme13 + $donnee[1];
                $u++;
            }
            else if ($donnee[2] == "2015-08-14") {
                $somme14 = $somme14 + $donnee[1];
                $v++;
            }
            else if ($donnee[2] == "2015-08-15") {
                $somme15 = $somme15 + $donnee[1];
                $w++;
            }
            else if ($donnee[2] == "2015-08-16") {
                $somme16 = $somme16 + $donnee[1];
                $x++;
            }
            else if ($donnee[2] == "2015-08-17") {
                $somme17 = $somme17 + $donnee[1];
                $y++;
            }
            $row++;
        }
        $moyen1 = $this->formatPrixMoyen($somme1 / $i);
        $moyen2 = $this->formatPrixMoyen($somme2 / $j);
        $moyen3 = $this->formatPrixMoyen($somme3 / $k);
        $moyen4 = $this->formatPrixMoyen($somme4 / $l);

        $moyen5 = $this->formatPrixMoyen($somme5 / $m);
        $moyen6 = $this->formatPrixMoyen($somme6 / $n);
        $moyen7 = $this->formatPrixMoyen($somme7 / $o);
        $moyen8 = $this->formatPrixMoyen($somme8 / $p);

        $moyen9 =  $this->formatPrixMoyen($somme9 / $q);
        $moyen10 = $this->formatPrixMoyen($somme10 / $r);
        $moyen11 = $this->formatPrixMoyen($somme11 / $s);
        $moyen12 = $this->formatPrixMoyen($somme12 / $t);

        $moyen13 = $this->formatPrixMoyen($somme13 / $u);
        $moyen14 = $this->formatPrixMoyen($somme14 / $v);
        $moyen15 = $this->formatPrixMoyen($somme15 / $w);
        $moyen16 = $this->formatPrixMoyen($somme16 / $x);
        $moyen17 = $this->formatPrixMoyen($somme17 / $y);

        $this->taille = array(
        array("2015-08-01", $i, $somme1, $moyen1),
        array("2015-08-02", $j, $somme2, $moyen2),
        array("2015-08-03", $k, $somme3, $moyen3), 
        array("2015-08-04",$l, $somme4, $moyen4), 
        array("2015-08-05",$m, $somme5, $moyen5),
        array("2015-08-06",$n, $somme6, $moyen6), 
        array("2015-08-07",$o, $somme7, $moyen7), 
        array("2015-08-08",$p, $somme8, $moyen8), 
        array("2015-08-09",$q, $somme9, $moyen9),
        array("2015-08-10",$r, $somme10, $moyen10), 
        array("2015-08-11",$s, $somme11, $moyen11), 
        array("2015-08-12",$t, $somme12, $moyen12), 
        array("2015-08-13",$u, $somme13, $moyen13),
        array("2015-08-14",$v, $somme14, $moyen14), 
        array("2015-08-15", $w, $somme15, $moyen15), 
        array("2015-08-16",$x, $somme16, $moyen16), 
        array("2015-08-17",$y, $somme17, $moyen17)
        );
        fclose ($f);
        return $taille;
    }

    
	/**
     * @param \float $prix
     *
     * @return float arrondi
     */
    private function formatPrixMoyen($prix){

    		return $prix ? round($prix, 2) : ''; 
    }

    
}
