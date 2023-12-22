 **SAE5.01_Ilyes_Yanis_Samuel_Julien_Maxence**
## Introduction 

Ce document résume le processus d'installation, en sachant qu'une documentation plus détaillée du projet se trouve dans le dossier `doc` du projet. L'installation se fera par le biais d'un script `install.sh`, celui-ci est disponible sur le depôt d'eCampus. 

## Prérequis

- Le script d'installation doit être exécuté par l'utilisateur `root` sur une réel machine `debian`, l'exécuter sur une machine virtuelle provoquera par défaut des dysfonctionnements sur le module `Ping` ; par défaut, il n'est pas possible de ping le monde extérieur.

## Dépendances 

- Docker (installé automatiquement par le script install.sh)

## Remarques

- Si le navigateur ne s'ouvre pas automatiquement, tapez l'adresse IP (192.17.0.99) dans votre navigateur, une fois le script lancé. 
- La mise en place est automatique et peut donc prendre un peu de temps en fonction de la vitesse de votre connexion Internet.

## Exécution 

- Une fois le script téléchargé via eCampus, il faut aller dans le dossier contenant le script via la commande `cd <chemin_dossier>`
- Une fois ceci fait, réaliser la commande `chmod +x install.sh` pour pouvoir exécuter le script d'installation.
- Enfin, tapez la commande `./install.sh`. Cela aura pour effet de lancer le script d'installation.
