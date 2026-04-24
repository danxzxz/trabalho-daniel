CREATE TABLE IF NOT EXISTS livros (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(255) NOT NULL,
    data_lancamento DATE NOT NULL,
    pais VARCHAR(100) NULL,
    paginas DECIMAL(4,2) NULL,
    genero ENUM('Drama', 'Comedia', 'Romance', 'Ficção') NULL,
    capa VARCHAR(255) DEFAULT NULL,
    criado_em TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


CREATE TABLE IF NOT EXISTS usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome_usuario VARCHAR(50) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    senha VARCHAR(255) NOT NULL,
    perfil VARCHAR(20) NOT NULL DEFAULT 'usuario',
    criado_em TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO livros 
(titulo, data_lancamento, pais, paginas, genero, capa)
VALUES
('Harry Potter', '1997-07-26', 'Inglaterra', 222.0, 'Ficção', 'https://placehold.co/300x400');


INSERT INTO usuarios (nome_usuario, email, senha, perfil)
VALUES ('admin', 'admin@email.com', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'admin');

-- admin@email.com 
-- admin123

ALTER TABLE livros MODIFY paginas INT NULL;
