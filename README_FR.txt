* Comment utiliser ce projet
- télécharge un ensemble à document_root d'apache ou clones il, portez dehors.
- Faites un répertoire de cache/twig au subalterne de documentroot/sample/ (le modèle compilé de Brindille est arrangé ici).
- Si documentroot/sample/twig/test.php est accédé, le résultat d'ayant sample/sample/twig/templates/test.html devraient être affichés.

- compositeur.phar
http://getcomposer.org/
L'installateur de bibliothèque de PHP.
Apparemment, une dépendance sera aussi annulée dans passer.

Installation du compositeur lui-même
curl -sS https://getcomposer.org/installer | php
Si la curl n'est pas contenue, il téléchargera d'URL supérieure.

L'usage décrit une bibliothèque pour installer par compositeur.json
php composer.phar install
