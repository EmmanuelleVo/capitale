# Capitales

Écrivez un programme qui liste une série de pays dans un `select`. Lorsque le formulaire contenant ce `select` est soumis, le programme côté serveur produit le code HTML qui affiche la capitale du pays choisi et le drapeau associé. Aucune valeur n’est pré-sélectionnée dans le `select`. Par contre, dans la page reconstruite par le programme côté serveur lors de la soumission, le pays sélectionné reste sélectionné.

Naturellement, le programme vérifie d’abord que le pays soumis est un pays dont la capitale est connue, donc un pays prévu par le programme. Si ce n’est pas le cas, il le signale à l’utilisateur.

D’un point de vue technique, les données sont stockées dans un array au sein du programme. Les valeurs y sont en dur et ne proviennent pas d’une source externe telle qu’un fichier ou une base de données.

L’array contient une dizaine de pays. Cet array est associatif et à deux dimensions. Les pays servent de clés associées à des valeurs qui sont elles-mêmes des arrays associatifs contenant la capitale et une adresse d’une image du drapeau stockée sur le serveur.

Donc pour un pays :

``` php
'france' => 
  'capital-name' => 'paris'
  'flag-file' => 'france.png'
'belgique' => 
  'capital-name' => 'bruxelles'
  'flag-file' => 'belgique.png'
```

Notez que dans les arrays, tout est en minuscule, mais que les valeurs insérées dans le HTML doivent être :

- intégralement en capitales dans le select
- avec une majuscule initiale pour le reste

Les [fonctions qui permettent d’agir sur les chaînes](https://www.php.net/manual/fr/book.strings.php) vous seront utiles ici. Si vous devez manipuler des chaînes de caractères contenant des caractères non ASCII, jetez un œil sur les [fonctions pour les chaînes multi-octets](https://www.php.net/manual/fr/book.mbstring.php).

La documentation contient un grand nombre de [fonctions sur les tableaux](https://www.php.net/manual/fr/ref.array.php). Ici, [array_keys](https://www.php.net/manual/fr/function.array-keys.php) et [in_array](https://www.php.net/manual/fr/function.in-array.php) vous seront utiles pour vérifier que le pays soumis est bien un pays prévu par le programme. Mieux, [array_key_exists](https://www.php.net/manual/fr/function.array-key-exists) vous permettra de combiner les deux opérations en une seule…

La structure de contrôle [foreach](https://www.php.net/manual/fr/control-structures.foreach.php) est la structure de contrôle la plus utilisée pour le parcours de tableau et il est *essentiel* que vous soyez confortable avec elle (attention, elle a deux formes selon que vous récupérez les clés ou pas) pour progresser en PHP.



[Vidéo de la correction](https://www.youtube.com/watch?v=qvkNSGLnG6c)