
--create database VirtualTeaClub;

use VirtualTeaClub;

create table Userr
(Username char(30) not null,
UserID int primary key
);

create table Tea
(Teaname char(30) not null,
TeaID int primary key,
brand char(30)
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


--用户信息
select* from Userr;

--用户喝过的茶的种类、杯数、个人评分
select Teaname,number,avg_score
from Tea,UT,
     (select Tea.TeaID,avg(score)
      from Tea,Comments
      where Tea.TeaID = Comments.TeaID
      group by Tea.TeaID
	  )as avg_table(avg_TeaID,avg_score)
where Tea.TeaID = UT.TeaID
  and Tea.TeaID = avg_TeaID;


--茶的信息
select* from Tea;



--评论
select comment,score
from Comments;

