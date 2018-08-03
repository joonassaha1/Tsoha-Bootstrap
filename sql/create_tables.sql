-- Lisää CREATE TABLE lauseet tähän tiedostoon

CREATE TABLE Chef(
    id SERIAL PRIMARY KEY,
    nick varchar(50) NOT NULL,
    password varchar(50) NOT NULL
);

CREATE TABLE Foodstuff(
    id SERIAL PRIMARY KEY,
    nick varchar(50) NOT NULL,
    description varchar(500)
);

CREATE TABLE Recipe(
    id SERIAL PRIMARY KEY,
    chef_id INTEGER REFERENCES Chef(id),
    foodstuff_id INTEGER REFERENCES Foodstuff(id),
    nick varchar(50) NOT NULL,
    description varchar(500),
    status boolean DEFAULT TRUE,
    published DATE
);

CREATE TABLE Ingredient(
    id SERIAL PRIMARY KEY,
    /*foodstuff_id INTEGER REFERENCES Foodstuff(id),*/
    nick varchar(50) NOT NULL
);


