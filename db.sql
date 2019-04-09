-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 04/09/2018 às 15:33
-- Versão do servidor: 10.1.34-MariaDB
-- Versão do PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `camposwe_prod_fifinances`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_anotacoes`
--

CREATE TABLE `tb_anotacoes` (
  `id` int(11) NOT NULL,
  `codigo_user_notas` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `dia` date NOT NULL,
  `descricao` longtext,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `tb_anotacoes`
--

INSERT INTO `tb_anotacoes` (`id`, `codigo_user_notas`, `titulo`, `dia`, `descricao`, `created_at`, `updated_at`) VALUES
(1, 1, 'cpainel', '2018-08-19', 'camposwe - nathancuddy1408', '2018-08-19 06:06:45', '2018-08-19 06:06:45'),
(3, 2, 'Presentes', '2018-08-22', 'Comprar coisinhas para agradar o nicopau(babaca) pra deixar ele feliz.', '2018-08-19 06:28:15', '2018-08-19 06:28:15'),
(4, 5, 'teste', '2018-08-19', 'ANOTAÇÃO DE TESTE', '2018-08-19 06:37:31', '2018-08-19 06:37:31'),
(5, 1, 'github', '2018-08-25', 'email: devnathan45@gmail.com\r\n\r\n16310814', '2018-08-25 23:10:43', '2018-08-25 23:10:43');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_conta`
--

CREATE TABLE `tb_conta` (
  `id` int(11) NOT NULL,
  `codigo_user_conta_simples` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `data` date NOT NULL,
  `valor` decimal(7,2) NOT NULL,
  `categoria` varchar(255) NOT NULL,
  `pagamento` enum('Crédito','Débito','Dinheiro') DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `tb_conta`
--

INSERT INTO `tb_conta` (`id`, `codigo_user_conta_simples`, `nome`, `data`, `valor`, `categoria`, `pagamento`, `created_at`, `updated_at`) VALUES
(1, 1, 'Primeira compra', '2018-08-18', '150.00', 'Ferramentas', 'Crédito', '2018-08-19 05:56:49', '2018-08-19 05:56:49'),
(5, 1, 'Almoco domingo', '2018-08-19', '33.80', 'Burguer King', 'Crédito', '2018-08-19 06:05:27', '2018-08-19 06:05:27'),
(9, 5, 'internet', '2018-08-20', '119.90', 'Ferramentas', 'Dinheiro', '2018-08-19 06:32:43', '2018-08-19 06:32:43');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_conta_fixa`
--

CREATE TABLE `tb_conta_fixa` (
  `id` int(11) NOT NULL,
  `codigo_usuario` int(10) NOT NULL,
  `codigo_conta_fixa` int(11) DEFAULT NULL,
  `nome` varchar(255) NOT NULL,
  `data` date NOT NULL,
  `valor` decimal(9,2) NOT NULL,
  `categoria` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `tb_conta_fixa`
--

INSERT INTO `tb_conta_fixa` (`id`, `codigo_usuario`, `codigo_conta_fixa`, `nome`, `data`, `valor`, `categoria`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, 'Unip', '2018-08-19', '465.00', 'Ferramentas', '2018-08-19 06:04:24', '2018-08-19 06:04:24'),
(2, 1, NULL, 'ValueHost', '2018-08-19', '12.90', 'Ferramentas', '2018-08-19 06:04:43', '2018-08-19 06:04:43'),
(4, 2, NULL, 'Conta de Internet', '2018-01-01', '100.00', 'Ferramentas', '2018-08-19 06:29:44', '2018-08-19 06:29:44');

-- --------------------------------------------------------

--
-- Estrutura para tabela `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `salario` decimal(9,2) DEFAULT NULL,
  `banco_1` varchar(100) DEFAULT NULL,
  `banco_2` varchar(100) DEFAULT NULL,
  `banco_3` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `imagem` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `salario`, `banco_1`, `banco_2`, `banco_3`, `created_at`, `updated_at`, `imagem`) VALUES
(1, 'Nicolas Teste', 'teste@gmail.com', '$2y$10$fJcGkiS4ddwc29ESPxqD8O1Jo78eoKEBtpDNDKGvCqnsE3pSWgLQW', 'WHQ1j6fi5HZPbFkrFl3HKYCb6xNDuwmVWnR8qvKolPeIGqE0Lw5vRLjuymZs', '1000.00', 'Nubank', 'Bradesco', NULL, '2018-08-19 05:52:46', '2018-09-04 19:09:23', ''),
(2, 'Guilherme Augusto', 'gui_2512@hotmail.com', '$2y$10$R62MPm5E3VWJygZ6lwjd3.RH.LIEF6roQLPwwiZeHXbasGiGFr7eq', NULL, '2.50', 'Itau', NULL, NULL, '2018-08-19 06:11:39', '2018-08-19 06:23:42', NULL),
(3, 'Victor Maloyama', 'victor.maloyama@gmail.com', '$2y$10$PWHzdnTUGgqmJzA.1VmGG.V4crr9Z24UbYVM5/vCDUaP1NcuUopje', NULL, '750.00', 'Bradesco', NULL, NULL, '2018-08-19 06:14:01', '2018-08-19 06:16:23', NULL),
(4, 'Mateus Brito', 'mateusbritobo@gmail.com', '$2y$10$evtMNJgKY6efA6RJFKqC2uPjfufsYSMh4I9cMjbXky.GO9e3MV2dS', NULL, NULL, NULL, NULL, NULL, '2018-08-19 06:14:41', '2018-08-19 06:14:41', NULL),
(5, 'Carlos', 'carlosencine@devhousesolutions.com.br', '$2y$10$vo/HBP6NrOSJvQd8RKypp.i3OGVh0/7vjbt/jc1KJPuK0ZVz38TJ2', NULL, '3000.00', 'Itau', NULL, NULL, '2018-08-19 06:26:38', '2018-08-19 06:47:43', NULL),
(6, 'Daiwanne', 'daiwannerosa@gmail.com', '$2y$10$UApvOjGg1.wB7FOojuOqlejO6YekNqHt22/TYscSqp9/1pB5/brVC', NULL, NULL, NULL, NULL, NULL, '2018-08-19 16:48:16', '2018-08-19 16:48:16', NULL),
(7, 'leonardo barussi', 'lhbs1515@gmail.com', '$2y$10$A.d4qY/muHFDg4mX/Y.8HeX8ST735rU0.dgLiwEKO/bi73iizt9fq', 'ZmxdShVJi9nKUThk1576PebjzDBLGGV97amZmG0EUmXFZNn3uwVzJmXZYIYv', NULL, NULL, NULL, NULL, '2018-08-20 01:11:29', '2018-08-20 01:11:29', NULL);

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `tb_anotacoes`
--
ALTER TABLE `tb_anotacoes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_TB_ANOTACOES_idx` (`codigo_user_notas`);

--
-- Índices de tabela `tb_conta`
--
ALTER TABLE `tb_conta`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_gasto_simples_idx` (`codigo_user_conta_simples`);

--
-- Índices de tabela `tb_conta_fixa`
--
ALTER TABLE `tb_conta_fixa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_TB_CONTA_FIXA_USERS_idx` (`codigo_usuario`);

--
-- Índices de tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_anotacoes`
--
ALTER TABLE `tb_anotacoes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `tb_conta`
--
ALTER TABLE `tb_conta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `tb_conta_fixa`
--
ALTER TABLE `tb_conta_fixa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Restrições para dumps de tabelas
--

--
-- Restrições para tabelas `tb_anotacoes`
--
ALTER TABLE `tb_anotacoes`
  ADD CONSTRAINT `FK_TB_ANOTACOES` FOREIGN KEY (`codigo_user_notas`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para tabelas `tb_conta`
--
ALTER TABLE `tb_conta`
  ADD CONSTRAINT `fk_gasto_simples` FOREIGN KEY (`codigo_user_conta_simples`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para tabelas `tb_conta_fixa`
--
ALTER TABLE `tb_conta_fixa`
  ADD CONSTRAINT `FK_TB_CONTA_FIXA_USERS` FOREIGN KEY (`codigo_usuario`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
