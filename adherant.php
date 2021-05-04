<?php

class adh
{   private $id;
    private $mdp;
    private $nom;
    private $prenom;
    private $email;
    private $tel;
    private $typead;
    private $prof;
   
   


    public function getid()
    {
        return $this->id;
    }

    public function getmdp()
    {
        return $this->mdp;
    }
    public function getnom()
    {
        return $this->nom;
    }
  
    public function getprenom()
    {
        return $this->prenom;
    }
    public function getemail()
    {
        return $this->email;
    }
    public function gettel()
    {
        return $this->tel;
    }
    public function gettypead()
    {
        return $this->typead;
    }
    public function getprof()
    {
        return $this->prof;
    }


    public function setmdp($mdp)
    {
        $this->mdp = $mdp;
    }
    public function setnom($nom)
    {
        $this->nom = $nom;
    }
    public function setprenom($prenom)
    {
        $this->prenom = $prenom;
    }
    public function setemail($email)
    {
        $this->email = $email;
    }
    public function settel($tel)
    {
        $this->tel = $tel;
    }
    public function settypead($typead)
    {
        $this->typead = $typead;
    }
    public function setprof($prof)
    {
        $this->prof = $prof;
    }

    public function __construct($mdp,$nom,$prenom,$email,$tel,$typead,$prof)
    {    
        $this->mdp = $mdp;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
        $this->tel = $tel;
        $this->typead = $typead;
        $this->prof = $prof;
        

        

    }
}
