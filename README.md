# Projet Symfony 5.2 sur Docker

Le projet Symfony 5.2 roule sur PHP7.3, MySQL 8.0 et PhpMyAdmin

## Requirements

Docker

## Installation
Aller dans votre répertoire de travail

```bash
git clone https://github.com/democvidev/Symfony5.2_PHP7.3_Basic.git

cd Symfony5.2_PHP7.3_Basic/

docker-compose up

docker container ls 

docker exec -ti php73 bash

cd project/     (dans le conteneur Docker)

composer update

php bin/console doctrine:database:create

php bin/console doctrine:migrations:migrate

```




## Usage

Page d'accueil du projet http://127.0.0.1:8000/  

Page d'accueil phpmyadmin http://127.0.0.1:8080   (user:root , psw:root)

## Contributing


## License
[MIT](https://choosealicense.com/licenses/mit/)