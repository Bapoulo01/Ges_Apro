<?php
class Categorie{
    public int $idc;

    public string $libellec;

    public int $idu;

    private const SQL_SELECT_ALL="select * from `categorie`c,`unite`u WHERE c.idu =u.idu;";

    public function findAll(){
        //ouverture connexion
        $mysqlClient = new PDO(
           'mysql:host=localhost;dbname=gest_apro;charset=utf8',
           'root',
           ''      
   );
       //execute la requete
       $result=$mysqlClient->query(self::SQL_SELECT_ALL);
           $categories = $result->fetchAll(PDO::FETCH_CLASS,"Categorie");
           // echo "<pre>";
           // var_dump($categories);
           // echo "</pre>";
           // die;
           return $categories;
       } 
}