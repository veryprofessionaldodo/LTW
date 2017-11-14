CREATE TABLE list(
  Title TEXT NOT NULL,
  Data DATE NOT NULL,
  Category TEXT NOT NULL,
  FOREIGN KEY (Category) REFERENCES category(Title)
);


CREATE TABLE category(
  Title TEXT PRIMARY KEY
);
