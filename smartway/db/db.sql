CREATE DATABASE IF NOT EXISTS smartway;
USE smartway;

CREATE TABLE IF NOT EXISTS acompanhamento(
    acid            INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
    ac_situacao     VARCHAR(50) NOT NULL,
    ac_data         VARCHAR(50) NOT NULL,
    ac_descricao    VARCHAR(32) NOT NULL,
    PRIMARY KEY (acid)
);

CREATE TABLE IF NOT EXISTS usuario(
    userid          INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
    u_email         VARCHAR(50) NOT NULL,
    u_telefone      VARCHAR(50) NOT NULL,
    u_senha         VARCHAR(32) NOT NULL,
    u_endereco      VARCHAR(50) NOT NULL,
    u_nivel         VARCHAR(1) DEFAULT '1',
    PRIMARY KEY (userid)
);

CREATE TABLE IF NOT EXISTS funcionario(
    fid         INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
    f_nome      VARCHAR(50) NOT NULL,
    f_email     VARCHAR(50) NOT NULL,
    f_senha     VARCHAR(32),
    PRIMARY KEY (fid)
);

CREATE TABLE IF NOT EXISTS ordem_servico(
    ordemid         INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
    os_nome         VARCHAR(50) NOT NULL,
    os_produto      VARCHAR(50) NOT NULL,
    os_defeito      VARCHAR(50) NOT NULL,
    os_detalhe      VARCHAR(255)NOT NULL,
    os_email        VARCHAR(50),
    os_andamento    VARCHAR(20) DEFAULT 'Em Aberto',
    PRIMARY KEY (ordemid)
);

CREATE TABLE IF NOT EXISTS contato(
    cid             INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
    c_nome          VARCHAR(50) NOT NULL,
    c_telefone      VARCHAR(15) NOT NULL,
    c_email         VARCHAR(50) NOT NULL,
    c_menssagem     VARCHAR(255)NOT NULL,
    PRIMARY KEY (cid)
);