
CREATE TABLE workouts(
workout_id          int,
workout_context     varchar(20) NOT NULL,
workout_name        varchar(20) NOT NULL,
workout_type        varchar(20) NOT NULL,
duration            varchar(20) NOT NULL
);

CREATE SEQUENCE workouts_s1 START WITH 1001;

ALTER TABLE workouts
ADD CONSTRAINT pk_workouts PRIMARY KEY(workout_id);





CREATE TABLE users(
user_id              int ,
first_name           VARCHAR(20) NOT NULL,
middle_name                 VARCHAR(20),
last_name                   VARCHAR(20) NOT NULL,
creation_date         DATE NOT NULL
);

CREATE SEQUENCE users_s1 START WITH 1001;

ALTER TABLE users
ADD CONSTRAINT pk_users PRIMARY KEY(user_id);

CREATE TABLE user_saves(
user_saves_id      int,
user_id            int NOT NULL,
workout_date       DATE NOT NULL,
workout_id         int NOT NULL,
workout_notes      VARCHAR(250)
);

CREATE SEQUENCE user_saves_s1 START WITH 1001;

ALTER TABLE user_saves
ADD CONSTRAINT pk_user_saves PRIMARY KEY(user_saves_id);

ALTER TABLE user_saves
ADD CONSTRAINT fk_user_saves_1 FOREIGN KEY(user_id) REFERENCES users(user_id);

ALTER TABLE user_saves
ADD CONSTRAINT fk_user_saves_2 FOREIGN KEY(workout_id) REFERENCES workouts(workout_id);