<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Add List</title>
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
  .form-control {
    display: block;
    width: 28%;
    height: 34px;
    padding: 6px 12px;
    font-size: 14px;
    line-height: 1.42857143;
    color: #555;
    background-color: #fff;
    background-image: none;
    border: 1px solid #ccc;
    border-radius: 4px;
    -webkit-box-shadow: inset 0 1px 1px rgb(0 0 0 / 8%);
    box-shadow: inset 0 1px 1px rgb(0 0 0 / 8%);
    -webkit-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
    -o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
    -webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
    transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
    transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
    transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
}
  
  </style>
    </head>
    <body>
       <img src="<?php echo base_url();?>images/groceserybag.png"/ style='height: 20%;
    width: 100%;'>
	    <div class="container">
  <h2>Welcome To Grocery World</h2>
  <p>Eat Healthy And Be Healthy</p>

  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Add Grocery</a></li>
    <li><a data-toggle="tab" href="#menu1">View Grocery</a></li>
    <li><a data-toggle="tab" href="#menu2">Update Grocery</a></li>
   
  </ul>

  <div class="tab-content well">
    <div id="home" class="tab-pane fade in active">
      <h3>Add Grocery</h3>
      <p> <div class="container mt-5">
            <h1>Add Grocery List</h1>
            <form action="#">
			<input type="hidden" id="base_url" name="base_url" value="<?php echo base_url();?>" />
                <div class="form-group">
                    <label>Item name</label>
                    <input type="text" class="form-control" placeholder="Item name" id="itname" name="itname"/>
                </div>
                <div class="form-group">
                    <label>Item quantity</label>
                    <input type="text" class="form-control" placeholder="Item quantity" id="qty" name="qty"/>
                </div>
                <div class="form-group">
                    <label>Item status</label>
                    <select class="form-control" id='status' name='status'>
                        <option value='PENDING'>PENDING</option>
                        <option value='BOUGHT'>BOUGHT</option>
                        <option value='NOT AVAILABLE'>NOT AVAILABLE</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Date</label>
                    <input type="date" class="form-control" placeholder="Date" id='dates' name='dates'>
                </div>
                <div class="form-group">
                    <button  value="Add" class="btn btn-danger" onclick="add()">Add</button>
                </div>
            </form>
        </div></p>
    </div>
    <div id="menu1" class="tab-pane fade">
      <h3>View Grocery</h3>
      <p><div class="container mt-5">
            <!-- top -->
            <div class="row">
                <div class="col-lg-6">
                    <h1>View Grocery List</h1>
                </div>
                
            </div>
            <!-- // top -->
            <!-- Grocery Cards -->
            <div class="row mt-4">
                <!--- -->
                <!-- Loop This -->
                <div class="col-lg-4">
                    <div class="card" >
                        <div class="card-body" >
						<?php
				
						$getitems=$this->db->query("select * from items");
								$getitems1=$getitems->result();
								if(!empty($getitems1))
								{
									foreach($getitems1 as $getitems2)
									{
											echo" <div style='background-color:lightgreen' class='well'><h5 class='card-title' style='font-weight:bold'>$getitems2->item_name</h5>
											<h6 class='card-subtitle mb-2 text-muted' style='font-weight:bold'>$getitems2->qty.Pcs.</h6>
											<p class='text-success' style='font-weight:bold'>$getitems2->Status</p></div>";
										
										
									}
									
									
									
								}
								else
								{
									echo "No Data Found";
									
								}
						?>
                         
                        </div>
                      </div>
                </div>
                <!-- // Loop -->
 

            </div>
        </div></p>
    </div>
    <div id="menu2" class="tab-pane fade">
      <h3>Update Grocery</h3>
      <p>  <div class="container mt-5">
            <h1>Update Grocery List</h1>
            <form>
                <div class="card" >
                        <div class="card-body" >
						<?php $getitems=$this->db->query("select * from items");
								$getitems1=$getitems->result();
								if(!empty($getitems1))
								{
									$i=1;
									foreach($getitems1 as $getitems2)
									{echo "<span>Item".$i."Details</span>";
										?>
										<br/>
										
										<div class="" style='' >
										Id:<input type="text" class="form-control" placeholder="Date" id='id' name='id' value="<?php echo $getitems2->id ?> " readonly >
										 Item_name: <input type="text" class="form-control" placeholder="Item name" id="itname1" name="itname1" value="<?php echo $getitems2->item_name ?>"/>
										   Quantity:<input type="text" class="form-control" placeholder="Item quantity" id="qty1" name="qty1"value="<?php echo $getitems2->qty ?>"/>
										    Status: <select class="form-control" id='status1' name='status1'>
                        <option value='PENDING'>PENDING</option>
                        <option value='BOUGHT'>BOUGHT</option>
                        <option value='NOT AVAILABLE'>NOT AVAILABLE</option>
                    </select>
					Date: <input type="date" class="form-control" placeholder="Date" id='dates1' name='dates1' value="<?php echo $getitems2->dates ?>">
					  <div style="margin-top:10px">
					  <button  value="Update" class="btn btn-success" onclick="update()">Update</button>&nbsp;&nbsp;&nbsp;
					   <button  value="deleteitem" class="btn btn-danger" onclick="deleteitem()">Delete</button>
					   </div>
										</div>	
										<br/>
										<?php
										
										
									}
									$i++;
									
									
									
								}
								else
								{
									echo "No Data Found";
									
								}
						?>
                         
                        </div>
                      </div>
            </form>
        </div></p>
    </div>
  </div>
</div>

</body>
</html>

    </body> 
</html>
<script>
   baseUrl=document.getElementById('base_url').value;
function add()
{
	var itname=$("#itname").val();
	var qty=$("#qty").val();
	var status=$("#status").val();
	var dates=$("#dates").val();
	
$.ajax({
							url: baseUrl + "index.php/Welcome/add_items",
							async: true,
							type: "POST",
							data: "itname="+itname+"&qty="+qty+"&status="+status+"&dates="+dates,
							dataType: "text",
							success: function(result) {
								alert(result);
								location.reload();
							}
});
}
function update()
{
	var itname=$("#itname1").val();
	var qty=$("#qty1").val();
	var status=$("#status1").val();
	var dates=$("#dates1").val();
	var id=$("#id").val();
	
$.ajax({
							url: baseUrl + "index.php/Welcome/update",
							async: true,
							type: "POST",
							data: "itname="+itname+"&qty="+qty+"&status="+status+"&dates="+dates+"&id="+id,
							dataType: "text",
							success: function(result) {
								alert(result);
								location.reload();
							}
});
}

function deleteitem()
{
	
	var id=$("#id").val();
	var result = confirm("Want To Delete-Item?");
				if (result) {
$.ajax({
							url: baseUrl + "index.php/Welcome/deleteitem",
							async: true,
							type: "POST",
							data: "id="+id,
							dataType: "text",
							success: function(result) {
								alert(result);
								location.reload();
							}
							
});
}
}
</script>
