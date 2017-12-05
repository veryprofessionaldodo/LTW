.nullvalue NULL

DROP TABLE IF EXISTS list;
DROP TABLE IF EXISTS category;
DROP TABLE IF EXISTS items;

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
  Title TEXT PRIMARY KEY
);

insert into category (Title) values ("LTW");

insert into list (Id, Title, Data, Category, Email) values (1, "LTW", "2017-10-10", "LTW", "rogmatias7@gmail.com");

