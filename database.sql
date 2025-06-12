CREATE TABLE users (
    id INT PRIMARY KEY AUTO_INCREMENT,
	full_name VARCHAR(255) NOT NULL,
	email VARCHAR(255) NOT NULL,
	password VARCHAR(255) NOT NULL,
	created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE blogs (
    id INT PRIMARY KEY AUTO_INCREMENT,
	title VARCHAR(255) NOT NULL,
	text_content VARCHAR(255),
	file_location VARCHAR(255),
    author_id INT,
	FOREIGN KEY (author_id) REFERENCES users(id)
);

CREATE TABLE blog_comments (
	id INT PRIMARY KEY AUTO_INCREMENT,
    comment VARCHAR(255),
	blog_id INT,
    FOREIGN KEY (blog_id) REFERENCES blogs(id)
);