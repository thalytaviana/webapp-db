# 🚀 Aplicação Web Integrada ao Amazon RDS (AWS)

Este repositório contém o código desenvolvido seguindo o tutorial oficial da AWS para criar uma aplicação web simples (PHP) integrada a um banco de dados MySQL utilizando Amazon EC2 e Amazon RDS.

## 📂 Conteúdo do Repositório

- 📌 `dbinfo.inc`: Arquivo contendo as informações de conexão ao banco de dados Amazon RDS.
- 🌐 `index.php`: Página de teste da conexão com o banco de dados.
- 📋 `produtos.php`: Página adicional criada para realizar as operações de cadastro e listagem dos produtos.
- 🗄️ `produtos.sql`: Código para a criação de tabelas do produtos no banco de dados local. (Dbeaver)

## 🛠️ Estrutura do Banco de Dados

Foi criada uma tabela adicional chamada `produtos` com 4 campos e 3 tipos de dados diferentes:

| Campo        | Tipo de dado   | Descrição                              |
|--------------|----------------|----------------------------------------|
| `id`         | `INT`          |  ID único do produto (auto-increment). |
| `nome`       | `VARCHAR(100)` |  Nome do produto.                     |
| `preco`      | `DECIMAL(10,2)`|  Preço do produto.                    |
| `quantidade` | `INT`          |  Quantidade disponível em estoque.     |
| `data_criacao` | `TIMESTAMP`  |  Data de criação do registro.          |

## ☁️ Recursos AWS utilizados

- 🖥️ **EC2:** Hospedagem da aplicação web em PHP com servidor Apache.
- 🗄️ **RDS (MySQL):** Armazenamento e gerenciamento da base de dados.

## 🎬 Demonstração em Vídeo

Acesse o vídeo demonstrativo [aqui](https://www.youtube.com/watch?v=EnBfg3UGIOY).

O vídeo mostra:
- ✅ Instância EC2 e banco RDS funcionando no console AWS.
- ✅ Demonstração das páginas web desenvolvidas (conexão, criação e listagem).
- ✅ Explicação breve sobre os serviços AWS utilizados.

## 🚧 Como executar localmente

Clone o repositório, edite o arquivo `dbinfo.inc` com suas próprias credenciais AWS e faça deploy em sua própria instância EC2 conectada a um banco RDS.