<?php
class Detail{
    public int $idp;

    public string $idA;

    public string $qted;

    public string $montantd;

    public string $prixAchat;


    private const SQL_SELECT_ALL="select * from `details`d,`produit`p,`approvisionnement`a WHERE d.idp = p.idp and d.idA = a.idA";

    public function findAll(){
     //ouverture connexion
     $mysqlClient = new PDO(
        'mysql:host=localhost;dbname=gest_apro;charset=utf8',
        'root',
        ''      
);
    //execute la requete
    $result=$mysqlClient->query(self::SQL_SELECT_ALL);
        $details = $result->fetchAll(PDO::FETCH_CLASS,"Detail");
        // echo "<pre>";
        // var_dump($details);
        // echo "</pre>";
        // die;
        return $details;
    } 

}