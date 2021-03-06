-- create db
CREATE DATABASE gallery IF NOT EXISTS CHARACTER-SET utf8mb4;

-- create table 
CREATE TABLE photos (
  id INT NOT NULL AUTO_INCREMENT,
  image VARCHAR(100) NOT NULL,
  title VARCHAR(255) NOT NULL,
  description VARCHAR(255) NOT NULL,
  PRIMARY KEY(id)
) ENGINE = InnoDB;