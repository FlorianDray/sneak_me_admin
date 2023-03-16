CREATE DATABASE sneak_me;
CREATE TABLE sneak_me.users (
	id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
	last_name VARCHAR(255) NOT NULL,
	first_name VARCHAR(255) NOT NULL,
	mail VARCHAR(255) NOT NULL,
	password VARCHAR(255) NOT NULL,
	rule BOOL NOT NULL,
	adress varchar(255) NOT NULL
);
CREATE TABLE sneak_me.colors (
	id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
	name VARCHAR(255) NOT NULL
);
CREATE TABLE sneak_me.brands (
	id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
	name VARCHAR(255) NOT NULL
);
CREATE TABLE sneak_me.sneakers (
	id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
	size FLOAT NOT NULL,
	price FLOAT NOT NULL,
	img_path VARCHAR(255) NOT NULL,
	id_color INT NOT NULL,
	id_brand INT NOT NULL,
	CONSTRAINT fkSneakers_colors FOREIGN KEY (id_color) REFERENCES colors(id),
	CONSTRAINT fkSneakers_brands FOREIGN KEY (id_brand) REFERENCES brands(id)
);
CREATE TABLE sneak_me.carts (
	id_user INT NOT NULL,
	id_sneaker INT NOT NULL,
	quantity INT NOT NULL,
	CONSTRAINT pkCarts PRIMARY KEY (id_user, id_sneaker),
	CONSTRAINT fkCarts_users FOREIGN KEY (id_user) REFERENCES users(id),
	CONSTRAINT fkCarts_sneakers FOREIGN KEY (id_sneaker) REFERENCES sneakers(id)
);
CREATE TABLE sneak_me.status (
	id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
	name VARCHAR(255) NOT NULL
);
CREATE TABLE sneak_me.orders (
	id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
	order_date DATE NOT NULL,
	id_status INT NOT NULL,
	id_user INT NOT NULL,
	CONSTRAINT fkOrders_status FOREIGN KEY (id_status) REFERENCES status(id),
	CONSTRAINT fkOrders_users FOREIGN KEY (id_user) REFERENCES users(id)
);
CREATE TABLE sneak_me.orders_sneakers(
	id_order INT NOT NULL,
	id_sneaker INT NOT NULL,
	quantity INT NOT NULL,
	CONSTRAINT pkOrdersSneakers PRIMARY KEY  (id_order, id_sneaker),
	CONSTRAINT fkOrdersSneakers_orders FOREIGN KEY (id_order) REFERENCES orders(id),
	CONSTRAINT fkOrdersSneakers_sneakers FOREIGN KEY (id_sneaker) REFERENCES sneakers(id)
);