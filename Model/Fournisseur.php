<?php
class Fournisseur{
    public int $idF;

    public string $nomF;

    public string $telF;

    private const SQL_SELECT_ALL="select * from Fournisseur";

    public function findAll(){
     //ouverture connexion
     $mysqlClient = new PDO(
        'mysql:host=localhost;dbname=gest_apro;charset=utf8',
        'root',
        ''      
);
    //execute la requete
    $result=$mysqlClient->query(self::SQL_SELECT_ALL);
        $fournisseurs = $result->fetchAll(PDO::FETCH_CLASS,"Fournisseur");
        // echo "<pre>";
        // var_dump($fournisseurs);
        // echo "</pre>";
        // die;
        return $fournisseurs;
    } 

}