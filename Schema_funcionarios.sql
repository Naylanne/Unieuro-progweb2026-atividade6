CREATE TABLE usuario (
    id SERIAL PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(50) NOT NULL
);

INSERT INTO usuario (username, password)
VALUES ('admin', '123');

CREATE TABLE funcionario (
    id SERIAL PRIMARY KEY,
    nome VARCHAR(100),
    cargo VARCHAR(50),
    email VARCHAR(100),
    telefone VARCHAR(20),
    status BOOLEAN
);