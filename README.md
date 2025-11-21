\# 🌵 EGGIK Cactoslentas



Projeto de e-commerce desenvolvido para a disciplina de Desenvolvimento Web, com foco em suculentas e cactos. O sistema permite exibição de produtos, navegação por páginas e simulação de carrinho de compras.



---



\## 📁 Estrutura do Projeto



EGGIK/

├── README.md                 # Documentação principal do projeto

├── controller/               # Páginas principais do site

│   ├── index.php

│   ├── produtos.php

│   ├── carrinho.php

│   └── faleConosco.php

├── css/                      # Estilos personalizados do site

│   └── ecommerce.css

├── model/                    # Conexão e consultas ao banco de dados

│   ├── conexaoBD.php

│   └── produtoModel.php

├── scriptBancoDados/         # Script de criação e inserção inicial no banco de dados

│   └── index.php

└── view/                     # Componentes visuais reutilizáveis

&nbsp;   ├── destaqueView.php

&nbsp;   ├── footer.php

&nbsp;   ├── header.php

&nbsp;   ├── navegacao.php

&nbsp;   ├── produtoView.php

&nbsp;   └── textoLateral.php

---



\## 🚀 Como executar o projeto



1\. Instale o \[XAMPP](https://www.apachefriends.org/index.html)

2\. Certifique-se de que o Apache e o MySQL estão ativos

3\. Coloque a pasta `EGGIK` dentro do diretório `htdocs`

4\. Acesse no navegador:http://localhost/EGGIK/scriptBancoDados/

5\. O script criará o banco de dados e redirecionará para a página principal



---



\## 🧠 Funcionalidades



\- Exibição de produtos em destaque

\- Layout responsivo com Flexbox

\- Formulário de contato estilizado

\- Simulação de carrinho de compras

\- Mapa de localização via Google Maps

\- Organização modular com arquitetura MVC



---



\## 🛠️ Tecnologias utilizadas



\- HTML5

\- CSS3

\- Javascript

\- PHP (com mysqli)

\- MySQL

\- Google Fonts (tipografia)

\- Google Maps (localização)

\- Microsoft Copilot (assistente de desenvolvimento e documentação)



---



\## 📌 Observações



\- A porta do MySQL utilizada é `3307`, diferente da padrão `3306`

\- O banco de dados é criado automaticamente na primeira execução do script

\- Os dados iniciais são inseridos via script em `scriptBancoDados/index.php`



---



\## 👨‍💻 Desenvolvedor



\- George Gonçalves Miranda — georgeggmiranda@gmail.com



---



\## 📄 Licença



Este projeto é de uso acadêmico e não possui licença comercial. Uso livre para fins educacionais.

