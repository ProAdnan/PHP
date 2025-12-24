CREATE TABLE users;

CREATE TABLE EMPLOYEES(

    EMP_ID INT AUTO_INCREMENT PRIMARY KEY,

    EMP_NAME VARCHAR(255),
    
    EMP_EMAIL VARCHAR(255)

);

CREATE table contacts (
    id INT AUTO_INCREMENT PRIMARY KEY,

    con_name VARCHAR(255),

    con_email VARCHAR(255),

    con_message VARCHAR(255)

);