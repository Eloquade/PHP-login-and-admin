<?php
$firstconnect=mysqli_connect('localhost', 'root', '');

$dbUser = 'codered';       // new user name


$createuser = "CREATE USER IF NOT EXISTS '$dbUser'@'localhost'";
        if (mysqli_query($firstconnect, $createuser)) {
                // echo "user created successfully .\n";
                } else {
                echo "Error creating user: " . mysqli_error($firstconnect);
                }


$grant = "GRANT USAGE ON * . * TO '$dbUser'@'localhost'";
        
        if (mysqli_query($firstconnect, $grant)) {
                // echo "grant successfully .\n";
                } else {
                echo "Error creating user: " . mysqli_error($firstconnect);
                }

$grant2 = "GRANT SELECT , INSERT , UPDATE ,
                DELETE ON * . * TO '$dbUser'@'localhost'";
        
        if (mysqli_query($firstconnect, $grant2)) {
                // echo "grant2 successfully .\n";
                } else {
                echo "Error creating user: " . mysqli_error($firstconnect);
                }

         





    $sql = "CREATE DATABASE IF NOT EXISTS peopledb";
        if (mysqli_query($firstconnect, $sql)) {
                // echo "Codered Connected Successfully .\n";
                } else {
                echo "Error creating database: " . mysqli_error($firstconnect);
                }
       

    $grant3 = "GRANT ALL PRIVILEGES ON '" . $sql . "' . * TO '" . $sql . "codered'@'localhost'";
        if (mysqli_query($firstconnect, $grant2)) {

                } else {
                 mysqli_error($db);
                }
    
    $db = mysqli_connect('localhost', 'codered', '') or
          die ('Unable to connect. Check your connection parameters.');
        mysqli_select_db($db, 'peopledb' ) or die(mysqli_error($db));


    $people = "CREATE TABLE IF NOT EXISTS `people` (
        `people_id` int(11) NOT NULL AUTO_INCREMENT,
        `Student_No` varchar(30) NOT NULL,
        `Name` varchar(30) NOT NULL,
        `Birthday` varchar(30) NOT NULL,
        `Course` varchar(30) NOT NULL,
        `Email` varchar(30) NOT NULL,
        `comment` text NOT NULL,
        PRIMARY KEY (`people_id`)
        ) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;";

                if (mysqli_query($db, $people)) {
                // echo "\nTable People created successfully.";
                } else {
                echo "Error creating table: " . mysqli_error($db);
                }

    $people1 = "INSERT INTO `people` (`people_id`, `Student_No`, `Name`, `Birthday`, `Course`, `Email`, `comment`) VALUES
                (1, '2019-106321', 'Lawrence B Perez', 'September 08,1999', 'bachelor of science information technology', 'lbperez@rtu.edu.ph', 'Programming is fun!')";


                if (mysqli_query($db, $people1)) {
                //     echo "\nNew record created successfully.";

                    } else {
                    echo "\nError creating table: " . mysqli_error($db);
                    }
     $users = "CREATE TABLE IF NOT EXISTS `users` (
            `id` int(11) NOT NULL AUTO_INCREMENT,
            `firstname` varchar(50) NOT NULL,
            `lastname` varchar(50) NOT NULL,
            `email` varchar(50) NOT NULL,
            `password` varchar(50) NOT NULL,
            `gender` varchar(9) check (gender in ('Female','Male')),
            `phone_no` varchar(11) NOT NULL,
            `Birth_Date` date,
            `username` varchar(50) NOT NULL,
            PRIMARY KEY (`id`)
            )";
                if (mysqli_query($db, $users)) {
                //     echo "\nTable Users created successfully.";
                    } else {
                    echo "Error creating table: " . mysqli_error($db);
                    }
    $users1 = "INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`, `gender`, `phone_no`, `Birth_Date`, `username`) VALUES
                (1, 'Admin', 'Codered', 'Codered@rtu.edu.ph', 'Admin123', 'Male', '123456789', 'November 12,2021', 'Administrator')";

                 if (mysqli_query($db, $users1)) {
                //     echo "\nNew record created successfully.";
                    } else {
                    echo "Error creating table: " . mysqli_error($db);
                    }
        
         $admin = "CREATE TABLE IF NOT EXISTS `adminlogin` (
                        `id` int(11) NOT NULL AUTO_INCREMENT,
                        `adminname` varchar(100) NOT NULL,
                        `password`varchar(100) NOT NULL,
                        PRIMARY KEY (`id`)
                        )";
                                if (mysqli_query($db, $admin)) {
                                        //     echo "\nTable Users created successfully.";
                                            } else {
                                            echo "Error creating table: " . mysqli_error($db);
                                            }

        $admin1 = "INSERT INTO `adminlogin` (`id`, `adminname`, `password`) VALUES
                (1, 'Admin', 'Codered')";

                        if (mysqli_query($db, $admin1)) {
                                //     echo "\nNew record created successfully.";
                                    } else {
                                    echo "Error creating table: " . mysqli_error($db);
                                    }
                    
mysqli_select_db($db, 'peopledb' ) or die(mysqli_error($db));
?>