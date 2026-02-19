DROP TABLE IF EXISTS users;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    fullname VARCHAR(150),
    username VARCHAR(100),
    password VARCHAR(255),
    role ENUM('admin','employee') NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Default Accounts
INSERT INTO users (fullname, username, password, role) VALUES
('System Administrator','admin', MD5('admin123'),'admin'),
('Employee User','employee', MD5('employee123'),'employee');
