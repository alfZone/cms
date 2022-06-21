-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 21-Jun-2022 às 11:35
-- Versão do servidor: 8.0.29-0ubuntu0.20.04.3
-- versão do PHP: 7.2.34-28+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datebase: `cmsDB`
--

-- --------------------------------------------------------

--
-- Structure for table `cmsArticles`
--

CREATE TABLE `cmsArticles` (
  `codArticle` int NOT NULL,
  `codCategorie` int NOT NULL DEFAULT '1',
  `resume` text,
  `description` text NOT NULL,
  `title` varchar(200) NOT NULL,
  `createdStamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `owne` varchar(25) DEFAULT NULL,
  `active` int NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- some examples `cmsArticles`
--

INSERT INTO `cmsArticles` (`codArticle`, `codCategorie`, `resume`, `description`, `title`, `createdStamp`, `owne`, `active`) VALUES
(1, 1, '...', '<p><video controls=\'\' src=\'https://galeria.esmonserrate.org/2do/videos/Webinar%20-%20A%20Constru%C3%A7%C3%A3o%20da%20Avalia%C3%A7%C3%A3o%20Pedag%C3%B3gica%20(1).mp4\' width=\'640\' height=\'360\' class=\'note-video-clip\'></video>...</p>', 'Vídeo do Prof. Domingues Fernandes sobre a avaliação', '2021-12-14 20:12:13', NULL, 1),
(2, 1, 'Artigos para ler sobre o google education', '<p><a href=\'https://support.google.com/edu/classroom/answer/6020282\' target=\'_blank\'>https://support.google.com/edu/classroom/answer/6020282</a></p><p><a href=\'https://support.google.com/edu/classroom/answer/6020273\' target=\'_blank\'>https://support.google.com/edu/classroom/answer/6020273</a></p><p>https://support.google.com/a/answer/10651918<br></p>', 'Artigos para ler sobre o google education', '2022-02-17 17:37:18', NULL, 1);


-- --------------------------------------------------------

--
-- Estrutura da tabela `cmsArticlesCategorie`
--

CREATE TABLE `cmsArticlesCategorie` (
  `codCategorie` int NOT NULL,
  `father` int NOT NULL DEFAULT '0',
  `categorie` varchar(200) NOT NULL,
  `createdStamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `owne` varchar(25) DEFAULT NULL,
  `active` int NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cmsArticlesCategorie`
--

INSERT INTO `cmsArticlesCategorie` (`codCategorie`, `father`, `categorie`, `createdStamp`, `owne`, `active`) VALUES
(0, 0, 'Raiz', '2021-12-14 19:41:49', NULL, 1),
(1, 0, 'Explicações', '2021-12-14 19:41:49', NULL, 1),
(3, 0, 'Notícias', '2021-12-14 19:43:08', NULL, 1);


--
-- Índices para tabelas despejadas
--

--
-- Index for table `cmsArticles`
--
ALTER TABLE `cmsArticles`
  ADD PRIMARY KEY (`codArticle`);

--
-- Índices para tabela `cmsArticlesCategorie`
--
ALTER TABLE `cmsArticlesCategorie`
  ADD PRIMARY KEY (`codCategorie`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cmsArticles`
--
ALTER TABLE `cmsArticles`
  MODIFY `codArticle` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `artigosCategorias`
--
ALTER TABLE `cmsArticlesCategorie`
  MODIFY `codCategorie` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
