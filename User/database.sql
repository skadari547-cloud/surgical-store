CREATE DATABASE IF NOT EXISTS surgical_store;
USE surgical_store;

CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100) NOT NULL,
  email VARCHAR(150) NOT NULL UNIQUE,
  phone VARCHAR(20),
  password VARCHAR(255) NOT NULL,
  role ENUM('user','admin') DEFAULT 'user',
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE products (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(150) NOT NULL,
  category VARCHAR(100) NOT NULL,
  description TEXT,
  price DECIMAL(10,2) NOT NULL,
  stock INT DEFAULT 0,
  image VARCHAR(500),
  status ENUM('active','inactive') DEFAULT 'active',
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE orders (
  id INT AUTO_INCREMENT PRIMARY KEY,
  user_id INT NOT NULL,
  total_amount DECIMAL(10,2) NOT NULL,
  payment_method VARCHAR(30) DEFAULT 'COD',
  status VARCHAR(30) DEFAULT 'Pending',
  customer_name VARCHAR(100) NOT NULL,
  phone VARCHAR(20) NOT NULL,
  address TEXT NOT NULL,
  city VARCHAR(80) NOT NULL,
  pincode VARCHAR(10) NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
);

CREATE TABLE order_items (
  id INT AUTO_INCREMENT PRIMARY KEY,
  order_id INT NOT NULL,
  product_id INT NOT NULL,
  quantity INT NOT NULL,
  price DECIMAL(10,2) NOT NULL,
  FOREIGN KEY (order_id) REFERENCES orders(id) ON DELETE CASCADE,
  FOREIGN KEY (product_id) REFERENCES products(id) ON DELETE RESTRICT
);

-- Demo products. Admin side can add/edit/delete more products.
INSERT INTO products (name,category,description,price,stock,image) VALUES
('Disposable Surgical Gloves','Gloves','Sterile disposable surgical gloves for clinical use.',120.00,100,'https://via.placeholder.com/800x600?text=Surgical+Gloves'),
('Surgical Face Mask','Masks','Disposable protective face masks.',80.00,150,'https://via.placeholder.com/800x600?text=Face+Mask'),
('Digital Thermometer','Diagnostic','Digital thermometer for temperature measurement.',250.00,50,'https://via.placeholder.com/800x600?text=Thermometer'),
('Surgical Scissors','Instruments','Stainless-steel surgical scissors.',450.00,30,'https://via.placeholder.com/800x600?text=Surgical+Scissors'),
('BP Monitor','Diagnostic','Digital blood pressure monitor.',1250.00,25,'https://via.placeholder.com/800x600?text=BP+Monitor'),
('Cotton Roll','Wound Care','Medical cotton roll for wound-care applications.',160.00,80,'https://via.placeholder.com/800x600?text=Cotton+Roll'),
('Elastic Bandage','Wound Care','Elastic support bandage.',110.00,75,'https://via.placeholder.com/800x600?text=Bandage'),
('Surgical Cap','Protective Wear','Disposable surgical cap.',50.00,200,'https://via.placeholder.com/800x600?text=Surgical+Cap');
