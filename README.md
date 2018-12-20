# KumpitalPidji

																	**************
																	*INSTALLATION*
																	**************																
	
-Avoir le serveur web Wamp64 installé sur votre ordinateur
-Installer git bash sur windows



Etape à suivre :
- aller dans votre dossier d'installation de Wamp et placé vous dans le répertoire www comme suit :
/Wamp64/www/

-Cloner le projet de la forge dans ce dossier (www)
			
			

-Aller dans phpMyAdmin et creer une nouvelle base de donnée avec pour nom: kumpitalbd.

-Se rendre dans le dossier BasedeDonnees puis ouvrir le fichier kumpitalbd.sql, copier le contenu du code et l'executer sur phpMyAdmin dans la base de données kumpital. 
		Maintenant vous avez la base de données du site qui marche  

-Ouvrir votre navigateur puis taper cette url pour acceder au site web (vous accederez directement à la page d'acceuil) : 
 	http://localhost:8080/kumpitalpidji/kumpitalpidji/web/app_dev.php/
				
		

Sur le site vous pourrez naviguer qu'en vous inscrivant et en créant un compte, sinon vous n'aurez accès à rien. 


																	**************
																	*Organisation*
																	**************
																	
à lire pour comprendre le contenu du projet 

Le projet symfony est reparti dans plusieurs dossier dont :

app : repertoire dans le quel on definit les configuration pour les nouveaux bundles à installer, la base de donnée, la gestion de la sécurité, droit et contrôle,
	le routing pour les bundles installés, les services.
	les fichiers importants dans ce dossier sont : config/routing.yml, config/parameters.yml, config/config.yml, config/security.yml


bin : repertoire dans le quel on se place pour executer nos commandes via le terminal
	Ex pour creer la base de donnée on a utiliser la commande : C:\Wamp64\www\+Symfony>php bin/console doctrine:database:create


src : repertoire le plus important dans le quel se trouve le code source de toute nos pages dedans se trouve les dossiers de 3 bundles :


	- PidjiBundle : c'est la qu'on gere le modele mvc 

		-PidjiBundle\Entity : dossier dans le quel se trouve le modele

		-PidjiBundle\Ressources\views : dossier dans le quel on gere toutes les  vue, nous avons un fichier qu'on appelle layout dont les autres 
                                        vues hérites de ce dernier. C'est ça la force du template Twigte.

		-PidjiBundle\Ressources\config : dossier dans le quel on gère les url de nos pages (comment on les définit et comment on y accède). Qui se trouve dans le fichier
						    routing.yml

		-PidjiBundle\Controller : dossier dans le quel on gere le controleur

		-PidjiBundle\Form : dossier dans le quel on gere nos differents formulaire

		-PidjiBundle\Repository : dossier dans le quel certaines fonctions importantes qu'on appel dans le controleur

	


var : repertoire concernant le cache


vendor : repertoire qui contient toutes les bibiliothèques externes, tout les bundles telechargés par Symfony et les bundles que nous avons installé, 


web : c'est le repertoire qui contient les fichiers destinés aux visiteurs, les fichiers css, js et les images. Il contient le fichier app_dev.php qui est le controleur frontal coté developpeur





