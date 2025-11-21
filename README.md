\# 🌵 EGGIK Cactoslentas



Projeto de e-commerce desenvolvido para a disciplina de Desenvolvimento Web, com foco em suculentas e cactos. O sistema permite exibição de produtos, navegação por páginas e simulação de carrinho de compras.



---


<<<<<<< HEAD
=======
<h2 align="left">2ª entrega - Inclusão de CSS e Javascript no E-commerce</h2>

###

<p align="left">Dando continuidade ao site construído anteriormente na primeira parte efetue as seguintes modificações:<br><br>Adicionar estilo ao site utilizando CSS, os seguintes itens devem ser considerados e apresentados:<br>Definir os principais estilos de sua página em um arquivo externo chamado “ecommerce.css”;<br>A pagina inicial deve ser organizada utilizando as configurações CSS para layout de Website conforme este site: https://www.w3schools.com/css/css_website_layout.asp.<br><br>OBSERVAÇÃO: O site de e-commerce deve utilizar as disposições visuais deste site contudo deve manter o padrão visual (cores e imagens) da primeira entrega. Utilizem DIV para essas configurações.<br><br>A noticia em destaque do site deve utilizar estilo por ID com o seguinte nome: #noticiadestaque { propriedades: valores }<br><br>Utilize a característica de flexbox do CSS para a página de listagem de produtos. https://www.w3schools.com/css/css3_flexbox.asp<br><br>Inserir tratamento nos campos do formulário HTML “fale conosco” utilizando Javascript, de forma que ao clicar no botão de envio é verificado se os campos estão preenchidos pelo usuário;</p>

###

<h3 align="center">Tecnologias utilizadas</h3>
>>>>>>> 1273596b4032aab70ffccb9fc876e80926cebd0b

\## 📁 Estrutura do Projeto

<<<<<<< HEAD
=======
<div align="left">
  <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/vscode/vscode-original-wordmark.svg" height="40" alt="vscode logo"  />
  <img width="12" />
  <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original-wordmark.svg" height="40" alt="html5 logo"  />
  <img width="12" />
  <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/css3/css3-original-wordmark.svg" height="40" alt="css logo"  />
  <img width="12" />
  <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg" height="40" alt="javascript logo"  />
</div>
>>>>>>> 1273596b4032aab70ffccb9fc876e80926cebd0b


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

