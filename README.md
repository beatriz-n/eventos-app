# Gerenciador de Eventos

![License](https://img.shields.io/badge/license-MIT-blue.svg)

## Sobre o Projeto

O **Gerenciador de Eventos** é um sistema desenvolvido para gerenciar eventos, incluindo a criação, edição e visualização de eventos. Este projeto foi criado como parte do aprendizado de Laravel e visa proporcionar uma experiência prática com esse framework.
Com ajuda dos videos do **Matheus Battisti** [GitHub](https://github.com/matheusbattisti)

## Tecnologias Usadas

- **Laravel**: Framework PHP para desenvolvimento web.
- **Laravel CLI**: Ferramenta de linha de comando para gerenciamento de projetos Laravel.
- **Jetstream**: Biblioteca para autenticação e gerenciamento de usuários no Laravel.
- **MySQL**: Banco de dados relacional.
- **Blade**: Template engine do Laravel para a criação de views.

## Colaboradores

- **Beatriz Néspoli**  
  [GitHub](https://github.com/beatriz-n)

## Recursos

- **Cadastro de Eventos**: Adicione novos eventos com detalhes como nome, data e descrição.
- **Listagem de Eventos**: Visualize todos os eventos cadastrados em uma lista.
- **Edição e Exclusão**: Edite ou exclua eventos existentes.
- **Autenticação**: Gerenciado pelo Jetstream para login e registro de usuários.

## Instruções de Instalação

1. Clone o repositório:
    ```bash
    git clone https://github.com/beatriz-n/eventos-app.git
    ```

2. Navegue até o diretório do projeto:
    ```bash
    cd eventos-app
    ```

3. Instale as dependências do Laravel:
    ```bash
    composer install
    ```

4. Configure o arquivo `.env` com as informações do banco de dados e outras configurações.

5. Execute as migrações para criar as tabelas no banco de dados:
    ```bash
    php artisan migrate
    ```

6. Instale o Jetstream e execute os comandos necessários para configurar a autenticação:
    ```bash
    composer require laravel/jetstream
    php artisan jetstream:install livewire
    npm install && npm run dev
    ```

7. Inicie o servidor local do Laravel:
    ```bash
    php artisan serve
    ```

8. Acesse o sistema localmente através do navegador, utilizando o endereço:
    ```bash
    http://localhost:8000
    ```

## Recursos Adicionais

Este projeto foi desenvolvido seguindo a playlist do YouTube de Matheus Battisti:
[Playlist de Aprendizado Laravel](https://youtube.com/playlist?list=PLnDvRpP8BnewYKI1n2chQrrR4EYiJKbUG&si=ZrqjWytYXLDT1nnH)

## Licença

Este projeto está licenciado sob a licença MIT. Veja o arquivo [LICENSE](LICENSE) para mais detalhes.
