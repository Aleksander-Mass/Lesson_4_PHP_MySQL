CREATE DATABASE mydatabase; -- �������� ���� ������

USE mydatabase; -- ������������� ���� ������

CREATE TABLE students (
    id INT PRIMARY KEY IDENTITY(1,1),
    name VARCHAR(50) NOT NULL,
    age INT,
    address VARCHAR(100)
);

USE mydatabase; -- ������������� ���� ������

INSERT INTO students (name, age, address)
VALUES ('John Doe', 25, '123 Main St'),
       ('Jane Smith', 30, '456 Elm St'),
       ('Mike Johnson', 28, '789 Oak St');
