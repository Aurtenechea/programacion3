/* Trae el nombre del empleado que mas cobro.
    Como no se puede hacer un join con max() entre los campos a traer...
    La solucion es hacer una subconsulta para luego de unir filtrar para
    traer solo la fila donde el salario sea igual al mayor de todos los salarios.*/

SELECT
    S.SALARY,
    E.FIRST_NAME AS NOMBRE,
    E.LAST_NAME AS APELLIDO,
    E.GENDER AS SEXO

FROM salaries AS S

JOIN employees AS E ON E.EMP_NO = S.EMP_NO

WHERE S.SALARY = (SELECT MAX(salary) FROM salaries)


-- ==================================
/* Aca se puede verificar que el resultado que te da la query anterior
    es el correcto. */

SELECT
    S.SALARY,
    E.FIRST_NAME AS NOMBRE,
    E.LAST_NAME AS APELLIDO,
    E.GENDER AS SEXO

FROM salaries AS S

JOIN employees AS E ON E.EMP_NO = S.EMP_NO

ORDER BY S.SALARY
LIMIT 10;

-- ==================================
-- sino asi:
select max(salary) from salaries
-- max = 158220
