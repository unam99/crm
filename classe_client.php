<?php

class client {

    private  $id_client;
    private  $nom;
    private  $prenom;
    private  $nom_societe;
    private  $poste;
    private  $tel;
    private  $email;
    private  $responsable_client;



    public function getID() {
        return $this->id_client;
    }

    public function getNom() {
        return $this->nom;
    }

    public function getPrenom() {
        return $this->prenom;
    }

    public function getNom_societe() {
        return $this->nom_societe;
    }

    public function getPoste() {
        return $this->poste;
    }

    public function getTel() {
        return $this->tel;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getResponsable_client() {

        return $this->responsable_client;
    }

    public function setId_client($id_client) {
        $id_client=(int)$id_client;
        if ($id_client>0)
            $this->id_client=$id_client;
    }

    public function setNom($nom) {
        if (is_string($nom))
            $this->nom=$nom;
    }
    public function setPrenom($prenom) {
        if (is_string($prenom))
            $this->prenom=$prenom;
    }
    public function setNom_societe($nom_societe) {
        if (is_string($nom_societe))
            $this->nom_societe=$nom_societe;
    }
    public function setPoste($poste) {
        if (is_string($poste))
            $this->poste=$poste;

    }
    public function setNom($tel) {
        $tel = (int)$tel;
        if ($tel>0)
            $this->tel =$tel;
    }
    public function setEmail($email) {
        if (is_string($email))
            $this->email=$email;
    }
    public function setResponsable_client($responsable_client)
        if (is_string(($responsable_client))
            $this->responsable_client=$responsable_client;

    
    public function __construct(array $donnees) {
        $this->hydrate($donnees);
    }

    public function hydrate(array $donnees) {
        foreach ($donnees as $cle => $valeur ) {
            $methode = 'set'.ucfirst($cle);
            if (method_exists($this,$methode))
                $this->$methode($valeur);
        }
    }
}



?>