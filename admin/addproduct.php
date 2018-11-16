<?php
include_once 'header.inc.php';
?>

<?php
include_once 'navbar.inc.php';
?>
  

<div class="content-wrapper" >
    <div class="container-fluid">
         <div class="row">
              <div class="col-12">
              		<h1 class="page-header">
                                 Add
                                  /<small>Products</small>
                                  <hr>
                      </h1>
               </div>
               <div class="col-6">       
                 <form method="POST" >

                 	<div class="form-group">
                        <label for="name"><strong>Name</strong></label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="Name">
                     </div>

                     <div class="form-group">
                        <label for="price"><strong>Price</strong></label>
                        <input type="text" name="price" id="price" class="form-control" placeholder="Price">
                     </div>


                     <div class="form-group">
                        <label for="type"><strong>Type</strong></label>
                        <br>
                        <select id="type">
                        	<option disabled selected value></option>
                        	<option value="1">1</option>
                        	<option value="2">2</option>
                        </select>
                     </div>

                     <div class="form-group">
                        <label for="price"><strong>Department</strong></label>
                        <br>
                        <select id="dep">
                        	
                        </select>
                     </div>

                     <button id="addbutton" class="btn btn-primary btn-lg">Add</button>
                 </form>     
              </div>
          </div>
    </div>
</div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script>
	
		


	$("#type").change(function(){

		var type=$("#type").val();
		$.ajax({
			url:"includes/dbh.inc.php",
			type:"GET",
			data:{type:type},
			dataType:"JSON",
			success:function(data){
				$("#dep").empty();
				for(var i = 0; i <Object.keys(data).length; i++)
					{	
						$("#dep").append("<option defualt value='"+data[i]['id']+" '>"+data[i]['name']+"</option>")
					}
			}
		})
	});

	
</script>


<script type="text/javascript">

	$("#addbutton").click(function(e){
		e.preventDefault();
		var name=$("#name").val(),
		 price=$("#price").val(),
		 type=$("#type").val(),
		 dep_id=$("#dep").val();

		 $.ajax({
		 	url:"includes/dbh.inc.php",
		 	type:"POST",
		 	data:{
		 		name:name,
		 		price:price,
		 		type:type,
		 		dep_id:dep_id,
		 		"add":''
		 	},
		 	success:function(data)
		 	{
		 		$("#name").val('');
		 		$("#price").val('');
		 		$("#type").val('');
		 		$("#dep").val('');
		 		alert(data);
		 	},
		 	fail:function(data)
		 	{
		 		alert("Error");
		 	}
		 });
	});



/*
		function viewdep()
		{
				$.ajax({
				url:"includes/dbh.inc.php",
				type:"POST",
				Data:{"get_Department_id":''},
				dataType:"JSON",
				success:function(data)
				{
					$("#dep").empty();
					for(var i = 0; i <Object.keys(data).length; i++)
					{	
						$("#dep").append("<option value='"+data[i]['id']+" '>"+data[i]['name']+"</option>")

					}

				},
				fail:function(data)
				{
					alert('not done');
				}
			});


		}*/

</script>





<?php
include_once 'footer.inc.php';
?>







