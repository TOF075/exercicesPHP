<?php
class Personnage 
{
private $nom;   
private $pv;
private $pa; 
private $pd; 
private $cri; 
private $type; 
    
    public function __construct($nom, $type)
    {
        $this->nom = $nom;  
        $this->pv = 100; 
        $this->pa = 100;
        $this->pd = 5; 
        $this->cri = "A l'attaquueu !";
        $this->verif_type($type);
    
    } 
    public function verif_type($type)
    {  
        if ($type=='orque' OR $type=='elfe' OR $type=='human')
        {  
        if ($type == 'orque')
        { 
        $this->pv -= 10; 
        $this->pd +=2;
        $this->pa +=2;
        $this->cri = "mlll wwouogrouroulou !!";
        }
        elseif ($type=='elfe')
        {
        $this->pv -= 10; 
        $this->pd -= 3;
        $this->pa +=2;
        }
        $this->type = $type;
        }
        else
        {
        echo 'Le personnage ne peut que être orque, humain ou elfe';
        exit;

        }
    }

}
?>