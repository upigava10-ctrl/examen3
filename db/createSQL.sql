CREATE DATABASE examen_php;

USE examen_php;

-- =========================
-- Tabla de usuarios
-- =========================
CREATE TABLE usuarios (
   id INT AUTO_INCREMENT PRIMARY KEY,
   username VARCHAR(50) NOT NULL,
   password VARCHAR(100) NOT NULL,
   rol VARCHAR(20) NOT NULL
);

INSERT INTO usuarios (username, password, rol) VALUES
('admin', '1234', 'admin'),
('user', '1234', 'user');

-- =========================
-- Tabla de películas
-- =========================
CREATE TABLE peliculas (
   id INT AUTO_INCREMENT PRIMARY KEY, 
   titulo VARCHAR(100) NOT NULL,
   descripcion TEXT,
   precio DECIMAL(10,2) NOT NULL
);

INSERT INTO peliculas (titulo, descripcion, precio) VALUES
('Avengers', 'Superhéroes salvan al mundo', 80),
('Batman', 'El caballero de la noche', 75),
('Spiderman', 'El hombre araña', 85),
('Jurassic Park', 'Dinosaurios reviven', 70),
('Titanic', 'Historia de amor en el mar', 60),
('Matrix', 'Realidad simulada', 90),
('Inception', 'Sueños dentro de sueños', 95),
('Interstellar', 'Viaje espacial', 100),
('Joker', 'Origen del villano', 85),
('Toy Story', 'Juguetes con vida', 65);

-- =========================
-- Tabla de compras
-- =========================
CREATE TABLE compras (
   id INT AUTO_INCREMENT PRIMARY KEY,
   usuario VARCHAR(50) NOT NULL,
   id_pelicula INT NOT NULL,
   nombre_pelicula VARCHAR(50) NOT NULL,
   cantidad_boletos INT NOT NULL,
   precio_boleto DECIMAL(10,2) NOT NULL,
   monto_total DECIMAL(10,2) NOT NULL,
   fecha TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);