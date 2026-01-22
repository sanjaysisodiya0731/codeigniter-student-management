===========================
CodeIgniter Student CRUD
===========================

This repository contains a **Student CRUD (Create, Read, Update, Delete)**
application built using the **CodeIgniter Framework**.

The project demonstrates basic CRUD operations with a clean MVC structure,
success messages, and simple UI for learning and interview practice purposes.

--------------------------------
Project Features
--------------------------------

The following functionalities have been implemented:

- Display Students List
- Add New Student
- Edit Student Details
- Update Student Information
- Delete Student Record
- Success Message on Create, Update and Delete operations

--------------------------------
Project URL (Local)
--------------------------------

Access the application in your browser:

::

   http://localhost/project/demo_practice/codeigniter-student-management/index.php/

--------------------------------
Technology Stack
--------------------------------

- PHP
- CodeIgniter 4
- MySQL
- HTML / CSS
- Bootstrap (if applicable)

--------------------------------
Project Setup Instructions
--------------------------------

Step 1: Clone Repository
-----------------------

::

   git clone <repository-url>

Step 2: Move Project to Local Server
------------------------------------

Place the project inside your local server directory
(e.g. `htdocs` for XAMPP or `www` for WAMP).

Step 3: Install Dependencies
----------------------------

If composer is used:

::

   composer update

Step 4: Database Configuration
------------------------------

Open file:

::

   application/config/database.php

Update database details:

::

   hostname => localhost
   username => root
   password =>
   database => your_database_name

Step 5: Import Database
----------------------

Import the provided SQL file into MySQL (if available).

Step 6: Run the Project
----------------------

Open browser and visit:

::

   http://localhost/project/demo_practice/codeigniter-student-management/index.php/

--------------------------------
CRUD Flow Overview
--------------------------------

- Student list page displays all records
- Add Student form creates a new student
- Edit option updates existing student data
- Delete option removes student record
- Success messages confirm actions
