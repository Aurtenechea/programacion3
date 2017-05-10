/*  trae todo los jefes de departamento que hubo por cada dpto ordenados por
    dpto y por fecha. Tambien se puede filtrar por un dpto especifico.
    La uniones de tablas se pueden hacer por un where...
    De esta forma se traen los registros en los que hay coincidencia si en una
    de las dos tablas esta el/los campos que se esta usando para unir en null,
    no trae ese registro.
    Para que no pase esto hay que hacer un left join o right join. */
SELECT
    E.FIRST_NAME AS NOMBRE,
    E.LAST_NAME AS APELLIDO,
    D.DEPT_NAME AS DEPARTAMENTO,
    DM.FROM_DATE AS DESDE,
    DM.TO_DATE AS HASTA,
    E.GENDER AS SEXO

FROM dept_manager AS DM,employees AS E,departments AS D

WHERE E.EMP_NO = DM.EMP_NO AND D.DEPT_NO = DM.DEPT_NO

ORDER BY D.DEPT_NAME, DM.FROM_DATE

-- ============================
/*  o por un join.. */
SELECT
    E.FIRST_NAME AS NOMBRE,
    E.LAST_NAME AS APELLIDO,
    D.DEPT_NAME AS DEPARTAMENTO,
    DM.FROM_DATE AS DESDE,
    DM.TO_DATE AS HASTA,
    E.GENDER AS SEXO

FROM dept_manager AS DM

JOIN employees AS E ON E.EMP_NO = DM.EMP_NO
JOIN departments AS D ON D.DEPT_NO = DM.DEPT_NO

-- WHERE D.DEPT_NAME = 'Production'

ORDER BY D.DEPT_NAME, DM.FROM_DATE

-- ==========================
/*  Si existe un campo en comun entre las tablas se puede usar el natural join.
    */
SELECT
    E.FIRST_NAME AS NOMBRE,
    E.LAST_NAME AS APELLIDO,
    DM.FROM_DATE AS DESDE,
    DM.TO_DATE AS HASTA,
    E.GENDER AS SEXO

FROM dept_manager AS DM
NATURAL JOIN departments AS D
NATURAL JOIN employees AS E



-- ================================

SELECT
    E.FIRST_NAME AS NOMBRE,
    E.LAST_NAME AS APELLIDO,
    DM.FROM_DATE AS DESDE,
    DM.TO_DATE AS HASTA,
    E.GENDER AS SEXO,
    D.*

FROM dept_manager AS DM

JOIN employees AS E using(EMP_NO)
JOIN departments AS D using(DEPT_NO)
