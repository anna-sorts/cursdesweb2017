use caront_dbempl;
CREATE TABLE `T_KNOWLEDGE_LINES` (
	`KNLN_ID` INT(11) NOT NULL,
	`KNLN_NAME` VARCHAR(45) NOT NULL,
	PRIMARY KEY (`KNLN_ID`)
);
INSERT INTO `T_KNOWLEDGE_LINES` (`KNLN_ID`, `KNLN_NAME`)
VALUES (10, 'Java');
INSERT INTO `T_KNOWLEDGE_LINES` (`KNLN_ID`, `KNLN_NAME`)
VALUES (20, '.NET');
INSERT INTO `T_KNOWLEDGE_LINES` (`KNLN_ID`, `KNLN_NAME`)
VALUES (30, 'Mainframe');
select * from t_knowledge_lines;

CREATE TABLE `T_OFFICES` (
	OFFC_ID INT NOT NULL,
	OFFC_COUNTRY VARCHAR(30) NOT NULL,
    OFFC_CITY VARCHAR(40) NOT NULL,
    OFFC_DESCRIPTION VARCHAR(100)
	#PRIMARY KEY (OFFC_ID)
);
drop table T_OFFICES;
INSERT INTO T_OFFICES 
(
	OFFC_ID, 
    OFFC_COUNTRY,
    OFFC_CITY,
    OFFC_DESCRIPTION
)
VALUES 
(
	#10, 'España', 'Madrid', 'Oficina central'
    #20, 'Chile', 'Santiago', 'Oficina principal de Chile'
    #30, 'Argentina', 'Buenos Aires', NULL
    #11, 'España', 'Barcelona', NULL
    12, 'España', 'Valladolid', NULL
);
select * from T_OFFICES;

CREATE TABLE T_EMPLOYEES 
(
	EMPL_ID INT NOT NULL AUTO_INCREMENT,
	OFFC_ID INT NOT NULL,
	EMPL_FORNAME VARCHAR(50) NOT NULL,
	EMPL_MIDDLE_NAME VARCHAR(50),
	EMPL_SURNAME VARCHAR(50) NOT NULL,
	EMPL_NUMBER INT NOT NULL,
	EMPL_HIRE_DATE DATETIME NOT NULL,
	EMPL_MENTOR_ID INT,
	PRIMARY KEY (EMPL_ID)
);
ALTER TABLE T_EMPLOYEES
ADD COLUMN KNLN_ID INT
AFTER OFFC_ID;

INSERT INTO T_EMPLOYEES 
(
	OFFC_ID, 
    KNLN_ID, 
    EMPL_FORNAME, 
    EMPL_MIDDLE_NAME,
    EMPL_SURNAME, 
    EMPL_NUMBER, 
    EMPL_HIRE_DATE, 
    EMPL_MENTOR_ID
) 
VALUES
(
	20, 
    NULL, 
    'Pedro', 
    NULL,
    'García', 
    180, 
    20060518, 
    NULL
);
CREATE TABLE T_PROJECTS (
	PRJT_ID INT NOT NULL AUTO_INCREMENT,
	PRJT_CODE VARCHAR(16) NOT NULL,
	PRJT_NAME VARCHAR(50) NOT NULL,
	PRIMARY KEY (PRJT_ID)
);

INSERT INTO T_PROJECTS
(
	PRJT_CODE,
    PRJT_NAME
)
VALUES
(
	#'EXT-001000-01234',
    #'Gestión de usuarios'
    'INT-001000-03200',
    'Cursos de formación'
);

CREATE TABLE T_PROJECTS_EMPLOYEES (
	PRJT_ID INT NOT NULL,
	EMPL_ID INT NOT NULL,
	PRIMARY KEY (PRJT_ID, EMPL_ID)
);

INSERT INTO T_PROJECTS_EMPLOYEES
(
	PRJT_ID,
    EMPL_ID
)
VALUES
(
	2,
    2
);

ALTER TABLE T_OFFICES
	ADD PRIMARY KEY (OFFC_ID);
    
ALTER TABLE T_EMPLOYEES
	ADD INDEX FK_EMPL_OFFC (OFFC_ID),
	ADD CONSTRAINT FK_EMPL_OFFC
		FOREIGN KEY (OFFC_ID)
		REFERENCES T_OFFICES (OFFC_ID);
        
ALTER TABLE T_EMPLOYEES
	ADD INDEX FK_EMPL_KNLN (KNLN_ID),
	ADD CONSTRAINT FK_EMPL_KNLN
		FOREIGN KEY (KNLN_ID)
		REFERENCES T_KNOWLEDGE_LINES (KNLN_ID);

ALTER TABLE T_PROJECTS_EMPLOYEES
	ADD INDEX FK_PREM_PRJT (PRJT_ID),
	ADD CONSTRAINT FK_PREM_PRJT
		FOREIGN KEY (PRJT_ID)
		REFERENCES T_PROJECTS (PRJT_ID);

ALTER TABLE T_PROJECTS_EMPLOYEES
	ADD INDEX FK_PREM_EMPL (EMPL_ID),
	ADD CONSTRAINT FK_PREM_EMPL
		FOREIGN KEY (EMPL_ID)
		REFERENCES T_EMPLOYEES (EMPL_ID);

UPDATE T_EMPLOYEES
	SET OFFC_ID = 40
    WHERE EMPL_ID = 1;