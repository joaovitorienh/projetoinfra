 🏗️ Projeto Dockerizado com MySQL – Gerenciamento de Tênis

Este projeto configura um ambiente Docker com um banco de dados MySQL, inicializado com uma tabela de tênis contendo os campos `id`, `nome` e `preco`. Ele é ideal como base para aplicações web ou APIs que necessitem gerenciar produtos.

## 📁 Estrutura do Projeto

├── Dockerfile
├── docker-compose.yml
└── init.sql

markdown
Copiar
Editar

- **Dockerfile**: Define o ambiente base da aplicação.
- **docker-compose.yml**: Orquestra containers como o do MySQL.
- **init.sql**: Script de inicialização que cria a tabela `tenis`.

## 🚀 Como rodar o projeto

### Pré-requisitos

- **Docker**: Verifique se o Docker está instalado com:

```bash
docker --version
Se não estiver instalado, baixe e instale em docker.com/get-started

Docker Compose: Verifique com:

bash
Copiar
Editar
docker-compose --version
Algumas versões do Docker já incluem o Compose. Caso não tenha, instale conforme docs.docker.com/compose/install/

Passo 1 – Clonar o repositório
No terminal, execute:

bash
Copiar
Editar
git clone https://github.com/seu-usuario/seu-repo.git
cd seu-repo
(Substitua o link pelo endereço do seu repositório)

Passo 2 – Iniciar os containers Docker
Para subir os serviços definidos no docker-compose.yml execute:

bash
Copiar
Editar
docker-compose up -d
A flag -d roda os containers em segundo plano (modo “detached”).

Passo 3 – Verificar se os containers estão rodando
Use:

bash
Copiar
Editar
docker ps
Deve aparecer um container para o MySQL rodando.

Passo 4 – Conectar ao banco MySQL
Você pode usar uma ferramenta gráfica (MySQL Workbench, DBeaver, TablePlus) ou terminal.

Via terminal:
Descubra o nome do container:

bash
Copiar
Editar
docker ps
Conecte-se ao MySQL no container (substitua nome_do_container):

bash
Copiar
Editar
docker exec -it nome_do_container mysql -u root -p
Digite a senha quando for solicitada: root

Passo 5 – Verificar a tabela criada
Dentro do MySQL, rode:

sql
Copiar
Editar
USE meubanco;
SHOW TABLES;
SELECT * FROM tenis;
Deve listar a tabela tenis criada a partir do script init.sql.
