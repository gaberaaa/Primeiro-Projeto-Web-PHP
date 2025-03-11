# Serenatto - Sistema de Administração de Produtos

Este projeto foi desenvolvido como parte de um curso da **Alura** e tem como base o site real da Serenatto. A implementação do backend em **PHP** e a gestão do banco de dados **MySQL** (utilizando **MySQL Workbench** para modelagem e manipulação) foram realizadas por mim, enquanto os arquivos de **CSS, JS, IMG e .idea** foram fornecidos pelo curso.

## Tecnologias Utilizadas

- **PHP** (com orientação a objetos)
- **MySQL** (utilizando PDO para acesso ao banco de dados)
- **MySQL Workbench** (para modelagem e manipulação do banco de dados)
- **HTML, CSS e JavaScript** (para interface)
- **Bootstrap** (para estilização)
- **FPDF** (para geração de relatórios em PDF)

## Funcionalidades

- 📌 Cadastro, edição e exclusão de produtos
- 📌 Geração de relatórios em PDF
- 📌 Sistema seguro com uso de PDO para prevenção de SQL Injection

## Instalação e Configuração

1. Clone este repositório:
   ```sh
   git clone https://github.com/seu-usuario/serenatto-admin.git
   ```
2. Configure o banco de dados MySQL seguindo os passos descritos no arquivo **dadosBD.sql**:
   - Abra o **MySQL Workbench** ou outro gerenciador de banco de dados.
   - Execute os comandos do arquivo **dadosBD.sql** manualmente, seguindo a ordem descrita.
   - Isso garantirá que as tabelas sejam criadas corretamente e populadas com os dados iniciais.
   - Atualize as credenciais no arquivo `src/conexao-bd.php` com os dados do seu banco.

3. Inicie o servidor local (exemplo com PHP):
   ```sh
   php -S localhost:8000
   ```

4. Acesse no navegador:
   ```
   http://localhost:8000/
   ```

## Estrutura do Projeto
```
serenatto-admin/
├── src/
│   ├── conexao-bd.php
│   ├── Modelo/
│   │   ├── Produto.php
│   ├── Repositorio/
│   │   ├── ProdutoRepositorio.php
├── admin.php
├── cadastrar-produto.php
├── editar-produto.php
├── excluir-produto.php
├── gerador-pdf.php
├── index.php
├── dadosBD.sql
├── css/
├── js/
├── img/
```

## Melhorias Futuras

- 🔹 Implementação do padrão MVC para melhor organização do código
- 🔹 Validação aprimorada nos formulários
- 🔹 Implementação de um sistema de autenticação


