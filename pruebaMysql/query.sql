/*  trae todo los jefes de departamento que hubo por cada dpto ordenados por
    dpto y por fecha. Tambien se puede filtrar por un dpto especifico. */
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

LIMIT 0 10;
