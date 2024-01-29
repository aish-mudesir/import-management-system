<?php
include_once 'includes/conn.php';

class product
{
	private $user;
	private $name;
	private $description;
	private $price;
	private $img;

	// function for create
	public function create($user,$name,$description,$price,$img)
	{
	mysql_query("INSERT INTO product(
	user,name,description,price,img) 
	VALUES
	('$user','$name','$description','$price','$img')");
	}
	// function for create
	
	// function for read
	public function read()
	{
		return mysql_query("SELECT * FROM product ORDER BY id ASC");
	}
	// function for read
	
	// function for delete
	public function delete($id)
	{
		mysql_query("DELETE FROM product WHERE id=".$id);
	}
	// function for delete
	
	// function for update
	public function update($user,$name,$description,$price,$img,$id)
	{
		mysql_query("UPDATE product SET user='$user', name='$name', description='$description', price='$price',img='$img'WHERE id=".$id);
	}
	// function for update
}
?>