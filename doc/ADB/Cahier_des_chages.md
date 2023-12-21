# I./ Introduction

## Information générale sur le document

Ce document vise à présenter l’analyse des besoins du projet, celui-ci sera incrémenté au fur et à mesure des différents livrables, celui-ci sera divisé en plusieurs sections. “L'Énoncé” traduit notre compréhension technique du problème posé par le client. Les pré-requis font l’état des connaissances, compétences et ressources nécessaires pour la réalisation du projet. Les Priorités permettent de séquencer le travail et de focaliser sur les fonctionnalités importantes

## Objectifs du document

Les objectifs de ce document sont d’identifier le problème, documenter les exigences et d’impliquer les utilisateurs et les experts dans le domaine de l’application

## Structure et les documents référencés.

Ce document est le premier d’une série de 5 documents ; les suivants étant : 
- Le recueil des besoins
- La spécification qui liste les différents scénarii dans lesquels l’application sera utilisée
- La conception qui détaille la manière dont a été réfléchi le site web
- Le dossier de test qui détaille la procédure de test du site et ses différents modules


# II./ Enoncé

## Contexte

Ce projet s'inscrit dans le cadre de la SAE du semestre 5, le client nous a transmis son cahier des charges, la deadline pour ce projet est le vendredi 22 décembre à 18h. Nous disposons d’une période de 5 jours pour livrer le rendu final.

## Objectifs du projet
Développer un serveur web avec une interface permettant aux visiteurs d’y accéder sans authentification.

De plus, le client souhaite qu’on développe un module permettant à un utilisateur de pouvoir exécuter des commandes PING sur une adresse IP ou une URL.

Le client souhaite aussi un module permettant de simplifier une adresse IPv6 et de trouver sa classe. 

Enfin, le client souhaite un module “IPv4”, celui-ci doit pour une adresse IPv4 donnée, un masque de sous-réseau et un nombre de sous-réseaux voulus, produire une division en sous-réseau avec un nombre de machines par sous-réseau déterminé par l’utilisateur

## Définition des objectifs que doit atteindre la solution.

L'interface web comprend une structure similaire à toutes les pages du serveur Web. Elle s’appuie sur une maquette et une charte graphique. Ces deux documents sont disponibles en Annexe. Chaque module possède sa propre interface afin de s’adapter à ses besoins.
L’interface essaiera d’intégrer le plus de fonctionnalités pour qu’elle respecte les principes de l’accessibilité.

Le module PING consiste à proposer à un utilisateur de “ping” une adresse IP ou un URL avec des paramètres afin de tester par exemple l'accessibilité de différentes machines sur un réseau local.

Le module adresse IPv6 consiste à proposer une simplification claire d’une adresse entrée par l’utilisateur. 

Le module IPv4 permet une division d'une adresse IPv4 en sous-réseaux avec différents paramètres à ajouter permettant de lancer le module.


# III./ Pré-requis

## Connaissances requises

- Nous aurons besoin de connaissances en programmation web pour effectuer une interface qui répertorie nos différents modules.
- Connaissance en accessibilité pour le site web.
- Nous aurons besoin de connaissances basiques en réseau pour comprendre le fonctionnement de ping, notamment, connaître les paramètres de la commande pour proposer une implémentation du module conforme aux attentes du client.

## Ressources matérielles

- Besoin de machines pour effectuer l’interface web avec le langage php installé et un navigateur Internet afin d’effectuer le rendu des pages.

## Ressources logicielles

- Nous aurons besoin de tout d’abord un repository en ligne comme gitlab.
- Pour le frontend du site nous utiliserons HTML/CSS.
- D’un éditeur de code comme Visual Studio Code.
- Pour réaliser la maquette de l’interface, nous utilisons le logiciel Microsoft WhiteBoard.
- La machine sur lequel sera exécuté le module ping devra être doté du système Linux pour assurer le fonctionnement du ping.
- Le module IPv6 se faisant exclusivement via PHP, celui-ci n’est pas dépendant d’un système d’exploitation défini.
- Le module IPv4 se faisant exclusivement via PHP, celui-ci n’est pas dépendant d’un système d’exploitation défini

## Compétences nécessaires.

- Utilisation de l’outil Gitlab pour mettre en commun les différents fichiers du projet et créer une arborescence commune pour une meilleure clarté en équipe.
- Travail en équipe pour la répartition des différentes tâches et une bonne 
- Communication afin de rendre un projet cohérent avec l'énoncé du projet.
- Savoir coder une interface web avec PHP, HTML, CSS pour accueillir les différents modules présents sur le site.
- Tests d’acceptations pour l’interface web
- Test unitaire pour le module PING, le module IPv6 
- Utilisation de PHP Unit


# IV./ Priorités

Il n’y a pas particulièrement de priorités convenues avec le client. 
Cependant, la priorité pour ce “cycle” dans notre développement est d’implémenter le module ping.