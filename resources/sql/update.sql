/* Updating and testing the record of user with username testuser1 */
UPDATE users SET username = 'testuser99' WHERE username = 'testuser1';
SELECT * FROM USERS WHERE username = 'testuser1';
SELECT * FROM USERS WHERE username = 'testuser99';


/* Updating and testing the record of instructor with license_no AB15234232 */
UPDATE instructors SET license_no = 'AB000067' WHERE license_no = 'AB15234232';
SELECT * FROM instructors WHERE license_no = 'AB15234232';
SELECT * FROM instructors WHERE license_no =  'AB000067';

/* Updating and testing the record of instructor with license_no AB15234232 */
UPDATE schools SET name = 'School JKL' WHERE name = 'School XYZ';
SELECT * FROM schools WHERE name = 'School XYZ';
SELECT * FROM schools WHERE name ='School JKL';