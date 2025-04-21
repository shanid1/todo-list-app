To-Do List PHP/MySQL App
This is a simple To-Do List application built using PHP, MySQL, and HTML/CSS. It allows users to create, view, mark as complete, and delete tasks. The app demonstrates basic CRUD (Create, Read, Update, Delete) functionality with PHP and MySQL.

Features:
Add Tasks: Users can add new tasks by typing into an input field and submitting the form.

Mark as Complete: Users can mark tasks as complete by clicking a checkbox.

Delete Tasks: Users can delete tasks from the list.

Dynamic Task List: The list of tasks is fetched from a MySQL database and dynamically displayed on the page.

Task Status: Each task can be marked as complete or pending, with visual feedback (✔️ for completed, ❌ for pending tasks).

Technologies Used:
PHP: Server-side scripting language for handling logic and interacting with the MySQL database.

MySQL: Database management system for storing tasks.

HTML/CSS: For structuring and styling the user interface.

JavaScript: Basic interactivity (confirm delete action).

XAMPP: Local server environment to run PHP and MySQL (can also be hosted online).

How to Run Locally:
Install XAMPP (or any PHP/MySQL server setup):

Download and install XAMPP.

Start Apache and MySQL modules in the XAMPP control panel.

Clone the repository:

bash
Copy
Edit
git clone https://github.com/your-username/todo-app.git
Place the project in XAMPP:

Move the cloned project folder to the htdocs directory in XAMPP (usually located in C:\xampp\htdocs).

Create Database:

Open phpMyAdmin in your browser: http://localhost/phpmyadmin/

Create a new database called todo_db.

Create a table tasks with the following structure:

sql
Copy
Edit
CREATE TABLE tasks (
    id INT AUTO_INCREMENT PRIMARY KEY,
    task TEXT NOT NULL,
    is_done TINYINT(1) DEFAULT 0,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
Configure Database Connection:

Update the db.php file with your database credentials (username, password, and database name).

Access the Application:

Open your browser and go to: http://localhost/todo-app/

How It Works:
index.php: The main page that displays all tasks from the database.

add.php: Handles adding new tasks to the database.

complete.php: Marks a task as completed by setting its is_done status to 1.

delete.php: Deletes a task from the database.

db.php: Contains the MySQL database connection details.

