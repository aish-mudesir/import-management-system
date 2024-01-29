<?php
include_once 'conn.php';

class users
{
	private $firstname;
	private $lastname;
	private $user;
    private $username;
	private $password;
	private $profile_pic;

	
	// function for create
	public function create($firstname,$lastname,$user,$username,$password,$profile_pic)
	{
	mysql_query("INSERT INTO bank1(
	first_name,last_name,branch,secret_code,amoutoffbirr,profile_pic) 
	VALUES
	('$firstname','$lastname','$user','$username','$password',$profile_pic')");
	}
	// function for create
	
	// function for read
	public function read()
	{
		return mysql_query("SELECT * FROM bank1 ORDER BY id ASC");
	}
	// function for read
	
	// function for delete
	public function delete($id)
	{
		mysql_query("DELETE FROM bank1 WHERE id=".$id);
	}
	// function for delete
	
	// function for update
	public function update($firstname,$lastname,$user,$username,$password,$profile_pic,$id)
	{
		mysql_query("UPDATE user SET firstname='$firstname', lastname='$lastname', user='$user', username='$username',password='$password',profile_pic='$profile_pic'WHERE id=".$id);
	}
	// function for update
}
?>