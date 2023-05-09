-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 28-Abr-2023 às 04:36
-- Versão do servidor: 10.1.38-MariaDB
-- versão do PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projeto_redacao`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `administrador`
--

CREATE TABLE `administrador` (
  `email` varchar(45) NOT NULL,
  `senha` varchar(20) NOT NULL,
  `nome_completo` varchar(70) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `administrador`
--

INSERT INTO `administrador` (`email`, `senha`, `nome_completo`) VALUES
('prof@adm.com', 'tamires', 'Tamires');

-- --------------------------------------------------------

--
-- Estrutura da tabela `monitor`
--

CREATE TABLE `monitor` (
  `email` varchar(45) NOT NULL,
  `senha_monitor` varchar(20) NOT NULL,
  `nome_completo` varchar(70) CHARACTER SET utf8 NOT NULL,
  `bio` varchar(250) CHARACTER SET utf8 NOT NULL,
  `email_administrador` varchar(45) NOT NULL,
  `ativos` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `monitor`
--

INSERT INTO `monitor` (`email`, `senha_monitor`, `nome_completo`, `bio`, `email_administrador`, `ativos`) VALUES
('luigi@monitor', 'luigi', 'Luigi', '\"Amigo do Mario\"', 'prof@adm.com', 'inativo'),
('luigi@monitor.com', 'luigi', 'Luigi', '\"jcjcj\"', 'prof@adm.com', 'inativo'),
('mario@monitor.com', 'mario', 'Mario', '\"Ele Ã© uma boa pessoa sendo alguÃ©m bem divertido\"', 'prof@adm.com', 'inativo'),
('ney@g', '1234', 'neymar', 'Uma boa pessoa', 'prof@adm.com', 'ativo');

-- --------------------------------------------------------

--
-- Estrutura da tabela `redacoes`
--

CREATE TABLE `redacoes` (
  `id_redacao` int(11) NOT NULL,
  `tema` longtext CHARACTER SET utf8,
  `autor` longtext CHARACTER SET utf8,
  `nota` varchar(11) DEFAULT NULL,
  `redacao` text CHARACTER SET utf8,
  `comentarios` longtext CHARACTER SET utf8
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `redacoes`
--

INSERT INTO `redacoes` (`id_redacao`, `tema`, `autor`, `nota`, `redacao`, `comentarios`) VALUES
(17, 'Show', 'yo', '900', '<p><strong>Ã‰ um facto estabelecido </strong>de que um leitor Ã© distraÃ­do pelo conteÃºdo \r\nlegÃ­vel de uma pÃ¡gina quando analisa a sua mancha grÃ¡fica. Logo, o uso \r\nde Lorem Ipsum leva a uma distribuiÃ§Ã£o mais ou menos normal de letras, \r\nao contrÃ¡rio do uso de \"ConteÃºdo aqui, conteÃºdo aqui\", tornando-o texto \r\nlegÃ­vel. Muitas ferramentas de publicaÃ§Ã£o electrÃ³nica e editores de \r\npÃ¡ginas web usam actualmente o Lorem Ipsum como o modelo de texto usado \r\npor omissÃ£o, e uma pesquisa por \"lorem ipsum\" irÃ¡ encontrar muitos \r\nwebsites ainda na sua infÃ¢ncia. VÃ¡rias versÃµes tÃªm evoluÃ­do ao longo dos\r\n anos, por vezes por acidente, por vezes propositadamente (como no caso \r\ndo humor).</p><p>Ã‰ um facto estabelecido de que um leitor Ã© distraÃ­do pelo conteÃºdo \r\nlegÃ­vel de uma pÃ¡gina quando analisa a sua mancha grÃ¡fica. Logo, o uso \r\nde Lorem Ipsum leva a uma distribuiÃ§Ã£o mais ou menos normal de letras, \r\nao contrÃ¡rio do uso de \"ConteÃºdo aqui, conteÃºdo aqui\", tornando-o texto \r\nlegÃ­vel. Muitas ferramentas de publicaÃ§Ã£o electrÃ³nica e editores de \r\npÃ¡ginas web usam actualmente o Lorem Ipsum como o modelo de texto usado \r\npor omissÃ£o, e uma pesquisa por \"lorem ipsum\" irÃ¡ encontrar muitos \r\nwebsites ainda na sua infÃ¢ncia. VÃ¡rias versÃµes tÃªm evoluÃ­do ao longo dos\r\n anos, por vezes por acidente, por vezes propositadamente (como no caso \r\ndo humor).</p>', '<p><strong>Ã‰ um facto estabelecido de que um leitor Ã© distraÃ­do pelo conteÃºdo \r\nlegÃ­vel de uma pÃ¡gina quando analisa a sua mancha grÃ¡fica. Logo, o uso \r\nde Lorem Ipsum leva a uma distribuiÃ§Ã£o mais ou menos normal de letras, \r\nao contrÃ¡rio do uso de \"ConteÃºdo aqui, conteÃºdo aqui\", tornando-o texto \r\nlegÃ­vel. Muitas ferramentas de publicaÃ§Ã£o electrÃ³nica e editores de \r\npÃ¡ginas web usam actualmente o Lorem Ipsum como o modelo de texto usado \r\npor omissÃ£o, e uma pesquisa por \"lorem ipsum\" irÃ¡ encontrar muitos \r\nwebsites ainda na sua infÃ¢ncia. VÃ¡rias versÃµes tÃªm evoluÃ­do ao longo dos\r\n anos, por vezes por acidente, por vezes propositadamente (como no caso \r\ndo humor).</strong></p>'),
(16, 'Tutoria', 'eu', '1000', '<p>O <strong>Lorem Ipsum</strong> Ã© um texto modelo da indÃºstria \r\ntipogrÃ¡fica e de impressÃ£o. O Lorem Ipsum tem vindo a ser o texto padrÃ£o\r\n usado por estas indÃºstrias desde o ano de 1500, quando uma misturou os \r\ncaracteres de um texto para criar um espÃ©cime de livro. Este texto nÃ£o \r\nsÃ³ sobreviveu 5 sÃ©culos, mas tambÃ©m o salto para a tipografia \r\nelectrÃ³nica, mantendo-se essencialmente inalterada. Foi popularizada nos\r\n anos 60 com a disponibilizaÃ§Ã£o das folhas de Letraset, que continham \r\npassagens com Lorem Ipsum, e mais recentemente com os programas de \r\npublicaÃ§Ã£o como o Aldus PageMaker que incluem versÃµes do Lorem Ipsum.</p><p>O <strong>Lorem Ipsum</strong> Ã© um texto modelo da indÃºstria \r\ntipogrÃ¡fica e de impressÃ£o. O Lorem Ipsum tem vindo a ser o texto padrÃ£o\r\n usado por estas indÃºstrias desde o ano de 1500, quando uma misturou os \r\ncaracteres de um texto para criar um espÃ©cime de livro. Este texto nÃ£o \r\nsÃ³ sobreviveu 5 sÃ©culos, mas tambÃ©m o salto para a tipografia \r\nelectrÃ³nica, mantendo-se essencialmente inalterada. Foi popularizada nos\r\n anos 60 com a disponibilizaÃ§Ã£o das folhas de Letraset, que continham \r\npassagens com Lorem Ipsum, e mais recentemente com os programas de \r\npublicaÃ§Ã£o como o Aldus PageMaker que incluem versÃµes do Lorem Ipsum.</p><p>O <strong>Lorem Ipsum</strong> Ã© um texto modelo da indÃºstria \r\ntipogrÃ¡fica e de impressÃ£o. O Lorem Ipsum tem vindo a ser o texto padrÃ£o\r\n usado por estas indÃºstrias desde o ano de 1500, quando uma misturou os \r\ncaracteres de um texto para criar um espÃ©cime de livro. Este texto nÃ£o \r\nsÃ³ sobreviveu 5 sÃ©culos, mas tambÃ©m o salto para a tipografia \r\nelectrÃ³nica, mantendo-se essencialmente inalterada. Foi popularizada nos\r\n anos 60 com a disponibilizaÃ§Ã£o das folhas de Letraset, que continham \r\npassagens com Lorem Ipsum, e mais recentemente com os programas de \r\npublicaÃ§Ã£o como o Aldus PageMaker que incluem versÃµes do Lorem Ipsum.</p>', 'cmcmccmcmmmmO Lorem Ipsum Ã© um texto modelo da indÃºstria tipogrÃ¡fica e de impressÃ£o. O Lorem Ipsum tem vindo a ser o texto padrÃ£o usado por estas indÃºstrias desde o ano de 1500, quando uma misturou os caracteres de um texto para criar um espÃ©cime de livro. Este texto nÃ£o sÃ³ sobreviveu 5 sÃ©culos, mas tambÃ©m o salto para a tipografia electrÃ³nica, mantendo-se essencialmente inalterada. Foi popularizada nos anos 60 com a disponibilizaÃ§Ã£o das folhas de Letraset, que continham passagens com Lorem Ipsu');

-- --------------------------------------------------------

--
-- Estrutura da tabela `repertorio`
--

CREATE TABLE `repertorio` (
  `id_repertorio` int(11) NOT NULL,
  `data_citacao` int(11) NOT NULL,
  `nome_autor` varchar(45) CHARACTER SET utf8 NOT NULL,
  `citacao` varchar(70) CHARACTER SET utf8 NOT NULL,
  `id_tipo_repertorio` int(11) NOT NULL,
  `id_tematica` int(11) NOT NULL,
  `email_monitor` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `repertorio`
--

INSERT INTO `repertorio` (`id_repertorio`, `data_citacao`, `nome_autor`, `citacao`, `id_tipo_repertorio`, `id_tematica`, `email_monitor`) VALUES
(13, 1682212259, 'rene', '\"penso,logo existo\"', 7, 5, 'ney@g'),
(14, 1682212298, 'augusto comte', '\"ordem e progresso\"', 7, 6, 'ney@g'),
(16, 1682258694, 'SÃ³crates', '\"SÃ³ sei que nada sei\"', 8, 6, 'ney@g');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tematica`
--

CREATE TABLE `tematica` (
  `id_tematica` int(11) NOT NULL,
  `nome` varchar(50) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tematica`
--

INSERT INTO `tematica` (`id_tematica`, `nome`) VALUES
(5, 'meio ambiente'),
(6, 'educaÃ§Ã£o'),
(7, 'Sociedade'),
(8, 'Direito');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_repertorio`
--

CREATE TABLE `tipo_repertorio` (
  `id_tipo_repertorio` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tipo_repertorio`
--

INSERT INTO `tipo_repertorio` (`id_tipo_repertorio`, `nome`) VALUES
(7, 'filme'),
(8, 'legitimado'),
(9, 'JornalistÃ­co');

-- --------------------------------------------------------

--
-- Estrutura da tabela `videos`
--

CREATE TABLE `videos` (
  `id_video` int(11) NOT NULL,
  `nome` varchar(60) CHARACTER SET utf8 NOT NULL,
  `link` varchar(80) NOT NULL,
  `descricao` varchar(90) CHARACTER SET utf8 NOT NULL,
  `data_public` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `videos`
--

INSERT INTO `videos` (`id_video`, `nome`, `link`, `descricao`, `data_public`) VALUES
(7, 'introduÃ§Ã£o', 'uw1Tk-BdkXg', 'como montar a introduÃ§Ã£o da sua redaÃ§Ã£o', 1682212506);

-- --------------------------------------------------------

--
-- Estrutura da tabela `visitante`
--

CREATE TABLE `visitante` (
  `email` varchar(45) NOT NULL,
  `senha` int(20) NOT NULL,
  `nome` varchar(70) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `visitante`
--

INSERT INTO `visitante` (`email`, `senha`, `nome`) VALUES
('diego9@gmail', 9, 'diego'),
('felipe@visitante.com', 0, 'Felipe');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `monitor`
--
ALTER TABLE `monitor`
  ADD PRIMARY KEY (`email`),
  ADD KEY `email_administrador` (`email_administrador`);

--
-- Indexes for table `redacoes`
--
ALTER TABLE `redacoes`
  ADD PRIMARY KEY (`id_redacao`);

--
-- Indexes for table `repertorio`
--
ALTER TABLE `repertorio`
  ADD PRIMARY KEY (`id_repertorio`),
  ADD KEY `id_tematica` (`id_tematica`),
  ADD KEY `id_tipo_repertorio` (`id_tipo_repertorio`),
  ADD KEY `email_monitor` (`email_monitor`);

--
-- Indexes for table `tematica`
--
ALTER TABLE `tematica`
  ADD PRIMARY KEY (`id_tematica`);

--
-- Indexes for table `tipo_repertorio`
--
ALTER TABLE `tipo_repertorio`
  ADD PRIMARY KEY (`id_tipo_repertorio`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id_video`);

--
-- Indexes for table `visitante`
--
ALTER TABLE `visitante`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `redacoes`
--
ALTER TABLE `redacoes`
  MODIFY `id_redacao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `repertorio`
--
ALTER TABLE `repertorio`
  MODIFY `id_repertorio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tematica`
--
ALTER TABLE `tematica`
  MODIFY `id_tematica` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tipo_repertorio`
--
ALTER TABLE `tipo_repertorio`
  MODIFY `id_tipo_repertorio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id_video` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `monitor`
--
ALTER TABLE `monitor`
  ADD CONSTRAINT `monitor_ibfk_1` FOREIGN KEY (`email_administrador`) REFERENCES `administrador` (`email`);

--
-- Limitadores para a tabela `repertorio`
--
ALTER TABLE `repertorio`
  ADD CONSTRAINT `repertorio_ibfk_1` FOREIGN KEY (`id_tematica`) REFERENCES `tematica` (`id_tematica`),
  ADD CONSTRAINT `repertorio_ibfk_2` FOREIGN KEY (`id_tipo_repertorio`) REFERENCES `tipo_repertorio` (`id_tipo_repertorio`),
  ADD CONSTRAINT `repertorio_ibfk_3` FOREIGN KEY (`email_monitor`) REFERENCES `monitor` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
