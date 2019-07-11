# U-Experiment - Projet

Objet du projet :

## Installation du projet
```bash
git clone git@github.com:Knudian/u-experiment.git
cd u-experiment
docker-compose up -d
cd app
composer install
cd ..
// On accède ensuite au conteneur php, pour initialiser le conteneur.
docker-compose exec php bash
cd app/
php bin/console doctrine:database:create --if-not-exists
php bin/console doctrine:migrations:migrate -n
exit
```

Avec ces commandes, le projet est maintenant fonctionnel.
Pour hydrater la base de données avec des données de tests, afin de jouer l'intégralité des test unitaires et fonctionnels, il sera utile, dans le conteneur php, de lancer la commande `php bin/console doctrine:fixtures:load`. 

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

### Jouer les tests unitaires

### Jouer les tests fonctionnels
