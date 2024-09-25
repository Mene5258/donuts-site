-- DB作成（DB名：donuts）
drop database if exists donuts;
create database donuts default character set utf8 collate utf8_general_ci;

-- DB操作ユーザ作成（ユーザ名：donuts）
drop user if exists 'donuts'@'localhost';
create user 'donuts'@'localhost' identified by 'password';
grant all on donuts.* to 'donuts'@'localhost';
use donuts;

-- テーブル作成（テーブル名：customer）
create table customer (
	id int auto_increment primary key unique not null, 
	name varchar(100) not null, 
	kana varchar(100) not null,
	post_code varchar(100) not null,
	address varchar(200) not null, 
	mail varchar(100) not null unique, 
	password varchar(255) not null
);

-- テーブル作成（テーブル名：product）
create table product (
	id int auto_increment primary key unique not null, 
	name varchar(200) not null, 
	price int not null,
	description varchar(1000) not null
);

-- テーブル作成（テーブル名：card）
create table card (
	id int auto_increment primary key unique not null, 
	card_name varchar(100) not null,
	card_type varchar(100) not null,
	card_no varchar(22) unique not null,
	card_month int not null,
	card_year int not null,
	card_security_code int not null,
	foreign key(id) references customer(id)
);

-- テーブル作成（テーブル名：purchase）
create table purchase (
	id int not null primary key, 
	customer_id int not null, 
	foreign key(customer_id) references customer(id)
);

-- テーブル作成（テーブル名：purchase_detail）
create table purchase_detail (
	purchase_id int not null 
	product_id int not null, 
	count int not null, 
	primary key(purchase_id, product_id), 
	foreign key(purchase_id) references purchase(id), 
	foreign key(product_id) references product(id)
);


-- レコード作成（productテーブル）
insert into product values(null, 'CCドーナツ 当店オリジナル（5個入り）', 1500,'説明');
insert into product values(null, 'チョコレートデライト（5個入り）', 1600,'説明');
insert into product values(null, 'キャラメルクリーム（5個入り）', 1600,'説明');
insert into product values(null, 'プレーンクラシック（5個入り）', 1500,'説明');
insert into product values(null, '【新作】サマーシトラス（5個入り）', 1600,'説明');
insert into product values(null, 'ストロベリークラッシュ（5個入り）', 1800,'説明');
insert into product values(null, 'フルーツドーナツセット（12個入り）', 3500,'説明');
insert into product values(null, 'フルーツドーナツセット（14個入り）', 4000,'説明');
insert into product values(null, 'ベストセレクションボックス（4個入り）', 1200,'説明');
insert into product values(null, 'チョコクラッシュボックス（7個入り）', 2400,'説明');
insert into product values(null, 'クリームボックス（4個入り）', 1400,'説明');
insert into product values(null, 'クリームボックス（9個入り）', 2800,'説明');


-- ユーザアカウントはhtml側で作成するため記述してません
