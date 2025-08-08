# ProbEM Theme - Tema Customizado para o Instituto ProbEM


Este repositório contém o código-fonte de um tema personalizado para WordPress, desenvolvido para o Instituto ProbEM, uma ONG de Curitiba voltada para a Esclerose Múltipla. O tema foi projetado para ser moderno, responsivo e focado na experiência do usuário e na acessibilidade.## Estrutura do Projeto


O tema segue a estrutura padrão de um tema WordPress.

probem-theme/

├── assets/                  # Arquivos estáticos (CSS, JS, Imagens)

│   ├── css/

│   │   └── style.css        # Estilos principais do tema

│   ├── js/

│   │   └── main.js          # Scripts JavaScript

│   └── images/              # Imagens do projeto

├── template-parts/          # Blocos de código reutilizáveis (seções da Home Page)

├── functions.php            # Funções de configuração do tema

├── header.php               # Cabeçalho do site

├── footer.php               # Rodapé do site

├── index.php                # Template para a lista de posts do blog

├── front-page.php           # Template da página inicial

├── page.php                 # Template para páginas estáticas

├── single.php               # Template para posts individuais

└── style.css                # Cabeçalho do tema


## Como Instalar e Configurar o Tema


1.  **Clone o Repositório:**

    ```bash

    git clone [https://github.com/seu-usuario/seu-repositorio.git](https://github.com/seu-usuario/seu-repositorio.git)

    ```

2.  **Compactar o Tema:**

    * Navegue até o diretório do projeto e compacte a pasta `probem-theme`.

    * No terminal, você pode usar: `zip -r probem-theme.zip probem-theme`

3.  **Instalar no WordPress:**

    * No painel do WordPress, vá em **Aparência > Temas > Adicionar novo**.

    * Clique em "Enviar tema", selecione o arquivo `probem-theme.zip` e clique em "Instalar agora".

4.  **Ativar e Configurar:**

    * Após a instalação, ative o tema.

    * Siga as instruções para criar as páginas (`Página Inicial`, `Blog`, `Quem Somos?`) e configurar a leitura do site no painel do WordPress.


---


### **4. Instruções para o Git e GitHub (VS Code)**


1.  **Abra o Terminal Integrado no VS Code:**

    * Pressione `Ctrl + '` (crase) ou vá em `Terminal > New Terminal`.


2.  **Inicialize o Repositório Local:**

    * Navegue para a pasta `probem-theme/`.

    * **Comando:** `git init`


3.  **Adicione os Arquivos:**

    * **Comando:** `git add .`


4.  **Faça o Primeiro Commit:**

    * **Comando:** `git commit -m "Initial commit: Estrutura base do tema ProbEM"`


5.  **Crie o Repositório no GitHub:**

    * Vá ao seu perfil no GitHub e crie um novo repositório vazio (sem `README.md`, `.gitignore`, etc.).

    * Copie a URL do repositório.


6.  **Conecte o Repositório Local ao GitHub:**

    * **Comando:** `git remote add origin SUA_URL_DO_REPOSITORIO`

    * Substitua `SUA_URL_DO_REPOSITORIO` pela URL que você copiou do GitHub.


7.  **Envie os Arquivos para o GitHub:**

    * **Comando:** `git push -u origin master` (ou `main`, dependendo do seu repositório).
