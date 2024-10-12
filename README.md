# To-Do List Application

## Descrição

Esta aplicação web simples permite aos usuários gerenciar suas tarefas de forma eficiente. Construída com PHP, PostgreSQL, jQuery e Docker, a aplicação oferece uma interface intuitiva para criar, editar, concluir e excluir tarefas.

## Arquitetura

- **Backend:** PHP.
- **Frontend:** HTML, CSS e jQuery para a interface do usuário.
- **Banco de dados:** PostgreSQL para armazenar as tarefas dos usuários.
- **Docker:** Para facilitar a configuração e o desenvolvimento local.

## Instalação e Execução

1. **Clone o repositório:**
   ```bash
   git clone [https://github.com/ManoeldeCastro/to-do-list-udv.git](https://github.com/ManoeldeCastro/to-do-list-udv.git)
   ```

2. **Inicie os contêineres Docker:**
   ```bash
   docker-compose up --build -d
   ```
3. **Acesse a aplicaçãor:**

   ```bash
   http://localhost:8080
   ```
4.Criar as tabelas no banco de dados: Caso seja necessário criar as tabelas no banco de dados PostgreSQL pela primeira vez, siga estes passos:
   Acesse o contêiner do PostgreSQL:
   ```bash
   docker exec -it postgres-db psql -U postgres -d to_do_list
   ```
   Crie as tabelas users e task executando o seguinte SQL:
   ```bash
   CREATE TABLE users (
    id SERIAL PRIMARY KEY,
    username VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
   );

   CREATE TABLE task (
    id SERIAL PRIMARY KEY,
    name VARCHAR(255),
    description TEXT,
    completed BOOLEAN DEFAULT false,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    finished_at TIMESTAMP
   );
```



   O servidor web estará rodando e conectado ao banco de dados PostgreSQL.

## Estrutura do Projeto

```bash
/actions         # Ações de manipulação do banco de dados (create, update, delete, etc.)
/database        # Arquivo de conexão ao banco de dados
/src             # Arquivos estáticos como CSS, JavaScript e imagens
Dockerfile       # Configuração do contêiner Docker para PHP e Apache
docker-compose.yml # Orquestração do ambiente Docker
README.md        # Instruções do projeto
index.php        # Página principal da aplicação
login.php        # Página de login
register.php     # Página de registro
```

Considerações
Banco de Dados: O PostgreSQL estará rodando no contêiner Docker com as seguintes credenciais:
Host: db
Porta: 5432
Banco de Dados: to_do_list
Usuário: postgres
Senha: 1234
Essas credenciais e a configuração do banco estão no arquivo docker-compose.yml e serão usadas automaticamente ao iniciar o contêiner.

## Contribuindo

Agradecemos sua contribuição! Para contribuir com este projeto, siga estes passos:

1. **Fork** o repositório.
2. **Crie uma nova branch** para sua feature.
3. **Faça suas alterações** e commit.
4. **Envie um pull request**.
