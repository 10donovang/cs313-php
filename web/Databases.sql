
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

CREATE TABLE workout_routine(
routine_id          int
, workout_id        int
, workout_1         varchar(20)
, workout_2         varchar(20)
, workout_3         varchar(20)
, workout_4         varchar(20)
, workout_5         varchar(20)
, workout_6         varchar(20)
, workout_7         varchar(20)
, workout_8         varchar(20)
, workout_9         varchar(20)
, workout_10         varchar(20)
);

ALTER TABLE workout_routine
ADD CONSTRAINT pk_workout_routine PRIMARY KEY(routine_id);

CREATE SEQUENCE routine_s1 START WITH 1001;

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

INSERT INTO workouts VALUES(
NEXTVAL('workouts_s1')
, 'the_girls'
, 'Angie'
, 'Cross Fit'
, 'Long'
);

INSERT INTO workout_routine VALUES(
NEXTVAL('routine_s1')
, CURRVAL('workouts_s1')
, '100 Pull-ups'
, '100 Push-ups'
, '100 Sit-ups'
, '100 Squats'
, 'Record time.'
);

INSERT INTO workouts VALUES(
NEXTVAL('workouts_s1')
, 'the_girls'
, 'Chelsea'
, 'Cross Fit'
, 'Med'
);

INSERT INTO workout_routine VALUES(
NEXTVAL('routine_s1')
, CURRVAL('workouts_s1')
, '5 Pull-ups'
, '10 Push-ups'
, '15 Squats'
, 'Every Minute'
, 'for 30 min.'
);

INSERT INTO workouts VALUES(
NEXTVAL('workouts_s1')
, 'the_girls'
, 'Cindy'
, 'Cross Fit'
, 'Short'
);

INSERT INTO workout_routine VALUES(
NEXTVAL('routine_s1')
, CURRVAL('workouts_s1')
, '5 Pull-ups'
, '10 Push-ups'
, '15 Squats'
, 'As many as possible'
, 'for 20 min.'
);

INSERT INTO users VALUES(
NEXTVAL('users_s1')
, 'Donovan'
, 'K'
, 'Gregory'
, current_date
);