<?php

//TODO : Dans le BO un élève voit l'ensemble des formation pour lesquelles il à souscrit.
//TODO : A la souscription on récupère l'ID de la formation pour l'ajouter au BO de l'élève.
//!NOPE




//TODO  : A la souscription on ajoute l'ID de l'élève en tag à la formation.
//TODO : Dans le BO, chaque élève ne peut voir que les formations dans lesquelles son ID est en tag.

//1 : Créer un term "UserID" dans le plugin des formations où on ajoutera manuellement l'ID d'un user via la page de la formation

//2 : Récupérer l'ID de l'user dans une variable.

// https://developer.wordpress.org/reference/functions/get_current_user_id/
$post_id = url_to_postid(get_permalink());
$user = get_current_user_id();

/*

 new PDO("mysql:host=$hostname;dbname=cocoon",$username,$password);
*/

function subscribephp(){
    $post_id = url_to_postid(get_permalink());
    $user = get_current_user_id();
    $pdo = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASSWORD);
    $reponse = $pdo->query('SELECT user_id, formation_id FROM wp_subscribers WHERE user_id = '.$user.' AND formation_id = '.$post_id);
    $donnees_exist =$reponse->fetch();
    if ($donnees_exist == false) {
        $stmt = $pdo->prepare('INSERT INTO wp_subscribers (user_id, formation_id) VALUES ('.$user.', '.$post_id.')');
        $stmt->execute();


    }

    // return $stmt;
    else{
        echo'Vous êtes déjà inscrit';
    }
}



function mytrainings(){
    $user = get_current_user_id();
    $pdo = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASSWORD);
$stmt = $pdo->prepare('SELECT * FROM wp_subscribers WHERE (user_id) = '.$user.'');
$stmt->execute();

$result = $stmt->fetchAll(PDO::FETCH_COLUMN, 2);

return $result;
}

function allcontent(){
    $post_id = url_to_postid(get_permalink());
    $user = get_current_user_id();
    $pdo = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASSWORD);
    $reponse = $pdo->query('SELECT user_id, formation_id FROM wp_subscribers WHERE user_id = '.$user.' AND formation_id = '.$post_id);
    $donnees_exist =$reponse->fetch();

    return $donnees_exist;

}

