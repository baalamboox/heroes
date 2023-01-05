CREATE DATABASE IF NOT EXISTS heroes;
USE heroes;
CREATE TABLE IF NOT EXISTS tabla_heroes(
    id_heroe INT NOT NULL PRIMARY KEY,
    nombre_heroe VARCHAR(255) NOT NULL,
    aparencia_heroe VARCHAR(255) NOT NULL,
    biografia_heroe VARCHAR(255) NOT NULL,
    trabajo_heroe VARCHAR(255) NOT NULL,
    conexiones_heroes VARCHAR(255) NOT NULL,
    imagenes_heroes VARCHAR(255) NOT NULL
) ENGINE = InnoDB;