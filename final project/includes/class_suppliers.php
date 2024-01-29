<?php
include_once 'includes/conn.php';

class suppliers
{
	private $name;
	private $company;
	private $address;
    private $contact;
	private $country;
	private $city;
	private $date_added;
	private $location;
	private $profile_pic;

	
	// function for create
	public function create($name,$company,$address,$contact,$country,$city,$date_added,$location,$profile_pic)
	{
	mysql_query("INSERT INTO suppliers(
	name,company,address,contact,country,city,date_added,location,profile_pic) 
	VALUES
	('$name','$company','$address','$contact','$country','$city','$date_added','$location','$profile_pic')");
	}
	// function for create
	
	// function for read
	public function read()
	{
		return mysql_query("SELECT * FROM suppliers ORDER BY supplier_id ASC");
	}
	// function for read
	
	// function for delete
	public function delete($id)
	{
		mysql_query("DELETE FROM suppliers WHERE supplier_id=".$id);
	}
	// function for delete
	
	// function for update
	public function update($name,$company,$address,$contact,$country,$city,$date_added,$location,$profile_pic,$id)
	{
		mysql_query("UPDATE suppliers SET name='$name', company='$company', address='$address', contact='$contact',country='$country',city='$city' ,date_added='$date_added',profile_pic='$profile_pic'WHERE supplier_id=".$id);
	}
	// function for update
}
?>