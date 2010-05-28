#
# Table structure for table 'fe_users_tx_jhestaffdirectory_sector_mm'
# 
#
CREATE TABLE fe_users_tx_jhestaffdirectory_sector_mm (
  uid_local int(11) DEFAULT '0' NOT NULL,
  uid_foreign int(11) DEFAULT '0' NOT NULL,
  tablenames varchar(30) DEFAULT '' NOT NULL,
  sorting int(11) DEFAULT '0' NOT NULL,
  KEY uid_local (uid_local),
  KEY uid_foreign (uid_foreign)
);




#
# Table structure for table 'fe_users_tx_jhestaffdirectory_further_education_mm'
# 
#
CREATE TABLE fe_users_tx_jhestaffdirectory_further_education_mm (
  uid_local int(11) DEFAULT '0' NOT NULL,
  uid_foreign int(11) DEFAULT '0' NOT NULL,
  tablenames varchar(30) DEFAULT '' NOT NULL,
  sorting int(11) DEFAULT '0' NOT NULL,
  KEY uid_local (uid_local),
  KEY uid_foreign (uid_foreign)
);




#
# Table structure for table 'fe_users_tx_jhestaffdirectory_accreditations_mm'
# 
#
CREATE TABLE fe_users_tx_jhestaffdirectory_accreditations_mm (
  uid_local int(11) DEFAULT '0' NOT NULL,
  uid_foreign int(11) DEFAULT '0' NOT NULL,
  tablenames varchar(30) DEFAULT '' NOT NULL,
  sorting int(11) DEFAULT '0' NOT NULL,
  KEY uid_local (uid_local),
  KEY uid_foreign (uid_foreign)
);



#
# Table structure for table 'fe_users'
#
CREATE TABLE fe_users (
	tx_jhestaffdirectory_room varchar(255) DEFAULT '' NOT NULL,
	tx_jhestaffdirectory_mobile varchar(255) DEFAULT '' NOT NULL,
	tx_jhestaffdirectory_personnel_number varchar(255) DEFAULT '' NOT NULL,
	tx_jhestaffdirectory_cost_unit varchar(255) DEFAULT '' NOT NULL,
	tx_jhestaffdirectory_department varchar(255) DEFAULT '' NOT NULL,
	tx_jhestaffdirectory_function varchar(255) DEFAULT '' NOT NULL,
	tx_jhestaffdirectory_sector int(11) DEFAULT '0' NOT NULL,
	tx_jhestaffdirectory_further_education int(11) DEFAULT '0' NOT NULL,
	tx_jhestaffdirectory_accreditations int(11) DEFAULT '0' NOT NULL
);



#
# Table structure for table 'tx_jhestaffdirectory_sectors'
#
CREATE TABLE tx_jhestaffdirectory_sectors (
	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,
	tstamp int(11) DEFAULT '0' NOT NULL,
	crdate int(11) DEFAULT '0' NOT NULL,
	cruser_id int(11) DEFAULT '0' NOT NULL,
	sorting int(10) DEFAULT '0' NOT NULL,
	deleted tinyint(4) DEFAULT '0' NOT NULL,
	hidden tinyint(4) DEFAULT '0' NOT NULL,
	sector_name varchar(255) DEFAULT '' NOT NULL,
	
	PRIMARY KEY (uid),
	KEY parent (pid)
);



#
# Table structure for table 'tx_jhestaffdirectory_further_education'
#
CREATE TABLE tx_jhestaffdirectory_further_education (
	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,
	tstamp int(11) DEFAULT '0' NOT NULL,
	crdate int(11) DEFAULT '0' NOT NULL,
	cruser_id int(11) DEFAULT '0' NOT NULL,
	sorting int(10) DEFAULT '0' NOT NULL,
	deleted tinyint(4) DEFAULT '0' NOT NULL,
	hidden tinyint(4) DEFAULT '0' NOT NULL,
	fursther_education_name varchar(255) DEFAULT '' NOT NULL,
	
	PRIMARY KEY (uid),
	KEY parent (pid)
);



#
# Table structure for table 'tx_jhestaffdirectory_accreditation'
#
CREATE TABLE tx_jhestaffdirectory_accreditation (
	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,
	tstamp int(11) DEFAULT '0' NOT NULL,
	crdate int(11) DEFAULT '0' NOT NULL,
	cruser_id int(11) DEFAULT '0' NOT NULL,
	sorting int(10) DEFAULT '0' NOT NULL,
	deleted tinyint(4) DEFAULT '0' NOT NULL,
	hidden tinyint(4) DEFAULT '0' NOT NULL,
	accreditation_name varchar(255) DEFAULT '' NOT NULL,
	
	PRIMARY KEY (uid),
	KEY parent (pid)
);