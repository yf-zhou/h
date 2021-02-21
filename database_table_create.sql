
create database VirtualTeaClub;

use VirtualTeaClub;

create table Userr
(name char(30) not null,
UserID int primary key
);

create table Tea
(name char(30) not null,
TeaID int primary key,
score float
);

create table UT
(UserID int not null,
TeaID int not null,
number int not null,
foreign key (UserID) references Userr(UserID),
foreign key (TeaID) references Tea(TeaID)
);

create table Comments
(TeaID int not null,
comment char(300) not null,
score float not null
);

--drop table UT;
--drop table Tea;
--drop table Userr;
--drop table Comments;

--select* from Userr;
--select* from Tea;
--select* from UT;
--select* from Comments;
