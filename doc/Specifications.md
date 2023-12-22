# Spécification

![Figure 1 : Diagramme des cas d'utilisations](https://cdn.discordapp.com/attachments/1165993401452331129/1187386964907925566/image.png?ex=6596b349&is=65843e49&hm=77818ffd28d4cf6ad68f23ba91bc6f64607ea9182f4ec1ecaea0fe57348bcdd8& "Figure 1 : Diagramme des cas d'utilisations")
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


## Cas d’utilisation 5 : Lancer le module IPv4 
- Nom : Lancer le module IPv4 
- Portée : Page d’accueil/page du module IPv4
- Niveau : Sous-système
- Acteur principal : L’utilisateur 
- Scénario : 
    1. L’utilisateur clique sur un bouton permettant d’accéder au module IPv4
    2. L’utilisateur est redirigé sur la page du module IPv4
    3. L’utilisateur rentre une adresse IPv4 dans le champ associé
    4. L’utilisateur rentre le masque en notation CIDR dans le champ associé
    5. L’utilisateur rentre un nombre de sous-réseaux dans le champ associé
    6. L’utilisateur rentre le nom du sous-réseau
    7. L’utilisateur rentre le nombre de machines allouées au sous-réseau
    8. L’utilisateur clique sur le bouton calculer
    9. L’utilisateur obtient en sortie toutes les informations de chaque sous-réseau (nom, nombre de machines nécessaires, nombre de machines allouées, adresse IP, masque, intervalle d’adresse disponibles, adresse de diffusion/broadcast)
