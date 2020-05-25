# Installation de WordPress avec Composer
1. Renommer le dossier cloné (`sudo mv WP-Install-Composer MonProjet`)
2. Rentrer dans le dossier et supprimer le `.git` avec `sudo rm -R .git`
3. Télécharger WordPress, ses plugins, ses thèmes avec la commande `composer install`
4. Créer la base de données et le user spécifique à cette BDD
5. Créer le fichier `wp-config.php` (copie de `wp-config-sample.php`) et le compléter :
    - Les informations de connexion à la base de données
    - Les clés de salage
    - L'URL de la home `put_your_home_url_here`
    - Passer la constante `WP_DEBUG` à `true`
    - Sélectionner l'environnement souhaité (`production`, `development` ou `staging`)
6. Modifier les droits des dossiers et fichiers avec les commandes suivantes (`<user>` est à remplacer par votre user) :
   ```
    sudo chown -R <user>:www-data .
    sudo find . -type f -exec chmod 664 {} +
    sudo find . -type d -exec chmod 775 {} +
    sudo chmod 644 .htaccess
   ```
7. Installer WordPress :tada:
