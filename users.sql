-- Create Database (if not already created)
CREATE DATABASE IF NOT EXISTS users;

-- Use the database
USE users;

-- Create users table
CREATE TABLE IF NOT EXISTS users (        -- Unique ID for each user
    firstName VARCHAR(50) NOT NULL,           -- First name of the user
    lastName VARCHAR(50) NOT NULL,            -- Last name of the user
    email VARCHAR(100) NOT NULL UNIQUE,       -- Email address (unique for each user)
    password VARCHAR(255) NOT NULL            -- Hashed password
);

-- Optionally, you can add sample data (remove this part if not needed)
-- INSERT INTO users (firstName, lastName, email, password) 
-- VALUES ('John', 'Doe', 'john.doe@example.com', MD5('password123'));
