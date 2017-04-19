--count trae el numero de filas que cumplen con un determinado criterio.
--Ademas dentro del parentesis se especifica el campo sobre el cual se cuentan las filas.
--Esto tiene sentido ya que las filas null no se cuentan.

--si no se tiene ningun criterio en la consulta, este trae la cantidad de filas.
SELECT COUNT(ProductID)
FROM Products;

--si se especifica una condicion count contara las filas que cumplen con esta.
SELECT COUNT(ProductID)
FROM Products
WHERE Price < 10;

--count se puede usar junto con DISTINCT para traer todas las filas cuyos precios son distintos
SELECT COUNT (DISTINCT Price)
FROM Products;

--otro del mismo tipo, asi trae la cantidad de paises de las que hay Customers.
SELECT COUNT(distinct Country) as cantDivesidadPaises
FROM Customers

--otra forma de usarlo es para contar la cantidad de Customers de cada pais
SELECT COUNT() as cantDivesidadPaises
FROM Customers
group by Country
