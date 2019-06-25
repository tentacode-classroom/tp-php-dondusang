# TP PHP dondusang

## Énoncé

Le but du TP est de faire une petite interface pour trouver le point de don du sang le plus proche où je peux donner mon sang aujourd'hui.

On utilisera deux API externes :

* L'API [adresse.data.gouv.fr](https://adresse.data.gouv.fr/api) permet de géolocaliser une adresse postale.
* L'API [api.openeventdatabase.org](http://api.openeventdatabase.org) permet de trouver les points de don du sang les plus proches.

Todo list :

* [ ] Installer le projet
* [ ] Se familiariser avec le projet
* [ ] Récupérer les coordonées géographiques de l'adresse saisi dans le formulaire.
* [ ] Récupérer les coordonées géographiques et les détails des points de don du sang du jour.
* [ ] Calculer les points les plus proches.
* [ ] Afficher les points les plus proches dans la page.

Critères de notation :

* Vous utilisez uniquement la Programation Objet.
* Les classes sont dans les bonnes namespaces.
* Les classes sont une bonne abstraction du monde réel.
* Votre calcul de distance est correct (les points les plus proches sont retournés).
* Pas d'erreurs / de bugs dans la page.
* Le code est valide PSR-2 ([voir annexe : Valider le code](#valider-le-code))
* Le code n'a pas d'erreur avec phpstan ([voir annexe : Valider le code](#valider-le-code))

Resources :

* [Documentation de l'API adresse.data.gouv.fr](https://adresse.data.gouv.fr/api)
* [Documentation de l'API don du sang](https://www.data.gouv.fr/fr/datasets/dates-et-lieux-des-collectes-de-don-du-sang/)
* [API des points de don du sang du jour](http://api.openeventdatabase.org/event/?what=health.blood.collect&when=today&limit=500)
* [file_get_contents](https://www.php.net/manual/fr/function.file-get-contents.php) récupérer le contenu d'une page web (ou utilisez `guzzlehttp/guzzle`).
* [json_decode](https://www.php.net/manual/fr/function.json-decode.php) : transformer une chaine JSON en objet PHP ou tableau php (deuxième argument à true).
* [calcul de distance en km entre deux points](http://mwlandry.ca/famille/etudes/calcul_distance.htm)

## Annexe

### Setup du projet

```bash
git clone ...
composer install
php -S localhost:8899 -t public
```

### Valider le code

Erreurs de coding style :

```bash
php bin/phpcs
```

Fixer les erreurs automatiquement (toutes les erreurs ne peuvent pas être fixées automatiquement, lisez les messages d'erreurs) : 

```bash
php bin/phpcbf
```

Analyse statique (prévention des bugs) :

```bash
bin/phpstan analyse src --level=max
```