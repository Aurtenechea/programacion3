-- el insert no utiliza where
INSERT
INTO
  `tablauno`(
    `DESCRIPCION`,
    `CODIGO`,
    `PRECIO`
  )
VALUES(
   "PRODUCTO1" ,
   333 ,
   10
),
(
   "PRODUCTO2" ,
   334 ,
   12
)

-- si al final de una consulta se pone 1 es como ejecutar la consulta sin condicion...
where 1
