-- Esquema de criação da estrutura do banco de dados.

CREATE TABLE `associados` (
  `id` INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT, 
  `nome` TEXT,
  `endereco` TEXT,
  `bairro` TEXT,
  `CEP` INTEGER,
  `dataDeAdmissao` DATE,
  `dataDeNascimento` DATE,
  `telefone` TEXT,
  `RG` TEXT,
  `estado civil` TEXT,
  `cargo_id` INTEGER,
  `area_id` INTEGER,
  `salario` DOUBLE,
  `valor adicional` DOUBLE,
  `mensalidade` INTEGER,
  `mensagem` TEXT,
   FOREIGN KEY(cargo_id) REFERENCES Cargos(id),
   FOREIGN KEY(area_id) REFERENCES Areas(id)
);

CREATE TABLE `areas` (
  `id`  INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
  `nome`  TEXT
);

CREATE TABLE `cargos` (
  `id` INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
  `nome` TEXT,
  `valorAlmoço` DOUBLE
);

CREATE TABLE `convenios` (
  `id` INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
  `razaoSocial` TEXT,
  `rua` TEXT,
  `bairro` TEXT,
  `cidade` TEXT,
  `CEP` TEXT(10),
  `telefone` TEXT,
  `fax` TEXT,
  `percDesc` DOUBLE,
  `contato` TEXT,
  `grupo_id` INTEGER,
  `nomeDoGrupo` TEXT,
  `status` TEXT,
   FOREIGN KEY(grupo_id) REFERENCES Grupos(id)
);

CREATE TABLE `grupos` (
  `id` INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
  `nome` TEXT
);

CREATE TABLE `compras` (
  `id` INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT ,
  `convenio_id` INTEGER,
  `associado_id` INTEGER,
  `nomeAssociado` TEXT,
  `valor` DOUBLE,
  `referencia` TEXT,
  `observacao` TEXT,
   FOREIGN KEY(convenio_id) REFERENCES Convenios(id),
   FOREIGN KEY(associado_id) REFERENCES Associados(id)
);

CREATE TABLE `usuarios` (
  `id` INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
  `login` TEXT,
  `senha` TEXT
);
