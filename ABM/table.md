CREATE TABLE products(
    id BIGINT PRIMARY KEY AUTO_INCREMENT,
    product VARCHAR(30) NOT NULL,
    description VARCHAR(50) NULL,
    price INT(6) NOT NULL,
    state INT(1) DEFAULT(1)
    );