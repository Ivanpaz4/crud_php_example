
CREATE DATABASE libro;

USE libro;
-- Crear la tabla 'libros'

CREATE TABLE libros (
    titulo VARCHAR(255),
    autor VARCHAR(255),
    genero VARCHAR(100),
    anio_publicacion INT
);

-- Insertar datos en la tabla 'libros'
INSERT INTO libros (titulo, autor, genero, anio_publicacion) VALUES
('Cien años de soledad', 'Gabriel García Márquez', 'Realismo Mágico', 1967),
('1984', 'George Orwell', 'Distopía', 1949),
('Don Quijote de la Mancha', 'Miguel de Cervantes', 'Clásico', 1605),
('El señor de los anillos', 'J.R.R. Tolkien', 'Fantasía', 1954),
('Orgullo y prejuicio', 'Jane Austen', 'Romance', 1813),
('Matar a un ruiseñor', 'Harper Lee', 'Drama', 1960),
('Crimen y castigo', 'Fiódor Dostoyevski', 'Clásico Ruso', 1866),
('El gran Gatsby', 'F. Scott Fitzgerald', 'Ficción', 1925),
('Los miserables', 'Victor Hugo', 'Drama', 1862),
('La Odisea', 'Homero', 'Épica', -800);

