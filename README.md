# Frigo : L'appli de gestion du frigo

## *Technologie* 

- Application mobile ? Hybride (pour iOS / Android) --> Voir si possibilité d'utiliser iPhone comme device de test : React Native ? Flutter ?
  - -Si impossible, utilisation d'Android mais seulement utile sur la tablette 
  -  +Uniquement base de données sur le serveur (Couch ? Mango ? MySQL ?)
-  Site Web Local ? Responsive : Php ? React JS ? Angular ? 
   -  +Disponible tout systeme, juste une adresse a rentrer sur le navigateur
   -  -Tout est stocké sur le serveur : BDD, Pages...

## *Fonctionnalités*
- Ajout item dans le frigo (nom, date de pereption, id...)
- Suppression item (pas directement, possibilité de la mettre de coté et de la supprimer la journée passée) : en cas de missclick ou finalement de retour au frigo
- Affichage liste d'item : Tri par date de péremption croissante par défaut
- Affichage des itemps a manger absolument hors de la liste : Couleur rouge, première chose que l'on voit
- Coloration des différents éléments en fonction de la date de péremption comparé a la date du jour
