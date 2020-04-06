# Gestionaire des perms de la Kfet de l'ENS PS / Kchan

## Plan du site
* `main`: permet de voir le planning de perm
* `reservation`: formulaire pour declarée des perm / event
* `retrait`: permet de devalider une perm
* `lacune`:permet de voir les trous dans les perms de la semaine a venir
* `detail_perm`: permet de voir les détails d'une entrée en fonction de son `Id`.

## Mise en page
Toutes les pages on a `header` et un `footer` commun. Tout est codé en PHP/CSS

## BDD
La base de donnée contien une seul table `Perm` avec les attribu suivant:
* `Id`: int, clef primaire
* `Pseudo`: str, nom du permanancier
* `Date` : date, date du début de la perm
* `H_debut` : time, heure du début de la perm
* `H_fin` : time, heur de la fin de la perm
* `Type` : int, type de perm
* `Valide` : bool, la perm est elle encore valide
* `Commentaire` : longchar, commentaire
