/* Performing Delete Operations */

use DriveSafeNT;
/* DELETING and testing the record of user with username testuser2 */
-- SELECT * FROM USERS WHERE username = 'testuser2';
DELETE FROM `users` WHERE username = 'testuser2';
SELECT * FROM USERS WHERE username = 'testuser2';

/* DELETING and testing the record of license_no AB152512 belongs to instructor */
-- SELECT * from INSTRUCTORS WHERE license_no = 'AB152512';
DELETE FROM `instructors` WHERE license_no = 'AB152512';
SELECT * from INSTRUCTORS WHERE license_no = 'AB152512';


/* DELETING and testing all the records belongs to user_id 2 */
-- SELECT * from reviews WHERE user_id = '3';
DELETE FROM reviews WHERE user_id = '3';
SELECT * from reviews WHERE user_id = '3';


/* DELETING and testing the record of school with name School JKL */
-- SELECT * from schools WHERE name = 'School JKL';
DELETE FROM schools WHERE name = 'School JKL';
SELECT * from schools WHERE name = 'School JKL';