


CREATE TABLE user (
    user_id int not null auto_increment PRIMARY KEY, --dedicated primary key--
    email VARCHAR(32) NOT NULL, 
    username VARCHAR(32) NOT NULL, --username will be used to join tables when needed?--
    password VARCHAR(32) NOT NULL,
    access INTEGER(1) --access will be 1 for an actual user vs guest
);

--Some of the columns for this table will be used on the homepage to display the list of restaurants,
--and some attributes will only be used on a restuaraunt's specific page i.e. Tony's Pizza page will not show most recent review.
CREATE TABLE restuaraunt (
    restaurant_id int not null auto_increment PRIMARY KEY,
    restaurant_name VARCHAR(32) NOT NULL,
    description VARCHAR(128) NOT NULL,
    location VARCHAR(32) NOT NULL,
    most_recent_review VARCHAR(256), --this can be null as maybe there wasn't a recent review 
    rating INTEGER NOT NULL
   
);

CREATE TABLE review (
    review_id int not null auto_increment PRIMARY KEY,
    username VARCHAR(32) NOT NULL,
    restaurant_name VARCHAR(32) NOT NULL,
    review_description VARCHAR(256) NOT NULL,
    location VARCHAR(32) NOT NULL,
    rating INTEGER NOT NULL,
    datetime_entered DATETIME 
   
);

/* In the favoirte table, we can use username as the foreign key that we can use to join user and favorite on. Favorite will be a table that has a restuarant name, and a username associated with it 
This way, we can use a join and then make a query for the user id of the current user, which will return a table of all the favorites in the favorite table that contain that ID*/
CREATE TABLE favorite(
    favorite_id INTEGER NOT NULL auto_increment PRIMARY KEY,
    username VARCHAR(32) NOT NULL, 
    restaurant_name VARCHAR(32) NOT NULL,
    date_entered DATE 
);



