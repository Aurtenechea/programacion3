SELECT SupplierName
FROM Suppliers
WHERE EXISTS (SELECT ProductName FROM Products WHERE SupplierId = Suppliers.supplierId AND Price = 22);

-- trae todos los registros de Suppliers que cumplan con la condicion de la subconsulta.
-- Es decir que es como un where en el que se puede usar una subconsulta.
-- Por cada registro de Suppliers va a ejecutar la subconsulta, si esta trae algun registro. El registro
-- principal va a entrar en la vista. 
