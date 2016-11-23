DROP TABLE IF EXISTS singles;
CREATE TABLE singles (
  Name VARCHAR(16) NOT NULL ,
  Gender CHAR(1) NOT NULL ,
  Age SMALLINT(2) NOT NULL CHECK (VALUE > 0 AND VALUE <= 99),
  Personality CHAR(4) NOT NULL ,
  OS VARCHAR(8) NOT NULL ,
  Min SMALLINT(2) NOT NULL CHECK (VALUE > 0 AND VALUE <= 99),
  Max SMALLINT(2) NOT NULL CHECK (VALUE > 0 AND VALUE <= 99)
);
INSERT INTO singles(Name, Gender, Age, Personality, OS, Min, Max) VALUES ('Ada Lovelace', 'F', '96', 'ISTJ', 'Linux', '24', '99');
INSERT INTO singles(Name, Gender, Age, Personality, OS, Min, Max) VALUES ('Adele Goldberg', 'F', '65', 'ENFJ', 'Windows', '50', '70');
INSERT INTO singles(Name, Gender, Age, Personality, OS, Min, Max) VALUES ('Alan Turing', 'M', '41', 'ESTP', 'Mac OS X', '31', '50');
INSERT INTO singles(Name, Gender, Age, Personality, OS, Min, Max) VALUES ('Anakin Skywalker', 'M', '27', 'INTJ', 'Linux', '15', '30');
INSERT INTO singles(Name, Gender, Age, Personality, OS, Min, Max) VALUES ('Angry Video Game Nerd', 'M', '29', 'ISTJ', 'Mac OS X', '1', '99');
INSERT INTO singles(Name, Gender, Age, Personality, OS, Min, Max) VALUES ('Anita Borg', 'F', '54', 'ISFP', 'Windows', '41', '55');
INSERT INTO singles(Name, Gender, Age, Personality, OS, Min, Max) VALUES ('Barbara Liskov', 'F', '71', 'ESFJ', 'Mac OS X', '41', '76');
INSERT INTO singles(Name, Gender, Age, Personality, OS, Min, Max) VALUES ('Bill Gates', 'M', '52', 'INTJ', 'Windows', '2', '99');
INSERT INTO singles(Name, Gender, Age, Personality, OS, Min, Max) VALUES ('Bill Joy', 'M', '54', 'ENFP', 'Linux', '50', '70');
INSERT INTO singles(Name, Gender, Age, Personality, OS, Min, Max) VALUES ('Bjarne Stroustroup', 'M', '59', 'INFJ', 'Windows', '40', '62');
INSERT INTO singles(Name, Gender, Age, Personality, OS, Min, Max) VALUES ('Buffy Summers', 'F', '27', 'INTP', 'Windows', '18', '49');
INSERT INTO singles(Name, Gender, Age, Personality, OS, Min, Max) VALUES ('Charles Babbage', 'M', '79', 'ESFP', 'Linux', '30', '82');
INSERT INTO singles(Name, Gender, Age, Personality, OS, Min, Max) VALUES ('Dana Scully', 'F', '41', 'ISTJ', 'Mac OS X', '36', '54');
INSERT INTO singles(Name, Gender, Age, Personality, OS, Min, Max) VALUES ('Deanna Troi', 'F', '53', 'ENFJ', 'Mac OS X', '32', '48');
INSERT INTO singles(Name, Gender, Age, Personality, OS, Min, Max) VALUES ('Donald Knuth', 'M', '70', 'INTJ', 'Linux', '12', '17');
INSERT INTO singles(Name, Gender, Age, Personality, OS, Min, Max) VALUES ('Edsger Dijkstra', 'M', '72', 'ISTP', 'Linux', '16', '58');
INSERT INTO singles(Name, Gender, Age, Personality, OS, Min, Max) VALUES ('Ellen Ripley', 'F', '35', 'ESFJ', 'Linux', '20', '40');
INSERT INTO singles(Name, Gender, Age, Personality, OS, Min, Max) VALUES ('Frances Allen', 'F', '78', 'ESTP', 'Linux', '67', '78');
INSERT INTO singles(Name, Gender, Age, Personality, OS, Min, Max) VALUES ('Gordon Moore', 'M', '81', 'ENFP', 'Windows', '60', '99');
INSERT INTO singles(Name, Gender, Age, Personality, OS, Min, Max) VALUES ('Grace Hopper', 'F', '87', 'ISFP', 'Windows', '47', '80');
INSERT INTO singles(Name, Gender, Age, Personality, OS, Min, Max) VALUES ('Jadzia Dax', 'F', '46', 'ENFJ', 'Mac OS X', '18', '32');
INSERT INTO singles(Name, Gender, Age, Personality, OS, Min, Max) VALUES ('James Gosling', 'M', '55', 'ESFJ', 'Linux', '18', '40');
INSERT INTO singles(Name, Gender, Age, Personality, OS, Min, Max) VALUES ('Jeannette Wing', 'F', '38', 'INTP', 'Mac OS X', '45', '60');
INSERT INTO singles(Name, Gender, Age, Personality, OS, Min, Max) VALUES ('Kathryn Janeway', 'F', '49', 'ESTJ', 'Windows', '30', '55');
INSERT INTO singles(Name, Gender, Age, Personality, OS, Min, Max) VALUES ('Lara Croft', 'F', '23', 'ENTP', 'Linux', '18', '30');
INSERT INTO singles(Name, Gender, Age, Personality, OS, Min, Max) VALUES ('Leeloo', 'F', '19', 'ISTJ', 'Linux', '1', '99');
INSERT INTO singles(Name, Gender, Age, Personality, OS, Min, Max) VALUES ('Leia Organa', 'F', '53', 'ISFJ', 'Windows', '20', '60');
INSERT INTO singles(Name, Gender, Age, Personality, OS, Min, Max) VALUES ('Lenore Blum', 'F', '70', 'INTP', 'Mac OS X', '66', '99');
INSERT INTO singles(Name, Gender, Age, Personality, OS, Min, Max) VALUES ('Marissa Mayer', 'F', '35', 'ENTP', 'Linux', '20', '40');
INSERT INTO singles(Name, Gender, Age, Personality, OS, Min, Max) VALUES ('Mary Lou Jepsen', 'F', '45', 'ISTJ', 'Windows', '10', '80');
INSERT INTO singles(Name, Gender, Age, Personality, OS, Min, Max) VALUES ('Ms Frizzle', 'F', '39', 'ENTP', 'Mac OS X', '19', '49');
INSERT INTO singles(Name, Gender, Age, Personality, OS, Min, Max) VALUES ('Natalie Portman', 'F', '26', 'INFJ', 'Mac OS X', '20', '39');
INSERT INTO singles(Name, Gender, Age, Personality, OS, Min, Max) VALUES ('Niklaus Wirth', 'M', '76', 'ENFJ', 'Windows', '50', '77');
INSERT INTO singles(Name, Gender, Age, Personality, OS, Min, Max) VALUES ('Nostalgia Critic', 'M', '28', 'ENTJ', 'Linux', '12', '79');
INSERT INTO singles(Name, Gender, Age, Personality, OS, Min, Max) VALUES ('Nyota Uhura', 'F', '77', 'ENFP', 'Mac OS X', '70', '99');
INSERT INTO singles(Name, Gender, Age, Personality, OS, Min, Max) VALUES ('Oldspice Guy', 'M', '36', 'ENTJ', 'Windows', '1', '99');
INSERT INTO singles(Name, Gender, Age, Personality, OS, Min, Max) VALUES ('Rasmus Lerdorf', 'M', '41', 'ENTP', 'Linux', '15', '35');
INSERT INTO singles(Name, Gender, Age, Personality, OS, Min, Max) VALUES ('Richard Stallman', 'M', '57', 'ISFJ', 'Linux', '46', '56');
INSERT INTO singles(Name, Gender, Age, Personality, OS, Min, Max) VALUES ('River Tam', 'F', '26', 'ENTJ', 'Linux', '18', '25');
INSERT INTO singles(Name, Gender, Age, Personality, OS, Min, Max) VALUES ('Roberta Williams', 'F', '57', 'ENFP', 'Windows', '54', '67');
INSERT INTO singles(Name, Gender, Age, Personality, OS, Min, Max) VALUES ('Rosie O Donnell', 'F', '46', 'ENFJ', 'Windows', '30', '50');
INSERT INTO singles(Name, Gender, Age, Personality, OS, Min, Max) VALUES ('Sarah Connor', 'F', '53', 'ISFP', 'Windows', '49', '67');
INSERT INTO singles(Name, Gender, Age, Personality, OS, Min, Max) VALUES ('Seven of Nine', 'F', '40', 'ISTJ', 'Windows', '12', '50');
INSERT INTO singles(Name, Gender, Age, Personality, OS, Min, Max) VALUES ('Stewie Griffin', 'M', '1', 'INTP', 'Mac OS X', '1', '59');
INSERT INTO singles(Name, Gender, Age, Personality, OS, Min, Max) VALUES ('Stuart Reges', 'M', '48', 'INFP', 'Mac OS X', '18', '35');
INSERT INTO singles(Name, Gender, Age, Personality, OS, Min, Max) VALUES ('Tpol', 'F', '35', 'ISTJ', 'Windows', '30', '39');
INSERT INTO singles(Name, Gender, Age, Personality, OS, Min, Max) VALUES ('Trinity', 'F', '42', 'ESFP', 'Linux', '35', '55');
INSERT INTO singles(Name, Gender, Age, Personality, OS, Min, Max) VALUES ('Tyler Durden', 'M', '46', 'ENFP', 'Mac OS X', '20', '39');
INSERT INTO singles(Name, Gender, Age, Personality, OS, Min, Max) VALUES ('Valentina Tereshkova', 'F', '71', 'ENTJ', 'Mac OS X', '55', '65');
INSERT INTO singles(Name, Gender, Age, Personality, OS, Min, Max) VALUES ('Vint Cerf', 'M', '67', 'ISFP', 'Mac OS X', '28', '55');
INSERT INTO singles(Name, Gender, Age, Personality, OS, Min, Max) VALUES ('Yukihiro Matsumoto', 'M', '45', 'ENTP', 'Mac OS X', '10', '25');
INSERT INTO singles(Name, Gender, Age, Personality, OS, Min, Max) VALUES ('Zelda', 'F', '59', 'ESTP', 'Windows', '40', '62');
