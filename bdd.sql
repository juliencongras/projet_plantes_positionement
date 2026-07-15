DROP DATABASE IF EXISTS projet_plantes_positionement;
CREATE DATABASE projet_plantes_positionement;
USE projet_plantes_positionement;
CREATE TABLE Plantes (
  PlanteID int PRIMARY KEY,
  Plante_nom varchar(255) NOT NULL,
  Plante_espece varchar(255),
  Date_achat DATE,
  Plante_image varchar(255),
  Quantite_eau FLOAT,
  Frequence_arosage INT
);