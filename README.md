# GRC

Gouvernance Risque et Conformité / _Governance Risk & Compliance_

Je débute ce projet pour gérer la GRC du monde IT et des Systèmes d'Information. Toute aide est la bienvenue.

_I start this project besause i need an IT GRC tool. Any help would be welcome._

# CakePHP

CakePHP version 3.3 is used.

## Database configuration 

`config/app.php`

## Create user
``` 
CREATE USER 'grc'@'localhost' IDENTIFIED BY 'grc';
GRANT ALL PRIVILEGES ON * . * TO 'grc'@'localhost';
FLUSH PRIVILEGES;
```

## Import Database schema

`mysql -u grc -p grc < config/db.sql`

## How to start developement environnement ?

`bin/cake server`

## How to generate Scaffold Code ?

`bin/cake bake all [name]`
[See this](http://book.cakephp.org/3.0/en/bake/usage.html) 
