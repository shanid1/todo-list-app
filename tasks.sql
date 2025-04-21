CREATE DATABASE todo_db;
USE todo_db;

CREATE TABLE tasks(
    id int AUTO_INCREMENT PRIMARY,
    tasks TEXT NOT NULL,
    is_done TINYINT(1) DEFAULT 0,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);