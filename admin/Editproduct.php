<?php
include_once 'header.inc.php';
?>

<?php
include_once 'navbar.inc.php';
?>
  

<div class="modal fade bs-example-modal-lg1" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="col-12">
                        <br>  
                     <h1 class="page-header">
                                  Edit Product Data Form
                                  
                                 
                                  <hr>
                      </h1>

                             <form method="POST">
                             	<div class="form-group">
                                  <label for="name">Name</label>
                                  <input type="text" id="edit_name" class="form-control" >
                                </div>

                                <div class="form-group">
                                  <label for="price">Price</label>
                                  <input type="text" id="edit_price" class="form-control" >
                                </div>

                                <div class="form-group">
                                	<label for="type">Type</label>
                                	<select id="edit_type">
                                		<option>1</option>
                                		<option>2</option>
                                	</select>
                               </div> 

                               <div class="form-group">
                                  <label for="type">DEP</label>
                                  <select id="edit_dep">
                                    
                                  </select>
                               </div>
                               <div class="form-group">
                                 <button id="submitedit" class="btn btn-primary">Submit</button>
                               </div> 	
                                
                             </form> 
                            

                            </div>

                </div>
              </div>
            </div>


<div class="content-wrapper">
    <div class="container-fluid">
         <div class="row">
              <div class="col-12">
                <form method="POST">
                  <button class="btn btn-danger" id="SubmitDelete">Delete!</button>
                  <br>
                  <br>
                </form>
              	<table class="table  table-bordered table-hover">

              		<thead>
              			<tr>
                      <th></th>
              				<th>ID</th>
              				<th>Name</th>
              				<th>Price</th>
              				<th>Type</th>
              				<th>Dep_id</th>

              			</tr>

              			<tbody id="views">
              				
              			</tbody>
              		</thead>


              	</table>
               </div>
          </div>
    </div>
</div>


<script>
	
  $("#edit_type").change(function(){

    var type=$("#edit_type").val();
    $.ajax({
      url:"includes/dbh.inc.php",
      type:"GET",
      data:{type:type},
      dataType:"JSON",
      success:function(data){
        $("#edit_dep").empty();
        for(var i = 0; i <Object.keys(data).length; i++)
          { 
            $("#edit_dep").append("<option  value='"+data[i]['id']+" '>"+data[i]['name']+"</option>")
          }
      }
    })
  });


	function viewdata()
  { 
      $("#views").empty();
			$.ajax({
				url:"includes/editscript.inc.php",
				type:"GET",
				Data:{},
				dataType:"JSON",
				success:function(data)
				{
					
					for(var i = 0; i <Object.keys(data).length; i++)
					{	
						$("#views").append("<tr><td><input type='checkbox' class='checkboxes' name='checkboxArray[]' id='"+data[i]['id']+"'></td><td>"+data[i]['id']+"</td> <td>"+data[i]['name']+"</td> <td>"+data[i]['price']+"</td><td>"+data[i]['type']+"</td> <td>"+data[i]['dep_id']+"</td><td><button class='btn btn-dark idedit'data-toggle='modal' data-target='.bs-example-modal-lg1' onclick='pringeditdatafun("+data[i]['id']+" )'>Edit</button></td></tr>");
              
					}
					
				},
				fail:function(data)
				{
					alert('Error');
				}
			});


	 }


   viewdata();

	function pringeditdatafun(id) {
            
        $.ajax({
        type:"POST",
        url:"includes/editscript.inc.php",
        dataType:"json",
        data:{id:id,"editdata":''},
        success:function(data){

          for (var i = 0; i<Object.keys(data).length; i++)
          {
          	$('#edit_name').val(data[i]['name']);
            $('#edit_price').val(data[i]['price']);
            $('#edit_type').val(data[i]['type']);
            $('#edit_dep').append("<option value='"+data[i]['dep_id']+" '>"+data[i]['dep_name']+"</option>");

          }
        },
        fail:function(data)
        {
        	alert('Error');
        }

    });

          $("#submitedit").click(function(e){
          alert("colled"); 
          e.preventDefault();   
            editpost(id);
            id=0;
          });
      }

      function editpost(id)
      {
       var name=$("#edit_name").val();
       var type=$("#edit_type").val();
       var price=$("#edit_price").val();
       var dep_id=$("#edit_dep").val();
        $.ajax({
          url:"includes/editscript.inc.php",
          type:"POST",
          data:{
                id:id,
                name:name,
                type:type,
                price:price,
                dep_id:dep_id,
                "edit":''
          },
          success:function(data)
          {
            viewdata();
            alert("Data Updated Successfully");
          },
          fail:function(data)
          {
            alert("Error");
          }
        });
      }


      $("#SubmitDelete").click(function(e){
          e.preventDefault();
        var  dataarr=new Array();
        if($('input:checkbox:checked').length >0)
        {
         $('input:checkbox:checked').each(function(){
            dataarr.push($(this).attr('id'));
         }); 
         
        }
        else {
          alert('no row Selected');
        }

        $.ajax({

          url:"includes/editscript.inc.php",
          type:"POST",
          data:{'data':dataarr},
          success:function(data)
          {
            viewdata();
            alert(data);
          },
          fail:function(data)
          {
            alert('error');
          }

        });
      });



</script>



<?php
include_once 'footer.inc.php';
?>
