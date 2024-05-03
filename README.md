<h1 align="center">
    aprendendo laravel utilizando docker
</h1>

<h4 align="center">
    :construction: Projeto em Construção    :construction:
</h4>

- Créditos: https://youtu.be/oz9K3jtFUvI?si=w62QQYMeEBRre3xx
- Comecei a estudar laravel e senti a necessidade de aprender docker também, está servindo como uma revisão para os principais conceitos do laravel e juntamente aprender sobre o docker.
- Confesso que não está sendo tão fácil, mas pretendo cada vez mais mergulhar nesse ambiente e aprimorar meus conhecimentos.
- Juntando os conhecimentos dos cursos da alura e desse curso no youtube, acredito que eu esteja mais capacitado pra desenvolver em um ambiente profisional com laravel. Estou bem entusiasmado com essas tecnologias novas, esse fremeworks e containers.
- Além disso, serve de desafio, mesmo me baseando no curso do rapaz do youtuber, vou usar como base pra ir fazendo algumas coisas do meu jeito.
- Por fim, eu quero justamente fixar bem esses conceitos bases sobre o MVC, flashmessages, rotas, sessões, CRUD, tudo do mais básico eu quero ter total domínio e sei que sou totalmente capaz, para só então aprofundar em conhecimentos mais "robustos" como envio de email's e api's, até porque o conceito sobre essas funcionalidade eu já tenho e já executei com o "php legado" que vejo diáriamente, dito isso, irei tentar deixar o máximo de comentário possível no decorrer do código.

- No decorrer das aulas vou deixando comentários a respeito do meu aprendizado.
- Estou empolgado com essas novas tecnologias confesso, e estar revendo tá sendo motivador, pois estou me forçando a lembrar os comandos, os conceitos e buscar sempre a documentação.
- A melhor dica é fazer esses cursos sem pressa alguma, estou vendo uma quantidade limitada de aulas pra me forçar a assistir mais de uma vez, pesquisar na documentação e em sites externos pra entender exatamente o PORQUÊ de estar tomando determinada decisão.
- Uma observação bem importante é que nesse curso (do youtube) ele tem abordagens diferentes do curso da alura, o que é totalmente normal de sea contecer em ambientes profissionais, mais um ponto a ser compreendido, além ele trás diversos conceitos que ainda não tive contato, por isso meu estusiasmo. Estou curtindo bastante o framework, deu um gás giganstesto no meu estudo do PHP.
- Mais uma dica, mesmo fazendo essa parte inicial, do CRUD, eu tento assistir todos os vídeos do curso (pode ser no 2x) do inicio ao fim, antes de codar tudo. Eu consigo absorver melhor o conteúdo dessa forma e já sei o que posso alterar para deixar o projeto do meu jeito.
- Outra coisa muito importante é a paciência com esses novos conceitos, no primeiro momento a gente pensa logo que tá tudo muito complexo, ou que algo nunca vai servir, mas essa galera mais experiente (que ministra esses cursos) tem anos de experiência, então é bom ouvir com atenção o que eles tem a dizer, absorver não só conceitos da tecnologia, mas conceitos de mercado e afins. Assim, de pouco em pouco ir criando confiança, alterar alguma funcionalidades e ter personalidade pra prosseguir os projetos e implementar nova funcionalidade após a conclusão do curso.
- Eu queria deixar esses comentários em apenas um repositório, mas como já estou lotando esse, vai ficar separado mesmo, pelo menos um consegui distinguir o que aprendi em casa curso.

  
### Passo a passo
Clone Repositório (se atente na versão que está clonando, ir lá no primeiro commit)
```sh
git clone https://github.com/lima-12/learning-laravel-docker.git
```
```sh
cd learning-laravel-docker
```


Crie o Arquivo .env (É bom ter o entendimento do que esse arquivo faz)
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


1. Suba os containers do projeto
```sh
docker-compose up -d
```


2. Acesse o container app
```sh
docker-compose exec app bash
```


3. Instale as dependências do projeto (esse comando só precisa executar uma vez no projeto)
```sh
composer install
```


4. Gere a key do projeto Laravel (esse comando só precisa executar uma vez no projeto)
```sh
php artisan key:generate
```


-> OBS: quando quero sair do projeto e voltar no outro dia eu executo esse comando para remover os containers:
```sh
docker-composer down
```
e quando eu volto para o projeto eu subo os containers e acesso o container app. (são os dois primeiros comandos)
