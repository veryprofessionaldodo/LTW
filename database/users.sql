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

insert into items (Id, Content, Data, Completed) values (1, "LTW","2017-10-10",1);
