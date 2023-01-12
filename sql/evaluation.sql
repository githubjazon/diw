Evaluation -> Requêtes de BDD:




1- Liste des clients français --------FINI-----------------------------------------------------------------------------------------------------

SELECT ROW_NUMBER() OVER(ORDER BY CompanyName )AS '', CompanyName AS'Société' , ContactName AS'Contact' , ContactTitle AS'Fonction', phone AS'Téléphone' 
FROM customers 
WHERE customers.Country = "France"; 

2- Liste des produits vendus par le fournisseur "Exotic Liquids" ---------------FINI-----------------------------------------------------------------

SELECT ROW_NUMBER() OVER(ORDER BY ProductName) AS '', ProductName AS'Produit', UnitPrice AS'Prix' 
FROM products 
WHERE SupplierID = 1;

3- Nombre de produits mis à disposition par les fournisseurs français (tri par nombre de produits décroissant)------------FINI-------------------------------

SELECT ROW_NUMBER() OVER(ORDER BY CompanyName) AS'', CompanyName AS "Fournisseur", COUNT(UnitsOnOrder) AS "Nombre de produits"
FROM suppliers
JOIN products
ON products.SupplierID = suppliers.SupplierID
WHERE Country = "France" GROUP BY CompanyName;

4- Liste des clients français ayant passé plus de 10 commandes ----------------------------------------FINI-------------------------------------------------

SELECT ROW_NUMBER() OVER(ORDER BY CompanyName) AS'',CompanyName AS'Client', COUNT(OrderId) AS'Nombre de commandes' 
FROM customers 
JOIN orders 
ON orders.CustomerID = customers.CustomerID 
WHERE Country = 'France' GROUP BY CompanyName HAVING COUNT(OrderId) > 10;


5- Liste des clients dont le montant cumulé de toutes les commandes passées est supérieur à 30000 € ---------------FINI-------------------------------------

SELECT CompanyName AS'Client', SUM(UnitPrice * Quantity) AS"Chiffre d'Affaires", ShipCountry AS'Pays' 
FROM customers 
INNER JOIN orders 
ON orders.CustomerID = customers.CustomerID 
JOIN orderDetails 
ON orderDetails.orderID = orders.OrderID GROUP BY CompanyName HAVING SUM(UnitPrice * Quantity) > 30000 ORDER BY `Chiffre d'Affaires` DESC 


6- Liste des pays dans lesquels des produits fournis par "Exotic Liquids" ont été livrés ------------------------FINI-----------------------------------------

SELECT ShipCountry FROM orders JOIN orderDetails ON orderDetails.OrderID = orders.OrderID 
JOIN products ON products.ProductID = orderDetails.ProductID
JOIN suppliers ON suppliers.SupplierID = products.SupplierID 
WHERE suppliers.CompanyName = 'Exotic Liquids' GROUP BY ShipCountry;


7- Chiffre d affaires global sur les ventes de 1997 -----------------------------------------------------FINI-------------------------------------------------

SELECT SUM(UnitPrice * Quantity) AS"Montant ventes 1997"
FROM `orderDetails` 
JOIN `orders`
ON orders.OrderID = `orderDetails`.`OrderID` 
WHERE YEAR(OrderDate) = 1997;


8- Chiffre d affaires détaillé par mois, sur les ventes de 1997 ------------------------------------FINI-------------------------------------------------

SELECT MONTH(OrderDate) AS'Mois 97', SUM(UnitPrice * Quantity) AS'Montant ventes'
FROM `orderDetails`
JOIN `orders` 
ON orders.OrderID = `orderDetails`.`OrderID`
WHERE YEAR(OrderDate) = 1997 GROUP BY MONTH(OrderDate);

9- A quand remonte la dernière commande du client nommé "Du monde entier" ? -----------------------------FINI-------------------------------------------------

SELECT ROW_NUMBER() OVER(ORDER BY CompanyName )AS '', MAX(OrderDate) AS'Date de dernière commande' 
FROM orders 
JOIN customers
ON customers.CustomerID = orders.CustomerID
WHERE CompanyName = 'Du monde entier';

10- Quel est le délai moyen de livraison en jours ? ----------------------------------------------------FINI-------------------------------------------------

SELECT AVG  (DATEDIFF(ShippedDate, OrderDate )) AS'Délai moyen de livraison en jours'
FROM `orders`;