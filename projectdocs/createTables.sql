drop table Users;

create table Users (
eagle_id int(8) not null primary key,
first_name varchar(30) not null,
last_name varchar(30) not null,
sex varchar(1) not null check(sex in ('M', 'F')),
class int(4) not null,
school varchar(4) not null check(school in ('MCAS', 'CSOM', 'CSON', 'LSOE')),
major varchar(60) not null,
minor varchar(60),
hometown varchar(30) not null,
state_country varchar(30) not null,
international varchar(3) not null check(international in ('Yes', 'No')),
ahana varchar(3) not null check(ahana in ('Yes', 'No')),
transfer varchar(3) not null check(transfer in ('Yes', 'No')),
phone varchar(12) not null,
email varchar(30) not null,
local_address varchar(500),
password varchar(40) not null,
Notes text,
type varchar(20) not null check(type in ('Volunteer', 'Council', 'Counselor', 'Admin'))
);