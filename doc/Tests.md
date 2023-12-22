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

| Produit testé :           Module Ipv6                              |                                                    |
| ------------------------------------------------------------------ | -------------------------------------------------- |
| Configuration logicielle :                                         | PHP/JS                                             |
| Configuration matérielle :                                         | Système Linux                                      |
| Date de début :                                                    | 21/12                                              |
| Date de finalisation :                                             | 21/12                                              |
| Tests à appliquer : liste de références aux descriptions des tests | Tests unitaires                                    |
| Responsable de la campagne de test :                               | MERABET Yanis & Julien LAUDICINA & GONTRAN Maxence |

### 3.2 Tests

Définition de chaque test selon le tableau suivant :

#### 3.2.1 Page web


##### 3.2.1.1 Test 1


![Test 1 : Pages web](https://media.discordapp.net/attachments/688037836003213449/1186778410794631298/image.png?ex=65947c86&is=65820786&hm=11b24fbe2bb3bac8da445caac4a7dd836cd0f8ba50e497b7da0391aa0264ceea&=&format=webp&quality=lossless&width=953&height=316 "Figure 1")


#### 3.2.2 Module ping 

##### 3.2.2.1 Test 1 

![Test 2 : Module ping](https://cdn.discordapp.com/attachments/688037836003213449/1186786740862730260/image.png?ex=65948448&is=65820f48&hm=1c651cb6d552dd47e8e9d0db11efccb1fb46f1518a5a48942eedb49c54115d67&)

#### 3.2.3 Module Ipv6

##### 3.2.3.1  Test 1

 <table>
    <tr>
        <td>Identification du test : 3</td>
        <td colspan="5">Version : 1.0</td>
    </tr>
    <tr>
        <td colspan="5">Description du test : Test de la classe et simplification, test unitaire </td>
    </tr>
    <tr>
        <td colspan="5">Ressources requises : (listes des ressources nécessaires, logiciels, matériel, données) :  PHPUnit</td>
    </tr>
    <tr>
        <td colspan="5">Responsable : Yanis et Maxence</td>
    </tr>
    <tr>
        <td>Etat initial : module implémenté</td>
        <td>Cas testé : divers type d'adresse ip</td>
        <td>Acteurs : L'équipe de developpement</td>
        <td>Actions : Réalisation d'un tableau faisant état des entrées/sortie attendus</td>
        <td>Résultats attendus : Simplification et Classe conforme</td>
    </tr>
</table>

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

#### 3.3.3  Résultat du test du module IPv6 

<style type="text/css">
.tg  {border-collapse:collapse;border-spacing:0;}
.tg td{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
  overflow:hidden;padding:10px 5px;word-break:normal;}
.tg th{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
  font-weight:normal;overflow:hidden;padding:10px 5px;word-break:normal;}
.tg .tg-0pky{border-color:inherit;text-align:left;vertical-align:top}
.tg .tg-0pky{text-align:left;vertical-align:top}
</style>
<table class="tg">
<thead>
  <tr>
    <th class="tg-0pky">IP</th>
    <th class="tg-0pky">Simplification attendue</th>
    <th class="tg-0pky">Simplification observée</th>
    <th class="tg-0pky">Classe attendue</th>
    <th class="tg-0pky">Classe observée</th>
  </tr>
</thead>
<tbody>
  <tr>
    <td class="tg-0pky">2001:0db8:0000:0000:0000:0000:0000:7334</td>
    <td class="tg-0pky">2001:db8::7334</td>
    <td class="tg-0pky">2001:db8::7334</td>
    <td class="tg-0pky">Global Unicast</td>
    <td class="tg-0pky">Global Unicast</td>
  </tr>
  <tr>
    <td class="tg-0pky">2001:0DB8:AB00:CD00:EF00:0000:0000:0012</td>
    <td class="tg-0pky">2001:db8:ab00:cd00:ef00::12</td>
    <td class="tg-0pky">2001:db8:ab00:cd00:ef00::12</td>
    <td class="tg-0pky">Global Unicast</td>
    <td class="tg-0pky">Global Unicast</td>
  </tr>
  <tr>
    <td class="tg-0pky">fe80:0000:0000:0000:0204:61ff:fe9d:f156</td>
    <td class="tg-0pky">fe80::204:61ff:fe9d:f156</td>
    <td class="tg-0pky">fe80::204:61ff:fe9d:f156</td>
    <td class="tg-0pky">Link-Local</td>
    <td class="tg-0pky">Link-Local</td>
  </tr>
  <tr>
    <td class="tg-0pky">0000:0000:0000:0000:0000:0000:0000:0000</td>
    <td class="tg-0pky">::</td>
    <td class="tg-0pky">::</td>
    <td class="tg-0pky">Unspecified</td>
    <td class="tg-0pky">Unspecified</td>
  </tr>
  <tr>
    <td class="tg-0pky">ffff:ffff:ffff:ffff:ffff:ffff:ffff:ffff</td>
    <td class="tg-0pky">ffff:ffff:ffff:ffff:ffff:ffff:ffff:ffff</td>
    <td class="tg-0pky">ffff:ffff:ffff:ffff:ffff:ffff:ffff:ffff</td>
    <td class="tg-0pky">Anycast</td>
    <td class="tg-0pky">Anycast</td>
  </tr>
  <tr>
    <td class="tg-0pky">1111:1111:1111:1111:1111:1111:1111:1111</td>
    <td class="tg-0pky">1111:1111:1111:1111:1111:1111:1111:1111</td>
    <td class="tg-0pky">1111:1111:1111:1111:1111:1111:1111:1111</td>
    <td class="tg-0pky">Anycast</td>
    <td class="tg-0pky">Anycast</td>
  </tr>
  <tr>
    <td class="tg-0pky">0000:0000:0000:0000:0000:0000:0000:0001</td>
    <td class="tg-0pky">::1</td>
    <td class="tg-0pky">::1</td>
    <td class="tg-0pky">Loopback</td>
    <td class="tg-0pky">Loopback</td>
  </tr>
  <tr>
    <td class="tg-0pky">FC00:0000:0000:0000:0000:0000:0000:0000</td>
    <td class="tg-0pky">fc00::</td>
    <td class="tg-0pky">fc00::</td>
    <td class="tg-0pky">Unique Local</td>
    <td class="tg-0pky">Unspecified</td>
  </tr>
  <tr>
    <td class="tg-0pky">FD00:0000:0000:0000:0000:0000:0000:0000</td>
    <td class="tg-0pky">fd00::</td>
    <td class="tg-0pky">fd00::</td>
    <td class="tg-0pky">Unique Local</td>
    <td class="tg-0pky">Unspecified</td>
  </tr>
</tbody>
</table>

##### Observation 

Les tests pour IPv6 sont maintenant conformes au comportement attendu.

#### 3.3.4 Résultat du test du module IPv4

#### 3.3.4.1 Fonction de conversion CIDR en binaire
<table class=tg>
<thead>
  <tr>
    <th class="tg-0pky">CIDR</th>
    <th class="tg-0pky">Résultat attendu</th>
    <th class="tg-0pky">Résultat observé</th>
  </tr>
</thead>
<tbody>
  <tr>
    <td class="tg-0pky">0</td>
    <td class="tg-0pky">00000000000000000000000000000000</td>
    <td class="tg-0pky">OK</td>
  </tr>
  <tr>
    <td class="tg-0pky">24</td>
    <td class="tg-0pky">11111111111111111111111100000000</td>
    <td class="tg-0pky">OK</td>
  </tr>
  <tr>
    <td class="tg-0pky">32</td>
    <td class="tg-0pky">11111111111111111111111111111111</td>
    <td class="tg-0pky">OK</td>
  </tr>
  <tr>
    <td class="tg-0pky">-1<br></td>
    <td class="tg-0pky">"CIDR &lt; 0"<br></td>
    <td class="tg-0pky">OK</td>
  </tr>
</tbody>
</table>

##### Observations

#### 3.3.4.2 Fonction de conversion d'entiers en binaire 

<table class=tg> 
<thead>
  <tr>
    <th class="tg-0pky">Nombre entier</th>
    <th class="tg-0pky">Résultat attendu</th>
    <th class="tg-0pky">Résultat observé</th>
  </tr>
</thead>
<tbody>
  <tr>
    <td class="tg-0pky">0</td>
    <td class="tg-0pky">00000000000000000000000000000000</td>
    <td class="tg-0pky">OK</td>
  </tr>
  <tr>
    <td class="tg-0pky">10</td>
    <td class="tg-0pky">00000000000000000000000000001010</td>
    <td class="tg-0pky">OK</td>
  </tr>
  <tr>
    <td class="tg-0pky">-1</td>
    <td class="tg-0pky">"Nombre &lt; 0"</td>
    <td class="tg-0pky">OK</td>
  </tr>
</tbody>
</table>

##### Observations


#### 3.3.4.3 Fonction de conversion d'un binaire en adresse IPv4

<table class=tg>
<thead>
  <tr>
    <th class="tg-0pky">Nombre binaire</th>
    <th class="tg-0pky">Résultat attendu</th>
    <th class="tg-0pky">Résultat observé</th>
  </tr>
</thead>
<tbody>
  <tr>
    <td class="tg-0pky">00000000000000000000000000000000</td>
    <td class="tg-0pky">0.0.0.0</td>
    <td class="tg-0pky">OK</td>
  </tr>
  <tr>
    <td class="tg-0pky">11111111111111111111111111111111</td>
    <td class="tg-0pky">255.255.255.255</td>
    <td class="tg-0pky">OK</td>
  </tr>
  <tr>
    <td class="tg-0pky">0000000000<br></td>
    <td class="tg-0pky">"Ip invalide"</td>
    <td class="tg-0pky">OK</td>
  </tr>
</tbody>
</table>

##### Observations


#### 3.3.4.4 Fonction de calcul de l'adresse réseau

<table class=tg>
<thead>
  <tr>
    <th class="tg-0pky">Adresse IP</th>
    <th class="tg-0pky">Masque</th>
    <th class="tg-0pky">Résultat attendu</th>
    <th class="tg-0pky">Résultat observé</th>
  </tr>
</thead>
<tbody>
  <tr>
    <td class="tg-0pky">1101</td>
    <td class="tg-0pky">1111</td>
    <td class="tg-0pky">1101</td>
    <td class="tg-0pky">OK</td>
  </tr>
  <tr>
    <td class="tg-0pky">1101</td>
    <td class="tg-0pky">0000</td>
    <td class="tg-0pky">0000</td>
    <td class="tg-0pky">OK</td>
  </tr>
</tbody>
</table>

#### 3.3.4.5 Fonction d'addition de deux binaires

<table class=tg>
<thead>
  <tr>
    <th class="tg-0pky">Binaire 1</th>
    <th class="tg-0pky">Binaire 2</th>
    <th class="tg-0pky">Résultat attendu</th>
    <th class="tg-0pky">Résultat observé</th>
  </tr>
</thead>
<tbody>
  <tr>
    <td class="tg-0pky">01<br></td>
    <td class="tg-0pky">01<br></td>
    <td class="tg-0pky">10</td>
    <td class="tg-0pky">OK</td>
  </tr>
  <tr>
    <td class="tg-0pky">00</td>
    <td class="tg-0pky">11</td>
    <td class="tg-0pky">11</td>
    <td class="tg-0pky">OK</td>
  </tr>
  <tr>
    <td class="tg-0pky">1000000000</td>
    <td class="tg-0pky">1000</td>
    <td class="tg-0pky">"Longueur non valide"</td>
    <td class="tg-0pky">OK</td>
  </tr>
</tbody>
</table>

##### Observations


#### 3.3.4.6 Fonction de vérification du nombre de machines par rapport au masque

<table class=tg>
<thead>
  <tr>
    <th class="tg-0pky">Masque</th>
    <th class="tg-0pky">Nombre de machines</th>
    <th class="tg-0pky">Résultat attendu</th>
    <th class="tg-0pky">Résultat observé</th>
  </tr>
</thead>
<tbody>
  <tr>
    <td class="tg-0pky">24<br></td>
    <td class="tg-0pky">10<br></td>
    <td class="tg-0pky">true<br></td>
    <td class="tg-0pky">OK</td>
  </tr>
  <tr>
    <td class="tg-0pky">31<br></td>
    <td class="tg-0pky">10</td>
    <td class="tg-0pky">false<br></td>
    <td class="tg-0pky">OK</td>
  </tr>
</tbody>
</table>

##### Observations
