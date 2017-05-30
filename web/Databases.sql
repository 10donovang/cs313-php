
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

ALTER TABLE users
ADD COLUMN user_name VARCHAR,
ADD COLUMN password VARCHAR;

UPDATE users
SET user_name = '10donovang'
WHERE
first_name = 'Donovan';

UPDATE users
SET password = 'password'
WHERE
first_name = 'Donovan';

ALTER TABLE users
ALTER COLUMN user_name SET NOT NULL,
ALTER COLUMN password SET NOT NULL;

INSERT INTO workouts VALUES(
NEXTVAL('workouts_s1')
, 'Cardio'
, 'Coconut'
, 'Cardio'
, 'Short'
);

INSERT INTO workout_routine VALUES(
NEXTVAL('routine_s1')
, CURRVAL('workouts_s1')
, 'Battle Ropes'
, 'Med Ball Slams'
, 'Sledgehammer Slings'
, 'Bike Sprints'
, 'Jump Rope'
, 'Do each workout'
, 'for 1 min. 3 times'
);

INSERT INTO workouts VALUES(
NEXTVAL('workouts_s1')
, 'Cardio'
, 'Power Hour'
, 'Cardio'
, 'Long'
);

INSERT INTO workout_routine VALUES(
NEXTVAL('routine_s1')
, CURRVAL('workouts_s1')
, 'Warm Up: 5 min'
, 'Hammer Time 15 min'
, 'Farmers Walk 15 min'
, 'Tire Flipping 15 min'
, 'Cool Down'
);

INSERT INTO workouts VALUES(
NEXTVAL('workouts_s1')
, 'Cardio'
, 'Running'
, 'Cardio'
, 'Med'
);

INSERT INTO workout_routine VALUES(
NEXTVAL('routine_s1')
, CURRVAL('workouts_s1')
, 'Warm Up Run'
, '20 phush-ups'
, '100 meter run'
, '20 crunches'
, '100 meter run'
, '20 burpees'
, '100 meter run'
, '2 jumping jacks'
, 'Repeat until tired.'
);

INSERT INTO workouts VALUES(
NEXTVAL('workouts_s1')
, 'Muscle Building'
, 'Back'
, 'Muscle Building'
, 'Short'
);

INSERT INTO workout_routine VALUES(
NEXTVAL('routine_s1')
, CURRVAL('workouts_s1')
, 'Deadlift 3:10'
, 'Pulldown 3:10'
, 'Dumbbell Row 3:10'
, 'Preacher Curls 3:10'
, 'Incline DB Curls3:10'
, 'Record Weight'
);

INSERT INTO workouts VALUES(
NEXTVAL('workouts_s1')
, 'Muscle Building'
, 'Shoulder'
, 'Muscle Building'
, 'Long'
);

INSERT INTO workout_routine VALUES(
NEXTVAL('routine_s1')
, CURRVAL('workouts_s1')
, 'Seated Db Press 3:10'
, 'Seated Db Press 3:10'
, 'Incline Db Press3:10'
, 'Lateral Raise 3:10'
, 'Pec Dec 3:10'
, 'Reverse Pec Dec 3:10'
, 'Db Skullcrushers3:10'
,'Db Shrugs 3:10'
, 'Record Weight'
);

INSERT INTO workouts VALUES(
NEXTVAL('workouts_s1')
, 'Muscle Building'
, 'Ab'
, 'Muscle Building'
, 'Short'
);

INSERT INTO workout_routine VALUES(
NEXTVAL('routine_s1')
, CURRVAL('workouts_s1')
, 'Ab Crunch 3:15'
, 'Side Crunch 3:15:2'
, 'Lying Leg Raise 3:12'
, 'Lateral Raise 3:10'
, 'Russian Twist 3:10:2'
, 'Plank 3:20 secs'
);

INSERT INTO workouts VALUES(
NEXTVAL('workouts_s1')
, 'Muscle Building'
, 'Leg'
, 'Muscle Building'
, 'Short'
);

INSERT INTO workout_routine VALUES(
NEXTVAL('routine_s1')
, CURRVAL('workouts_s1')
, 'Squat 3:10'
, 'Reverse Lunge 3:10'
, 'Hamstring Curls 3:10'
, 'Leg Press 3:10'
, 'Calf Raise 3:10'
);

INSERT INTO workouts VALUES(
NEXTVAL('workouts_s1')
, 'Muscle Building'
, 'Back and Tri'
, 'Muscle Building'
, 'Med'
);

INSERT INTO workout_routine VALUES(
NEXTVAL('routine_s1')
, CURRVAL('workouts_s1')
, 'Pullup 3:10'
, 'Seated Row 3:10'
, 'Db Pullover 3:10'
, 'Hammer Curl 3:10'
, 'Tri Extension 3:10'
, 'Cable Curls 3:10'
, 'Tricep Pushdown 3:10'
, 'Db Shrugs 3:10'
);