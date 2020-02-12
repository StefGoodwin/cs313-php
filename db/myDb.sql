CREATE TABLE logins (
	login_id SERIAL PRIMARY KEY,
	login_name VARCHAR(25)	NOT NULL UNIQUE,
	first_name VARCHAR(50)	NOT NULL,
	last_name VARCHAR(50)	NOT NULL,
	user_password VARCHAR(255) NOT NULL
);
	
CREATE TABLE artists (
	id SERIAL PRIMARY KEY,
	artist_name VARCHAR(50) NOT NULL,
	artist_medium VARCHAR(50) NOT NULL,
	artist_description VARCHAR(255) NOT NULL
);
	
CREATE TABLE merchandise (
	id SERIAL PRIMARY KEY,
	artist_id INT NOT NULL,
	item VARCHAR(150) NOT NULL,
	merch_size VARCHAR(10) NOT NULL,
	price INT NOT NULL,
	quantity INT NOT NULL,
	merch_description VARCHAR(255) NOT NULL,
	FOREIGN KEY (artist_id) REFERENCES artists(id)
);	

CREATE TABLE artist_merchandise (
	artist_id INT NOT NULL REFERENCES artists(id),
	merch_id INT NOT NULL REFERENCES merchandise(id)
);

ALTER TABLE artists
ADD FOREIGN KEY (artist_name) REFERENCES merchandise(artist_name);

ALTER TABLE artists
ADD FOREIGN KEY (login_id) REFERENCES logins(login_id);	

ALTER TABLE merchandise ADD FOREIGN KEY (artist_name) REFERENCES artists(id);
ADD FOREIGN KEY (login_id) REFERENCES logins(login_id);

ALTER TABLE merchandise 
ADD artist_name VARCHAR(50) NOT NULL;

INSERT INTO logins (login_name, user_password) VALUES ('admin', 'p@ssW0rd');
INSERT INTO logins (login_name, user_password) VALUES ('user1', 'p@ssW0rd');

INSERT INTO artists (artist_name, artist_medium, artist_description) VALUES ('Ray Goodwin', 'musician', 'Guitar virtuoso, pianist, and violinist');
INSERT INTO artists (artist_name, artist_medium, artist_description) VALUES ('SICMONIC', 'band', 'Phoenix bases metal band with melodic harmonies');
INSERT INTO artists (artist_name, artist_medium, artist_description) VALUES ('Stef Goodwin', 'photography', 'Specializes in landscape and outdoor photography');


ALTER TABLE artists DROP CONSTRAINT artists_merch_id_fkey;

ALTER TABLE merchandise DROP CONSTRAINT merchandise_artist_id_fkey;

ALTER TABLE artists DROP CONSTRAINT artists_login_id_fkey;

ALTER TABLE merchandise DROP CONSTRAINT merchandise_login_id_fkey;
 
ALTER TABLE artists DROP merch_id;

ALTER TABLE artists DROP artist_id; 

ALTER TABLE artists ADD id  SERIAL PRIMARY KEY;
 
ALTER TABLE merchandise ADD id SERIAL PRIMARY KEY;

ALTER TABLE merchandise ADD artist_name VARCHAR(50) NOT NULL;

INSERT INTO merchandise (artist_id, item, merch_size, price, quantity, merch_description) VALUES (1, 'CD', 'n/a', '20', '40', 'Where Dreams Are From'); 

INSERT INTO merchandise (artist_id, item, merch_size, price, quantity, merch_description) VALUES (2, 'CD', 'n/a', '20', '150', 'Somnabulist');

INSERT INTO merchandise (artist_id, item, merch_size, price, quantity, merch_description) VALUES (2, 'Tee-Shirt', 'xl', '20', '5', 'black logo tee');

INSERT INTO merchandise (artist_id, item, merch_size, price, quantity, merch_description) VALUES (3, 'canvas photography', '11 x 17', '60', '4', 'Crossing At Oak Creek');

INSERT INTO merchandise (artist_id, item, merch_size, price, quantity, merch_description) VALUES (3, 'canvas photography', '11 x 17', '60', '3', 'Bell Rock in Winter');

DELETE FROM merchandise WHERE id= 2;


