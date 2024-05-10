<?php
require_once("Model/Fournisseur.php");
require_once("Model/Categorie.php");
require_once("Model/Produit.php");
require_once("Model/Detail.php");
require_once("Model/Unite.php");

$fournisseur=new Fournisseur();
$fournisseurs=$fournisseur-> findAll();

$categorie=new Categorie();
$categories=$categorie-> findAll();

$produit=new Produit();
$produits=$produit-> findAll();

$detail=new Detail();
$details=$detail-> findAll();

$unite=new Unite();
$unites=$unite-> findAll();

require_once("views/Approvisonnement/add.html.php");
require_once("views/Fournisseur/liste.fournisseur.html.php");
require_once("views/Categorie/liste.categorie.html.php");
require_once("views/Produit/liste.produit.html.php");


?>

