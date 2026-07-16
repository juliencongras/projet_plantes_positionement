DROP DATABASE IF EXISTS projet_plantes_positionement;
CREATE DATABASE projet_plantes_positionement;
USE projet_plantes_positionement;
CREATE TABLE Plantes (
  PlanteID int auto_increment PRIMARY KEY,
  Plante_nom varchar(255) NOT NULL,
  Plante_espece varchar(255),
  Date_achat DATE,
  Plante_image varchar(255),
  Quantite_eau FLOAT,
  Frequence_arosage INT
);

drop user if exists bob@'127.0.0.1';
create user bob@'127.0.0.1' identified by 'password';
grant all privileges on projet_plantes_positionement.* to bob@'127.0.0.1';
