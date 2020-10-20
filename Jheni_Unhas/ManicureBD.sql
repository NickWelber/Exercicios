DROP DATABASE IF EXISTS manicure;
CREATE DATABASE manicure DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
use manicure;

-- Estrutura para tabela `CLIENTE`

CREATE TABLE cliente (
	id_cliente int auto_increment NOT NULL,
	cpf numeric(11 , 0 ) unique NOT NULL,
	nome varchar(50) NOT NULL,
	sobrenome  VARCHAR(50) NOT NULL,
	telefone varchar(50) NOT NULL,
	email varchar(255) NOT NULL,
    sexo enum ('F','M', 'O'),
	data_nascimento date NOT NULL,
	endereco varchar(255) NOT NULL,
    numero int,
	complemento varchar(50),
	bairro varchar(255) NOT NULL,
	cidade varchar(20) NOT NULL,
	estado char(2) NOT NULL,
		primary key (id_cliente) 
);

-- Inserindo dados para a tabela `CLIENTE`

INSERT INTO cliente 
(cpf, nome, sobrenome, telefone, email, sexo, data_nascimento, endereco, numero, complemento, bairro, cidade, estado) VALUES	
(12345678900, 'Admin', 'Administrador', '11223344', 'admin@jheniunhas.com', 'O', '2020-10-20', 'Rua com Endereço', 00, NULL, 'Bairro A', 'Cidade A', 'SP'),
(38544362893, 'Nick', 'Garcia', '16992681098', 'nick.garcia@jheniunhas.com', 'M', '1992-05-12', 'Rua Gaspar Pierobom', 69, NULL, 'Alto de Pinheiros 2', 'Araraquara', 'SP'),
(12398745611, 'Maria', 'Jose', '1620146508', 'mariajose@gmail.com', 'F', '1986-11-26', 'Rua Torta', 101, 'Apt 312 Blc 3B', 'Vale da Vida', 'Rincao', 'SP'),
(55224433100, 'Joana', 'Dark', '11987694321', 'joana.d@gmail.com', 'F', '1980-01-10', 'Rua Altos da Vida', 9011, NULL, 'Vale Verde', 'Araraquara', 'SP');

select * from cliente;
-- --------------------------------------------------------

-- Estrutura para tabela `MANICURE`

CREATE TABLE manicure (
	id_manicure int auto_increment NOT NULL,
	cpf numeric(11 , 0 ) unique NOT NULL,
	nome varchar(50) NOT NULL,
	sobrenome  VARCHAR(50) NOT NULL,
	telefone varchar(50),
	email varchar(255) NOT NULL,
    sexo enum ('F','M', 'O'),
	data_nascimento date NOT NULL,
		primary key (id_manicure) 
);

-- Inserindo dados para a tabela `MANICURE`

INSERT INTO manicure 
(cpf, nome, sobrenome, telefone, email, sexo, data_nascimento) VALUES
(98765432100, 'Jhenifer', 'Garcia', '16993055991', 'jheni.garcia@jheniunhas.com', 'F', '1993-08-26'),
(11122233300, 'Marta', 'Siqueira', '16997885543', 'marta_siqueira30@jheniunhas.com', 'F', '1990-07-30');

select * from manicure;
-- --------------------------------------------------------

-- Estrutura para tabela `MANICURE`

CREATE TABLE usuario (
	id int auto_increment NOT NULL,
    usuario varchar(255) NOT NULL,
    senha varchar(255) NOT NULL,
    nome varchar(255) NOT NULL,
	email varchar(255) NOT NULL,
	permissao int(11) NOT NULL,
		primary key (id)
);

-- Inserindo dados para a tabela `MANICURE`
-- 1 = Admin / 2 = Vizualizador / 3 = Editor / Senha 1234

INSERT INTO usuario (usuario, senha, nome, email, permissao) VALUES
('admin', '700c8b805a3e2a265b01c77614cd8b21', 'Administrador', 'admin@jheniunhas.com', 1),
('nick', '700c8b805a3e2a265b01c77614cd8b21', 'Nick Welber', 'nick.garcia@jheniunhas.com', 1),
('mariaj', '700c8b805a3e2a265b01c77614cd8b21', 'Maria Jose', 'mariajose@gmail.com', 2),
('jheni', '700c8b805a3e2a265b01c77614cd8b21', 'Jhenifer Garcia', 'jheni.garcia@jheniunhas.com', 3);

select * from usuario;
-- --------------------------------------------------------

-- Estrutura para tabela `CATEGORIA_SERVICO`

CREATE TABLE categoria_servico (
	id_categoria_servico int auto_increment NOT NULL,
	nome_categoria varchar(50) NOT NULL,
		primary key (id_categoria_servico) 
);

-- Inserindo dados para a tabela `SERVICO`

INSERT INTO categoria_servico 
(nome_categoria) VALUES
('Depilacao'),
('Design de Unhas'),
('Manutenção'),
('Manicure e Pedicure'),
('Blindagem'),
('SPA');

select * from categoria_servico;
-- --------------------------------------------------------

-- Estrutura para tabela `SERVICO`

CREATE TABLE servico (
	id_servico int auto_increment NOT NULL,
	id_categoria_servico int NOT NULL,
    nome_servico varchar(50) NOT NULL,
	preco_servico double NOT NULL,
    data_servico date,
		primary key (id_servico),
        foreign key (id_categoria_servico) references categoria_servico(id_categoria_servico) ON update cascade
);

-- Inserindo dados para a tabela `SERVICO`

INSERT INTO servico 
(id_categoria_servico, nome_servico, preco_servico, data_servico) VALUES
('1', 'Banho de Lua Completo', 50.99, '2020-02-10'),
('1', 'Banho de Lua Regiao', 15.99, '2020-02-10'),
('1', 'Abdome', 30.99, '2020-02-10'),
('1', 'Axilas', 15.99, '2020-02-10'),
('1', 'Buco', 5.99, NULL),
('1', 'Costa', 40.99, NULL),
('1', 'Perna Completa', 30.99, NULL),
('1', 'Perna Regiao', 20.99, '2020-02-10'),
('1', 'Rosto', 25.99, '2020-02-10'),
('1', 'Egipicia', 30.99, '2020-10-10'),
('1', 'Virilha', 20.99, '2020-10-10'),
('1', 'Virilha e Canal', 30.99, '2020-10-10'),
('2', 'Unha de Acriflix', 60.99, '2020-10-10'),
('2', 'Unha de Acrigel', 85.99, '2020-10-10'),
('2', 'Unha de Gel', 80.99, '2020-10-10'),
('2', 'Unha de Poligel', 100.99, '2020-10-10'),
('2', 'Unha de Porcelana', 140.99, '2020-10-10'),
('2', 'Unha de Fibra de Vidro', 140.99, '2020-10-10'),
('2', 'Unha de Postica', 30.99, '2020-10-10'),
('3', 'Manut. Unha de Acriflix', 30.99, NULL),
('3', 'Manut. Unha de Acrigel', 40.99, NULL),
('3', 'Manut. Unha de Gel', 40.99, NULL),
('3', 'Manut. Unha de Poligel', 50.99, NULL),
('3', 'Manut. Unha de Porcelana', 70.99, NULL),
('3', 'Manut. Unha de Fibra de Vidro', 70.99, NULL),
('3', 'Manut. Unha de Postica', 15.99, NULL),
('4', 'Manicure', 15.99, NULL),
('4', 'Pedicure', 15.99, NULL),
('4', 'Pé e Mão', 25.99, NULL),
('5', 'Blindagem de Diamante', 50.99, NULL),
('5', 'Banho de Brilho', 40.99, NULL),
('6', 'Spa dos Pés', 30.99, '2020-10-15'),
('6', 'Spa das Mãos', 30.99, '2020-10-15'),
('6', 'Tratamento Calos e Rachaduras', 35.99, '2020-10-15');

select * from servico;
-- --------------------------------------------------------

-- Estrutura para tabela `AGENDA`

CREATE TABLE agenda (
	id_agenda int auto_increment NOT NULL,
	data_servico date NOT NULL,
	horario_servico time NOT NULL,
	situacao enum ('FINALIZADO','PENDENTE', 'CANCELADO'),
	id_servico int,
	id_cliente int NOT NULL,
	id_manicure int NOT NULL,
		primary key (id_agenda),
        foreign key (id_servico) references servico(id_servico) ON update cascade,
        foreign key (id_cliente) references cliente(id_cliente) ON update cascade,
        foreign key (id_manicure) references manicure(id_manicure) ON update cascade	
);

-- Inserindo dados para a tabela `AGENDA`

INSERT INTO agenda (data_servico, horario_servico, situacao, id_servico, id_cliente, id_manicure) VALUES
('2020-02-10', '20:30:00', 'PENDENTE', 5, 3, 1),
('2020-01-10', '10:10:00', 'FINALIZADO', 1, 4, 2),
('2020-10-10', '11:30:00', 'CANCELADO', 16, 3, 1);

select * from agenda;
-- --------------------------------------------------------

-- Estrutura para tabela `VENDA`

CREATE TABLE venda (
	id_venda int auto_increment NOT NULL,
	qtd_vendida int NOT NULL,
	data_venda date NOT NULL,
    forma_pagamento varchar(50) NOT NULL,
	valor_total double NOT NULL,
	id_agenda int NOT NULL,
	id_servico int NOT NULL,
	id_cliente int NOT NULL,
		primary key (id_venda),
        foreign key (id_agenda) references agenda(id_agenda) ON update cascade,
		foreign key (id_servico) references servico(id_servico) ON update cascade,
        foreign key (id_cliente) references cliente(id_cliente) ON update cascade	
);

-- Inserindo dados para a tabela `VENDA`

INSERT INTO venda (qtd_vendida, data_venda, forma_pagamento, valor_total, id_agenda, id_servico, id_cliente) VALUES
(1, '2020-02-10', 'Dinheiro', 140.99, 1, 17, 3),
(1, '2020-01-10', 'Cartão Débito', 50.99, 2, 1, 4),
(1, '2020-09-10', 'Cartão Crédito', 35.99, 3, 34, 3);

select * from venda;
-- --------------------------------------------------------

-- Estrutura para view `agenda_venda`

--
create view agenda_venda as select
	agenda.id_agenda, data_servico, horario_servico, situacao, id_venda, venda.id_servico, venda.id_cliente, 
    id_manicure, qtd_vendida, data_venda, forma_pagamento, valor_total
	FROM agenda
		INNER JOIN venda ON 
			agenda.id_agenda = venda.id_agenda;

select * from agenda_venda;
-- --------------------------------------------------------