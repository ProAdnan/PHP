

/*Task & Exercise (1)*/
/*Design a relational database with these tables:*/

CREATE DATABASE library;

/*Then write the SQL statements to create the tables and set primary/foreign keys.*/
/*Authors (author_id, name)*/
CREATE TABLE Authors (

    author_id int NOT NULL,

    name varchar(255),

    PRIMARY KEY (author_id)


);

/*Books (book_id, title, author_id)*/
CREATE TABLE Books (

    book_id int NOT NULL,

    title varchar(255),

    author_id int,

    PRIMARY KEY (book_id),

    FOREIGN KEY (author_id) REFERENCES AUTHORS(author_id)

);

/*Task 2: Draw an ER diagram for a system with:*/
CREATE DATABASE customers;

USE customers;

CREATE TABLE Customers (

    customer_id INT NOT NULL,

    name VARCHAR(255),

    PRIMARY KEY (customer_id)

);

CREATE TABLE Products (

    product_id INT NOT NULL,

    PRIMARY KEY (product_id)

);

CREATE TABLE Orders (
    order_id INT NOT NULL,

    customer_id INT NOT NULL,

    PRIMARY KEY (order_id),

    FOREIGN KEY (customer_id) REFERENCES Customers(customer_id)

);

CREATE TABLE OrderProducts (

    order_id INT NOT NULL,

    product_id INT NOT NULL,

    PRIMARY KEY (order_id, product_id),

    FOREIGN KEY (order_id) REFERENCES Orders(order_id),

    FOREIGN KEY (product_id) REFERENCES Products(product_id)

);




/*Task 3 (Challenge): Explain the difference between a primary key and a unique constraint. Can both exist in one table?*/

/*

A primary key uniquely identifies each record in a table,
 cannot have NULL values, and there's only one per table, 
 forming the core identifier (often clustered index) for relationships.
 
  A unique constraint also enforces uniqueness but allows one NULL value and multiple per table,
   serving to prevent duplicate data in non-primary key columns
   
   */

CREATE TABLE primary_unique (
    first_id INT NOT NULL,
    secand_id INT NOT NULL UNIQUE,
    PRIMARY KEY (order_id, product_id),
);




/* Task & Exercise (2)*/

/*task 1*/


create table customers(
customer_id int not null primary key,
customer_name varchar(255) 

);


create table oreders(

order_id int not null primary key,

customer_id int not null,

foreign key(customer_id) REFERENCES customer(customer_id)

);

create table products(
product_id int not null primary key,

product_name varchar(255),

product_price INT

);


CREATE TABLE juction (

    order_id INT NOT NULL,

    product_id INT NOT NULL,

    PRIMARY KEY (order_id, product_id),

    FOREIGN KEY (order_id) REFERENCES oreder(order_id),

    FOREIGN KEY (product_id) REFERENCES product(product_id)

);


/*Task 2:*/

/*The difference between transitive and partial dependency in
 database normalization relates to how non-key attributes depend on
  the primary key, particularly in tables with composite keys*/


  /*A partial dependency occurs when a non-key attribute is dependent on only part of a composite primary key.*/
  /*A transitive dependency occurs when a non-key attribute is dependent on another non-key attribute*/


  create table family( /* Partial Dependency */

    member_id int primary key,

    member_name varchar(255)  /*here*/


  );



  create table stores( /* Transitive  Dependency */

    store_id int primary key,

    store_name varchar(255),

    store_branch_id int,

    store_branch_Location varchar(255) /*here*/


  );





  /* Task & Exercise (3)*/

  create table Orange_students (

    student_id int not null AUTO_INCREMENT PRIMARY key,

    student_name varchar(255),

    year_born int ,

    student_email varchar(255)
  );

  Insert into Orange_students (student_name,year_born,student_email) values
  
  ("Adnan",2003,"abubelal.adnan17@gmail.com"),
  ("Abdulla", 2003 , "abdulla@gmail.com"),
  ("Hamza", 2003 , "hamza@gmail.com");




select student_id,student_name from Orange_students where year_born >= 2000 ORDER BY student_name;


update Orange_students set student_email="EMMMAil@gmail.com" where student_id=1;


delete from Orange_students where student_id=2;




/*Task & Exercise (4)*/

CREATE table users(

user_id int not null AUTO_INCREMENT primary key,

user_name varchar(255),

city int ,

email VARCHAR(255)

);



CREATE table orders (

order_id int not null AUTO_INCREMENT primary key,

user_id int,

amount int,


foreign(user_id) REFERENCES users(user_id)


);



CREATE table newsletter (

email varchar(255)


);



/*List all cities with more than 5 users.*/
SELECT city, COUNT(*) AS user_count FROM users GROUP BY city HAVING COUNT(*) > 5;

/*Show users who haven’t placed any orders (use LEFT JOIN).*/
SELECT u.* FROM users u
LEFT JOIN orders o ON u.user_id = o.user_id
WHERE o.order_id IS NULL;




/*3. Get the average order amount per user. 4*/
SELECT u.user_id, u.name, AVG(o.amount) AS avg_order_amount
FROM users u
JOIN orders o ON u.user_id = o.user_id
GROUP BY u.user_id, u.name;



/*4.List users who spent more than the average*/
SELECT u.user_id, u.name, SUM(o.amount) AS total_spent
FROM users u
JOIN orders o ON u.user_id = o.user_id
GROUP BY u.user_id, u.name
HAVING SUM(o.amount) >
       (SELECT AVG(amount) FROM orders);


/*Create a UNION between newsletter subscribers and registered users*/
SELECT email FROM users
UNION
SELECT email FROM newsletter_subscribers;




/*Task & Exercise (5)*/

/* Task 1 */


/*

Data: data is the value like it is like age: 89 , its just a value without any proccessing, 

Information: is the same value but we apply some proccess on it , like retrive it or update it to 90,

now its called information.


Database: is a collection of organized,structured data that stored in computer system to analyze,process,retrive it or

any action on that data.

DBMS:system software that manage,retrive or store data in the computer system, ex:sql server.it protect data,reduce the 

dependency, increase the data integrity and more on data.


RDBMS: ex:Mysql: is a relational database management system that used to manage data in tables in row and colums.

*/

/* Task 2: */

/*

i will take a hospital example.

hospital has many information and data about a lot of thing like pationts, doctors, analyses, medicines and more.

to manage all those data we need a system with members to controll all those data throw an ui, ex:

i can make a person that maneges the pationts table, add,remove,update,he has limited permissions that he can do.
(in sql i will retrive the pationts data to this person and limited actions).

also a admin that he has access on medicines that he must match the exsist medices and medicns in website(database).


*/


/* end */