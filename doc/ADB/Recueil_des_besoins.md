# Chapitre 1 – Objectif et portée

## 1. Quels sont la portée et les objectifs généraux ?

Ce projet concerne toutes personnes ayant accès à un navigateur internet et une connexion internet. Néanmoins, en réalité, cette avant tout, l’équipe pédagogique qui sera amenée à interagir et juger notre projet. Le but étant de produire une application web, dans laquelle l’utilisateur devra être capable d’accéder au site et à ses modules.

## 2. Les intervenants. (Qui est concerné ?)

L’ensemble de l’équipe pédagogique du département de l’IUT informatique, les membres du groupe de la SAE (Ilyes MESSAL, Yanis MERABET, Samuel CHARTON, Julien LAUDICINA, Maxence GONTRAN) ainsi que les utilisateurs du site.

## 3. Qu'est-ce qui entre dans cette portée ? Qu'est-ce qui est en dehors ? (Les limites du système.)

Les modules ne pourront pas être modifiés par les utilisateurs et ils ne pourront pas importer de modules externes.

# Chapitre 2 – Terminologie employée / Glossaire

- Front-end : désigne toute l’interface visible par l’utilisateur 
- Back-end : désigne tout le code et sa structure (partie non visible par l’utilisateur) 
- Git : logiciel de gestion de version 
- Repository (Git) : dossier Git où se trouvera toute l’avancée du projet 
- Gitlab : site sur lequel est notre repository
- Navigateur web : interface graphique permettant d’accéder à Internet et de naviguer à travers les différents sites web.

# Chapitre 3 – Les cas d'utilisation

## 1. Les acteurs principaux et leurs objectifs généraux.

Un seul acteur est à recenser pour ce projet à savoir l’utilisateur du site, celui-ci accède aux différentes pages du site.

## 2. Les cas d'utilisation métier (concepts opérationnels).

- L’accès à un module.

## 3. Les cas d'utilisation système.

- L’utilisation au module ping.

# Chapitre 4 – La technologie employée

## 1. Quelles sont les exigences technologiques pour ce système ?
L’application sera gérée en HTML/CSS pour le front-end et par PHP/Python pour le back-end.

## 2. Avec quels systèmes ce système s'interfacera-t-il et avec quelles exigences ?

Il s'interface dans les navigateurs web des utilisateurs/visiteurs sous n'importe quelle distribution. Le module ping est quant à lui un sous système du site web.

# Chapitre 5 – Autres exigences

## 1. Processus de développement

i. Qui sont les participants au projet ?
Nous participons au projet pour le développement informatique. Le client est aussi participant au projet car c’est lui qui nous demande de faire celui-ci.

ii. Quelles valeurs devront être privilégiées ? (exemple : simplicité, disponibilité, rapidité, souplesse etc... )
L’application devra être accessible, rapide et souple pour s’adapter à tout type d’appareil et tous les utilisateurs.

iii. Quels retours ou quelle visibilité sur le projet les utilisateurs et commanditaires souhaitent-ils ?
Il s’agira de demander des retours au client à chaque fin de cycle pour vérifier que tout est conforme à ce qu’il a demandé.

iv. Que peut-on acheter ? Que doit-on construire ? Qui sont nos concurrents ?
Nous faisons l’installation du site web et des modules en local. Nous n’avons donc pas besoin d’acheter quoi que ce soit.

v. Quelles sont les autres exigences du processus ? (exemple : tests, installation, etc...)
Nous avons des tests à chaque fin de cycle permettant de bien vérifier que tout marche comme il faut. De plus, nous devons faire un rapport d’installation pour le client. Nous utilisons PHPUnit pour réaliser des tests unitaire sur le module PING.

vi. A quelle dépendance le projet est-il soumis ?
Le projet est soumis à dépendance temporel d’une semaine, en effet le projet commence à 9 heure le lundi 18/12 et finit le vendredi 22/12 à 18 heure. Il y a aussi une dimension géographique à respecter, nous devons effectuer le projet dans une salle dédiée à la SAE.
Il faut aussi respecter la demande client des différents modules et la création d’un dépôt gitlab ou github des livrables.

## 2. Règles métier

## 3. Performances
Aucune contrainte de performance, que ce soit en termes de complexité ou de ressources. 

## 4. Opérations, sécurité, documentation
Il n’y a pas de système d’authentification et la plateforme s’installe en local, il n’y a donc pas de risque de brèche sur un compte. De plus, l’application est sur un Git privé donc pas accessible à moins d’avoir les accès.

## 5. Utilisation et utilisabilité
Aucune utilisation précise n’est définie pour ce projet, seul le squelette du site est disponible.

## 6. Maintenance et portabilité
À ce jour, aucune maintenance n’est prévue pour le projet. Pareillement aucune contrainte spécifique n’a été donnée à ce jour concernant la portabilité.

## 7. Questions non résolues ou reportées à plus tard
Rien à signaler pour le premier livrable.

# Chapitre 6 – Recours humain, questions juridiques, politiques, organisationnelles.

## 1. Quel est le recours humain au fonctionnement du système ?

L’utilisateur doit choisir aller de lui-même sur la page web en tapant l’URL 

## 2. Quelles sont les exigences juridiques et politiques ?

On ne stocke aucunement des données utilisateurs donc nous n’avons aucune règle particulière à respecter. Cependant, nous avons sécurisé notre repository Gitlab.
Nous devons rester politiquement neutre et respecter la jurisprudence française.

## 3. Quelles sont les conséquences humaines de la réalisation du système ?

Il n’y a pas de conséquences humaines à la réalisation de ce système. 
En effet, des sites existent déjà pour calculer les modules que nous allons faire.

## 4. Quels sont les besoins en formation ?
L’équipe doit revoir certaines notions de réseau notamment pour les IPv4 et les IPv6. Elle doit aussi avoir des compétences en développement web et plus particulièrement en HTML/CSS pour l’interface ainsi qu’en PHP pour le back-end.

## 5. Quelles sont les hypothèses et les dépendances affectant l'environnement humain ?
