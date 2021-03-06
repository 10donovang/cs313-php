CREATE TABLE scriptures(
scripture_id            int,
book                    varchar(80),
chapter                 int,
verse                   int,
content                 text
);

ALTER TABLE scriptures
ADD CONSTRAINT pk_scriptures PRIMARY KEY(scripture_id);

CREATE SEQUENCE scripture_s1 START WITH 1001;

INSERT INTO scriptures VALUES
(1001
, 'John'
, 1
, 5
,'And the light shineth in darkness; and the darkness comprehended it not.'
);

INSERT INTO scriptures VALUES
(1002
, 'Doctrine and Covenants'
, 88
, 49
,'The light shineth in darkness, and the darkness comprehendeth it not; nevertheless, the day shall come when you shall comprehend even God, being quickened in him and by him.'
);

INSERT INTO scriptures VALUES
(1003
, 'Doctrine and Covenants'
, 93
, 28  
,'He that keepeth his commandments receiveth truth and light, until he is glorified in truth and knoweth all things.'
);

INSERT INTO scriptures VALUES
(1004
, 'Mosiah'
, 16
, 9
,'He is the light and the life of the world; yea, a light that is endless, that can never be darkened; yea, and also a life which is endless, that there can be no more death.'
);