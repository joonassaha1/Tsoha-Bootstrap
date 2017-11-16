-- Lisää CREATE TABLE lauseet tähän tiedostoon

CREATE TABLE Chef(
    id SERIAL PRIMARY KEY,
    name varchar(50) NOT NULL,
    password varchar(50) NOT NULL
);

CREATE TABLE Foodstuff(
    id SERIAL PRIMARY KEY,
    name varchar(50) NOT NULL,
    description varchar(500),
);

CREATE TABLE Recipe(
    chef_id INTEGER REFERENCES Chef(id),
    foodstuff_id INTEGER REFERENCES Foodstuff(id),
    name varchar(50) NOT NULL,
    description varchar(500),
    status boolean DEFAULT TRUE,
    published DATE
);

CREATE TABLE Ingredient(
    foodstuff_id INTEGER REFERENCES Foodstuff(id),
    name varchar(50) NOT NULL
);


