<?php

/**
 * CE FICHIER A POUR BUT D'AFFICHER LA PAGE D'ACCUEIL !
 * 
 * On va donc se connecter à la base de données, récupérer les articles du plus récent au plus ancien (SELECT * FROM articles ORDER BY created_at DESC)
 * puis on va boucler dessus pour afficher chacun d'entre eux
 */
require_once('libraries/database.php');
require_once('libraries/utils.php');
require_once('libraries/models/Article.php');
require_once('libraries/models/User.php');

$articleModel = new Article();
$userModel = new User();
$users = $userModel->findAll();
// var_dump($users);
// die();


/**
 * 2. Récupération des articles
 */
// $articles = $articleModel->findAll("created_at DESC");
$articles= $articleModel->findAll();

/**
 * 3. Affichage
 */
$pageTitle = "Accueil";

render('index',compact('pageTitle','articles'));