# Annexe 1 : Dossier de tests

| SAE                         | VERSION                      |
| --------------------------- | ---------------------------- |
| Document : Dossier de tests | Date : 19/12/2023            |
| Responsable de la rédaction | MESSAL Ilyes & MERABET Yanis |

## 1. Introduction

Il s'agit ici d'effectuer le dossier de tests en décrivant la procédure des tests dans un premier temps pour ensuite décrire les différentes informations à enregistrer pour les tests à travers 3 tableaux : le contexte des tests, les tests (un par tableau) et enfin le résultat de chaque test. Ce document sera incrémenté au fur et à mesure des livrables. Il contiendra à terme toute la documentation des tests

## 2 Description de la procédure de test

Nous allons ici avoir 2 types de tests : les tests d'acceptation pour l'interface web et des tests unitaires pour le back-end.
Les tests unitaires seront des tests en boîte noire. En effet, il s'agira d'analyser les entrées/sorties pour vérifier que le code est conforme à nos attentes et à celles du client.

Dans le cadre des pages web, seul l'acceptation du client fera office de résultat du test.

Pour le module ping, la méthode des partitions d'équivalence sera utilisée afin de lister des entrées/sorties conformes.

## 3 Description des informations à enregistrer pour les tests

### 3.1. Campagne de test

Définition du contexte des tests en s'appuyant sur le type de tableau suivant :

| Produit testé :           Page web                                 |                        |
|--------------------------------------------------------------------|------------------------|
| Configuration logicielle :                                         | HTML/CSS/PHP           |
| Configuration matérielle :                                         | Système Linux          |
| Date de début :                                                    | 19/12                  |
| Date de finalisation :                                             | 19/12                  |
| Tests à appliquer : liste de références aux descriptions des tests | Tests d'acceptation    |
| Responsable de la campagne de test :                               | Samuel CHARTON         |

| Produit testé :           Module ping                              |                                    |
| ------------------------------------------------------------------ | ---------------------------------- |
| Configuration logicielle :                                         | PHP                                |
| Configuration matérielle :                                         | Système Linux                      |
| Date de début :                                                    | 19/12                              |
| Date de finalisation :                                             | 19/12                              |
| Tests à appliquer : liste de références aux descriptions des tests | Tests unitaires                    |
| Responsable de la campagne de test :                               | Maxence GONTRAN & Julien LAUDICINA |

### 3.2 Tests

Définition de chaque test selon le tableau suivant :

#### 3.2.1 Page web


##### 3.2.1.1 Test 1


![Test 1 : Pages web](https://media.discordapp.net/attachments/688037836003213449/1186778410794631298/image.png?ex=65947c86&is=65820786&hm=11b24fbe2bb3bac8da445caac4a7dd836cd0f8ba50e497b7da0391aa0264ceea&=&format=webp&quality=lossless&width=953&height=316 "Figure 1")


#### 3.2.2 Module ping 

##### 3.2.2.1 Test 1 

![Test 2 : Module ping](https://cdn.discordapp.com/attachments/688037836003213449/1186786740862730260/image.png?ex=65948448&is=65820f48&hm=1c651cb6d552dd47e8e9d0db11efccb1fb46f1518a5a48942eedb49c54115d67&)

### 3.3 Résultats de test

#### 3.3.1 Résultat du test de la page web

Définition des résultats de chaque test selon le tableau suivant :

| Référence du test appliqué :                         | 1                                                  |
| ---------------------------------------------------- | -------------------------------------------------- |
| Responsable :                                        | CHARTON Samuel                                     |
| Date de l'application du test :                      | 19/12/2023                                         |
| Résultat du test : (OK, KO, non fait, dérogé)        | Dérogé, le client nous donne une entière confiance |
| Occurrences des résultats : (éventuel, systématique) | Systematique                                       |

#### 3.3.2  Résultat du test du module ping 

| **Host** | **-D** | **-q** | **-c** | **Résultat** |
|----------|--------|--------|--------|--------------|
| X        |        |        |        | OK           |
| X        | X      |        |        | OK           |
| X        |        | X      |        | OK           |
| X        |        |        | X      | OK           |
| X        | X      | X      |        | OK           |
| X        | X      |        | X      | OK           |
| X        |        | X      | X      | OK           |
| X        | X      | X      | X      | OK           |
|          | X      |        |        | KO           |
|          |        |        |        | KO           |
|          |        | X      |        | KO           |
|          |        |        | X      | KO           |
|          | X      | X      |        | KO           |
|          | X      |        | X      | KO           |
|          |        | X      | X      | KO           |
|          | X      | X      | X      | KO           |

| Référence du test appliqué :                         | 2            |
| ---------------------------------------------------- | ------------ |
| Responsable :                                        | MESSAL Ilyes |
| Date de l'application du test :                      | 19/12/2023   |
| Résultat du test : (OK, KO, non fait, dérogé)        | OK           |
| Occurrences des résultats : (éventuel, systématique) | Systematique |