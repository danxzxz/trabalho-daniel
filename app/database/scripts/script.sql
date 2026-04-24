CREATE TABLE IF NOT EXISTS jogadores (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    data_nascimento DATE NOT NULL,
    nacionalidade VARCHAR(100) NULL,
    altura DECIMAL(4,2) NULL,
    peso DECIMAL(5,2) NULL,
    pe_dominante ENUM('Esquerdo', 'Direito', 'Ambos') NULL,
    posicao ENUM('Goleiro', 'Defensor', 'Meio-campista', 'Atacante') NULL,
    time VARCHAR(100) NULL,
    imagem VARCHAR(255) DEFAULT NULL,
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

INSERT INTO jogadores 
(nome, data_nascimento, nacionalidade, altura, peso, pe_dominante, posicao, time, imagem)
VALUES
('Lionel Messi', '1987-06-24', 'Argentina', 1.70, 72.00, 'Esquerdo', 'Atacante', 'Inter Miami', 'https://placehold.co/300x400'),
('Cristiano Ronaldo', '1985-02-05', 'Portugal', 1.87, 83.00, 'Direito', 'Atacante', 'Al Nassr', 'https://placehold.co/300x400'),
('Kylian Mbappé', '1998-12-20', 'France', 1.78, 73.00, 'Direito', 'Atacante', 'PSG', 'https://placehold.co/300x400'),
('Kevin De Bruyne', '1991-06-28', 'Belgium', 1.81, 70.00, 'Direito', 'Meio-campista', 'Manchester City', 'https://placehold.co/300x400'),
('Virgil van Dijk', '1991-07-08', 'Netherlands', 1.93, 92.00, 'Direito', 'Defensor', 'Liverpool', 'https://placehold.co/300x400'),
('Neymar Jr', '1992-02-05', 'Brazil', 1.75, 68.00, 'Direito', 'Atacante', 'Al Hilal', 'https://placehold.co/300x400'),
('Luka Modric', '1985-09-09', 'Croatia', 1.72, 66.00, 'Direito', 'Meio-campista', 'Real Madrid', 'https://placehold.co/300x400'),
('Harry Kane', '1993-07-28', 'England', 1.88, 86.00, 'Direito', 'Atacante', 'Bayern Munich', 'https://placehold.co/300x400'),
('Robert Lewandowski', '1988-08-21', 'Poland', 1.85, 81.00, 'Direito', 'Atacante', 'Barcelona', 'https://placehold.co/300x400'),
('Thibaut Courtois', '1992-05-11', 'Belgium', 2.00, 96.00, 'Esquerdo', 'Goleiro', 'Real Madrid', 'https://placehold.co/300x400')

INSERT INTO usuarios (nome_usuario, email, senha, perfil)
VALUES ('admin', 'admin@email.com', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'admin');

-- admin@email.com 
-- admin123

