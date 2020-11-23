-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Nov 23, 2020 at 04:03 PM
-- Server version: 5.7.26
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `projet-job-it`
--

-- --------------------------------------------------------

--
-- Table structure for table `affilies`
--

CREATE TABLE `affilies` (
  `id` int(11) NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cataffilies`
--

CREATE TABLE `cataffilies` (
  `cat_id` int(11) NOT NULL,
  `affilies_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `nom`) VALUES
(1, 'developpeur'),
(2, 'architect');

-- --------------------------------------------------------

--
-- Table structure for table `doctrine_migration_versions`
--

CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20201123133238', '2020-11-23 14:33:08', 224),
('DoctrineMigrations\\Version20201123140611', '2020-11-23 15:06:18', 522),
('DoctrineMigrations\\Version20201123140723', '2020-11-23 15:07:27', 929),
('DoctrineMigrations\\Version20201123141003', '2020-11-23 15:10:07', 330);

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(11) NOT NULL,
  `contrat` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `entreprise` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pays` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lieu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expire` datetime DEFAULT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  `category_id` int(11) NOT NULL,
  `postuler` longtext COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `contrat`, `entreprise`, `logo`, `url`, `pays`, `lieu`, `description`, `email`, `expire`, `created`, `updated`, `category_id`, `postuler`) VALUES
(1, 'CDI', 'EFFEKTIV', NULL, NULL, 'France', 'Lyon', 'Notre client expert et référent Magento 2 sur la région agrandit son équipe et recherche un Développeur Magento 2 F/H en CDI sur Lyon.\r\n\r\nPoste\r\nVos missions :\r\n\r\nVous travaillerez dans l\'équipe technique avec des missions très variés et une bonne autonomie\r\n\r\nPlus en détail ça donne ça :\r\n\r\nDéveloppement Magento 2 avec quelques clients en Magento 1 en cours de migration.\r\nDéveloppement de logiciels internes liés à l\'activité SEO (Exemple de features / projets : Scrapping du web en masse, gestion de gros volumes de données, usine à site gérant plus de 400 sites Internet déployées en automatique, optimisation sémantique de contenus)\r\nDéveloppement de solutions SaaS orientées SEO (projet en cours, confidentiel pour l\'instant)\r\nFormation clients\r\nVous aimerez :\r\n\r\nClairement l\'équipe la plus pointue en Magento2 sur la région Lyonnaise\r\nLa bonne ambiance et le côté bon vivant de l\'équipe\r\nParticipation et/ou organisation d\'évènement Lyonnais\r\nTélétravail à 100% possible même si en rencontrant l\'équipe vous allez vouloir rester avec eux ????\r\nProfil\r\n2 à 5 ans d\'expériences sur du développement Magento 2 avec la maîtrise de la POO et un bon niveau d\'anglais\r\n\r\nPour la stack technique :\r\n\r\nMagento 1/2\r\nMaitrise de Git\r\nVous êtes à l\'aise avec Jquery, CSS3\r\nApache est votre ami, vous êtes à l\'aise pour configurer un hébergement linux\r\nLa maîtrise de Symfony est un plus\r\nBrique technique et gestion : Jenkins, Git, Varnish, J\r\nLes plus qui comptent :\r\n\r\nSi vous avez des affinités en SEO, vous avez déjà entendu parler de ce que sont Panda, Penguin et Fred.\r\nRéférence : TGU/2020/3855-EFV', 'john@doe.com', NULL, '2020-11-23 00:00:00', '2020-11-23 00:00:00', 1, NULL),
(2, 'CDI', 'Labsoft', 'https://www.labsoft.fr/sites/default/files/Logo-long%402x.png', 'https://www.labsoft.fr/', 'France', 'Labege Midi-Pyrénées', 'Intégré(e) à une équipe de développement pour le refactoring et l\'implémentation du Message Queuing, vous interviendrez sur le transfert de fichiers et la gestion de services de notification. A ce titre, vous prendrez en charge :\r\n\r\n- La conception d\'architecture et le développement en langage Python.\r\n- La production de solutions maintenables et performantes\r\n- L\'analyse, la validation et la revue de code\r\n- La participation aux sprints de développement et à l\'amélioration continue\r\nUne maîtrise de la conception objet en python et de l\'industrialisation de code est indispensable.\r\n\r\nENVIRONNEMENT TECHNIQUE :\r\n\r\n- Python ;\r\n- RabbitMQ ;\r\n\r\n\r\n- Diplômé d\'une formation en informatique.\r\n- Autonomie.\r\n- 5 à 10 ans sur de l\'expertise Python.\r\n\r\nNous rejoindre c\'est un super poste mais c\'est aussi :\r\n\r\n- Des primes de cooptation ;\r\n- La prise en charge des frais de transport à 50% & prime vélo, pour les plus courageux ;\r\n- La prime de vacances chaque année ;\r\n- Une prime pour toute certification réussie ;\r\n- Le versement de la Participation : résultat de votre travail ;\r\n- Des afterwork réguliers ;\r\n- De l\'aide pour votre installation et vos projets immobiliers ;\r\n- Des TR, une mutuelle et prévoyance, des RTT,\r\n- Un super parrainage avec un Labsoftien(e) dès votre arrivée', 'john@doe.com', NULL, '2020-11-24 00:00:00', '2020-11-25 00:00:00', 1, 'https://www.jobposting.pro/emploi-1005202-131\r\nRéférence : https://www.jobposting.pro/emploi-1005202-131'),
(3, 'CDD', 'UPWAY.IO', NULL, 'https://www.upway.io/fr/', 'France', 'Saint-ouen Ile de France', 'Contexte :\r\n\r\nRejoignez une filiale IT depuis 2013 d\'un acteur mondial de l\'énergie basée à ST Ouen. Son activité consiste à développer des solutions IT pour l\'ensemble des BU du groupe et à les aider à accomplir de nouveaux défis énergétiques.\r\n\r\nVotre rôle :\r\n\r\nEn tant qu\'architecte, votre rôle consiste à concevoir, définir et documenter l\'architecture technique. Dans un fonctionnement d\'équipe projet, vous évoluerez en étroite collaboration avec le chef de projet.\r\n\r\nVotre mission :\r\n\r\n- Etudier et concevoir les Architectures Techniques\r\n- Soutenir les dossiers d\'Architectures Techniques devant le comité de validations\r\n- Suivi de projet : accompagner le chef de projet sur les technologies et processus à mettre en œuvre\r\n- Etre le référent SAP HANA en cas de demandes d\'incidents\r\n- Rédiger et fournir les documentations techniques\r\n\r\nEnvironnement technique :\r\nSAP / SAP HANA / SGBD Oracle / Unix / Windows / AWS / ITIL / ARIS / TOGAF / Weblogic / Websphere / Tomcat\r\n\r\nPossibilité de télétravail : à hauteur de 50%\r\n', 'john@doe.com', NULL, '2020-11-02 00:00:00', '2020-11-27 00:00:00', 2, '- Vous justifiez de 5 ans Expérience en tant qu\'Architecte Technique sur SAP dont une expérience significative sur SAP HANA\r\n- Vous avez un bon niveau d\'anglais : niveau B2 (technique : Oral + Ecrit) : travail en contexte international');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `affilies`
--
ALTER TABLE `affilies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cataffilies`
--
ALTER TABLE `cataffilies`
  ADD PRIMARY KEY (`cat_id`,`affilies_id`),
  ADD KEY `affilies_id` (`affilies_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctrine_migration_versions`
--
ALTER TABLE `doctrine_migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `affilies`
--
ALTER TABLE `affilies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cataffilies`
--
ALTER TABLE `cataffilies`
  ADD CONSTRAINT `cataffilies_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `cataffilies_ibfk_2` FOREIGN KEY (`affilies_id`) REFERENCES `affilies` (`id`);
