SELECT `firstname` `lastname`
FROM customers
WHERE (firstname LIKE "%L%" or lastname "%l%") AND emailAddress LIKE"%@gmail.com%"

SELECT product
FROM products
WHERE dateAdded = '30' AND listPrice > 500;

SELECT * FROM `products`
WHERE `productsCode` LIKE "%a%" AND `discountPercent` >=30

