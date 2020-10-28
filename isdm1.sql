CREATE table Award (

AwardID	varchar(10), Categories varchar(20),

CONSTRAINT ovs_pk3 PRIMARY KEY (AwardID)
);
CREATE table GuestVoters (

GuestID	varchar(10), name varchar(30), contactno int not NULL, email varchar(30), address varchar(30), password varchar(20),

CONSTRAINT ovs_pk4 PRIMARY KEY (GuestID)


);
CREATE table MemberVoters (

MemberID varchar(10), email varchar(30), password varchar(20)

CONSTRAINT ovs_pk5 PRIMARY KEY (MemberID)
);
CREATE table Nominations (


NominationID varchar(10), NominationName varchar(20), AwardID	varchar(10),

CONSTRAINT ovs_pk2 PRIMARY KEY (NominationID),
CONSTRAINT ovs_fk4 FOREIGN KEY (AwardID) REFERENCES Award (AwardID)

);
 
CREATE table Voters (
voterID varchar(10), MemberID varchar(10), GuestID	varchar(10), AwardID	varchar(10), NominationID varchar(10), NominationName varchar(20),

CONSTRAINT ovs_pk1 PRIMARY KEY (voterID),
CONSTRAINT ovs_fk1 FOREIGN KEY ( MemberID) REFERENCES MemberVoters (MemberID),
CONSTRAINT ovs_fk2 FOREIGN KEY ( GuestID) REFERENCES GuestVoters (GuestID), CONSTRAINT ovs_fk3 FOREIGN KEY ( NominationID) REFERENCES Nominations (NominationID)


);
CREATE table Opinion (
OpinionID varchar(10), MemberID varchar(10), GuestID varchar(10), Comment varchar(100),

CONSTRAINT ovs_pk6 PRIMARY KEY (OpinionID),
CONSTRAINT ovs_fk5 FOREIGN KEY ( MemberID) REFERENCES MemberVoters (MemberID),
CONSTRAINT ovs_fk6 FOREIGN KEY ( GuestID) REFERENCES GuestVoters (GuestID)
);
CREATE table Award_Cat (

AwardID varchar(10), Categories varchar(20),

CONSTRAINT ovs_pk7 PRIMARY KEY (AwardID),
CONSTRAINT ovs_fk7 FOREIGN KEY (AwardID) REFERENCES Award (AwardID)
);
