.nullvalue NULL
DROP TABLE IF EXISTS user;
DROP TABLE IF EXISTS list;
DROP TABLE IF EXISTS category;
DROP TABLE IF EXISTS items;

CREATE TABLE user (
  Name TEXT NOT NULL,
  Email TEXT PRIMARY KEY,
  Password TEXT NOT NULL
);

CREATE TABLE list(
  Id INTEGER NOT NULL PRIMARY KEY,
  Title TEXT NOT NULL,
  Data DATE NOT NULL,
  Category TEXT NOT NULL,
  Email TEXT NOT NULL,
  FOREIGN KEY (Category) REFERENCES category(Title),
  FOREIGN KEY (Email) REFERENCES user(Email)
);

CREATE TABLE items(
  Id INTEGER NOT NULL,
  Content TEXT NOT NULL,
  Data DATE NOT NULL,
  Completed INTEGER DEFAULT 0,
  FOREIGN KEY (Id) REFERENCES list(Id)
);

CREATE TABLE category(
  Title TEXT PRIMARY KEY,
  Color TEXT NOT NULL
);

insert into user (Name, Email, Password) values ("rogmat7", "rogmatias7@gmail.com","test");
insert into user (Name, Email, Password) values ("test", "test@gmail.com","test");
insert into user (Name, Email, Password)values ("jofermatos", "joanaferreiramatos@gmail.com","test");
insert into user (Name, Email, Password) values ("Ricugh", "Rich_hugh87@hotmail.com","test");
insert into user (Name, Email, Password) values ("Allen", "raymfallen@gmail.com","test");
insert into user (Name, Email, Password) values ("Bruninho", "brunosantos656@gmail.com","test");
insert into user (Name, Email, Password) values ("Katie", "kateofmidletonsfamily@gmail.com","test");
insert into user (Name, Email, Password) values ("Augustinus","augconstanzo@gmail.com","test");
insert into user (Name, Email, Password) values ("Sean9", "seancconner1990@gmail.com","test");
insert into user (Name, Email, Password) values ("Didier", "didiersamlloris@hotmail.com","test");
insert into user (Name, Email, Password) values ("Alberto","albertoogarcia99@hotmail.com","test");
insert into user (Name, Email, Password) values ("test","teste@gmail.com","test");

insert into category (Title,Color) values ("LTW","Blue");

insert into list (Id, Title, Data, Category, Email) values (1, "LTW", "2017-10-10", "LTW", "rogmatias7@gmail.com");
insert into list (Id, Title, Data, Category, Email) values (2, "Reduzir niveis de roleplay por 45% até ao fim do trimestre", "2017-10-10", "LTW", "rogmatias7@gmail.com");
insert into list (Id, Title, Data, Category, Email) values (3, "Git gud at rocket league", "2017-10-10", "LTW", "rogmatias7@gmail.com");
insert into list (Id, Title, Data, Category, Email) values (4, "Ver se isto de facto funciona, por isso texto grande aqui wowowo", "2017-10-10", "LTW", "rogmatias7@gmail.com");
insert into list (Id, Title, Data, Category, Email) values (5, "Tentar nao chorar por isto estar feio ", "2017-10-10", "LTW", "rogmatias7@gmail.com");
insert into list (Id, Title, Data, Category, Email) values (6, "Espera ai, rcom é para a semana?", "2017-10-10", "LTW", "rogmatias7@gmail.com");
insert into list (Id, Title, Data, Category, Email) values (7, "Acho que vou pedir um descanso ao reitor", "2017-10-10", "LTW", "rogmatias7@gmail.com");
insert into list (Id, Title, Data, Category, Email) values (8, "Quero dormir pls", "2017-10-10", "LTW", "rogmatias7@gmail.com");  
insert into list (Id, Title, Data, Category, Email) values (9, "Raposa do artico, escuto", "2017-10-10", "LTW", "rogmatias7@gmail.com");
insert into list (Id, Title, Data, Category, Email) values (10, "Apetece me partir um Linux", "2017-10-10", "LTW", "rogmatias7@gmail.com");

insert into items (Id, Content, Data, Completed) values (1, "LTW","2017-10-10",1);

