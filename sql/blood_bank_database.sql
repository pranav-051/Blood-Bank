create database blood_donation; /* creating database*/
use blood_donation;

/*create table donor_details in which all donor information gets stored.*/
create table donor_details(
donor_id int auto_increment NOT NULL,
donor_name varchar(50) NOT NULL,
donor_number varchar(10) NOT NULL,
donor_mail varchar(50),
donor_age int(60) NOT NULL,
donor_gender varchar(10) NOT NULL,
donor_blood varchar(10) NOT NULL,
donor_address varchar(100) NOT NULL,
Primary key(donor_id)
);


/*create table blood in which all blood group is stored.*/
create table blood(
blood_id int auto_increment Not Null,
blood_group varchar(10) NOT NULL,
primary key(blood_id)
);

/* insert all blood groups*/
insert into blood(blood_group)
values("B+"),("B-"),("A+"),("O+"),("O-"),("A-"),("AB+"),("AB-");


/*create table pages in which all pages information gets stored.*/
create table pages(
page_id int NOT NULL auto_increment UNIQUE,
page_name varchar(255) NOT NULL,
page_type varchar(255) NOT NULL,
page_data longtext NOT NULL
);
ALTER TABLE pages
MODIFY COLUMN page_type varchar(50) UNIQUE;

/*create table contact_info in which your site contact information is stored.*/
create table contact_info(
contact_id int auto_increment Not Null,
contact_address varchar(100) NOT NULL,
contact_mail varchar(50) NOT NULL,
contact_phone varchar(100) NOT NULL,
primary key(contact_id)
);

insert into contact_info(contact_address,contact_mail,contact_phone)
values("Hisar,Haryana(125001)","bloodbank@gmail.com","7056550477");

    
    
    /*create table contact_query in which all querier inforamation gets stored.*/
create table contact_query(
query_id int auto_increment Not Null,
query_name varchar(100) NOT NULL,
query_mail varchar(120) NOT NULL,
query_number char(11) NOT NULL,
query_message longtext NOT NULL,
query_date timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
query_status int(11) DEFAULT NULL,
Primary key(query_id)
);    
alter table contact_query modify column query_date
timestamp DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP;


update contact_query set query_status="1" where query_id="1";

/*create table query_stat in which query status is stored.*/
CREATE TABLE query_stat(
  id INT NOT NULL Unique,
 query_type VARCHAR(45) NOT NULL,
  PRIMARY KEY (id)
  );
  
  
  insert into query_stat(id,query_type)
  values('1',"Read"),
  ('2',"Pending");
  
