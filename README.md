REQUISITOS PARA INSTALAÇÃO

- servidor mysql


INSTRUÇÕES PARA INSTALAÇAO

- no banco de dados crie um db: 'crud'
- abra o temminal no ditetorio raiz
- 'composer update'
- renomear o '.env.example' para '.env'
- se necessario alterar usuario e senha para conexão do db
- alterar DB_DATABASE para 'crud'
- 'php artisan migrate'
- 'php artisan serve'
