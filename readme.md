# Projet de fin de formation Développeur Web avec O'Clock

## Projet O'training
Nous avons présenté notre projet le 16 juin 2020 sur la chaîne Twitch de l'école. Vous pouvez accéder au replay de la présentation sur la châine YouTube de l'école. [Cliquez-ici pour voir le replay.](https://www.youtube.com/watch?v=5aZ7fSWfxBE)
Nous avons présenté notre projet en 1er (à 7min20 de la vidéo).

Nous avons déployé notre site sur un serveur AWS, [cliquez-ici pour voir notre projet en ligne.](http://ec2-3-88-230-190.compute-1.amazonaws.com/otraining/wp_Otraining) 

#### Les Conditions du projet :
Ce projet a été entièrement conçu sur une période de quatre semaines. Nous devions travailler en méthodologie Agile comprenant des sprints d'une semaine chacun :
* **Sprint 1**: Rédaction des documents qui serviront à la conception du site : MVP, wireframes, MCD, dictionnaire des données, fonctionnalités, user-strories, etc.
* **Sprints 2 et 3**: Nous avons uniquement ces deux sprints pour coder nos fonctionnalités principales et effectuer le déploiement sur le serveur AWS.
* **Sprint 4**: On finalise et on corrige les bugs. On se prépare à la présentation du projet.

Ces quatres semaines sont passées extrêmement vite. Mais on a réussi à produire une V1 dont nous sommes fières.

---

### Description :
O'training permet de mettre en relation des personnes qui veulent transmettre leurs connaissances dans tous les domaines à d'autres personnes voulant acquérir ces connaissances.
Ces "formateurs" pourront créer et proposer à la vente leurs formations à des "élèves" qui pourront trouver la formation adéquate à leurs attentes.

### Objectifs :
Créer un site web pour permettre aux formateurs la création et le dépôt de leurs formations via un back office.
Le visiteur peut quant à lui accéder au catalogue de formations. Pour souscrire à l'une d'entre elles, il doit créer un compte "élève".
L’élève a accès aux formations qu’il a achetées et peut les consulter à tout moment et sans limite de durée.

### L'Equipe de O'training :
Après les 3 mois intensifs de formation, nous avons tous les trois choisi la même spécialisation : **WordPress** qui a durée un mois tout aussi intensive. Voici nos rôles :

#### Buignet Sylvain :
Product Owner et Lead Dev Front

#### Goubard Léo :
Scrum Master

#### Kroenner Vincent :
Git Master et Lead Dev Back

---

### Spécifications techniques et technologies utilisées :
* Site responsive, Mobile First.
* Intégration HTML, Sass.
* Utilisation de Webpack.
* Environnement LAMP :
  * Linux,
  * Apache,
  * MySQL,
  * PHP;
* Javascript et JQuery.

#### WordPress :
* Installation custom avec Composer.
* Thème Custom,
* Création de trois plugins :
  1. Oroles : Permet d'ajouter et de gérer des rôles suplémentaires (formateurs et élèves) et de modifier le menu du Back Office en fonction du rôle.
  2. Formation Otraining : Permet de créer un nouveau type de post (CPT) pour gérer les formations. Une taxonomie est également créée pour répartir les formations par catégorie.
  3. Ocategory : Une autre façon de gérer les formations par catégories via ACF, utilisé nottament pour filtrer les formations de la page catalogue (template page) par catégories avec un menu déroulant.
* Formulaire d'inscription et de connexion custom avec la création de modèle de page (template page).
* Une table custom est créée pour gérer via des reqûetes SQL :
  * la souscription à une formation par un élève,
  * l'affichage, dans une même page, des formations auxquelles il a souscrites.
* Côté Back Office, les formateurs n'ont accès qu'aux formations qu'ils ont créées et ne peuvent pas voir les formations (ni les médias ajoutés) des autres formateurs.

### Evolutions :
Nous avons pris beaucoup de plaisir à concevoir ce site. Le temps que nous avions était limité, nous avons dû garder certaines choses pour de futures évolutions :

* système de notation des formations par les élèves;
* ajout d’une fonctionnalité de formateur certifié (permettant l’ajout d’une formation sans validation de l’admin);
* mise en place d’un panier;
* mise en place d’un système de paiement pour vendre / acheter les formations;
* mise en avant de formations ou de formateurs sur le site (payant par le formateur);
* création d’un système de filtre plus élaboré dans le catalogue;
* customisation du thème pour l’admin;
* un système d’édition de facture (pour les entreprises notamment);
* un nouveau type d’utilisateur : les entreprises;
* un tableau de bords de suivi des ventes pour le formateur;
* connexion via Facebook et Google.
