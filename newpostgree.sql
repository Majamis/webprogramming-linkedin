

/*Table structure for table "add_contact_notification" */

DROP TABLE IF EXISTS "add_contact_notification";

CREATE TABLE "add_contact_notification" (
  "id" SERIAL NOT NULL,
  "userId" integer NOT NULL references users("userId"),
  "contact_userId" integer NOT NULL references users("userId"),
  "personal_note" varchar(255) DEFAULT NULL,
  "relationId" varchar(255) NOT NULL,
  "time_date" date NOT NULL,
  PRIMARY KEY ("id")
  /*KEY "userId" ("userId"),
  KEY "contact_userId" ("contact_userid")
  CONSTRAINT "add_contact_notification_ibfk_1" FOREIGN KEY ("userId") REFERENCES "users" ("userId"),
  CONSTRAINT "add_contact_notification_ibfk_2" FOREIGN KEY ("contact_userId") REFERENCES "users" ("userId")
*/);

/*Data for the table "add_contact_notification" */


/*Table structure for table "confirm" */

DROP TABLE IF EXISTS "confirm";

CREATE TABLE "confirm" (
  "id" SERIAL NOT NULL,
  "userId" varchar(128) NOT NULL,
  "key" varchar(128) NOT NULL,
  "email" varchar(250) DEFAULT NULL,
  PRIMARY KEY ("id")
);

/*Table structure for table "contacts_info" */

DROP TABLE IF EXISTS "contacts_info";

CREATE TABLE "contacts_info" (
  "contactId" SERIAL NOT NULL,
  "userId" integer DEFAULT NULL references users("userId"),
  "fName" varchar(40) NOT NULL,
  "lName" varchar(40) NOT NULL,
  "userName" varchar(40) NOT NULL,
  "email" varchar(40) NOT NULL,
  "password" varchar(40) NOT NULL,
  "type" varchar(40) NOT NULL,
  PRIMARY KEY ("contactId")
  /*KEY "userId" ("userId"),
  CONSTRAINT "userId" FOREIGN KEY ("userId") REFERENCES "users" ("userId") ON DELETE NO ACTION ON UPDATE NO ACTION
*/);

/*Data for the table "contacts_info" */

/*Table structure for table "relation_types" */

DROP TABLE IF EXISTS "relation_types";

CREATE TABLE "relation_types" (
  "id" SERIAL NOT NULL,
  "relation_name" varchar(255) NOT NULL,
  PRIMARY KEY ("id")
);
/*Table structure for table "useradditionalinfo" */

DROP TABLE IF EXISTS "useradditionalinfo";

CREATE TABLE "useradditionalinfo" (
  "userId" integer NOT NULL references users("userId"),
  "country" varchar(255) NOT NULL,
  "postalCode" integer NOT NULL,
  "jTitle" varchar(255) NOT NULL,
  "selfEmp" boolean NOT NULL,
  "company" varchar(255) DEFAULT NULL,
  "industry" varchar(255) DEFAULT NULL,
  "typeId" varchar(255) NOT NULL,
  "picture" varchar(255) DEFAULT NULL,
  "thumbnail" varchar(255) DEFAULT NULL,
  PRIMARY KEY ("userId")
  /*KEY "userId" ("userId"),
  KEY "typeId" ("typeId"),
  CONSTRAINT "useradditionalinfo_ibfk_1" FOREIGN KEY ("userId") REFERENCES "users" ("userId")
*/);
/*Table structure for table "users" */

DROP TABLE IF EXISTS "users";

CREATE TABLE "users" (
  "userId" SERIAL NOT NULL,
  "fName" varchar(255) NOT NULL,
  "lName" varchar(255) NOT NULL,
  "username" varchar(255) NOT NULL,
  "password" varchar(255) NOT NULL,
  "validate" boolean NOT NULL,
  PRIMARY KEY ("userId")
);
/*Table structure for table "usertype" */

DROP TABLE IF EXISTS "usertype";

CREATE TABLE "usertype" (
  "typeId" SERIAL NOT NULL,
  "status" varchar(255) NOT NULL,
  PRIMARY KEY ("typeId","status")
);

/*Data for the table "usertype" */
