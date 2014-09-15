## Installation du projet

### Mamp ou Wamp
D'abord il faut installer mamp ou wamp sur votre PC/MAC, ou alors utiliser Vagrant si vous le souhaitez, ca ne change rien il faut un peu plus de config.

### Recuperer le depôt
Pour récuperer le depot, telechargez et installez le logiciel github. Connectez vous et clonez le depot vers le dossier wamp/mamp (C:/wamp/www)

### Configurer le nom de domaine
Pour travailler avec une base de donnée commune aux projets, il faut rediriger le nom de domaine www.campussaintchristophe.com vers votre localhost.
Pour cela il faut modifier le fichier hosts de votre machine.

     > Windows : C:/Windows/System32/drivers/etc/hosts

     > Mac : /etc/hosts

Enfin vous inserez ce code à la fin du fichier

     127.0.0.1 campussaintchristophe.com

### Configurer la base de données
Créez une base de données avec phpmyadmin, nommez la eurosic et importez le fichier sql present dans le depot.
Ensuite rendez-vous dans le fichier wp-config.php et mettez à jour les informations de base de données selon votre configuration. (Wamp login : root, Wamp password : '')

## Configuration du projet

### Ruby et Sass

#### Ruby
Pour installer ruby sur windows il existe un installer : http://rubyinstaller.org/

#### Sass

> gem install sass

### Nodejs et Grunt
Pour le css du site, nous allons utiliser un outil qui s'appel SASS, il rajoute des fonctionnalités aux fichiers css (Fonctions, Variables, Imbrication des classes, Inclusion de css dans d'autres css) et qui fait gagner un temps enorme.

Le principe est d'installer un outil qui se nomme Grunt, qui surveille les fichiers SCSS (extension sass) et lorsque vous effectuez une modification dans un css Grunt va recompiler tout le css vers 1 fichier unique.

##### Nodejs
Tout d'abord il vous faut installer nodejs, pour cela rendez vous sur le site officiel et suivez la procédure pour votre OS. Ensuite allez dans la console windows pour tester et tapez npm pour verifier que cela fonctionne.

##### Grunt
Une fois nodejs installé, vous avez accès à la commande npm. 
Lancez la console et tapez :

> npm install -g grunt-cli

Si tout se passe bien, lorsque vous tapez "grunt" dans la console, vous avez une reponse et pas un message "Commmande introuvable".

Une fois tout installé, vous pouvez vous rendre dans le dossier 
> C:/wamp/www/itescia/wp-content/theme/campussaintchristophe/

Et taper la commande 
> grunt watch
