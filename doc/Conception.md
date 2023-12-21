# Conception

## Structure des pages

Chaque page est constituée d’un nav et d’un footer commun.

Le nav contient le logo de notre application web. Le logo est centré dans l’entête.

Le footer contient un copyright également centré.

### Page d’accueil
![](https://media.discordapp.net/attachments/1165993401452331129/1186249436536516638/image.png?ex=65928fe1&is=65801ae1&hm=9cd8471ce5fdab676b125cd0a7478b700bf03441bfb2cc0b9e388951c2bad0ae&=&format=webp&quality=lossless&width=1070&height=621)

La structure de la page d’accueil est composée de trois éléments : un nav, un main et un footer.

Le main contient un titre “Bienvenue” et un élément composé de trois boutons. Ces boutons permettent d’accéder au module.

Les boutons contiennent une image, un titre et leur description. Les boutons ont également leurs bords arrondis. Une ombre entoure les boutons.

![](https://media.discordapp.net/attachments/1165993401452331129/1186329187326369903/maquette_homepage1.png?ex=6592da27&is=65806527&hm=4df30a33dccf8a9b907ca41f5e132fe6486616144e556cb8a963d4a985462661&=&format=webp&quality=lossless&width=1105&height=621)


### Page module

![](https://media.discordapp.net/attachments/1165993401452331129/1186304074291875850/image.png?ex=6592c2c3&is=65804dc3&hm=a9c1668a1a0abc8b7f19636c3bc8bb8f1264a786d047b437dfb27599b114c503&=&format=webp&quality=lossless&width=1339&height=621)

Toutes les pages de module reprennent la structure de la page d’accueil c’est-à-dire, un nav un main propre à chaque module et le footer.

## Charte graphique

### Couleurs

![](https://media.discordapp.net/attachments/1165993401452331129/1186300501390807121/image.png?ex=6592bf6f&is=65804a6f&hm=28ef56b7cb8b9e4193e6c6eacd397edd9ee0bd1ef6b3f564764712710dfc2e45&=&format=webp&quality=lossless)

Notre charte graphique comporte cinq couleurs. Cette palette reprend quelques couleurs rouges, un noir, un gris et du bleu foncé.

Tous les textes seront de couleur grise : **#DBDBDB**.

Le background de nos pages utilise la couleur grise : **#DBDBDB**.

Le nav et le footer des pages utilise la couleur bleue foncée : **#413C58**.
Leur bords seront légèrement arrondis.

Le nav reste constamment au haut de la page.

Le fond de la partie titre/description est de la couleur : **#413C58**.

### Police de caractères

Tous nos pages utilisent la police de caractères Roboto 500.

https://fonts.google.com/specimen/Roboto

## Module PING

Le module PING propose à un utilisateur de “pinger” une adresse IP ou un nom de domaine. Pour cela, il remplit un champ texte. Il peut également choisir des paramètres pour sa requête.
Le paramètre -c permet d'arrêter la commande après l'envoi d’un certain nombre de paquets. L’utilisateur peut remplir champ d’entier strictement positif et non nul. Si l’utilisateur ne rentre pas de valeur pour -c, la valeur 3 est choisie.
Le paramètre -D permet d'afficher un horodatage avant chaque ligne. Une case à cocher, checkbox est utilisée. Il n’est pas obligatoire.
Le paramètre -q permet d’afficher en sortie silencieuse. Une case à cocher, checkbox est utilisée. Il n’est pas obligatoire.

Au survol des paramètres, un texte explicatif apparaît décrivant les fonctionnalités du paramètre.

Un bouton permet d’exécuter la requête.

La requête PING est affichée en texte en temps réel en fonction des choix de l’utilisateur.

Le résultat de la requête est affiché une fois terminée.

![](https://media.discordapp.net/attachments/1186326822724571277/1186950850074116137/maquette_ping.png?ex=65951d1f&is=6582a81f&hm=feaf9e0be13a368c096b85e66a8bbcd517511feb292ea21a0c1ef446f276d5bd&=&format=webp&quality=lossless&width=1307&height=629)

## Module IPV6

Le module IPv6 permet à un utilisateur de simplifier une adresse IPv6 et de renvoyer son type. 
Pour cela, l’utilisateur doit remplir un champ texte avec son adresse IPv6. Il clique ensuite sur le bouton permettant de lancer le module.

Le résultat de la requête est affiché une fois terminée.

Une fonction permettant de simplifier l’écriture est développée, de même pour obtenir le type de l’adresse ipv6.

![](https://media.discordapp.net/attachments/1186326822724571277/1187023107022671912/Untitled-2022-10-28-17431.png?ex=6595606a&is=6582eb6a&hm=f14baf203de8312ef0258c4957120eb30ee9990bf74a881007340bf8b2e897fc&=&format=webp&quality=lossless&width=1246&height=593)

## Module IPv4 

Le module IPv4 permet à un utilisateur de faire une division en sous-réseaux d’une adresse IPv4. 
Pour cela, l’utilisateur devra remplir plusieurs champs : un champ texte avec l’adresse IPv4, un autre champ pour le masque ainsi qu’un champ pour le nombre de divisions (nombre de sous-réseaux). 
Une fois le nombre de sous-réseaux choisi, un nombre de lignes correspondant au nombre de sous-réseaux apparaîtra en dessous des champs. Il y a 2 champs en plus à remplir par ligne (sous-réseau), l’un pour le nom du sous-réseau et l’autre pour le nombre de machines alloué au sous-réseau. 

On peut ensuite lancer le programme via le bouton “calculer” qui renverra le résultat de la requête.

![](https://cdn.discordapp.com/attachments/1165993401452331129/1187405404557291653/Untitled-2022-10-28-17432.png?ex=6596c475&is=65844f75&hm=2ee64407e5279f7005d64c7702b263292c9aad99a6eb45832edbc3de2f401925&)

## Conception architecturale

Nous utilisons un ensemble de fichiers HTML et CSS interagissant entre eux.

![](https://media.discordapp.net/attachments/1186326822724571277/1187039155335737354/image.png?ex=65956f5c&is=6582fa5c&hm=28aec8b673c4d975686e66c854e95a7ef657de7d41445b448f73e1e5e3fadaf2&=&format=webp&quality=lossless&width=1178&height=593)
