<?php 

class Items_model extends CI_Model
{		

	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->database();
		
	}
	
	public function add_items($itname,$qty,$status,$dates) 
	{
		
		$saveQmbill = array (
		'item_name' => $itname, 'qty' => $qty, 'Status' => $status,'dates' => $dates
		);
		$this->db->insert('items', $saveQmbill) ;
		echo "Items Added Thanks!";
	}
	
	
	public function update($itname,$qty,$status,$dates,$id)
	{
		$updateItems = array (
		'item_name' => $itname, 'qty' => $qty, 'Status' => $status,'dates' => $dates
		);
					$array = array( 'id' => $id );
					$this->db->where($array);
					$this->db->set($updateItems);
					$this->db->update('items');
					echo "Items Updated Successfully Thanks!";
		
		
	}
	public function deleteitem($id)
	{
		$this->db->query("delete from items where id='".$id."'");
		
		echo "Items Deleted Successfully Thanks!";
		
		
	}
	
	
	
}
?>