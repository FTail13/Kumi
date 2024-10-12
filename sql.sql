Create Table Porfession (
    Profession_id int auto_increment primary key,
    firstname varchar(255),
    lastname varchar(255),
    age int,
    gender varchar(255),
    course varchar(255),
    yeargraduated int,
    schoolname varchar(255),
    religion varchar(255),
    date_added timestamp default CURRENT_TIMESTAMP);
    