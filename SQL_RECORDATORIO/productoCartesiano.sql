SELECT u.NOMBRE, l.descripcion FROM `usuario` as u, localidad as l
--esto da el producto cartesiano de las dos tablas.


SELECT u.NOMBRE, l.descripcion FROM `usuario` as u, localidad as l where l.id = u.localidad_id
--esto no, sin hacer un join
