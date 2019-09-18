# sftu
Projet bootstrap support pour initiation aux Tests Unitaires avec PHP et Symfony 

## Installation de PHPUnit & Co
PHPUnit est un des nombreux dérivés du projet open source JUnit des auteurs Kent Beck et Erich Gamma.  Voici une procédure d’utilisation (à partir de la racine d’un projet symfony)
1/ Installer PHPUnit da façon locale à votre projet actuel, en mode dev 

	 composer require --dev phpunit 

Ensuite, suivant les recommandations de Symfony, installer le bridge :

      composer require --dev symfony/phpunit-bridge

A ce niveau, vous devrez avoir le programme `phpunit` dans le dossier `bin` 
de l’application, ainsi qu’un fichier de configuration à la racine
de votre projet nommé : `phpunit.xml.dist`. Si ce n’est pas le cas, il faut le faire générer par la commande :

	 bin/phpunit –generate-configuration 
	 => accepter les valeurs proposées par défaut

## Configurer PHPStorm suite à ces modifications (à faire aussi si vous télécharger le projet exemple). 
![conf phpstorm](https://raw.githubusercontent.com/ocapuozzo/sftu/master/public/confPHPStorm.png)


## Application statup

Nous vous proposons une application `sftu` intégrant un test unitaire opérationnel.
Avec git, installer l’application `sftu` à partir de votre racine des projets: 

	 git clone https://github.com/ocapuozzo/sftu
	 cd sftu

À partir de la racine du projet, faire un `composer update` afin de télécharger ses dépendances.
En effet, il est inutile (même nuisible) d’intégrer des bibliothèques tierces sur un 
dépôt distant, c’est le rôle du fichier `.gitignore` à la racine du projet (renseigné par défaut par symfony). N’oubliez pas de configurer PHPStorm (voir étape 2) 

![lancer tests phpstorm](https://raw.githubusercontent.com/ocapuozzo/sftu/master/public/phpStorm-lancerLesTests.png)

Pour pouvez aussi passer directement par le terminal et lancer la commande (et obtenir le même résultat) :

	php bin/phpunit tests/Utils/UtilHtmlTest.php