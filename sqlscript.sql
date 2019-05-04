drop schema if exists misiblog;
CREATE DATABASE misiblog
  CHARACTER SET utf8
  COLLATE utf8_general_ci;

create table misiblog.privileges(
id int primary key auto_increment,
name varchar(255) not null
);
insert into misiblog.privileges(name)values('admin');
insert into misiblog.privileges(name)values('user');

create table misiblog.users(
id int primary key auto_increment,
name varchar(255) not null,
email varchar(255) not null unique,
username varchar(255) not null unique,
password varchar(255) not null,
created_at timestamp default current_timestamp(),
deleted tinyint default 0,
privid int references misiblog.privileges(id)
);
insert into misiblog.users(name,email,username,password,privid)values('Pekár Mihály','kiscica@kiscica.hu','misi',sha1('kiscica'),1);
insert into misiblog.users(name,email,username,password,privid)values('Gipsz Jakab','kiscica2@kiscica2.hu','gipsz',sha1('jakab'),2);

create table misiblog.categories(
id int PRIMARY key auto_increment,
name varchar(255) not null,
created_at timestamp default current_timestamp(),
created_by int references misiblog.users(id)
);
insert into misiblog.categories(name,created_by)values('Film',1);
insert into misiblog.categories(name,created_by)values('Túra',1);
insert into misiblog.categories(name,created_by)values('Informatika',1);

create table misiblog.posts(
id int PRIMARY KEY auto_increment,
catid int not null  references misiblog.categories(id),
title varchar(255) not null,
slug varchar(255) not null unique,
body text not null,
thumbimg varchar(255), 
created_at timestamp default current_timestamp(),
created_by int references misiblog.users(id),
deleted tinyint default 0,
deleted_at timestamp null,
deleted_by int null references misiblog.users(id) 
);
create table misiblog.pages(
id int PRIMARY KEY auto_increment,
title varchar(255) not null,
slug varchar(255) not null unique,
body text not null,
created_at timestamp default current_timestamp(),
created_by int references misiblog.users(id),
deleted tinyint default 0,
deleted_at timestamp null,
deleted_by int null references misiblog.users(id) 
);

drop table if exists misiblog.menus;
create table misiblog.menus(
id int primary key auto_increment,
target tinyint not null default 0,
link varchar(255),
page_slug varchar(255) references pages(slug),
name varchar(255) not null,
created_at timestamp default current_timestamp(),
deleted_at timestamp,
deleted tinyint default 0
);
insert into misiblog.posts(title,catid,slug,body,created_by)values('űőúáéóüö',1,'post-one','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent dictum, magna sed malesuada egestas, ante orci maximus mi, vitae accumsan leo urna a ligula. Integer a aliquet elit. Quisque pulvinar, turpis vel consequat malesuada, nunc ipsum ultricies felis, sit amet fringilla purus risus efficitur orci. Praesent congue pharetra mi non blandit. Nullam a rutrum urna. Proin vitae malesuada magna. Sed purus massa, sollicitudin nec nibh in, pulvinar posuere libero. In hac habitasse platea dictumst. Cras quis dignissim odio. Lorem ipsum dolor sit amet, consectetur adipiscing elit. In vehicula lacinia arcu dictum faucibus. Etiam blandit vel ex quis tempus. Quisque posuere ipsum iaculis vulputate semper. Donec nec ullamcorper libero. ',1);
insert into misiblog.posts(title,catid,slug,body,created_by)values('Second Post',2,'post-two','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent dictum, magna sed malesuada egestas, ante orci maximus mi, vitae accumsan leo urna a ligula. Integer a aliquet elit. Quisque pulvinar, turpis vel consequat malesuada, nunc ipsum ultricies felis, sit amet fringilla purus risus efficitur orci. Praesent congue pharetra mi non blandit. Nullam a rutrum urna. Proin vitae malesuada magna. Sed purus massa, sollicitudin nec nibh in, pulvinar posuere libero. In hac habitasse platea dictumst. Cras quis dignissim odio. Lorem ipsum dolor sit amet, consectetur adipiscing elit. In vehicula lacinia arcu dictum faucibus. Etiam blandit vel ex quis tempus. Quisque posuere ipsum iaculis vulputate semper. Donec nec ullamcorper libero. ',1);
insert into misiblog.posts(title,catid,slug,body,created_by)values('Third Post',3,'post-three','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent dictum, magna sed malesuada egestas, ante orci maximus mi, vitae accumsan leo urna a ligula. Integer a aliquet elit. Quisque pulvinar, turpis vel consequat malesuada, nunc ipsum ultricies felis, sit amet fringilla purus risus efficitur orci. Praesent congue pharetra mi non blandit. Nullam a rutrum urna. Proin vitae malesuada magna. Sed purus massa, sollicitudin nec nibh in, pulvinar posuere libero. In hac habitasse platea dictumst. Cras quis dignissim odio. Lorem ipsum dolor sit amet, consectetur adipiscing elit. In vehicula lacinia arcu dictum faucibus. Etiam blandit vel ex quis tempus. Quisque posuere ipsum iaculis vulputate semper. Donec nec ullamcorper libero. ',1);

select * from misiblog.posts;
select * from misiblog.users;
select * from misiblog.categories;
delete from misiblog.users where id = 3;
update misiblog.posts set thumbimg = "noimage.jpg" where id = 3;
insert into misiblog.pages(title,slug,body)values('Home page','home','<p>This is my home page</p>');
insert into misiblog.menus(name,page_slug)values('Home','home');
insert into misiblog.menus(name,link)values('Posts','http://localhost/blog/posts');
insert into misiblog.menus(name,link)values('About me','http://localhost/blog/aboutme');
insert into misiblog.menus(name,link,target)values('Github','https://github.com/andoren',1);
insert into misiblog.menus(name,link,target)values('EKE','https://uni-eszterhazy.hu/',1);
select * from misiblog.menus;
delete from misiblog.menus where id >2;
select * from misiblog.menus where deleted = 0 and name = "About me";
truncate misiblog.menus;
select * from misiblog.pages;
select * from misiblog.pages left join misiblog.users on (misiblog.pages.created_by=misiblog.users.id);