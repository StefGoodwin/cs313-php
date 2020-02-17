
CREATE TABLE artists (
	id SERIAL PRIMARY KEY,
	artist_name VARCHAR(50) NOT NULL,
	artist_medium VARCHAR(50) NOT NULL,
	artist_description VARCHAR(255) NOT NULL
);
	
CREATE TABLE merchandise (
	id SERIAL PRIMARY KEY,
	item VARCHAR(150) NOT NULL,
	merch_size VARCHAR(10) NOT NULL,
	price INT NOT NULL,
	quantity INT NOT NULL,
	merch_description VARCHAR(255) NOT NULL	
);	

CREATE TABLE artist_merchandise (
	artist_id INT NOT NULL REFERENCES artists(id),
	merch_id INT NOT NULL REFERENCES merchandise(id)
);



INSERT INTO artists (artist_name, artist_medium, artist_description) VALUES ('Ray Goodwin', 'musician', 'Guitar virtuoso, pianist, and violinist');
INSERT INTO artists (artist_name, artist_medium, artist_description) VALUES ('SICMONIC', 'band', 'Phoenix bases metal band with melodic harmonies');
INSERT INTO artists (artist_name, artist_medium, artist_description) VALUES ('Stef Goodwin', 'photography', 'Specializes in landscape and outdoor photography');




INSERT INTO merchandise (artist_id, item, merch_size, price, quantity, merch_description) VALUES (1, 'CD', 'n/a', '20', '40', 'Where Dreams Are From'); 

INSERT INTO merchandise (artist_id, item, merch_size, price, quantity, merch_description) VALUES (2, 'CD', 'n/a', '20', '150', 'Somnabulist');

INSERT INTO merchandise (artist_id, item, merch_size, price, quantity, merch_description) VALUES (2, 'Tee-Shirt', 'xl', '20', '5', 'black logo tee');

INSERT INTO merchandise (artist_id, item, merch_size, price, quantity, merch_description) VALUES (3, 'canvas photography', '11 x 17', '60', '4', 'Crossing At Oak Creek');

INSERT INTO merchandise (artist_id, item, merch_size, price, quantity, merch_description) VALUES (3, 'canvas photography', '11 x 17', '60', '3', 'Bell Rock in Winter');

DELETE FROM merchandise WHERE id= 2;




