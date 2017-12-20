

CREATE TABLE Users (
ID int NOT NULL AUTO_INCREMENT,
Email varchar(256), 
password varchar(64), 
nickname varchar(128), 
PRIMARY KEY (ID)
); 

CREATE TABLE Pages (
    ID int NOT NULL AUTO_INCREMENT, 
    title varchar(128),
    User_ID int NOT NULL,
    content TEXT, 
    menu_label VARCHAR(128), 
    menu_order INT,
    PRIMARY KEY (ID),
    FOREIGN KEY (User_ID) REFERENCES Users(ID)
); 
INSERT INTO Users(
    Email, 
    password, 
    nickname) 
    VALUES(
        'admin@example.com',
        '1234',
        'admin');
INSERT INTO Pages(
    title, 
    User_ID,
    content, 
    menu_label,
    menu_order) 
    VALUES(
        'domovska stranka',
        1,
        'ab imo pectore',
        'domov',
        0

        );
