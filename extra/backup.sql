CREATE TABLE annonswebb (
	aid int(5) not null AUTO_INCREMENT PRIMARY KEY,
    title varchar(100) not null,
    kortInfo varchar(120) not null,
    model varchar(120) not null,
    pris varchar(4) not null,
    annons TEXT not null,
    ort varchar(120) not null,
    date datetime not null   
);