# 🍪🔐 Cookies e Sessions no PHP

---

## 👥 Informações do Trabalho

| Item        | Detalhe                          |
|-------------|----------------------------------|
| Turma       | 2C1                             |
| Alunos      | Enzo Agostini e Enzo Rafael     |
| Disciplina  | Programação Web                 |
| Data        | 30/03/2026                      |

---

## 📘 Introdução

Em aplicações web, cada requisição HTTP é independente, ou seja, o servidor não mantém automaticamente as informações entre diferentes acessos. Para resolver esse problema, utilizamos cookies e sessions, que permitem armazenar dados e manter o estado do usuário entre páginas.

Esses mecanismos são fundamentais para funcionalidades como login, carrinho de compras e personalização do sistema.

---

# 👤 Respostas

---

## Exercício 1

Cookies e sessions são mecanismos utilizados para manter informações entre requisições, porém funcionam de formas diferentes. Os cookies são armazenados no navegador do usuário e enviados automaticamente ao servidor a cada requisição. Por estarem no lado do cliente, podem ser acessados, modificados ou excluídos, o que os torna menos seguros. Já as sessions armazenam os dados no servidor, enviando apenas um identificador ao navegador, o que aumenta a segurança. Os cookies são mais indicados para armazenar preferências simples, enquanto as sessions são mais adequadas para dados sensíveis, como autenticação de usuários.

---

##  Exercício 2

Em um sistema de loja virtual, cookies e sessions podem ser utilizados de forma complementar. Para manter o usuário logado, o ideal é utilizar sessions, pois os dados ficam armazenados no servidor, garantindo maior segurança. Para armazenar itens do carrinho de compras temporariamente, também é recomendado o uso de sessions, já que as informações podem ser alteradas dinamicamente e precisam de proteção contra manipulação. Já os cookies podem ser utilizados para armazenar preferências do usuário, como idioma, tema ou produtos visualizados, pois permanecem salvos no navegador mesmo após o usuário sair do site.

---

