CREATE TABLE pessoa
(
    id bigserial NOT NULL,
    nome character varying(60),
    sobre_nome character varying(80),
    cpf character varying(18),
    PRIMARY KEY (id)
)

CREATE TABLE fornecedor
(
    id bigserial NOT NULL,
    nome character varying(20),
    cnpj character varying(20),
    contato character varying(20),
    PRIMARY KEY (id)
)

CREATE TABLE usuario
(
    id bigserial NOT NULL,
    nome character varying(20),
    sobrenome character varying(30),
    cpf character varying(15),
    genero character varying(20),
    PRIMARY KEY (id)
)