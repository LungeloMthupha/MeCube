# MeCube Project
A simple project that uses PHP, HTML, CSS, and JavaScript  for a Gym. It has a landing page and a multiple of pages for to be accessed by Admin and Gym Members.

## Table Of Contents
---
* [Gettings Started](#getting-started)
* [Project Status](#project-status)
* [Project Aim](#project-aim)
* [Database Status](#database)
* [Users](#users)
* [Login & Logout](#login-logout)
* [Register](#register)


## Getting Started
---
 1. Install PHP, MySQL, and a web server such as XAMP and `Run` Apache and MySQL.
 2. Clone this repository to your local machine and Host it in to the `xampp/htdocs/` directory.
 3. Create a database and import the mecube.sql file locate in the `server` directory.
 4. Start the web server and navigate to the project URL in your browser. Use this url if you running locally
 `localhost/mecube/`

## Project Aim
---
Create a simple gym management system. The system will allow gym members to view Gym Equipment that is available, and also provide details on their receipts.It has a noticeboard to help them state informed about gym  details.
With Admins, their are able to use `CRUD` that is `Create`,  `Read`,  `Update` and  `Delete` data related to  members, equipment, and more.

## Technologies
---
Let's write down the languages we used, the libraries and its versions. 
For example:

* HTML 5
* CSS 3
* PHP 5
* Java Script
* JQuery 1.13.2
* Chartjs 3.7.1
* Avatar API
* XAMPP

## Project Status
---
The first version of the project is complete. However, there are still some features that could be added, such as marking it responsive.

## Database
---
The project uses a MySQL database. The database schema can be found in the `/server` directory named `mecube.sql` file.

## Users
---
|Username|Password|Role|
|---|---|---|
|starz|12345|admin|
|stanbro1d|qwerty|member|
There are two types of users in the project: admin and gym member.

* Admins have full access to the system and can manage all aspects of the gym.


* Gym members can login, view their the noticeboard and more.


## Login and Logout
---
Users can login to the system using their username and password. Once logged in, users can access all of the features that are available to their user type. Users can logout of the system by clicking on the logout link in the top right corner of the page.

## Registration
---
Only admins can register new users. To register a new user, an admin must visit the `/member` page and fill in the necessary information.

## Other Details
---
* The project uses a simple MVC architecture.
* The project is coded in a clean and organized manner.(I'm not sure about it but I hope)
* This project allow the export of table data in different formats like `PDF`, `EXCEL`, `CSV` and allow an output `COPY` and `Print`.

## Screenshots
---
### Landing Page
![landing page](https://i.postimg.cc/fTM2c9gz/Screenshot-2023-05-24-201614.png)

### Login Page
![login page](https://i.postimg.cc/BQ88whzM/Screenshot-2023-05-24-201525.png)

### Error Page
![login error page](https://i.postimg.cc/RFFCJh5X/Screenshot-2023-05-24-201544.png)

### Admin Dashboard
![Admin Dashboard](https://i.postimg.cc/7LpDhV9Y/Screenshot-2023-06-15-151143.png)

### Admin Member Display
![Admin Member Display](https://i.postimg.cc/3NqZQk76/Screenshot-2023-06-15-151335.png)

### Admin CRUD Tray
![admin tray](https://i.postimg.cc/0j1wY7k9/Screenshot-2023-06-15-151603.png)

### Log Out Page
![log out page](https://i.postimg.cc/9fTXGKrq/Screenshot-2023-06-15-151738.png)


# Thank You