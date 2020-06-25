-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 22-Jun-2020 às 20:13
-- Versão do servidor: 5.7.30
-- versão do PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `krsconsu_psico2020`
--
CREATE DATABASE IF NOT EXISTS `krsconsu_psico2020` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `krsconsu_psico2020`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `andamento`
--

DROP TABLE IF EXISTS `andamento`;
CREATE TABLE IF NOT EXISTS `andamento` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `nome_jogador` varchar(100) NOT NULL,
  `idade_jogador` int(3) NOT NULL,
  `time_inicio` int(50) NOT NULL,
  `time_fim` int(50) NOT NULL DEFAULT '0',
  `resposta_1` int(2) NOT NULL DEFAULT '0',
  `resposta_2` int(2) NOT NULL DEFAULT '0',
  `resposta_3` int(2) NOT NULL DEFAULT '0',
  `resposta_4` int(2) NOT NULL DEFAULT '0',
  `resposta_5` int(2) NOT NULL DEFAULT '0',
  `resposta_6` int(2) NOT NULL DEFAULT '0',
  `resposta_7` int(2) NOT NULL DEFAULT '0',
  `resposta_8` int(2) NOT NULL DEFAULT '0',
  `resposta_9` int(2) NOT NULL DEFAULT '0',
  `resposta_10` int(2) NOT NULL DEFAULT '0',
  `resposta_11` int(2) NOT NULL DEFAULT '0',
  `resposta_12` int(2) NOT NULL DEFAULT '0',
  `resposta_13` int(2) NOT NULL DEFAULT '0',
  `resposta_14` int(2) NOT NULL DEFAULT '0',
  `resposta_15` int(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8;

--
-- Truncar tabela antes do insert `andamento`
--

TRUNCATE TABLE `andamento`;
--
-- Extraindo dados da tabela `andamento`
--

INSERT INTO `andamento` (`id`, `nome_jogador`, `idade_jogador`, `time_inicio`, `time_fim`, `resposta_1`, `resposta_2`, `resposta_3`, `resposta_4`, `resposta_5`, `resposta_6`, `resposta_7`, `resposta_8`, `resposta_9`, `resposta_10`, `resposta_11`, `resposta_12`, `resposta_13`, `resposta_14`, `resposta_15`) VALUES
(1, 'Dheyci ', 20, 1591136098, 1591136557, 4, 2, 1, 2, 2, 4, 1, 2, 2, 1, 1, 2, 2, 4, 3),
(2, 'Rafael', 23, 1591136824, 1591137205, 3, 2, 1, 3, 4, 4, 2, 2, 1, 1, 1, 1, 1, 3, 4),
(3, 'Aline', 20, 1591137870, 1591137922, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(4, 'Fabi', 48, 1591225327, 1591225579, 3, 2, 1, 1, 2, 3, 1, 3, 1, 1, 2, 1, 0, 3, 4),
(5, 'Aline', 20, 1591371099, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(6, 'Aline', 20, 1591371275, 1591371845, 3, 2, 1, 2, 2, 4, 1, 2, 2, 1, 1, 1, 4, 3, 4),
(7, 'X', 0, 1591372481, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(8, 'Francielly da Silva Sabino', 22, 1591789868, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(9, 'Karine', 27, 1591790177, 1591790465, 3, 2, 1, 2, 2, 2, 1, 2, 2, 2, 1, 1, 4, 3, 4),
(10, 'Francielly da Silva Sabino', 22, 1591790456, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(11, 'Francielly da Silva Sabino', 22, 1591792074, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(12, 'Francielly da Silva Sabino', 22, 1591792104, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(13, 'aline', 20, 1591792129, 1591792138, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(14, 'Francielly ', 22, 1591792335, 1591792342, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(15, 'Fernanda', 23, 1591793065, 1591793656, 3, 4, 1, 3, 1, 4, 3, 2, 2, 1, 1, 1, 4, 4, 4),
(16, 'Aline', 20, 1591793159, 1591793282, 3, 2, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(17, 'Aline', 20, 1591793374, 1591793803, 3, 2, 1, 2, 2, 4, 1, 2, 2, 1, 1, 1, 4, 3, 4),
(18, 'Juliana', 19, 1591793384, 1591793837, 3, 4, 1, 1, 2, 4, 1, 2, 2, 1, 1, 1, 4, 4, 2),
(19, 'Maria Eduarda', 17, 1591798239, 1591798900, 3, 4, 1, 2, 2, 4, 1, 2, 2, 2, 0, 0, 0, 0, 0),
(20, 'eduarda thomas', 18, 1591800530, 1591800886, 3, 4, 1, 1, 2, 4, 1, 2, 2, 1, 1, 1, 4, 3, 4),
(21, 'Mariana', 30, 1591805521, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(22, 'Mariana', 30, 1591806822, 1591807463, 2, 4, 1, 1, 4, 4, 1, 2, 2, 2, 0, 0, 0, 0, 0),
(23, 'Mariana', 30, 1591807573, 1591808018, 3, 4, 1, 1, 2, 4, 1, 2, 2, 1, 1, 2, 4, 1, 3),
(24, 'Dani', 17, 1591831561, 1591831821, 3, 2, 1, 3, 2, 4, 1, 3, 2, 1, 1, 2, 0, 0, 0),
(25, 'victor', 19, 1592073139, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(26, 'thaysa', 19, 1592259479, 1592260006, 3, 2, 1, 1, 4, 3, 1, 2, 2, 1, 1, 1, 3, 3, 3),
(27, 'ariel', 21, 1592349966, 1592350404, 3, 2, 1, 2, 2, 4, 1, 2, 1, 1, 1, 1, 4, 3, 2),
(28, 'x', 0, 1592355957, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(29, 'vitoria', 18, 1592356778, 1592356791, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(30, '222', 18, 1592356806, 1592356845, 3, 2, 1, 2, 1, 2, 2, 2, 2, 1, 1, 2, 3, 3, 3),
(31, 'Francielly da Silva Sabino', 22, 1592361543, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(32, 'Ana', 19, 1592424604, 1592424818, 3, 1, 4, 4, 4, 3, 2, 2, 1, 2, 1, 1, 3, 4, 1),
(33, 'Michella', 20, 1592440337, 1592440669, 3, 2, 1, 2, 4, 3, 2, 3, 1, 1, 2, 1, 2, 3, 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `hiscore`
--

DROP TABLE IF EXISTS `hiscore`;
CREATE TABLE IF NOT EXISTS `hiscore` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `idade` int(3) NOT NULL,
  `time` int(100) NOT NULL,
  `acertos` int(3) NOT NULL,
  `tempo_exec` int(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Truncar tabela antes do insert `hiscore`
--

TRUNCATE TABLE `hiscore`;
--
-- Extraindo dados da tabela `hiscore`
--

INSERT INTO `hiscore` (`id`, `name`, `idade`, `time`, `acertos`, `tempo_exec`) VALUES
(1, 'Karine', 27, 1591790465, 12, 288),
(2, 'Fernanda', 23, 1591793656, 9, 591),
(3, 'Aline', 20, 1591793803, 14, 429),
(4, 'Juliana', 19, 1591793837, 10, 453),
(5, 'Maria Eduarda', 17, 1591798900, 8, 661),
(6, 'eduarda thomas', 18, 1591800886, 12, 356),
(7, 'Mariana', 30, 1591807463, 5, 641),
(8, 'Mariana', 30, 1591808018, 9, 445),
(9, 'thaysa', 19, 1592260006, 9, 527),
(10, 'ariel', 21, 1592350404, 12, 438),
(11, '222', 18, 1592356845, 8, 39),
(12, 'Ana', 19, 1592424818, 3, 214),
(13, 'Michella', 20, 1592440669, 9, 332);

-- --------------------------------------------------------

--
-- Estrutura da tabela `hiscore_memoria`
--

DROP TABLE IF EXISTS `hiscore_memoria`;
CREATE TABLE IF NOT EXISTS `hiscore_memoria` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `data` int(100) DEFAULT NULL,
  `nivel` int(2) DEFAULT NULL,
  `pontos` int(20) DEFAULT NULL,
  `tempo` int(20) DEFAULT NULL,
  `tentativas` int(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

--
-- Truncar tabela antes do insert `hiscore_memoria`
--

TRUNCATE TABLE `hiscore_memoria`;
--
-- Extraindo dados da tabela `hiscore_memoria`
--

INSERT INTO `hiscore_memoria` (`id`, `name`, `data`, `nivel`, `pontos`, `tempo`, `tentativas`) VALUES
(1, 'Karine', 1591792920, 9, 750, 46, 29),
(2, 'Fernanda', 1591792920, 4, 205, 87, 28),
(3, 'Fernanda', 1591793040, 4, 449, 53, 21),
(4, 'xxx', 1591798980, 3, 405, 47, 21),
(5, 'Mariana', 1591805160, 7, 606, 55, 24),
(6, 'Mariana', 1591805280, 9, 675, 57, 26),
(7, 'victor', 1592073120, 4, 310, 62, 26),
(8, '222', 1592357100, 4, 238, 70, 30),
(9, 'FRANCIELLY', 1592361600, 4, 642, 41, 19),
(10, 'FRANCIELLY', 1592361720, 1, 180, 53, 21),
(11, 'FRANCIELLY', 1592361780, 2, 150, 74, 27),
(12, 'FRANCIELLY', 1592361840, 3, 296, 54, 25),
(13, 'FRANCIELLY', 1592361960, 4, 230, 70, 31),
(14, 'FRANCIELLY', 1592362020, 5, 220, 78, 35),
(15, 'FRANCIELLY', 1592362080, 6, 972, 36, 20),
(16, 'FRANCIELLY', 1592362140, 7, 316, 79, 32),
(17, 'FRANCIELLY', 1592362200, 8, 638, 47, 30),
(18, 'FRANCIELLY', 1592362260, 9, 1157, 36, 24),
(19, 'FRANCIELLY', 1592362380, 1, 139, 60, 24);

-- --------------------------------------------------------

--
-- Estrutura da tabela `quiz`
--

DROP TABLE IF EXISTS `quiz`;
CREATE TABLE IF NOT EXISTS `quiz` (
  `id` int(9) NOT NULL AUTO_INCREMENT,
  `pergunta` varchar(255) NOT NULL,
  `resposta_1` varchar(255) NOT NULL,
  `resposta_2` varchar(255) NOT NULL,
  `resposta_3` varchar(255) NOT NULL,
  `resposta_4` varchar(255) NOT NULL,
  `correta` int(1) NOT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

--
-- Truncar tabela antes do insert `quiz`
--

TRUNCATE TABLE `quiz`;
--
-- Extraindo dados da tabela `quiz`
--

INSERT INTO `quiz` (`id`, `pergunta`, `resposta_1`, `resposta_2`, `resposta_3`, `resposta_4`, `correta`) VALUES
(1, 'O que podemos entender por funções psicológicas?', 'As funções psicológicas são compreendidas somente pelo homem, sendo os animais seres incapazes de pensar, atentar ou sentir.', 'As funções psicológicas elementares não são naturais tanto para o homem quanto para os animais.', 'Capacidade ou propriedade que dispõe do psiquismo no processo de captação da realidade.', 'A teoria das funções elementares superiores foi desenvolvida por Piage', 3),
(2, 'Sobre as funções elementares, quais são elas?', 'Ausência de percepção, desânimo, perda de memória, déficit de atenção.', 'Atenção, memória, criatividade, percepção.', 'Letargia, fome, afasia, sensatez.', 'Nenhuma das alternativas', 2),
(3, 'O que é senso comum?', 'Conjunto de conhecimentos repassados a partir da experiência de uma pessoa ou grupo soc', 'É uma metodologia comprovada cientificamente.', 'É uma metodologia única, criada pela teoria de Feyerabend.', 'São um conjunto de conhecimentos validos a partir de pesquisas públicas onde qualquer pesquisador pode repetir os mesmos passos do primeiro.', 1),
(4, 'Quais das alternativas representam exemplos da memória (funções inferiores) e memória mediada (funções superiores)', 'Lembranças e saber a tabuada', 'Andar de bicicleta e contar uma história', 'Andar de bicicleta e saber a capital do Brasil', 'Nenhuma das anteriores', 2),
(5, 'Qual desses grandes nomes afirmava que \"As criações imaginárias partem de elementos da realidade, porém com reelaboração destes mesmos\"', 'Castoriadis ', 'Vigotski', 'Maslow', 'Piaget', 2),
(6, 'Sobre a linguagem social, podemos afirmar:', 'Está em constante reelaboração', 'Pode ser representada tanto pela fala, quanto pela escrita', 'Está diretamente ligada a cultura e a interação soci', 'Todas as anteriores estão corretas', 4),
(7, 'Qual sequência está correta em relação ao processamento de informação?', 'Recepção de estímulo, Transmissão ao SNC, Análise e decisão do SNC, Transmissão da decisão ao músculo executor e Execução motora.', '  Recepção de estímulo, Análise e decisão do SNC, Transmissão ao SNC, Transmissão da decisão ao músculo executor e Execução motora', 'Transmissão ao SNC, Análise e decisão do SNC, Transmissão da decisão ao músculo executor, Recepção de estímulo e Execução motora.', '', 1),
(8, 'Complete a seguinte frase:  <br><br>  “Os processos de______ vão muito além da capacidade de fixar e reproduzir acontecimentos” - Oliveira 1992 . ', 'Atenção ', ' Memória', 'Percepção', '', 2),
(9, '  A Percepção é uma função psicológica superior', 'VERDADEIRO', 'FALSO', '', '', 2),
(10, 'A análise do comportamento é feita através de conhecimentos do Behaviorismo Radical e da Análise Experimental do comportamento, sendo que o comportamento está intrinsecamente ligado a relação entre estímulo e resposta.', 'VERDADEIRO', 'FALSO', '', '', 1),
(11, 'O Behaviorismo se atenta ao comportamento humano e tenta explicar os processos cognitivos, porém, é negligente quando apresenta a conduta do homem apenas como um conjunto de resposta a estímulos', 'VERDADEIRO', 'FALSO', '', '', 2),
(12, 'O Behaviorismo é um termo que designa várias teorias da Psicologia. Seu objeto de estudo é o comportamento.', 'VERDADEIRO', 'FALSO', '', '', 1),
(13, 'O que é motivação?', 'Reunião de forças com origem do indivíduo.', 'Um processo responsável por iniciar, direcionar e manter comportamentos relacionados com o cumprimento de objetivos.', 'Um impulso que faz com que as pessoas ajam para atingir objetivos.', 'Todas as alternativas \r\nanteriore', 4),
(14, 'Qual teoria motivacional que se baseia em experimentos laboratoriais para compreender os mecanismos que ativam o comportamento humano?', 'Teoria \r\nda Equidade', 'Teoria da necessidade', 'Behaviorismo', 'Modelo de comportamento', 3),
(15, 'Qual é o processo que resulta romper padrões de pensamentos, implicando a sensibilidade das lacunas do \r\nconhecimento?', 'Linguagem', 'Inteligência', 'Comunicação', 'Criatividade', 4);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
