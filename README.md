# U-Experiment - Projet

Objet du projet :

## Déploiement du projet

```bash
git clone project
cd u-experiment/
docker-compose up -d
docker-compose exec php bash
cd app/
composer install --no-dev --optimize-autoloader
APP_ENV=prod APP_DEBUG=0 php bin/console cache:clear
php bin/console app:init
exit
```

Dans l'ordre, les commandes permettent:
- de cloner le projet,
- se placer dans le dossier du projet après le clonage,
- déployer les conteneurs Docker
- entrer dans le conteneur php,
- se placer dans le dossier applicatif
- installer les dépendances
- mettre en oeuvre un déploiement de production
- initialiser le projet,
- quitter le conteneur.

La première commande permet d'installer les dépendances du projet, quand la seconde permet d'initialiser la base de données, ainsi que de mettre en place un jeu conséquent de données (voir la classe `App\Command\InitCommand` pour plus d'informations).
L'ensemble des commandes utilisées dans cette commande générale sont documentées dans le code source du projet.

## Outils de qualité

Nous avons utilisé [phpstan]() ainsi que [PhpInsights]() afin de garantir une qualité du code produit minimale.


Pour exécuter l'analyse (dans le conteneur php, ou directement dans un terminal), se placer dans le dossier 'app' puis :
### PhpStan
```bash
vendor/bin/phpstan analyse -l 7 -c phpstan.neon src tests
```

### PhpInsights
```bash
vendor/bin/phpinsights
```
### OpenAPI
Un fichier `openapi.json` est présent dans le dossier `app` de ce repository.
