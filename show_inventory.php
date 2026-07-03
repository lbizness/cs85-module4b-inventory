CREATE DATABASE inventory_db;
USE inventory_db;

CREATE TABLE items (
  id INT AUTO_INCREMENT PRIMARY KEY,
  item_name VARCHAR(100) NOT NULL,
  category VARCHAR(50),
  quantity INT,
  purchase_date DATE
);
  
INSERT INTO items (item_name, category, quantity, purchase_date)
VALUES
('LED Desk Lamp', 'Electronics', 2, '2024-06-01'),
('Notebook', 'Stationery', 10, '2024-05-15');
  