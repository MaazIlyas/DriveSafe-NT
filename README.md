# DriveSafe NT Redesign, Built with Laravel 9

## 1.0. Description

#### 1.1. Project Brief
DriveSafe NT is a driver education and training program. The website (https://www.drivesafe.nt.gov.au/) is over five years old and management has requested a full review to maintain contemporary user experience design for their current and future customers. Our team is redesigning the Instructors Cards and Profile info for the DriveSafe NT website. We are introducing an admin view for the drivesafe NT admin team to perform CRUD operations on the instructors. 

#### 1.2. Project Goals

The overarching goal of the project is to update the web site's features and improve the efficiency of its users. The focus of the changes will be on the instructors and classes page that serves as a reference to book instructors and attend classes.

#### 1.3. Business Related Info

DriveSafe NT is a Northern Territory Government Driver Education and Licensing Program that is available to any Territory resident over the age of 16. This site hosts a user base to give DriveSafe NT participants and driving instructors/assessors access to their information and manage their involvement in the DriveSafe NT program.

---


## 2.0. Technologies

#### 2.1. Frameworks
* Laravel

#### 2.2. Languages
* HTML
* CSS
* JS
* PHP

#### 2.3. Libraries Used
* Bootstrap
* JQuery
* Composer

#### 2.4. Prerequisites
* PHP v8.0+
* Composer

---

## 3.0. Instructions to Set-up local environment

##### 3.1. Open cloned repository in the ***Terminal***

##### 3.2. In your terminal, navigate to the project’s root folder and run ‘composer install’ or ‘composer update’ to install the project’s dependencies.

##### 3.3. Find the ‘.env.example’ file in the root folder, copy it, paste it in the same folder, and rename the copied file to ‘.env’.

##### 3.4. Start Apache and MySQL on your web server and check for the localhost address and port number of MySQL – note these details down.

##### 3.5. In the ‘.env’ file, replace the values of DB_HOST and DB_PORT with the localhost address and port number noted down earlier, respectively. In the same file, replace the value of DB_DATABASE with ‘DriveSafeNT’.

##### 3.6. Go to the file path ‘./resources/sql/’ and run the scripts in ‘createdb.sql’ in MySQL. This will create the database.

##### 3.7. In your terminal, run ‘php artisan migrate’ in the root folder to create the tables in the database.

##### 3.8. In your terminal, run ‘php artisan db:seed’ in the root folder to populate the tables in the database.

##### 3.9. In your terminal, run ‘php artisan serve’ in the root folder to host the project code. You will now be able to view the website using the localhost address provided in your terminal.



## 4.0. Team

* Project Manager & Back End Developer: Maaz Ilyas                        (id: S335801)
* Full Stack Developer: Alex Phan                                         (id: S325049)

---
