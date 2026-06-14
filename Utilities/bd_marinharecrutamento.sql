-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 15-Jun-2026 às 01:41
-- Versão do servidor: 10.4.32-MariaDB
-- versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bd_marinharecrutamento`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `concursos`
--

CREATE TABLE `concursos` (
  `id` int(11) NOT NULL,
  `numero_concurso` varchar(100) NOT NULL,
  `titulo` text NOT NULL,
  `categoria` varchar(100) DEFAULT NULL,
  `tipo_contrato` varchar(100) DEFAULT NULL,
  `data_inicio` date DEFAULT NULL,
  `data_fim` date DEFAULT NULL,
  `data_incorporacao` date DEFAULT NULL,
  `diario_republica_url` varchar(255) DEFAULT NULL,
  `estado` enum('aberto','terminado','futuro') NOT NULL DEFAULT 'futuro',
  `data_criacao` datetime DEFAULT current_timestamp(),
  `descricao` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `concursos`
--

INSERT INTO `concursos` (`id`, `numero_concurso`, `titulo`, `categoria`, `tipo_contrato`, `data_inicio`, `data_fim`, `data_incorporacao`, `diario_republica_url`, `estado`, `data_criacao`, `descricao`) VALUES
(1, 'Concurso Nº 10 de 2026', 'Serviço Naval (SN)', 'Praças', 'Regime de Contrato (RC)', '2026-05-14', '2026-06-15', '2026-09-07', 'Utilities/Docs/avisoConcurso10_2026.pdf', 'aberto', '2026-06-10 19:55:22', 'Concurso de Admissão de Voluntários para Prestação de Serviço em Regime de Contrato (RC) ou Regime de Voluntariado (RV) na categoria de Praças para a classe de Serviço Naval (SN) 2026 - 3.ª edição'),
(2, 'Concurso Nº9 de 2026', 'TSN / TS / TN', 'Oficiais', 'Regime de Contrato (RC)', '2026-05-13', '2026-06-09', '2026-06-18', 'Utilities/Docs/avisoConcurso10_2026.pdf', 'terminado', '2026-06-10 21:47:01', 'Admissão ao Curso de Formação de Oficiais. ');

-- --------------------------------------------------------

--
-- Estrutura da tabela `destaques`
--

CREATE TABLE `destaques` (
  `id_destaques` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `descricao` text NOT NULL,
  `imagem_url` varchar(255) NOT NULL,
  `link_destino` varchar(255) DEFAULT NULL,
  `ativo` tinyint(1) DEFAULT 1,
  `data_criacao` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `destaques`
--

INSERT INTO `destaques` (`id_destaques`, `titulo`, `descricao`, `imagem_url`, `link_destino`, `ativo`, `data_criacao`) VALUES
(1, 'Bem-Vindo ao novo site!', 'Apresentamos-te a nova página de Recrutamento da Marinha. Mais intuitiva, mais informativa, mais moderna.', 'Utilities/Images/bemvindoDestaque.png', NULL, 1, '2026-06-10 18:24:44'),
(2, 'Concurso Aberto - Serviço Naval', 'Encontram-se abertas as candidaturas para o concurso de Praças - Serviço Naval', 'Utilities/Images/Praca_ServicoNaval.png', NULL, 1, '2026-06-10 18:27:49'),
(3, 'Edy', 'ola edy ola bike ola loni', 'Utilities/Images/destaque3.png', NULL, 1, '2026-06-10 20:47:54'),
(4, 'mads', 'ola mads thanks for the bobba!', 'Utilities/Images/ww.png', NULL, 1, '2026-06-10 22:06:46');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `concursos`
--
ALTER TABLE `concursos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `destaques`
--
ALTER TABLE `destaques`
  ADD PRIMARY KEY (`id_destaques`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `concursos`
--
ALTER TABLE `concursos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `destaques`
--
ALTER TABLE `destaques`
  MODIFY `id_destaques` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
