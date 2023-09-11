-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 12/09/2023 às 01:47
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `db_portifolio_vini`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `galeria_academica`
--

CREATE TABLE `galeria_academica` (
  `id` int(11) NOT NULL,
  `imagem_gal_acad` varchar(220) NOT NULL,
  `desc_academica` varchar(220) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modifield` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `galeria_pessoal`
--

CREATE TABLE `galeria_pessoal` (
  `id` int(11) NOT NULL,
  `imagem_gal_pessoal` varchar(220) NOT NULL,
  `desc_gal_pessoal` varchar(220) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modifield` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `galeria_profissional`
--

CREATE TABLE `galeria_profissional` (
  `id` int(11) NOT NULL,
  `titulo_gal_prof` varchar(220) DEFAULT NULL,
  `img_gal_prof_1` varchar(220) DEFAULT NULL,
  `desc_gal_prof_1` varchar(220) DEFAULT NULL,
  `img_gal_prof_2` varchar(220) DEFAULT NULL,
  `desc_gal_prof_2` varchar(220) DEFAULT NULL,
  `img_gal_prof_3` varchar(220) NOT NULL,
  `desc_gal_prof_3` varchar(220) NOT NULL,
  `img_gal_prof_4` varchar(220) NOT NULL,
  `desc_gal_prof_4` varchar(220) NOT NULL,
  `img_gal_prof_5` varchar(220) NOT NULL,
  `desc_gal_prof_5` varchar(220) NOT NULL,
  `img_gal_prof_6` varchar(220) NOT NULL,
  `desc_gal_prof_6` varchar(220) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `galeria_profissional`
--

INSERT INTO `galeria_profissional` (`id`, `titulo_gal_prof`, `img_gal_prof_1`, `desc_gal_prof_1`, `img_gal_prof_2`, `desc_gal_prof_2`, `img_gal_prof_3`, `desc_gal_prof_3`, `img_gal_prof_4`, `desc_gal_prof_4`, `img_gal_prof_5`, `desc_gal_prof_5`, `img_gal_prof_6`, `desc_gal_prof_6`, `created`, `modified`) VALUES
(1, 'Galeria Profissional', '1.jpg', 'galeria profissional imagem 1', '2.jpg', 'galeria profissional imagem 2', '3.jpg', 'galeria profissional imagem 3', '4.jpg', 'galeria profissional imagem 4', '5.jpg', 'galeria profissional imagem 5', '6.jpg', 'galeria profissional imagem 6', NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `homes_cabecalho`
--

CREATE TABLE `homes_cabecalho` (
  `id` int(11) NOT NULL,
  `titulo_pagina` varchar(220) NOT NULL,
  `img_favicon` varchar(40) DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `homes_cabecalho`
--

INSERT INTO `homes_cabecalho` (`id`, `titulo_pagina`, `img_favicon`, `modified`) VALUES
(1, 'Vini Queiroz ', 'favicon-32x32.png', '2023-09-06 20:30:21');

-- --------------------------------------------------------

--
-- Estrutura para tabela `homes_competencias`
--

CREATE TABLE `homes_competencias` (
  `id` int(11) NOT NULL,
  `titulo_competencia` varchar(220) NOT NULL,
  `desc_comp_1` varchar(220) NOT NULL,
  `desc_comp_2` varchar(220) NOT NULL,
  `desc_comp_3` varchar(220) NOT NULL,
  `desc_comp_4` varchar(220) DEFAULT NULL,
  `desc_comp_5` varchar(220) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `homes_competencias`
--

INSERT INTO `homes_competencias` (`id`, `titulo_competencia`, `desc_comp_1`, `desc_comp_2`, `desc_comp_3`, `desc_comp_4`, `desc_comp_5`, `created`, `modified`) VALUES
(1, 'Competências Pessoais', 'Trabalho em equipe', 'Perfeccionista', 'Criativo', 'Pontual', 'Esforçado', NULL, '2023-09-07 18:49:29');

-- --------------------------------------------------------

--
-- Estrutura para tabela `homes_contato`
--

CREATE TABLE `homes_contato` (
  `id` int(11) NOT NULL,
  `titulo_contato` varchar(220) NOT NULL,
  `subtitulo_contato` varchar(220) DEFAULT NULL,
  `email_contato` varchar(220) NOT NULL,
  `telefone_contato` varchar(220) NOT NULL,
  `observacao_contato` varchar(220) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `homes_contato`
--

INSERT INTO `homes_contato` (`id`, `titulo_contato`, `subtitulo_contato`, `email_contato`, `telefone_contato`, `observacao_contato`, `created`, `modified`) VALUES
(1, 'Contato', 'Fale comigo!', 'Escreva: viniqueiroz@gmail.com', '(11)99999-9999', 'Mais Trabalhos: Behance _vini', '2023-06-08 10:24:59', NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `homes_cursos`
--

CREATE TABLE `homes_cursos` (
  `id` int(11) NOT NULL,
  `titulo_curso` varchar(220) NOT NULL,
  `desc_curso_1` varchar(220) NOT NULL,
  `desc_curso_2` varchar(220) NOT NULL,
  `desc_curso_3` varchar(220) NOT NULL,
  `desc_curso_4` varchar(220) DEFAULT NULL,
  `desc_curso_5` varchar(220) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `homes_cursos`
--

INSERT INTO `homes_cursos` (`id`, `titulo_curso`, `desc_curso_1`, `desc_curso_2`, `desc_curso_3`, `desc_curso_4`, `desc_curso_5`, `created`, `modified`) VALUES
(1, 'Cursos Extras', 'Photoshop', 'Ilustrator', 'Indesigner', '', '', NULL, '2023-09-08 21:28:43');

-- --------------------------------------------------------

--
-- Estrutura para tabela `homes_formacao`
--

CREATE TABLE `homes_formacao` (
  `id` int(11) NOT NULL,
  `titulo_formacao` varchar(220) NOT NULL,
  `ano_1` varchar(220) NOT NULL,
  `curso_1` varchar(220) NOT NULL,
  `ano_2` varchar(220) NOT NULL,
  `curso_2` varchar(220) NOT NULL,
  `ano_3` varchar(220) DEFAULT NULL,
  `curso_3` varchar(220) DEFAULT NULL,
  `ano_4` varchar(220) DEFAULT NULL,
  `curso_4` varchar(220) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `homes_formacao`
--

INSERT INTO `homes_formacao` (`id`, `titulo_formacao`, `ano_1`, `curso_1`, `ano_2`, `curso_2`, `ano_3`, `curso_3`, `ano_4`, `curso_4`, `created`, `modified`) VALUES
(1, 'Formação Academica', '2020-2021', 'Técnico em Design Gráfico', '2022-2023', 'Tecnólogo em Design Gráfico', '', '', '', NULL, NULL, '2023-09-07 19:56:48');

-- --------------------------------------------------------

--
-- Estrutura para tabela `homes_sobre`
--

CREATE TABLE `homes_sobre` (
  `id` int(11) NOT NULL,
  `titulo_sobre` varchar(220) NOT NULL,
  `nome` varchar(220) NOT NULL,
  `descric_sobre` text NOT NULL,
  `imagem_sobre` varchar(220) DEFAULT NULL,
  `criado_em` varchar(20) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `homes_sobre`
--

INSERT INTO `homes_sobre` (`id`, `titulo_sobre`, `nome`, `descric_sobre`, `imagem_sobre`, `criado_em`, `created`, `modified`) VALUES
(1, 'SOBRE MIM', 'Vini Queiroz', 'Formado em Design Gráfico, pela Universidade Paulista, em São Paulo, trabalho como FREEE LANCE em designer gráfico, criação em artes diversas, e ilustração. Atuei em algumas empresas, e atuamente trabalho no setor de criação de uma determinada empresa de artigos esportivos.', 'sobre.png', 'SETEMBRO/2023', '2023-06-08 07:43:08', '2023-09-03 16:08:34');

-- --------------------------------------------------------

--
-- Estrutura para tabela `homes_sociais`
--

CREATE TABLE `homes_sociais` (
  `id` int(11) NOT NULL,
  `titulo_sociais` varchar(220) NOT NULL,
  `icone_sociais_1` varchar(220) NOT NULL,
  `link_sociais_1` varchar(220) NOT NULL,
  `icone_sociais_2` varchar(220) NOT NULL,
  `link_sociais_2` varchar(220) NOT NULL,
  `icone_sociais_3` varchar(220) NOT NULL,
  `link_sociais_3` varchar(220) NOT NULL,
  `icone_sociais_4` varchar(220) DEFAULT NULL,
  `link_sociais_4` varchar(220) DEFAULT NULL,
  `created` varchar(220) DEFAULT NULL,
  `modified` varchar(220) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `homes_sociais`
--

INSERT INTO `homes_sociais` (`id`, `titulo_sociais`, `icone_sociais_1`, `link_sociais_1`, `icone_sociais_2`, `link_sociais_2`, `icone_sociais_3`, `link_sociais_3`, `icone_sociais_4`, `link_sociais_4`, `created`, `modified`) VALUES
(1, 'Rede Sociais', 'fab fa-behance-square', 'behance.viniqueiroz', 'fab fa-instagram', 'instagram.viniqueiroz', 'fa fa-envelope', 'gumball454@gmail.com', 'fab fa-facebook', 'facebook.viniqueiroz', NULL, '2023-09-08 19:47:37');

-- --------------------------------------------------------

--
-- Estrutura para tabela `homes_sotwares`
--

CREATE TABLE `homes_sotwares` (
  `id` int(11) NOT NULL,
  `titulo_softwares` varchar(220) NOT NULL,
  `icone_soft_1` varchar(220) NOT NULL,
  `desc_soft_1` varchar(220) NOT NULL,
  `icone_soft_2` varchar(220) NOT NULL,
  `desc_soft_2` varchar(220) NOT NULL,
  `icone_soft_3` varchar(220) NOT NULL,
  `desc_soft_3` varchar(220) NOT NULL,
  `icone_soft_4` varchar(220) NOT NULL,
  `desc_soft_4` varchar(220) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `homes_sotwares`
--

INSERT INTO `homes_sotwares` (`id`, `titulo_softwares`, `icone_soft_1`, `desc_soft_1`, `icone_soft_2`, `desc_soft_2`, `icone_soft_3`, `desc_soft_3`, `icone_soft_4`, `desc_soft_4`, `created`, `modified`) VALUES
(1, 'Ferramentas', 'icon-ps.png', 'Adobe Photoshop', 'icon-ai.png', 'Adobe Ilustrator', 'icon-ae.png', 'Adobe After Effect', 'icon-id.png', 'Adobe in Design', NULL, '2023-09-07 14:52:29');

-- --------------------------------------------------------

--
-- Estrutura para tabela `homes_topos`
--

CREATE TABLE `homes_topos` (
  `id` int(11) NOT NULL,
  `titulo_topo` varchar(220) DEFAULT NULL,
  `frase` varchar(220) DEFAULT NULL,
  `autor_frase` varchar(220) DEFAULT NULL,
  `imagem_topo` varchar(220) DEFAULT NULL,
  `imagem_topo_sm` varchar(220) DEFAULT NULL,
  `imagem_topo_lt` varchar(220) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `homes_topos`
--

INSERT INTO `homes_topos` (`id`, `titulo_topo`, `frase`, `autor_frase`, `imagem_topo`, `imagem_topo_sm`, `imagem_topo_lt`, `created`, `modified`) VALUES
(1, 'VINICIUS PORTIFÓLIO', '\"Temos a arte para não morrer da verdade.\"', 'Friedrich Nietzsche', 'topo.png', 'capa-portifolio-sm.png', 'topo.png', '2023-06-07 19:25:21', '2023-09-06 20:33:36');

-- --------------------------------------------------------

--
-- Estrutura para tabela `msgs_contatos`
--

CREATE TABLE `msgs_contatos` (
  `id` int(11) NOT NULL,
  `nome` varchar(220) NOT NULL,
  `email` varchar(220) NOT NULL,
  `assunto` varchar(220) NOT NULL,
  `conteudo` text NOT NULL,
  `created` varchar(220) NOT NULL,
  `modified` varchar(220) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `msgs_contatos`
--

INSERT INTO `msgs_contatos` (`id`, `nome`, `email`, `assunto`, `conteudo`, `created`, `modified`) VALUES
(1, 'Jackson de Oliveira Queiroz', 'jackson.oqueiroz@gmail.com', 'teste', 'teste', '2023-08-07 18:54:47', NULL),
(2, 'Monteiro Lobato', 'elisangela.msq21@gmail.com', 'teste 2', 'teste 2', '2023-08-07 18:55:32', NULL),
(3, 'Gabriel Queiroz', 'gabriel@gmail.com', 'teste 3', 'teste 3', '2023-08-07 18:58:48', NULL),
(4, 'Novo Teste', 'novoteste@gmail.com', 'novo teste', 'novo teste', '2023-08-07 18:59:57', NULL),
(5, 'Teste Final', 'testeFinal@gmail.com', 'teste final', 'Teste final, onde foi feito todos os testes para o formulário de contato. Testando também a quantidade de caracteres no campo Conteudo para ver a quantidade de caracter cabe neste formulário. Este formulário ficou interessante para futuros sites e será feita um gerenciamento dos contatos criando uma página para esse gerenciamento.', '2023-08-07 19:03:32', NULL),
(6, 'Teste validando os campos', 'testevalidando@gmail.com', 'teste validando', 'Valindando os campos para não salvar campos em branco.', '2023-08-07 19:30:56', NULL),
(7, 'Mensagem de boas vindas', 'boasvindas@gmail.com', 'Boas vindas', 'Boas vindas testando outra mensagem.', '2023-08-07 20:15:47', NULL),
(8, 'Continuando os Testes', 'continuateste@gmail.com', 'Continua Teste', 'Continuando os testes.', '2023-08-07 20:16:57', NULL),
(9, 'Desenvolvedor', 'dev_infowebarts@gmail.com', 'testando 123', 'testando 123', '2023-08-09 18:02:53', NULL),
(10, 'Monteiro Lobato', 'elisangela.msq21@gmail.com', 'teste denovo', 'teste denovo', '2023-08-12 11:16:45', NULL),
(11, 'Jackson de Oliveira Queiroz', 'jackson.oqueiroz@gmail.com', 'TESTE', 'NOVO TESTE', '2023-09-06 20:41:20', NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(220) NOT NULL,
  `email` varchar(220) NOT NULL,
  `senha` varchar(220) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `created`, `modified`) VALUES
(1, 'Jackson Queiroz', 'jackson.oqueiroz@gmail.com', '$2y$10$.o/Qa9QJrIEIYX.nYbSVmOqw1cO.2M4XgDqz2tRlogQ9IZkTVy3vC', '2023-08-10 19:18:16', NULL),
(2, 'Administrador', 'adm@gmail.com', '$2y$10$5qGm7xRgHg8kQtYADfmZUe5COxd.eF/L4cSKlMpYp0Z87bb2bstDm', '2023-08-11 00:23:47', NULL);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `galeria_academica`
--
ALTER TABLE `galeria_academica`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `galeria_pessoal`
--
ALTER TABLE `galeria_pessoal`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `galeria_profissional`
--
ALTER TABLE `galeria_profissional`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `homes_cabecalho`
--
ALTER TABLE `homes_cabecalho`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `homes_competencias`
--
ALTER TABLE `homes_competencias`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `homes_contato`
--
ALTER TABLE `homes_contato`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `homes_cursos`
--
ALTER TABLE `homes_cursos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `homes_formacao`
--
ALTER TABLE `homes_formacao`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `homes_sobre`
--
ALTER TABLE `homes_sobre`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `homes_sociais`
--
ALTER TABLE `homes_sociais`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `homes_sotwares`
--
ALTER TABLE `homes_sotwares`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `homes_topos`
--
ALTER TABLE `homes_topos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `msgs_contatos`
--
ALTER TABLE `msgs_contatos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `galeria_academica`
--
ALTER TABLE `galeria_academica`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `galeria_pessoal`
--
ALTER TABLE `galeria_pessoal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `galeria_profissional`
--
ALTER TABLE `galeria_profissional`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `homes_cabecalho`
--
ALTER TABLE `homes_cabecalho`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `homes_competencias`
--
ALTER TABLE `homes_competencias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `homes_contato`
--
ALTER TABLE `homes_contato`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `homes_cursos`
--
ALTER TABLE `homes_cursos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `homes_formacao`
--
ALTER TABLE `homes_formacao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `homes_sobre`
--
ALTER TABLE `homes_sobre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `homes_sociais`
--
ALTER TABLE `homes_sociais`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `homes_sotwares`
--
ALTER TABLE `homes_sotwares`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `homes_topos`
--
ALTER TABLE `homes_topos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `msgs_contatos`
--
ALTER TABLE `msgs_contatos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
