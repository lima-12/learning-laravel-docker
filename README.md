<h1 align="center">
    aprendendo laravel com docker
</h1>

<h4 align="center">
    :construction: Projeto em Construção    :construction:
</h4>

- Comecei a estudar laravel e senti a necessidade de parender docker também, está servindo como uma revisão para os principais conceitos do laravel e juntamente aprender sobre o docker.
- Confesso que não está sendo tão fácil, mas pretendo cada vez mais mergulhar nesse ambiente e apriomorar meus conhecimentos.
- Créditos: https://youtu.be/oz9K3jtFUvI?si=w62QQYMeEBRre3xx
- Juntando os conhecimentos dos cursos da alura e desse curso no youtube, acredito que eu esteja mais capacitado pra desenvolver em um ambiente profisional, estou bem entusiasmado com essas tecnologias novas de fremeworks e containers.

### Passo a passo
Clone Repositório
```sh
git clone https://github.com/lima-12/learning-laravel-docker.git
```
```sh
cd learning-laravel-docker
```


Crie o Arquivo .env
```sh
cp .env.example .env
```


Atualize as variáveis de ambiente do arquivo .env
```dosini
APP_NAME=Laravel
APP_URL=http://localhost:8989

DB_CONNECTION=mysql
DB_HOST=db
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=root

CACHE_DRIVER=redis
QUEUE_CONNECTION=redis
SESSION_DRIVER=redis

REDIS_HOST=redis
REDIS_PASSWORD=null
REDIS_PORT=6379
```


Suba os containers do projeto
```sh
docker-compose up -d
```


Acesse o container app
```sh
docker-compose exec app bash
```


Instale as dependências do projeto
```sh
composer install
```


Gere a key do projeto Laravel
```sh
php artisan key:generate
```


Acesse o projeto
[http://localhost:8989](http://localhost:8989)
