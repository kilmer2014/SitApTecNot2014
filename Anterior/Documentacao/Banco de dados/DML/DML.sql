#USUARIOS DO SISTEMA

INSERT INTO Usuario VALUES (1,'kilmer','kilmer','kilmerrodriguezdasilva@gmail.com','Kilmer','Rodriguez','Sussi',null,0,0,1);
INSERT INTO Usuario VALUES (2,'roberto','felipe','roberto@gmail.com','Roberto','Felipe','Sussi',null,0,1,1);
INSERT INTO Usuario VALUES (3,'marcelo','rubens','marcelo@gmail.com','Marcelo','Rubens','Sussi',null,0,0,1);
INSERT INTO Usuario VALUES (4,'carol','pozi','carol@gmail.com','Carol','Pozi','Sussi',null,1,0,1);
INSERT INTO Usuario VALUES (5,'luzia','man�','luzia@gmail.com','Luzia','Man�','Sussi',null,1,1,1);

#RELACAO ENTRE AMIGOS

INSERT INTO Amigo VALUES (1,1,2);
INSERT INTO Amigo VALUES (2,1,3);
INSERT INTO Amigo VALUES (3,1,4);
INSERT INTO Amigo VALUES (4,1,5);
INSERT INTO Amigo VALUES (5,2,3);
INSERT INTO Amigo VALUES (6,2,5);
INSERT INTO Amigo VALUES (7,3,1);
INSERT INTO Amigo VALUES (8,3,2);
INSERT INTO Amigo VALUES (9,5,1);
INSERT INTO Amigo VALUES (10,4,2);

#CATEGORIAS

INSERT INTO Categoria VALUES (1,'Hardware','Artigos sobre hardware');
INSERT INTO Categoria VALUES (2,'Software','Artigos sobre software');

#LOCALIZACOES FANTASIA DOS USUARIOS

INSERT INTO Localizacao VALUES (1,-47.22548,-27.24487,'2014-10-23 12:00:00', 1);
INSERT INTO Localizacao VALUES (2,-47.23548,-27.24487,'2014-10-23 13:00:00', 1);
INSERT INTO Localizacao VALUES (3,-47.24548,-27.24487,'2014-10-23 14:00:00', 2);
INSERT INTO Localizacao VALUES (4,-47.21548,-27.23487,'2014-10-23 15:00:00', 2);
INSERT INTO Localizacao VALUES (5,-47.23548,-27.26487,'2014-10-23 16:00:00', 3);
INSERT INTO Localizacao VALUES (6,-47.24548,-27.26487,'2014-10-23 17:00:00', 3);
INSERT INTO Localizacao VALUES (7,-47.21548,-27.26487,'2014-10-23 18:00:00', 4);
INSERT INTO Localizacao VALUES (8,-47.21548,-27.25487,'2014-10-23 19:00:00', 4);
INSERT INTO Localizacao VALUES (9,-47.21548,-27.26487,'2014-10-23 22:00:00', 5);
INSERT INTO Localizacao VALUES (10,-47.24548,-27.21487,'2014-10-23 02:00:00', 5);

#PUBLICACOES FANTASIA

INSERT INTO Publicacao VALUES (1,'Hardware b�sico','LQWEPQWOKEQWOPEKQWOPEKQW QWKPEO KQWPEOK QWPEOQKW EOPQWK EOP QKWEOPWQK EOPQWK EQWOPKE QPWOEKQO PWKEOPQWK EOPQWKE QOPWKEQWOP KEQWOP KQWOP EKQWOPEKQWOPEQW  QWKLEMQWK�LEM QWE KQWEMQW WW�����QWE WQ/?�QW MKQWEMPQW EMQPWEQWPE ', 0,0,0,now(),now(),1,1);
INSERT INTO Publicacao VALUES (2,'Hardware intermedi�rio','LQWEPQWOKEQWOPEKQWOPEKQW QWKPEO KQWPEOK QWPEOQKW EOPQWK EOP QKWEOPWQK EOPQWK EQWOPKE QPWOEKQO PWKEOPQWK EOPQWKE QOPWKEQWOP KEQWOP KQWOP EKQWOPEKQWOPEQW  QWKLEMQWK�LEM QWE KQWEMQW WW�����QWE WQ/?�QW MKQWEMPQW EMQPWEQWPE ', 0,0,0,now(),now(),5,1);
INSERT INTO Publicacao VALUES (3,'Programando hardware com C','LQWEPQWOKEQWOPEKQWOPEKQW QWKPEO KQWPEOK QWPEOQKW EOPQWK EOP QKWEOPWQK EOPQWK EQWOPKE QPWOEKQO PWKEOPQWK EOPQWKE QOPWKEQWOP KEQWOP KQWOP EKQWOPEKQWOPEQW  QWKLEMQWK�LEM QWE KQWEMQW WW�����QWE WQ/?�QW MKQWEMPQW EMQPWEQWPE ', 0,0,0,now(),now(),4,1);
INSERT INTO Publicacao VALUES (4,'Gest�o de software','LQWEPQWOKEQWOPEKQWOPEKQW QWKPEO KQWPEOK QWPEOQKW EOPQWK EOP QKWEOPWQK EOPQWK EQWOPKE QPWOEKQO PWKEOPQWK EOPQWKE QOPWKEQWOP KEQWOP KQWOP EKQWOPEKQWOPEQW  QWKLEMQWK�LEM QWE KQWEMQW WW�����QWE WQ/?�QW MKQWEMPQW EMQPWEQWPE ', 0,0,0,now(),now(),2,2);
INSERT INTO Publicacao VALUES (5,'Onde existe software?','LQWEPQWOKEQWOPEKQWOPEKQW QWKPEO KQWPEOK QWPEOQKW EOPQWK EOP QKWEOPWQK EOPQWK EQWOPKE QPWOEKQO PWKEOPQWK EOPQWKE QOPWKEQWOP KEQWOP KQWOP EKQWOPEKQWOPEQW  QWKLEMQWK�LEM QWE KQWEMQW WW�����QWE WQ/?�QW MKQWEMPQW EMQPWEQWPE ', 0,0,0,now(),now(),3,2);

#COMENTARIOS FANTASIA DAS PUBLICACOES
INSERT INTO PublicacaoComentario VALUES (1,'Muito bom, me ajudou muito! Leva meu like!', now(),now(),2,2);
INSERT INTO PublicacaoComentario VALUES (2,'Parece mais ctrl + C ctrl +V !', now(),now(),3,3);
INSERT INTO PublicacaoComentario VALUES (3,'Muito bom, me ajudou muito! Leva meu like!', now(),now(),4,4);
INSERT INTO PublicacaoComentario VALUES (4,'Parece mais ctrl + C ctrl +V !', now(),now(),5,5);

#LIKES DAS PUBLICACOES

INSERT INTO PublicacaoLike VALUES(1,1,2,2);
INSERT INTO PublicacaoLike VALUES(2,0,3,3);
INSERT INTO PublicacaoLike VALUES(3,1,4,4);
INSERT INTO PublicacaoLike VALUES(4,0,5,5);
