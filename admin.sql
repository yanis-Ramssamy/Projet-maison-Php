CREATE table ADMIN (
    id int(11) NOT NULL AUTO_INCREMENT,
    login  varchar(30) COLLATE latin1_bin NOT NULL,
    mdp varchar(30) COLLATE latin1_bin NOT NULL,
    PRIMARY KEY (id)

)


insert into ADMIN   (id,  login ,mdp ) VALUES (1,"Ramssamy","yanislebg")