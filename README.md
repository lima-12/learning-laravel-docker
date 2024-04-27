<h1 align="center">
    aprendendo laravel utilizando docker
</h1>

<h4 align="center">
    :construction: Projeto em Construção    :construction:
</h4>

- Comecei a estudar laravel e senti a necessidade de aprender docker também, está servindo como uma revisão para os principais conceitos do laravel e juntamente aprender sobre o docker.
- Confesso que não está sendo tão fácil, mas pretendo cada vez mais mergulhar nesse ambiente e apriomorar meus conhecimentos.
- Créditos: https://youtu.be/oz9K3jtFUvI?si=w62QQYMeEBRre3xx
- Juntando os conhecimentos dos cursos da alura e desse curso no youtube, acredito que eu esteja mais capacitado pra desenvolver em um ambiente profisional, estou bem entusiasmado com essas tecnologias novas de fremeworks e containers.
- Além disso, serve de desafio, mesmo me baseando no curso do rapaz do youtuber, vou usar como base pra ir fazendo algumas coisas do meu jeito.

### Passo a passo
Clone Repositório (se atente na versão que está clonando, ir lá no primeiro commit)
```sh
git clone https://github.com/lima-12/learning-laravel-docker.git
```
```sh
cd learning-laravel-docker
```


Crie o Arquivo .env (É bom ter o entendimento do queesse arquivo faz)
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


Instale as dependências do projeto (esse comando só precisa executar uma vez no projeto)
```sh
composer install
```


Gere a key do projeto Laravel (esse comando só precisa executar uma vez no projeto)
```sh
php artisan key:generate
```


-> OBS: quando quero sair do projeto e voltar no outro dia eu executo esse comando para remover os containers:
```sh
docker-composer down
```
e quando eu volto para o projeto eu subo os containers e acesso o container app. (são os dois primeiros comandos)