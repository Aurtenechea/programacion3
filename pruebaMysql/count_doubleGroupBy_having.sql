/*  traer todos los empleados que pasaron mas de una vez por el mismo departamento.  */

SELECT
    E.FIRST_NAME AS NOMBRE,
    E.LAST_NAME AS APELLIDO,
    D.DEPT_NAME AS DEPARTAMENTO,
    count(*) AS CANT_PASOS_POR_DEPTO

FROM dept_emp AS DE

JOIN employees AS E ON E.EMP_NO = DE.EMP_NO
JOIN departments as D ON D.DEPT_NO = DE.DEPT_NO

GROUP BY E.EMP_NO, DE.DEPT_NO   -- separa los grupos
HAVING count(*) > 1;

-- =============================
/*  ESTO FUNCIONA COMO UN JOIN NO SE CUAL ES LA DIFERENCIA. */

SELECT
    E.FIRST_NAME    AS NOMBRE,
    E.LAST_NAME     AS APELLIDO,
    D.DEPT_NAME     AS DEPARTAMENTO
    -- count(*)
FROM
    dept_emp    AS DE,
    employees   AS E,
    departments AS D

WHERE
    E.EMP_NO = DE.EMP_NO    AND
    D.DEPT_NO = DE.DEPT_NO
