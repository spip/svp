# Changelog

## [Unreleased]

### Security

- spip-team/securite#4832 et spip-team/securite#4833 Sécuriser le téléchargement de zip de plugin ou l'ajout d'un dépôt par saisie du mot de passe

### Fixed

- #4854 Tout cocher/décocher n'agit que sur les plugins visibles de la liste


## [3.0.5] - 2022-05-20

### Security

- spip-team/securite#3733 Échapper l'URL dans le HTML affiché (en mode pas à pas)


## [3.0.4] - 2022-03-25

### Changed

- Compatible SPIP 4.1.0


## [3.0.3] - 2022-03-05

### Added

- Mise à jour des chaînes de langues depuis trad.spip.net

### Fixed

- #4845 Contrairement à l’ancien pclzip ou pcltar (avec les options qu’on leur passait), les archives se déballent avec l’arborescence dans laquelle elles sont emballées


## [3.0.2] - 2022-02-19

### Fixed

- Déclarer la branche 4.1 sinon Plugins SPIP ne peut pas le savoir ni SVP. Devrait pouvoir disparaitre en 4.2 suite au découpage de SVP.


## [3.0.1] - 2022-02-17

- spip/spip#5032 Vérifier la présence de ini_set pour PHP 8


## [3.0.0] - 2022-02-08

### Changed

- Compatibilité PHP 8.1
- Nécessite PHP 7.4 minimum
