<?php
$hostname="localhost"; //local server name default localhost
$username="root";  //mysql username default is root.
$password="";       //blank if no password is set for mysql.
$database="student";  //database name which you created
$con=mysql_connect($hostname,$username,$password);
if(! $con)
{
die('Connection Failed'.mysql_error());
}

mysql_select_db($database,$con);

function CreateTable()
{
    $qry = "Create Table $this->tablename (".
            "id_user INT NOT NULL AUTO_INCREMENT ,".
            "name VARCHAR( 128 ) NOT NULL ,".
            "email VARCHAR( 64 ) NOT NULL ,".
            "phone_number VARCHAR( 16 ) NOT NULL ,".
            "username VARCHAR( 16 ) NOT NULL ,".
            "password VARCHAR( 32 ) NOT NULL ,".
            "confirmcode VARCHAR(32) ,".
            "PRIMARY KEY ( id_user )".
            ")";
            
    if(!mysql_query($qry,$this->connection))
    {
        $this->HandleDBError("Error creating the table \nquery was\n $qry");
        return false;
    }
    return true;
}






?>