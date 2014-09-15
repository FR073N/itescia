## Processus de travail

### Compilation SCSS

Une fois tout installé, vous pouvez vous rendre dans le dossier 
> C:/wamp/www/itescia/wp-content/theme/campussaintchristophe/

Et taper la commande 
> grunt watch

Cette commande va donc attendre des modifications sur le SCSS et compilera le nouveau fichier main.css. Vous pouvez actualiser une fois la compilation terminée uniquement.

### Structure

###### Fichiers css

> campussaintchristophe/scss/commons/ # Styles commun a toutes les pages

> campussaintchristophe/scss/templates/ # Styles correspondant à chacune des pages

###### Fichiers php

> campussaintchristophe/function.php # Fichier qui inclus les css, et stocke toutes les fonctions du thème

> campussaintchristophe/layouts # Il existe 1 fichier par type de page. 


Si 2 pages ont la meme structure elles auront le meme fichier. C'est ici que tout se passe pour vous

