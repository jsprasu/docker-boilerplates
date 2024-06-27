use mysql;

-- TODO: Change the username and password
CREATE USER IF NOT EXISTS 'sample_user'@'%' IDENTIFIED BY 'sample_user_123';

-- TODO: Change the username here
GRANT ALL PRIVILEGES ON *.* TO 'sample_user'@'%';
FLUSH PRIVILEGES;

-- TODO: Change the database name here
CREATE DATABASE IF NOT EXISTS sample_app;
