DROP DATABASE IF EXISTS to_do_list;

CREATE DATABASE to_do_list;

USE to_do_list;

CREATE TABLE folder(
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    folder_name VARCHAR(255) NOT NULL
);

CREATE TABLE task(
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT, 
    id_folder INT,
    task_name VARCHAR(255) NOT NULL,
    task_desc TEXT NOT NULL,
    created_at DATE NOT NULL DEFAULT CURRENT_TIMESTAMP,
    final_date DATE NOT NULL,
    priority ENUM ("Baixa", "Média", "Alta") DEFAULT "Baixa",
    FOREIGN KEY (id_folder) REFERENCES folder(id)
);

INSERT INTO folder
(folder_name)
VALUES
('geral');

INSERT INTO folder
(folder_name)
VALUES
('concluidas');