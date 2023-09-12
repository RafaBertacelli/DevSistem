create table tbCadastro(
  idCadastro int PRIMARY KEY AUTO_INCREMENT,
  nome varchar(40),
  sobrenome varchar(20),
  telefone varchar(20),
  email varchar(60),
  senha varchar(40)
);

create table tbContato(
	idContato int PRIMARY KEY AUTO_INCREMENT,
    nome varchar(40),
    email varchar(40),
    assunto varchar(200),
    mensagem varchar(2000)
);

create table tbNoticia(
  idNoticia int PRIMARY KEY AUTO_INCREMENT,
    titulo varchar(40),
    noticia varchar (2000),
);


