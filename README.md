# Clearance Management System

This repository contains a Clearance Management System, an ongoing project aimed at facilitating clearance approval processes for students. The system is built using HTML, CSS, and JavaScript for the front-end, and PHP for the back-end.

## Features

The Clearance Management System offers the following features:

1. **Student Clearance Requests**: Students can submit clearance requests through the system, specifying the items they need clearance for.

2. **Clearance Approvers**: Approvers designated by the system can review and approve or decline incoming clearance requests from students.

3. **Admin Panel**: System admins have access to an admin panel, allowing them to manage users, including students and clearance approvers.

## Prerequisites

To run this application, ensure that you have the following prerequisites installed:

- **Web Server**: Set up a web server such as Apache or Nginx on your local machine or hosting environment.

- **PHP**: Install PHP (version 7.0 or later) to enable server-side scripting.

- **MySQL**: Configure a MySQL database and ensure you have the necessary credentials (username and password) to connect to it.

## Installation and Configuration

Follow these steps to install and configure the Clearance Management System:

1. Clone the repository:

   ```bash
   git clone https://github.com/your-username/CMS.git
2. Move the cloned files to your web server's document root directory.

3. Configure the database connection:

 - Open the config.php file located in the root directory of the project.
Update the following constants with your MySQL database details:
- **hostName**: The host name or IP address of your MySQL server.
- **dbName**: The username to connect to the MySQL server.
- **password**: The password for the MySQL user.
- **userName**: The name of the database to use for the clearance management system.



## Usage
Once you have installed and configured the Clearance Management System, follow these guidelines to use the application effectively:

 - **Students**: Use the application interface to submit clearance requests for specific items. You will be notified of the approval status by the clearance approvers.

- **Clearance Approvers**: Log in to the application using your assigned credentials and review incoming clearance requests from students. Approve or decline requests based on the provided information.

- **System Admins**: Access the admin panel by logging in with admin credentials. From the admin panel, you can manage users, including students and clearance approvers.
