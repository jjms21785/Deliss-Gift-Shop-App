-- Create Products Table
CREATE TABLE products (
  id INT PRIMARY KEY AUTO_INCREMENT,
  name VARCHAR(100) NOT NULL,
  price DECIMAL(10, 2) NOT NULL,
  discount_percentage INT DEFAULT 0,
  likes INT DEFAULT 0,
  category VARCHAR(50) NOT NULL,
  image_url VARCHAR(255) DEFAULT '/placeholder.svg?height=300&width=300',
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Insert Sample Products
INSERT INTO products (name, price, discount_percentage, likes, category) VALUES
('Chocolate Truffle Box', 24.99, 10, 6969, 'FOOD'),
('Assorted Macarons', 19.99, 10, 6969, 'FOOD'),
('Gourmet Cookie Set', 15.99, 10, 6969, 'FOOD'),
('Luxury Pralines', 29.99, 10, 6969, 'FOOD'),
('Birthday Gift Box', 34.99, 10, 6969, 'BUNDLES'),
('Celebration Hamper', 49.99, 10, 6969, 'BUNDLES'),
('Artisan Chocolate Bar', 9.99, 10, 6969, 'FOOD'),
('Handmade Caramels', 12.99, 10, 6969, 'FOOD'),
('Decorative Sweet Jar', 17.99, 10, 6969, 'ACCESSORIES'),
('Dessert Serving Set', 22.99, 10, 6969, 'ACCESSORIES'),
('Premium Tea Collection', 27.99, 10, 6969, 'FOOD'),
('Cake Decoration Kit', 14.99, 10, 6969, 'ACCESSORIES');
