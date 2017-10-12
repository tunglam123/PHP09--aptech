SELECT firstName,lastName,orderDate 
FROM orders
INNER JOIN customers ON orders.customerID = customers.customerID
WHERE orderDate LIKE '2014-06-__%';

SELECT city,emailAddress 
FROM addresses 
INNER JOIN customers ON addresses.customerID = customers.customerID
WHERE emailAddress LIKE '%@gmail.com%';

SELECT emailAddress,city 
FROM addresses
INNER JOIN customers ON addresses.customerID = customers.customerID
WHERE addresses.city = 'Beaverton';

SELECT productName,categoryName 
FROM products 
INNER JOIN categories ON products.categoryID = categories.categoryID
WHERE categories.categoryName LIKE '%a%' AND listPrice > 500;
