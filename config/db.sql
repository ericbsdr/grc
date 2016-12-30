
DROP TABLE IF EXISTS businessunits;
CREATE TABLE businessunits (
    id INT AUTO_INCREMENT PRIMARY KEY,
    asset_id INT,
    description VARCHAR(255) NOT NULL,
    owner VARCHAR(255),
    created DATETIME,
    modified DATETIME
);

DROP TABLE IF EXISTS assets;
CREATE TABLE assets (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    description VARCHAR(255),
    owner VARCHAR(255),
    status VARCHAR(255),
    created DATETIME,
    modified DATETIME,
    review DATETIME
);

DROP TABLE IF EXISTS assets_businessunits;
CREATE TABLE assets_businessunits (
    asset_id INT NOT NULL,
    businessunit_id INT NOT NULL,
    PRIMARY KEY (asset_id, businessunit_id),
    FOREIGN KEY businessunit_key(businessunit_id) REFERENCES businessunits(id),
    FOREIGN KEY asset_key(asset_id) REFERENCES assets(id)
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
