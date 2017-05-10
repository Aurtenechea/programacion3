/*  Limit 0 sirve para probar una consulta sin que devuelva ningun resultado,
    o ejecute nada. Limit tambien permite paginar, ya que utilizando dos numeros
    al final el segundo dice cuantos va a mostrar (ej 3). Y el primer numero dice
    desde que registro empezar.
    Si se utiliza limit con un solo numero, por default es el segundo y el
    primero vale cero */
SELECT
    E.FIRST_NAME AS NOMBRE,
    E.LAST_NAME AS APELLIDO,
    D.DEPT_NAME AS DEPARTAMENTO,
    DM.FROM_DATE AS DESDE,
    DM.TO_DATE AS HASTA,
    E.GENDER AS SEXO

FROM dept_manager AS DM

JOIN employees AS E ON E.EMP_NO = DM.EMP_NO
JOIN departments as D ON D.DEPT_NO = DM.DEPT_NO

-- WHERE D.DEPT_NAME = 'Production'

ORDER BY D.DEPT_NAME, DM.FROM_DATE

-- paginacion
LIMIT 0 3;      -- mostrar  3 empezando del registro 0
-- LIMIT 3 3;   -- mostrar  3 empezando del registro 3
-- LIMIT 6 3;   -- mostrar  3 empezando del registro 6
-- LIMIT 9 3;   -- etc.
