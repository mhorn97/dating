<?php
/**
 * Created by PhpStorm.
 * User: micha
 * Date: 2/28/2018
 * Time: 5:42 AM
 */
/*
 * CREATE TABLE IF NOT EXISTS members (
    					member_id int NOT NULL AUTO_INCREMENT,
                        fname varchar(255),
                        lname varchar(255),
                        age int,
                        gender varchar(8),
                        phone int (10),
                        email varchar(255),
                        state varchar(255),
                        seeking varchar(8),
                        bio varchar(255),
                        premium tinyint,
                        image varchar(255),
                        interests varchar(255),
                       PRIMARY KEY (member_id)
						)ENGINE=InnoDB DEFAULT CHARSET=latin1
 */

require("/home/mhorngre/config.php");

class DBfunctions
{

    function connect()
    {
        try {
            //Instantiate a database object
            $dbh = new PDO(DB_DSN, DB_USERNAME,
                DB_PASSWORD);
            //echo "Connected to database!!!";
            return $dbh;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return;
        }
    }

    function addMember($fname, $lname, $age, $gender, $phone, $email, $seeking, $state, $bio, $interests, $premium)
    {
        global $dbh;

        //1. define the query
        $sql = "INSERT INTO members (fname, lname, age, gender, phone, email, seeking, state, bio, interests, premium)
            VALUES (:fname, :lname, :age, :gender, :phone, :email, :seeking, :state, :bio, :interests, :premium)";

        //2. prepare the statement
        $statement = $dbh->prepare($sql);

        //3. bind parameters
        $statement->bindParam(':fname', $fname, PDO::PARAM_STR);
        $statement->bindParam(':lname', $lname, PDO::PARAM_STR);
        $statement->bindParam(':age', $age, PDO::PARAM_INT);
        $statement->bindParam(':gender', $gender, PDO::PARAM_STR);
        $statement->bindParam(':phone', $phone, PDO::PARAM_INT);
        $statement->bindParam(':email', $email, PDO::PARAM_STR);
        $statement->bindParam(':seeking', $seeking, PDO::PARAM_STR);
        $statement->bindParam(':state', $state, PDO::PARAM_STR);
        $statement->bindParam(':bio', $bio, PDO::PARAM_STR);
        $statement->bindParam(':interests', $interests, PDO::PARAM_STR);
        $statement->bindParam(':premium', $premium, PDO::PARAM_INT);

        //4. execute the statement
        $success = $statement->execute();

        return $success;
    }

    function getMembers()
    {
        global $dbh;

        $sql = "SELECT * FROM members ORDER BY lname";

        $statement = $dbh->prepare($sql);

        $statement->execute();

        $row = $statement->fetchAll(PDO::FETCH_ASSOC);


        return $row;
    }
}