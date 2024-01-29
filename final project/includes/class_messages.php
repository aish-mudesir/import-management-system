<?php
include_once 'includes/conn.php';

class messages
{
	private $name;
	private $email;
	private $subject;
    private $message;

	
	// function for create
	public function create($name,$email,$subject,$message)
	{
	mysql_query("INSERT INTO messages(
	name,email,subject,message) 
	VALUES
	('$name','$email','$subject','$message')");
	}
	// function for create
	
	// function for read
	public function read()
	{
		return mysql_query("SELECT * FROM messages ORDER BY message_id ASC");
	}
	// function for read
	
	// function for delete
	public function delete($id)
	{
		mysql_query("DELETE FROM messages WHERE message_id=".$id);
	}
	// function for delete
	
	// function for update
	public function update($name,$email,$subject,$message)
	{
		mysql_query("UPDATE messages SET name='$name', email='$email', subject='$subject', message='$message'WHERE message_id=".$id);
	}
	// function for update
}
?>