HabboPHP-Dev-2
==============

Redesign of the architecture

## Comment installer les modes de paiements
# Starpass
* URL de la page d'accès : http://adresse_de_votre_site.ext/paiement.php
* URL du document : http://adresse_de_votre_site.ext/modules/paiement/Starpass_paiementValide.php
* URL d'erreur : http://adresse_de_votre_site.ext/shop.php?nomoney

# Allopass
* URL d'accès au produit : http://votresite.com/modules/paiement/Allopass_paiementValide.php

## Connexion avec Facebook

* Connectez vous à votre compte Facebook
* Accédez à https://developers.facebook.com/apps
* Cliquez sur “Créer une application”
* Nom de l'application : au choix
* App Namespace : laissez vide
* Ne cochez pas “Web hosting”
* Recopiez le code de sécurité (le captcha)
* Complétez le formulaire comme tel:
* App Display Name: ne modifiez pas
* App Namespace: ne modifiez pas
* Adresse électronique de contact: ne modifiez pas
* App Domain: URL de votre site
* Catégorie: au choix
* Cochez la case Site web
* Complétez la case URL du site: en dessous de Site web avec l'URL de votre site
* Validez avec Enregistrer les modifications
* Récupérez en haut du formulaire:
* App ID: 497432420275345 (exemple)
* App Secret: ce554bc14dbea0457fb72dc7f51b1ad0 (exemple)
* Complétez AppID & AppSecret dans votre administration Site > Connexion avec Facebook

## Utilisation du système d'apparts

Depuis cette mise à jour, il est possible de créer un appart à l'inscription d'un utilisateur.
* Pour se faire, rendez-vous dans l'administration côté Apparts.
* Rentrez l'identifiant de l'appart à créer à l'inscription dans le champ (il doit exister).
* Faites en sorte que le fichier /modules/rooms/default.xml soit chmodé (777).
* Si il l'est, le fichier sera écrit tout seul, sinon faites le vous même.
* Le système fait le reste =D

