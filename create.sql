
CREATE DATABASE wdnmd;
USE wdnmd;

CREATE TABLE student(
  id int NOT NULL PRIMARY KEY AUTO_INCREMENT,
  name varchar(10) NOT NULL,
  age int NOT NULL,
  classId int NOT NULL,
  className varchar(10) NOT NULL
);


INSERT INTO student VALUES ('1', '诸葛亮', '21', '1','蜀国');
INSERT INTO student VALUES ('2', '诸葛瑾', '25', '2','吴国');
INSERT INTO student VALUES ('3', '张飞', '30', '1','蜀国');
INSERT INTO student VALUES ('4', '张辽', '32', '3','魏国');
INSERT INTO student VALUES ('6', '关羽', '28', '1','蜀国');
INSERT INTO student VALUES ('7', '典韦', '27', '3','魏国');
INSERT INTO student VALUES ('8', '许褚', '41', '3','魏国');
INSERT INTO student VALUES ('9', '赵云', '20', '1','蜀国');
INSERT INTO student VALUES ('10', '陈宫', '32', '5','魏国');
INSERT INTO student VALUES ('11', '周瑜', '24', '2','吴国');
INSERT INTO student VALUES ('12', '陆逊', '18', '2','吴国');
INSERT INTO student VALUES ('13', '曹仁', '25', '3','魏国');
INSERT INTO student VALUES ('14', '刘禅', '16', '1','蜀国');
