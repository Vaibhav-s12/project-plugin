<?php
include "insert1";



                  
                    if(!empty($t))
                    {
                    $con = new mysqli("localhost", "root", "", "project1") or die("error");

                    //INSERT QUERY TO VALUE ADD IN ITEM TABLE
                    if(isset($_POST['submit']))
                    {
                      $t = $_GET['n'];
                      $one = $_POST['name'];
                      $code = $_POST['code'];
                    

                      $sql = "INSERT INTO item(name1, code, user_id) VALUES ('$one', '$code', '$t')";

                      if($con->query($sql)){
                          
                          $data = $con->insert_id;
                          $md = mkdir($data);
                      }


                      $file = $_FILES['upload'] ['name'];
                      $temp = $_FILES['upload'] ['tmp_name'];

                      foreach($_FILES['upload'] ['name'] as $key=>$val)
                      { 
                        $files = $val;
                        $temps = $temp[$key];
                        $folder =  $data ." \ ". $files;
                        
                        $imageFileType = strtolower(pathinfo($folder,PATHINFO_EXTENSION));

                        $ext = array('png','jpg','jpeg');

                        if(in_array($imageFileType,$ext))
                        {
                        if(move_uploaded_file($temps, $folder))
                        {
                        $sql = "INSERT INTO item_image(item_id,	image, user_id) VALUES('$data', '$files', '$t')";
                        $con->query($sql);
                        }else{
                          echo "other files not exist";
                          exit();
                          }
                        }else{
                          echo "file is not uploaded";
                          exit();
                        }
                      }
                    }
                    else
                    {
                        $con = new mysqli("localhost", "root", "", "project1") or die("error");

                        //INSERT QUERY TO VALUE ADD IN ITEM TABLE
                        if(isset($_POST['submit']))
                        {
                          $t = $_GET['n'];
                          $one = $_POST['name'];
                          $code = $_POST['code'];
                        
    
                          $sql = "INSERT INTO item(name1, code, user_id) VALUES ('$one', '$code', '$e')";
    
                          if($con->query($sql)){
                              
                              $data = $con->insert_id;
                              $md = mkdir($data);
                          }
    
    
                          $file = $_FILES['upload'] ['name'];
                          $temp = $_FILES['upload'] ['tmp_name'];
    
                          foreach($_FILES['upload'] ['name'] as $key=>$val)
                          { 
                            $files = $val;
                            $temps = $temp[$key];
                            $folder =  $data ." \ ". $files;
                            
                            $imageFileType = strtolower(pathinfo($folder,PATHINFO_EXTENSION));
    
                            $ext = array('png','jpg','jpeg');
    
                            if(in_array($imageFileType,$ext))
                            {
                            if(move_uploaded_file($temps, $folder))
                            {
                            $sql = "INSERT INTO item_image(item_id,	image, user_id) VALUES('$data', '$files', '$e')";
                            $con->query($sql);
                            }else{
                              echo "other files not exist";
                              exit();
                              }
                            }else{
                              echo "file is not uploaded";
                              exit();
                            }
                          }
                        }
                    }
                    
                        //INSERT QUERY TO VALUE ADD VARIENT TABLE
                        $t = $_GET['n'];
                      $name =  $_POST['nam'];
                      $price = $_POST['price'];
                      $sale =  $_POST['sale'];

                      foreach($name as $key=>$val)
                      {
                        $s_name = $val;
                        $s_price = $price[$key];
                        $s_sale = $sale[$key];
                        
                      $sql = "INSERT INTO varient(item_id, name, price, sale, user_id) VALUES ('$data', '$s_name', '$s_price', '$s_sale', '$t')";

                      $con->query($sql) or die("connection");
                      }
                      if(empty(dir($data)))
                      {
                        rmdir($data);
                      }
                      header("location:index.php");
                    }
                    ?>

<!DOCTYPE html>
<html>
<head>
  <style>
    
   
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>



<script>
	$(document).ready(function () {

	// Denotes total number of rows
	var rowIdx = 0;

	// jQuery button click event to add a row
	$('#addBtn').on('click', function () {

		// Adding a row inside the tbody.
		$('#tbody').append(`<tr id="R${++rowIdx}">
			<td class="row-index text-center">
			<input type="text" name="nam[]" id="nam[]" Row ${rowIdx}>
			</td>
			<td class="row-index text-center">
			<input type="text" name="sale[]" id="price[]" Row ${rowIdx}>
			</td>
			<td class="row-index text-center">
			<input type="text" name="price[]" id="sale[]" Row ${rowIdx}>
			</td>
			<td class="text-center">
				<button class="btn btn-danger remove"
				type="button">Remove</button>
			
			</tr>`);
	});

	// jQuery button click event to remove a row.
	$('#tbody').on('click', '.remove', function () {

		// Getting all the rows next to the row
		// containing the clicked button
		var child = $(this).closest('tr').nextAll();

		// Iterating across all the rows
		// obtained to change the index
		child.each(function () {

		// Getting <tr> id.
		var id = $(this).attr('id');

		// Getting the <p> inside the .row-index class.
		var idx = $(this).children('.row-index').children('p');

		// Gets the row number from <tr> id.
		var dig = parseInt(id.substring(1));

		// Modifying row index.
		idx.html(`Row ${dig - 1}`);

		// Modifying row id.
		$(this).attr('id', `R${dig - 1}`);
		});

		// Removing the current row.
		$(this).closest('tr').remove();

		// Decreasing total number of rows by 1.
		rowIdx--;
	});
	});

</script>
</head>
<body>
    <form action="" method="POST" id="myform" enctype="multipart/form-data">
    <table class="table table-striped">
 
       <thead>
       
            <tr>
                <th>Name</th>
                <th>code</th>
                <th>images</th>
                
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><input type="text" name="name" id="name"/></td>
                <td><input type="text" name="code" id="code"/></td>
                <td><input type="file" name="upload[]" id="upload" multiple></td>
                
            </tr>
          </tbody>
        </table> </br></br></br></br></br></br></br> 
             
        <table class="table table-striped">
 
       <thead id="tbody">
       <tr>
            <th>Varient_name</th>
            <th>Varient_price</th>
            <th>Varient_sale</th>             
        </tr>
        </thead>
        <tbody>
            <tr>
                <td class="row-index text-center"><input type="text" name="nam[]" id="nam[]" Row ${rowIdx}></td>
                <td class="row-index text-center"><input type="text" name="price[]" id="price[]" Row ${rowIdx}></td>
                <td class="row-index text-center"><input type="text" name="sale[]" id="sale[]" Row ${rowIdx}></td>
                <td class="row-index text-center"><button class="btn btn-md btn-primary" id="addBtn" type="button">Add</button></td>
                   
            </tr>
           </tbody>
          </table>   
    <button type="submit" name="submit" id="submit">submit</button></br></br></br>

</form>
</body>
</html>
<script>
$(document).ready(function() {
    $("#myform").validate({  
        rules:
        {
          name: 
          {
            required:true,
            
          },
          code:
         {
            required:true,
            
         },
         upload: 
         {
            extension: "png|jpeg|jpg|gif",                     
        },
         
          nam:
          {
          required:true,
      },
        
          price:
         {
            required:true,
            digit:true, 
         },
         sale:
         {
            required:true, 
            digit:true,
         }
        },
        message:
        {
            name: 
            {
              required:"please enter your name",
            },
            code: 
            {
              required:"please enter your name", 
            },
            upload:
            {
              extension:"please input valid file", 
            },
            nam: 
            {
              required:"please enter your name", 
            },
            price: 
            {
              required:"please enter your price",
              digit:"pleace enter price"
            },
            sale: 
            {
              required:"please enter your price",
              digit:"pleace enter price"
            },
        }
    });
});
   
</script>

  

