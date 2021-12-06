# Author<br>
**FEI Fan**<br>
-***individuel***<br>
<br>

# Projet<br>
## Fonctionnalités implémentées
* Les visiteurs peuvent consulter certaines parties de la page d'accueil du site web sans se connecter.<br>
* Les visiteurs peuvent s'inscrire et se connecter à leur compte en cliquant sur le lien S'inscrire et se connecter de la page d'accueil, ce qui leur donnera accès à toutes les fonctionnalités du site.<br>
* La page d'accueil du site Web affiche un poster de film défilant et douze films recommandés de manière aléatoire.<br>
* La page des détails du film affiche les détails du film, où les utilisateurs peuvent ajouter le film à leur liste de favoris, ainsi que laisser leurs propres commentaires sur le film, et les supprimer et les mettre à jour.<br>
* La page des catégories de films présente les films inclus dans le site, et les utilisateurs peuvent cliquer sur le bouton de filtrage pour sélectionner les films qu'ils souhaitent, par exemple les films de Christopher Nolan à partir de 2010. Les utilisateurs peuvent également effacer leurs enregistrements pour effectuer une nouvelle sélection.<br>
* La page de recherche de films fournit un moteur de recherche qui permet à l'utilisateur de rechercher tout contenu dans la bibliothèque de films du site, comme le numéro Imdb, le pays, le nom.<br>
* Sur la page de l'espace personnel, les utilisateurs peuvent voir leur avatar et leurs films préférés. <br>
* Une fois connecté, l'utilisateur peut accéder à ses informations personnelles et à la page de son avatar via le menu déroulant situé à droite de la navigation, où il peut modifier son avatar, son nom d'utilisateur, son adresse e-mail et son mot de passe. Vous pouvez également vous déconnecter du site à la fin de votre visite et vous serez automatiquement redirigé vers la page initiale après la déconnexion.<br>
* La connexion avec un compte d'administrateur donne accès à la page du panneau de contrôle réservée à l'administrateur, où celui-ci peut voir la liste des utilisateurs enregistrés du site et la liste des commentaires des utilisateurs. L'administrateur peut empêcher les utilisateurs de se connecter ou les autoriser à le faire. Les utilisateurs auxquels l'administrateur a interdit de se connecter se verront refuser l'accès au site par le serveur et pourront se connecter à nouveau lorsque l'administrateur les aura débloqués. L'administrateur peut également agir sur les commentaires des films de tous les utilisateurs. L'administrateur peut masquer tout commentaire, qui n'apparaîtra pas sur la page de détails du film, et l'administrateur peut réafficher les commentaires masqués.<br>
## Avant de commencer<br>
* Modifiez la déclaration dans jalon4/catalogue/vendor/laravel/fortify/src/Http/Responses/LogoutResponse.php<br>
```
return $request->wantsJson()
            ? new JsonResponse('', 204)
            : redirect(Fortify::redirect('logout', '/index'));


```
* Modifiez la déclaration dans jalon4/catalogue/vendor/nunomaduro/collision/tests/LaravelApp/config/filesystems.php<br>
```
'default' => env('FILESYSTEM_DRIVER', 'public'),
```
* Puis exécutez dans le terminal jalon4/catalogue<br>
```
php artisan storage:link
```
* Afin de rendre public l'avatar du répertoire de stockage enregistré<br>
## Méthode pour initialiser la base de données<br>
* par ficher sql (jalon4/cdaw_projet.sql)<br>
## Route<br>
* http://localhost:8082/jalon4/catalogue/public/index.php/index<br>
## Identifiants sur le site<br>
* utilisateur 1 : feifan0430@outlook.com
 / abcd1234<br>
* utilisateur 1 : test1@feifan.com / abcd1234<br>
* utilisateur 1 : admin@feifan.com / abcd1234<br>
## Vidéo de démonstration<br>
* https://youtu.be/9LKFUqh1Tvo<br>
* J'ai essayé d'accélérer les fragments en attendant que le navigateur réponde, mais en raison d'une défaillance logicielle, je suis vraiment désolé de ne pouvoir télécharger que la vidéo d'origine. Vous pouvez ignorer l'attente des fragments correspondants dans le navigateur lorsque vous regardez, merci beaucoup.<br>