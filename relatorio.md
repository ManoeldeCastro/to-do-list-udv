# Relatório de Desenvolvimento do Projeto To-Do List Application

## Visão Geral do Projeto

O **To-Do List Application** é uma aplicação web simples que permite aos usuários gerenciar suas tarefas, fornecendo funcionalidades como criar, editar, concluir e excluir tarefas. A aplicação foi construída com foco em uma interface intuitiva e funcional, utilizando tecnologias como PHP no back-end, jQuery no front-end, PostgreSQL para o banco de dados, e Docker para a configuração do ambiente de desenvolvimento.

O projeto foi dividido em sprints curtos, com foco em funcionalidades chave como o sistema de autenticação, a filtragem de tarefas e a organização eficiente do fluxo de trabalho através de contêineres Docker.

## Organização das Tarefas no Backlog e Sprint

### Backlog e Sprint

As tarefas foram organizadas de maneira a garantir o desenvolvimento ágil da aplicação, com foco em entregas iterativas e constantes.

### Sprint 1 (11 a 12 de Outubro, 2024)

#### Tarefas Concluídas:
- **Estrutura básica da página inicial.** (11 de outubro, 2024)
  - Início da construção da interface, com uma página simples de entrada.

- **Configuração inicial de jQuery e estilos CSS.** (11 de outubro, 2024)
  - Adição de interatividade à página, com o uso de jQuery para manipulação dinâmica dos elementos DOM.

- **Implementação da lógica de criação e edição de tarefas.** (11 de outubro, 2024)
  - Introdução da funcionalidade CRUD para tarefas, permitindo aos usuários criar e editar suas tarefas.

- **Teste inicial de jQuery no projeto.** (11 de outubro, 2024)
  - Verificação e teste da interação entre front-end e back-end usando jQuery e AJAX.

- **Implementação do CRUD no back-end e lógica de requisições AJAX.** (12 de outubro, 2024)
  - Finalização da comunicação assíncrona entre front-end e back-end, utilizando requisições AJAX.

- **Implementação de login e registro no front-end e back-end.** (12 de outubro, 2024)
  - Criação de sistema de autenticação de usuários, tanto no front-end quanto no back-end, permitindo login e registro.

- **Configuração do Docker e Docker Compose. Ajustes de layout.** (12 de outubro, 2024)
  - Configuração completa do ambiente de desenvolvimento utilizando Docker, possibilitando uma experiência de desenvolvimento mais ágil.

- **Filtro de tarefas concluídas e não concluídas.** (12 de outubro, 2024)
  - Adição de uma funcionalidade que permite ao usuário filtrar tarefas com base no status de conclusão.

- **Atualização do README.md com instruções detalhadas.** (12 de outubro, 2024)
  - Inclusão de um README detalhado para que outros desenvolvedores possam entender o projeto e configurá-lo facilmente.

#### Tarefas em Progresso:
- **Melhoria na estilização do checkbox.**
  - O objetivo é melhorar a aparência visual da interface, com uma abordagem mais moderna e interativa para os componentes de UI.

- **Aprimoramento da responsividade da aplicação.**
  - Garantir que o layout da aplicação se ajuste corretamente a diferentes tamanhos de tela e dispositivos móveis.

#### Tarefas Futuras:
- **Notificações de lembrete de tarefas.**
  - Sistema que notifica os usuários sobre suas tarefas por meio de lembretes.

- **Sistema de categorias.**
  - Funcionalidade que permitirá aos usuários organizar suas tarefas em diferentes categorias.

- **Exportar tarefas.**
  - Adicionar a opção de exportar as tarefas em formatos como CSV ou PDF.

- **Melhoria no layout de login e registro.**
  - Ajustes no visual das páginas de autenticação, visando melhorar a usabilidade e a experiência do usuário.

## Principais Desafios Encontrados

O principal desafio enfrentado durante o desenvolvimento do projeto foi a **integração com o Docker**. Como era a primeira vez lidando profundamente com a configuração de ambientes Docker para PHP e PostgreSQL, houve uma curva de aprendizagem inicial para compreender o funcionamento dos contêineres, volumes e redes.

Contudo, esse desafio foi visto como uma **oportunidade de aprendizagem**, permitindo entender melhor o ciclo de vida dos contêineres e como otimizar o ambiente de desenvolvimento. A configuração com Docker não apenas trouxe mais agilidade para o desenvolvimento local, mas também facilitou a consistência entre diferentes ambientes de trabalho.

## Processo de Desenvolvimento e Divisão de Tempo

O desenvolvimento foi organizado em um processo iterativo, com foco em **sprints curtos**, cada um com entregas funcionais e incrementais. Abaixo está uma breve visão de como o tempo foi dividido entre as principais tarefas:

- **Dia 1 (11 de outubro, 2024)**:
  - Estruturação da aplicação.
  - Configuração de front-end com HTML, CSS e jQuery.
  - Implementação inicial do CRUD no back-end e conectividade com o banco de dados.

- **Dia 2 (12 de outubro, 2024)**:
  - Foco na autenticação de usuários (login e registro).
  - Configuração do Docker e Docker Compose para criar um ambiente de desenvolvimento integrado.
  - Implementação da filtragem de tarefas por status (concluídas ou não).
  - Ajustes no layout e estilo da aplicação.

Esse processo de desenvolvimento ágil permitiu o progresso contínuo, ao mesmo tempo em que facilitou a adaptação rápida às necessidades do projeto, como a implementação do filtro de tarefas e ajustes no design.

---

Com esse ritmo de trabalho, foi possível entregar um **produto funcional**, com suporte a múltiplas funcionalidades e preparado para expansão futura. O uso de Docker, mesmo sendo um desafio inicial, foi um marco importante que otimizou o fluxo de trabalho.
