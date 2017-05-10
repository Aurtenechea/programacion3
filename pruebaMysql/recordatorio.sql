SELECT department, COUNT(*) AS "Number of employees"
FROM employees
WHERE state = 'CA'
GROUP BY department;



