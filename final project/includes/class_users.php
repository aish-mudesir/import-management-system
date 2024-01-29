<?php
include_once 'conn.php';

class users
{
	private $firstname;
	private $lastname;
	private $user;
    private $username;
	private $password;
	private $contact;
	private $profile_pic;

	
	// function for create
	public function create($firstname,$lastname,$user,$username,$password,$contact,$profile_pic)
	{
	mysql_query("INSERT INTO user(
	firstname,lastname,user,username,password,contact,profile_pic) 
	VALUES
	('$firstname','$lastname','$user','$username','$password','$contact','$profile_pic')");
	}
	// function for create
	
	// function for read
	public function read()
	{
		return mysql_query("SELECT * FROM user ORDER BY id ASC");
	}
	// function for read
	
	// function for delete
	public function delete($id)
	{
		mysql_query("DELETE FROM user WHERE id=".$id);
	}
	// function for delete
	
	// function for update
	public function update($firstname,$lastname,$user,$username,$password,$contact,$profile_pic,$id)
	{
		mysql_query("UPDATE user SET firstname='$firstname', lastname='$lastname', user='$user', username='$username',password='$password',contact='$contact',profile_pic='$profile_pic'WHERE id=".$id);
	}
	// function for update
}
?>