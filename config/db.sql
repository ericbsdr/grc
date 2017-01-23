DROP DATABASE grc;
CREATE DATABASE grc;
USE grc;

DROP TABLE IF EXISTS businessunits;
CREATE TABLE businessunits (
    id INT AUTO_INCREMENT PRIMARY KEY,
    description VARCHAR(255) NOT NULL,
    owner VARCHAR(255),
    created DATETIME,
    modified DATETIME
);

DROP TABLE IF EXISTS primary_assets;
CREATE TABLE primary_assets (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    description VARCHAR(255),
    owner VARCHAR(255),
    status VARCHAR(255),
    created DATETIME,
    modified DATETIME,
    review DATETIME
);

INSERT INTO primary_assets (id, name) VALUES
	(1, 'Information de santé'),
	(2, 'Information personnelle des agents'),
	(3, 'Information de configuration');

DROP TABLE IF EXISTS asset_classifications;
CREATE TABLE IF NOT EXISTS asset_classifications (
  id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  name varchar(100) NOT NULL,
  criteria text NOT NULL,
  asset_classification_type_id int(11) NOT NULL,
  created datetime NOT NULL,
  modified datetime NOT NULL
);

INSERT INTO asset_classifications (id, name, criteria, asset_classification_type_id) VALUES
	(1, 'Critique', 'Interruption < à 2H intolérable', 1),
	(2, 'Important', 'Interruption de 2H à 8H tolérable', 1),
	(3, 'Significatif', 'Interruption de 8H à 24H tolérable', 1),
	(4, 'Faible ou inexistant', 'Interruption > à 24H tolérable', 1),

	(5, 'Critique', 'Mise en danger d\'un patient, pronostic vital', 2),
	(6, 'Important', 'Entraîne des conséquence dommageable sur le patient', 2),
	(7, 'Significatif', 'Suceptible de générer des erreurs détectables', 2),
	(8, 'Faible ou inexistant', 'Sans conséquence', 2),

	(9, 'Critique', 'Secret médical', 3),
	(10, 'Important', 'Diffusion aux seules personnes habilitées. Les informations sont protégées par le secret médical ou le secret professionnel et par la législation sur les données à caractère médical.', 3),
	(11, 'Significatif', 'Diffusion interne.', 3),
	(12, 'Faible ou inexistant', 'Les informations peuvent être lues par tous', 3);

DROP TABLE IF EXISTS asset_classification_types;
CREATE TABLE IF NOT EXISTS asset_classification_types (
  id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  name varchar(100) NOT NULL
);

INSERT INTO asset_classification_types (id, name) VALUES
	(1, 'Disponibilité'),
	(2, 'Intégrité'),
	(3, 'Confidentialité');

DROP TABLE IF EXISTS asset_classifications_primary_assets;
CREATE TABLE IF NOT EXISTS asset_classifications_primary_assets (
  id int(11) NOT NULL AUTO_INCREMENT,
  asset_classifications_id int(11) NOT NULL,
  primary_asset_id int(11) NOT NULL,
  PRIMARY KEY (asset_classifications_id, primary_asset_id),
  FOREIGN KEY asset_classifications_key(asset_classifications_id) REFERENCES asset_classifications(id),
  FOREIGN KEY primary_asset_key(primary_asset_id) REFERENCES primary_assets(id)
);

DROP TABLE IF EXISTS secondary_assets;
CREATE TABLE secondary_assets (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    description VARCHAR(255),
    owner VARCHAR(255),
    status VARCHAR(255),
    primary_asset_id INT NOT NULL,
    created DATETIME,
    modified DATETIME,
    review DATETIME
);

DROP TABLE IF EXISTS businessunits_primary_assets;
CREATE TABLE businessunits_primary_assets (
    primary_asset_id INT NOT NULL,
    businessunit_id INT NOT NULL,
    PRIMARY KEY (primary_asset_id, businessunit_id),
    FOREIGN KEY businessunit_key(businessunit_id) REFERENCES businessunits(id),
    FOREIGN KEY primary_asset_key(primary_asset_id) REFERENCES primary_assets(id)
);

DROP TABLE IF EXISTS assetstypes;
CREATE TABLE assetstypes (
	id INT AUTO_INCREMENT PRIMARY KEY,
	name VARCHAR(255) NOT NULL,
	created DATETIME,
    modified DATETIME
);

DROP TABLE IF EXISTS policy_statuses;
CREATE TABLE policy_statuses (
	id INT AUTO_INCREMENT PRIMARY KEY,
	name VARCHAR(255) NOT NULL,
	created DATETIME,
    modified DATETIME
);

DROP TABLE IF EXISTS regulatory;
CREATE TABLE IF NOT EXISTS regulatory (
  id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  name varchar(100) NOT NULL,
  description text NOT NULL,
  risk_magnifier float DEFAULT NULL,
  created datetime NOT NULL,
  modified datetime NOT NULL
);

DROP TABLE IF EXISTS policies;
CREATE TABLE policies (
	id INT AUTO_INCREMENT PRIMARY KEY,
	name VARCHAR(255) NOT NULL,
	description VARCHAR(255),
    policy_status_id INT,
    project_id INT,
    next_review_date DATETIME,
	created DATETIME,
    modified DATETIME
);

DROP TABLE IF EXISTS controls;
CREATE TABLE controls (
	id INT AUTO_INCREMENT PRIMARY KEY,
	name VARCHAR(255) NOT NULL,
	description VARCHAR(255),
    status VARCHAR(255),
    policy_id INT,
    project_id INT,
    audit_metric_description VARCHAR(255),
    audit_success_crtieria VARCHAR(255),
    audit_dates_id INT,
	created DATETIME,
    modified DATETIME
);

DROP TABLE IF EXISTS audit_dates;
CREATE TABLE audit_dates (
	id INT AUTO_INCREMENT PRIMARY KEY,
	date DATETIME
);

DROP TABLE IF EXISTS projects;
CREATE TABLE projects (
	id INT AUTO_INCREMENT PRIMARY KEY,
	name VARCHAR(255)
);

DROP TABLE IF EXISTS threats;
CREATE TABLE IF NOT EXISTS threats (
  id int AUTO_INCREMENT PRIMARY KEY,
  name varchar(100) NOT NULL
);

INSERT INTO threats (id, name) VALUES
	(1, 'Grèves'),
	(2, 'Perte de matériel involontaire'),
	(3, 'Perte involontaire d\'information'),
	(4, 'Vol de matériel'),
	(5, 'Vol d\'information'),
	(6, 'Ecoute réseau'),
	(7, 'Attaque Réseau'),
	(8, 'Attaque d\'une application web'),
	(9, 'Malware/Trojan'),
	(10, 'Virus'),
	(11, 'Ingérinie Sociale'),
	(12, 'Catastrophes naturelles'),
	(13, 'Incendie'),
	(14, 'Attaque par Brute Force'),
	(15, 'Attaque DOS'),
	(16, 'Man in the Middle'),
	(17, 'Fraude'),
	(18, 'Attaque terroriste'),
	(19, 'Innondation'),
	(20, 'Abus de privileges'),
	(21, 'Intrusion'),
	(22, 'Espionnage');

/* TO DO : mettre en lien les actifs supports avec des vulnérabilités et menaces pour qu'elles soient suggérées dans l'analyse de risques */

DROP TABLE IF EXISTS vulnerabilities;
CREATE TABLE IF NOT EXISTS vulnerabilities (
  id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
  name varchar(100) NOT NULL
);

INSERT INTO vulnerabilities (id, name) VALUES
	(1, 'Manque d\'information'),
	(2, 'Manque de tests d\'integrité'),
	(3, 'Manque de journaux d\'évènements'),
	(4, 'Absence de gestion des changements'),
	(5, 'Supplier Failure'),
	(6, 'Manque de redondance d\'alimentation électrique'),
	(7, 'Défaut de contrôle d\'accès'),
	(8, 'Défaut de patch de sécurité'),
	(9, 'Vulnerabilities d\'une application web'),
	(10, 'Manque de procédures'),
	(11, 'Manque d\'authentication forte'),
	(12, 'Manque de chiffrement'),
	(13, 'Dysfonctionnement matériel'),
	(14, 'Dysfonctionnement logiciel'),
	(15, 'Manque de systèmes d\'extinction de feu'),
	(16, 'Mots de passe faibles'),
	(17, 'Manque de sensibilisation'),
	(18, 'Ports réseaux ouverts'),
	(19, 'Zone sismique'),
	(20, 'Zone sensible aux catastrophes naturelles'),
	(21, 'Zone inondable'),
	(22, 'Réseau non protégé'),
	(23, 'Cablage non sécurisé'),
	(24, 'Faiblesse dans les pratiques de développement logiciel');

