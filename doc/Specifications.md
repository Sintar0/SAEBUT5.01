# Spécification

![Figure 1 : Diagramme des cas d'utilisations](https://media.discordapp.net/attachments/1165993401452331129/1187018452251185273/image.png?ex=65955c14&is=6582e714&hm=2dbc36ca17ea2a255a88af1ab3c30f48ce79bab9831efc8498f72bc7b57b8601&=&format=webp&quality=lossless&width=1386&height=670 "Figure 1 : Diagramme des cas d'utilisations")
Figure 1 : Diagramme des cas d'utilisations

## Cas d’utilisation 1 : Accéder à des modules
- Nom :  Accéder à des modules
- Portée : Page d’accueil
- Niveau : Stratégique
- Acteur principal : L’utilisateur
- Scénario :
1. L’utilisateur choisit un des modules

## Cas d’utilisation 2 : Accéder à un module
- Nom : Accéder à un module
- Portée : Page d’accueil
- Niveau : Utilisateur
- Acteur principal : L’utilisateur
- Scénario :
1. L’utilisateur clique sur un bouton permettant d’accéder au module souhaité
2. L’utilisateur est redirigé sur la page du module souhaité

## Cas d’utilisation 3 : Accéder au module ping
- Nom : Accéder au module ping
- Portée : Page d’accueil
- Niveau : Sous-système
- Acteur principal : L’utilisateur
- Scénario :
1. L’utilisateur clique sur un bouton permettant d’accéder au module ping
2. L’utilisateur est redirigé sur la page du module ping
3. L’utilisateur spécifie l’host 
4. L’utilisateur spécifie le nombre de ping à effectuer
5. L’utilisateur choisi ou non le paramètre “-q”
6. L’utilisateur choisi ou non le paramètre “-D”

## Cas d’utilisation 4 : Lancer le module IPv6
- Nom : Lancer le module IPv6
- Portée : Page d’accueil/page du module IPv6
- Niveau : Sous-système
- Acteur principal : L’utilisateur
- Scénario :
    1. L’utilisateur clique sur un bouton permettant d’accéder au module IPv6
    2. L’utilisateur est redirigé sur la page du module IPv6
    3. L’utilisateur rentre une adresse IPv6 
    4. L’utilisateur clique sur le bouton OK/Démarrer
    5. L’utilisateur obtient une écriture simplifiée de son adresse ainsi que le type d’adresse en sortie
