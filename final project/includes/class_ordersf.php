<?php
include_once 'includes/conn.php';

class orders
{
	private $owner;
    private $product;
	private $qty;
	private $confirmation;
	private $total;
	private $design;
	private $note;

	
	// function for create
	public function create($owner,$product,$qty,$confirmation,$total,$design,$note)
	{
	mysql_query("INSERT INTO orders(
	owner,product,qty,confirmation,total,design,note) 
	VALUES
	('$owner','$product','$qty','$confirmation','$total','$design','$note')");
	}
	// function for create
	
	// function for read
	public function read()
	{
		return mysql_query("SELECT * FROM orders ORDER BY order_id ASC");
	}
	// function for read
	
	// function for delete
	public function delete($id)
	{
		mysql_query("DELETE FROM orders WHERE order_id=".$id);
	}
	// function for delete
	
	// function for update
	public function update($owner,$product,$qty,$confirmation,$total,$design,$note,$id)
	{
		mysql_query("UPDATE orders SET owner='$owner', product='$product', qty='$qty', confirmation='$confirmation',total='$total',design='$design',note='$note'WHERE order_id=".$id);
	}
	// function for update
}
?>