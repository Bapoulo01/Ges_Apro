<?php
class Produit{
    public int $idp;

    public string $libellep;

    public string $qtestockp;
    
    public string $idt;

    public string $idc;

    private const SQL_SELECT_ALL="select * from `produit`p,`type`t,`categorie`c WHERE p.idt = t.idt AND p.idc = c.idc";

    public function findAll(){
     //ouverture connexion
     $mysqlClient = new PDO(
        'mysql:host=localhost;dbname=gest_apro;charset=utf8',
        'root',
        ''      
);
    //execute la requete
    $result=$mysqlClient->query(self::SQL_SELECT_ALL);
        $Produits = $result->fetchAll(PDO::FETCH_CLASS,"Produit");
        // echo "<pre>";
        // var_dump($Produits);
        // echo "</pre>";
        // die;
        return $Produits;
    } 

}