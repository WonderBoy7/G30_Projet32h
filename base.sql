CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `category`
--

INSERT INTO `category` (`id`, `nom`) VALUES
(1, 'Electronique Media'),
(2, 'Vetement & Accessoire'),
(3, 'Electro Menager'),
(4, 'Mobilier'),
(5, 'fourniture'),
(6, 'test');

-- --------------------------------------------------------


-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `dataproposition`


-- --------------------------------------------------------

--
-- Structure de la table `detail_proposition`
--

CREATE TABLE `detail_proposition` (
  `id` int(11) NOT NULL,
  `idproposition` int(11) NOT NULL,
  `objet1` int(11) NOT NULL,
  `objet2` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



-- --------------------------------------------------------

--
-- Structure de la table `historique`
--

CREATE TABLE `historique` (
  `id` int(11) NOT NULL,
  `idobjet` int(11) NOT NULL,
  `idowner` int(11) NOT NULL,
  `dt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `image`
--

CREATE TABLE `image` (
  `id` int(11) NOT NULL,
  `idobjet` int(11) NOT NULL,
  `path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- --------------------------------------------------------

--
-- Structure de la table `liste`
--

CREATE TABLE `liste` (
  `id` int(11) NOT NULL,
  `idobjet` int(11) NOT NULL,
  `iduser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- --------------------------------------------------------

--
-- Structure de la table `objet`
--

CREATE TABLE `objet` (
  `id` int(11) NOT NULL,
  `idcatego` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `description` varchar(300) NOT NULL,
  `prixestimatif` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



-- --------------------------------------------------------

--
-- Structure de la table `proposition`
--

CREATE TABLE `proposition` (
  `id` int(11) NOT NULL,
  `iduser1` int(11) NOT NULL,
  `iduser2` int(11) NOT NULL,
  `confirmed` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `numéro` bigint(20) NOT NULL,
  `types` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id`, `pseudo`, `email`, `password`, `numéro`, `types`) VALUES
(1, 'admin', 'ard.tolotra@gmail.com', '123root123', 261346000411, 1),
(2, 'test', 'test@gmail.com', '123test', 261346000411, 0),
(4, 'rakoto', 'jean@gmail.com', '789test', 261345014578, 0);

-- --------------------------------------------------------

--
-- Structure de la vue `dataobjet`
--
DROP TABLE IF EXISTS `dataobjet`;

CREATE OR REPLACE VIEW `dataobjet`  AS  select `liste`.`iduser` AS `iduser`,`liste`.`idobjet` AS `idobjet`,`objet`.`idcatego` AS `idcatego`,`objet`.`nom` AS `nom`,`objet`.`description` AS `description`,`objet`.`prixestimatif` AS `prixestimatif`,`image`.`path` AS `path` from ((`liste` join `objet` on((`liste`.`idobjet` = `objet`.`id`))) join `image` on((`liste`.`idobjet` = `image`.`idobjet`))) ;

-- --------------------------------------------------------

DROP TABLE IF EXISTS `dataproposition`;

CREATE OR REPLACE VIEW `dataproposition`  AS  select `proposition`.`id` AS `id`,`proposition`.`iduser1` AS `proposer`,`proposition`.`iduser2` AS `owner`,`detail_proposition`.`objet1` AS `objet1`,`detail_proposition`.`objet2` AS `objet2`,`proposition`.`confirmed` AS `confirmed` from (`proposition` join `detail_proposition` on((`detail_proposition`.`idproposition` = `proposition`.`id`))) ;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `detail_proposition`
--
ALTER TABLE `detail_proposition`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idproposition` (`idproposition`),
  ADD KEY `objet1` (`objet1`),
  ADD KEY `objet2` (`objet2`);

--
-- Index pour la table `historique`
--
ALTER TABLE `historique`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idobjet` (`idobjet`),
  ADD KEY `idowner` (`idowner`);

--
-- Index pour la table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idobjet` (`idobjet`);

--
-- Index pour la table `liste`
--
ALTER TABLE `liste`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idobjet` (`idobjet`),
  ADD KEY `iduser` (`iduser`);

--
-- Index pour la table `objet`
--
ALTER TABLE `objet`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idcatego` (`idcatego`);

--
-- Index pour la table `proposition`
--
ALTER TABLE `proposition`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `detail_proposition`
--
ALTER TABLE `detail_proposition`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `historique`
--
ALTER TABLE `historique`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `image`
--
ALTER TABLE `image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `liste`
--
ALTER TABLE `liste`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT pour la table `objet`
--
ALTER TABLE `objet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT pour la table `proposition`
--
ALTER TABLE `proposition`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `detail_proposition`
--
ALTER TABLE `detail_proposition`
  ADD CONSTRAINT `detail_proposition_ibfk_1` FOREIGN KEY (`idproposition`) REFERENCES `proposition` (`id`),
  ADD CONSTRAINT `detail_proposition_ibfk_2` FOREIGN KEY (`objet1`) REFERENCES `objet` (`id`),
  ADD CONSTRAINT `detail_proposition_ibfk_3` FOREIGN KEY (`objet2`) REFERENCES `objet` (`id`);

--
-- Contraintes pour la table `historique`
--
ALTER TABLE `historique`
  ADD CONSTRAINT `historique_ibfk_1` FOREIGN KEY (`idobjet`) REFERENCES `objet` (`id`),
  ADD CONSTRAINT `historique_ibfk_2` FOREIGN KEY (`idowner`) REFERENCES `user` (`id`);

--
-- Contraintes pour la table `image`
--
ALTER TABLE `image`
  ADD CONSTRAINT `image_ibfk_1` FOREIGN KEY (`idobjet`) REFERENCES `objet` (`id`);

--
-- Contraintes pour la table `liste`
--
ALTER TABLE `liste`
  ADD CONSTRAINT `liste_ibfk_1` FOREIGN KEY (`idobjet`) REFERENCES `objet` (`id`),
  ADD CONSTRAINT `liste_ibfk_2` FOREIGN KEY (`iduser`) REFERENCES `user` (`id`);

--
-- Contraintes pour la table `objet`
--
ALTER TABLE `objet`
  ADD CONSTRAINT `objet_ibfk_1` FOREIGN KEY (`idcatego`) REFERENCES `category` (`id`);

