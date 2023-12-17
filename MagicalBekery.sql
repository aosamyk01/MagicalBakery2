create database magicalbakery_phpoo;
use magicalbakery_phpoo;
create table usuario (
nome varchar(255),
email varchar(255) primary key,
senha varchar(255));
select * from usuario;
CREATE TABLE produtos (
    id INT NOT NULL AUTO_INCREMENT, 
    tipo VARCHAR(45) NOT NULL, 
    nome VARCHAR(45) NOT NULL, 
    descricao VARCHAR(90) NOT NULL, 
    imagem VARCHAR(80) NOT NULL, 
    preco DECIMAL (5,2) NOT NULL, 
PRIMARY KEY (id));
select * from produtos;

INSERT INTO produtos (tipo, nome, descricao, imagem, preco) VALUES ('Bolos', 'Red Velvet', 'Bolo de frutas vermelhas macio e fofinho', '../assets/img/bolo3.jpg', '30.00');
INSERT INTO produtos (tipo, nome, descricao, imagem, preco) VALUES ('Bolos', 'Brigadeiro', 'Bolo com brigadeiro gormet e com chocolate belga', '../assets/img/bolo2.jpg', '20.00');
INSERT INTO produtos (tipo, nome, descricao, imagem, preco) VALUES ('Bolos', 'Prestígio', 'Coco ralado extrafino com um toque de leite de coco', '../assets/img/bolo4.jpg', '22.00');
INSERT INTO produtos (tipo, nome, descricao, imagem, preco) VALUES ('Bolos', 'Floresta Negra', 'Raspas de chocolate com chantilly e cereja', '../assets/img/bolo5.jpg', '25.00');
INSERT INTO produtos (tipo, nome, descricao, imagem, preco) VALUES ('Tortas', 'Doce de leite', 'Doce de leite original de Minas Gerais, com chantily', '../assets/img/torta4.jpg', '15.90');
INSERT INTO produtos (tipo, nome, descricao, imagem, preco) VALUES ('Tortas', 'Banoffe', 'Banana picada com chantily e doce de leite cremosos', '../assets/img/torta1.jpg', '20.00');
INSERT INTO produtos (tipo, nome, descricao, imagem, preco) VALUES ('Tortas', 'Limão', 'Saborosa torta de limão com raspas de limão siciliano e chantily', '../assets/img/torta2.jpg', '18.00');
INSERT INTO produtos (tipo, nome, descricao, imagem, preco) VALUES ('Tortas', 'Morango', 'Deliciosa torta de morango com calda de frutas vemelhas', '../assets/img/torta3.jpg', '17.50');
INSERT INTO produtos (tipo, nome, descricao, imagem, preco) VALUES ('Doces', 'Brigadeiro de Doce de leite', 'Doce de leite com açúcar de confeiteiro', '../assets/img/doce5.jpg', '2.00');
INSERT INTO produtos (tipo, nome, descricao, imagem, preco) VALUES ('Doces', 'Pão de mel', 'Delicioso pão de mel com pedaços de chocolate e mel diretamente da colmeia', '../assets/img/doce3.jpg', '5.00');
INSERT INTO produtos (tipo, nome, descricao, imagem, preco) VALUES ('Doces', 'Brigadeiro recheado de leite ninho', 'Delicioso brigadeiro com leite ninho de qualidade', '../assets/img/doce4.jpg', '2.00');
INSERT INTO produtos (tipo, nome, descricao, imagem, preco) VALUES ('CupCakes', 'Ferrero Rocher', 'Ferrero rocher com confetes de chocolate', '../assets/img/cupcake5.jpg', '6.00');
INSERT INTO produtos (tipo, nome, descricao, imagem, preco) VALUES ('CupCakes', 'Brigadeiro', 'Brigadeiro com canela', '../assets/img/cupcake2.jpg', '6.00');
INSERT INTO produtos (tipo, nome, descricao, imagem, preco) VALUES ('CupCakes', 'Ferrero Rocher', 'Ferrero rocher com confetes de chocolate', '../assets/img/cupcake2.jpg', '6.00');



/*update produtos set imagem = 'img/cafe-cremoso.jpg' where id = 1;
update produtos set imagem = 'img/cafe-com-leite.jpg' where id = 2;
update produtos set imagem = 'img/cappuccino.jpg' where id = 3;
update produtos set imagem = 'img/cafe-gelado.jpg' where id = 4;
update produtos set imagem = 'img/bife.jpg' where id = 5;
update produtos set imagem = 'img/prato-peixe.jpg' where id = 6;
update produtos set imagem = 'img/prato-frango.jpg' where id = 7;
update produtos set imagem = 'img/fettuccine.jpg' where id = 8;
*/
select * from produtos;
#delete from produtos where id >33;
update produtos set imagem = concat("../assets/img",imagem);

select * from usuario;


alter table usuario add perfil varchar(50) default(0);
update usuario set perfil = 'admin' where email = 'abc@ifsp.edu.br';