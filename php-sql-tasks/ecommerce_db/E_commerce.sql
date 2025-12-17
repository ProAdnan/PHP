CREATE DATABASE ecommerce_db;

USE ecommerce_db;

/*  creations */

CREATE TABLE customers (

customer_id int null AUTO_INCREMENT PRIMARY KEY,

customer_name VARCHAR(255),

phone_number int,

Address_s varchar(255),

email VARCHAR(255)

pass_word VARCHAR(255)



);




CREATE TABLE products (

product_id not null AUTO_INCREMENT PRIMARY KEY,

product_name VARCHAR(255),

product_description VARCHAR(255),

Image_URL varchar(255),

product_price int,

category_id int,


FOREIGN key (category_id) REFERENCES  categories(category_id)


);




CREATE TABLE orders (

order_id int not null primary key,

order_name varchar(255),

order_price varchar(255),

customer_id int not null,


payment_id int,


FOREIGN key (customer_id) REFERENCES customers(customer_id),

FOREIGN key (payment_id) REFERENCES payments(payment_id)



);




CREATE TABLE order_products (

    order_id INT NOT NULL,

    product_id INT NOT NULL,

    PRIMARY KEY (order_id, product_id),

    FOREIGN KEY (order_id) REFERENCES orders(order_id),

    FOREIGN KEY (product_id) REFERENCES products(product_id)

);





CREATE TABLE categories (

category_id int primary key,


category_name varchar(255),




);



CREATE TABLE payments (

payment_id not null primary key ,

payment_method varchar(255)


);


/* insertions */

Insert into customers (customer_name,phone_number,Address_s,email,pass_word) values
  
  ("Adnan",0780632320,"amman","abubelal.adnan17@gmail.com","1234"),

  ("Lena",07806454320,"amman","lena@gmail.com","343242"),

  ("hamza",0780565620,"amman","hamza@gmail.com","1234"),

  ("khaled",0780645320,"amman","khaled@gmail.com","1951651"),

  ("mohammed",0780618540,"amman","mohaammed@gmail.com","981949"),

  ("samer",0780632320,"amman","samer@gmail.com","49651698516"),

  ("khalelele",0544155656,"amman","kh@gmail.com","8949496516");




  
Insert into products (product_name,product_description,Image_URL ,product_price,category_id) values
  
  ("laptop","pretty laptop with 8 ram","./laptops.png",200,1),

  ("monitor", "msi monitor" , "./monitors" , 90 ,  2),

  ("monitor samsung","samsung monitor","./monitors",140,2);
  



 
Insert into orders (order_name,order_price,customer_id ,payment_id) values
  
  ("laptop" , 200 , 3 , 1 ),
  ("monitor samsung" , 140 , 3 , 1 ),
  
  ("monitor", 90 , 5 , 2);



 
  
Insert into order_products (order_id,product_id) values
  
  (3 , 2 ),
  (5, 7);



  
Insert into categories (category_id,category_name) values
  
  (1 , "laptops"),
  (2, "monitors");



  
Insert into payments (payment_id,payment_method) values
  
  (1 , "card"),

  (2, "cash on delivary"),

  (3, "click"); 



/* updating */

UPDATE customers SET customer_name = 'malek'

WHERE CustomerID = 7;


UPDATE products SET product_description="its a lenovo laptop" , product_price = 150, 

WHERE product_name = "laptop";



/* deletion */

DELETE FROM payments WHERE payment_method="click";

DELETE FROM orders WHERE customer_id=5;




/* selections */


select * from products;

select * from customers;


select * from orders where  customer_id= 3 ;


select * from customers where customer_id > 2 ORDER BY customer_name;

select customer_name,phone_number,Address_s from customers  LIMIT 5;



/* Functions */

select AVG(product_price) from products where category_id=2;


select  SUM(order_price) from orders where customer_id= 3;


select  COUNT(customer_name) from customers where Address_s= "amman";





/* JOINs */ 

/* inner join*/

SELECT product_name, product_description, category_name

FROM Products

INNER JOIN categories ON products.category_id = categories.category_id;



/*left join */

SELECT customers.customer_id, orders.order_id

FROM customers

LEFT JOIN orders ON customers.customer_id = orders.order_id;























  
