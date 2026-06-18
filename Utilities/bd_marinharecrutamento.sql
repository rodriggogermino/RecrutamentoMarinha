-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 18-Jun-2026 às 17:48
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
(2, 'Concurso Nº9 de 2026', 'TSN / TS / TN', 'Oficiais', 'Regime de Contrato (RC)', '2026-05-13', '2026-06-09', '2026-06-18', 'Utilities/Docs/avisoConcurso10_2026.pdf', 'terminado', '2026-06-10 21:47:01', 'Admissão ao Curso de Formação de Oficiais. '),
(3, 'Concurso nº 11 de 2026', 'Concurso teste', 'Praças', 'Regime de Contrato (RC)', '2026-06-17', '2026-06-27', '2026-06-30', 'Utilities/Docs/avisoConcurso10_2026.pdf', 'futuro', '2026-06-15 16:49:50', '');

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
(3, 'Teste', 'Teste', 'Utilities/Images/admissao.png', NULL, 1, '2026-06-15 16:45:26');

-- --------------------------------------------------------

--
-- Estrutura da tabela `testes_perguntas`
--

CREATE TABLE `testes_perguntas` (
  `id` int(11) NOT NULL,
  `pergunta` text NOT NULL,
  `imagem_url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `testes_perguntas`
--

INSERT INTO `testes_perguntas` (`id`, `pergunta`, `imagem_url`) VALUES
(1, 'Qual das seguintes palavras inclui o significado de todas as outras?', NULL),
(2, 'Uma Pintura pertence(u) sempre a ...', NULL),
(3, 'A palavra \"DE\" combina com apenas quatro das palavras para criar uma palavra mais longa. Qual a única palavra que não permite isso?', NULL),
(4, 'A palavra \"A\" combina com apenas quatro das palavras para criar uma palavra mais longa. Qual a única palavra que não permite isso?', NULL),
(5, 'O porco é um animal...', NULL),
(6, 'O dia do ano com maior período de luz solar é consequência de...', NULL),
(7, 'Complete a sequência: 15, 23, 31, 39, ?', NULL),
(8, 'Complete a sequência: 4, 10, 6, 12, ?', NULL),
(9, 'Complete a sequência: 21, 5, 20, 4, ?', NULL),
(10, 'Complete a sequência: 8, 9, 11, 14, ?', NULL),
(11, 'Complete a sequência: 50, 25, 12.5, 6.25, ?', NULL),
(12, 'Um motociclo faz 360Km em 3 horas, quantos km percorre em média por hora?', NULL),
(13, 'Um operário trabalha 8 horas por dia. Que percentagem do dia (24 horas) representa isso?', NULL),
(14, '67 X 9 =', NULL),
(15, '7% de 5000 euros é:', NULL),
(16, 'Neste sistema de engrenagem, qual a roda que irá girar o maior número de vezes? (se forem todas iguais, assinale D)', 'Utilities/Images/Testes_Psicologicos/teste_q16.png'),
(17, 'Qual o cabo que irá tornar mais fácil puxar a embarcação? (se forem todas iguais, assinale D)', 'Utilities/Images/Testes_Psicologicos/teste_q17.png'),
(18, 'Se os eixos girarem todos no mesmo número de rotações por minuto, qual é que viaja mais rápida? (se forem todas iguais, assinale D)', 'Utilities/Images/Testes_Psicologicos/teste_q18.png'),
(19, 'Qual o projétil que leva mais tempo para sair do cano da arma para atingir o mar? (se forem todas iguais, assinale D)', 'Utilities/Images/Testes_Psicologicos/teste_q19.png'),
(20, 'Pressionando a alavanca 1 no sentido da seta, que sentido tomará a alavanca 2? (se forem todas iguais, assinale D)', 'Utilities/Images/Testes_Psicologicos/teste_q20.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `testes_respostas`
--

CREATE TABLE `testes_respostas` (
  `id` int(11) NOT NULL,
  `id_pergunta` int(11) NOT NULL,
  `resposta` text NOT NULL,
  `correta` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `testes_respostas`
--

INSERT INTO `testes_respostas` (`id`, `id_pergunta`, `resposta`, `correta`) VALUES
(1, 1, 'Carro', 0),
(2, 1, 'Veículo', 1),
(3, 1, 'Bicicleta', 0),
(4, 1, 'Motociclo', 0),
(5, 1, 'Autocarro', 0),
(6, 2, 'Museu', 0),
(7, 2, 'Moldura', 0),
(8, 2, 'Galeria', 0),
(9, 2, 'Pintor', 1),
(10, 2, 'Parede', 0),
(11, 3, 'Repente', 0),
(12, 3, 'Vagar', 0),
(13, 3, 'Mais', 0),
(14, 3, 'Libertar', 1),
(15, 3, 'Corrente', 0),
(16, 4, 'Amar', 0),
(17, 4, 'Natação', 1),
(18, 4, 'Traz', 0),
(19, 4, 'Nexo', 0),
(20, 4, 'Bater', 0),
(21, 5, 'Omnívoro', 1),
(22, 5, 'Necrófago', 0),
(23, 5, 'Herbívoro', 0),
(24, 5, 'Carnívoro', 0),
(25, 5, 'Vegetariano', 0),
(26, 6, 'Órbita Solar', 0),
(27, 6, 'Solstício', 1),
(28, 6, 'Rotação da Terra', 0),
(29, 6, 'Carnívoro', 0),
(30, 6, 'Vegetariano', 0),
(31, 7, '47', 1),
(32, 7, '46', 0),
(33, 7, '45', 0),
(34, 7, '44', 0),
(35, 8, '8', 1),
(36, 8, '7', 0),
(37, 8, '10', 0),
(38, 8, '6', 0),
(39, 9, '19', 1),
(40, 9, '18', 0),
(41, 9, '5', 0),
(42, 9, '3', 0),
(43, 10, '16', 0),
(44, 10, '17', 0),
(45, 10, '18', 1),
(46, 10, '12', 0),
(47, 11, '3.125', 1),
(48, 11, '2.5', 0),
(49, 11, '4', 0),
(50, 11, '1.25', 0),
(51, 12, '100', 0),
(52, 12, '80', 0),
(53, 12, '120', 1),
(54, 12, '110', 0),
(55, 13, '20%', 0),
(56, 13, '25%', 0),
(57, 13, '30%', 0),
(58, 13, '33%', 1),
(59, 14, '600', 0),
(60, 14, '603', 1),
(61, 14, '663', 0),
(62, 14, '650', 0),
(63, 15, '700 euros', 0),
(64, 15, '35 000 cêntimos', 0),
(65, 15, '3 500 cêntimos', 0),
(66, 15, '350 euros', 1),
(67, 16, 'A', 0),
(68, 16, 'B', 1),
(69, 16, 'C', 0),
(70, 16, 'D', 0),
(71, 17, 'A', 0),
(72, 17, 'B', 0),
(73, 17, 'C', 1),
(74, 17, 'D', 0),
(75, 18, 'A', 0),
(76, 18, 'B', 0),
(77, 18, 'C', 1),
(78, 18, 'D', 0),
(79, 19, 'A', 0),
(80, 19, 'B', 0),
(81, 19, 'C', 0),
(82, 19, 'D', 1),
(83, 20, 'A', 0),
(84, 20, 'B', 1),
(85, 20, 'C', 0),
(86, 20, 'D', 0);

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
-- Índices para tabela `testes_perguntas`
--
ALTER TABLE `testes_perguntas`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `testes_respostas`
--
ALTER TABLE `testes_respostas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pergunta` (`id_pergunta`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `concursos`
--
ALTER TABLE `concursos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `destaques`
--
ALTER TABLE `destaques`
  MODIFY `id_destaques` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `testes_perguntas`
--
ALTER TABLE `testes_perguntas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de tabela `testes_respostas`
--
ALTER TABLE `testes_respostas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `testes_respostas`
--
ALTER TABLE `testes_respostas`
  ADD CONSTRAINT `testes_respostas_ibfk_1` FOREIGN KEY (`id_pergunta`) REFERENCES `testes_perguntas` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
