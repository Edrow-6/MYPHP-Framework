CREATE TABLE utilisateurs (
  id                int(8) NOT NULL AUTO_INCREMENT, 
  fournisseur_oauth varchar(10) NOT NULL, 
  uid_oauth         varchar(100) NOT NULL, 
  nom               varchar(40) NOT NULL, 
  prenom            varchar(40) NOT NULL, 
  email             varchar(100) NOT NULL, 
  photo             varchar(255) NOT NULL,
  numero_tel        varchar(15) DEFAULT 'NULL',
  mot_de_passe      varchar(20) DEFAULT 'NULL', 
  type_compte       varchar(10) DEFAULT 'NULL', 
  cree_le           timestamp DEFAULT current_timestamp() NOT NULL, 
  modifie_le        timestamp DEFAULT current_timestamp() NOT NULL, 
  PRIMARY KEY (id));