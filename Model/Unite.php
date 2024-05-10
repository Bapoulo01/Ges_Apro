<?php
class Unite{
    public int $idu;

    public string $libelleu;

    private const SQL_SELECT_ALL="select * from `unite`";

    public function findAll(){
     //ouverture connexion
     $mysqlClient = new PDO(
        'mysql:host=localhost;dbname=gest_apro;charset=utf8',
        'root',
        ''      
);
    //execute la requete
    $result=$mysqlClient->query(self::SQL_SELECT_ALL);
        $Unites = $result->fetchAll(PDO::FETCH_CLASS,"Unite");
        // echo "<pre>";
        // var_dump($Unites);
        // echo "</pre>";
        // die;
        return $Unites;
    } 

}