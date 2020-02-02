CREATE TABLE logins (
	login_id SERIAL PRIMARY KEY,
	login_name VARCHAR(25)	NOT NULL UNIQUE,
	first_name VARCHAR(50)	NOT NULL,
	last_name VARCHAR(50)	NOT NULL,
	user_password VARCHAR(255) NOT NULL
);
	
CREATE TABLE artists (
	artist_id SERIAL PRIMARY KEY,
	artist_name VARCHAR(50) NOT NULL,
	artist_medium VARCHAR(50) NOT NULL,
	artist_description VARCHAR(255) NOT NULL,
	merch_id SERIAL,
	login_id SERIAL
);
	
	CREATE TABLE merchandise (
	merch_id SERIAL PRIMARY KEY,
	merch_item VARCHAR(150) NOT NULL,
	merch_size VARCHAR(10) NOT NULL,
	merch_price INT	 NOT NULL,
	merch_description VARCHAR(255) NOT NULL,				
	artist_id INT,
	login_id INT
);	

ALTER TABLE artists
ADD FOREIGN KEY (merch_id) REFERENCES merchandise(merch_id);

ALTER TABLE artists
ADD FOREIGN KEY (login_id) REFERENCES logins(login_id);	

ALTER TABLE merchandise
ADD FOREIGN KEY (artist_id) REFERENCES artists(artist_id),
ADD FOREIGN KEY (login_id) REFERENCES logins(login_id);
 