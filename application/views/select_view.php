<html xmlns="http://www.w3.org/1999/xhtml">  
   <head>  
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  
      <title>Untitled Document</title>  
   </head>  
	
   <div id="container">
	<form name="userinput" action="getvalues" method="post">
	<h1>Customer Database</h1>
	Name : <input type = "text" name = "c_name" />
         <br>
         <br>
         Email: <input type = "text" name = "c_email" />
         <br>
         <br>
         Age:
         <select name = "c_age">
            <option value = "a" selected> Less than 25</option>
            <option value = "b">Greater or equal to 25</option>
         </select>
        <br>
        <br>
         <input type = "submit" name = "submit" value = "Submit" />
	</form>
   </div>
   <table border="1">  
      <tbody>  
         <tr>  
            <td>Customer_ID</td>  
            <td>Name</td>
            <td>Email</td>
            <td>Addres</td>
            <td>Zip</td>
            <td>Telephone</td>
            <td>DOB</td>  
         </tr>  
         <?php  
         foreach ($h->result() as $row)  
         {  
            ?><tr>  
            <td><?php echo $row->c_id;?></td>  
            <td><?php echo $row->c_name;?></td>
            <td><?php echo $row->c_email;?></td>    
            <td><?php echo $row->c_address;?></td>
            <td><?php echo $row->c_zip;?></td>    
            <td><?php echo $row->c_telephone;?></td>  
            <td><?php echo $row->c_dob;?></td>  
            </tr>  
         <?php }  
         ?>  
      </tbody>  
   </table>  
<body>  
</body>  
</html> 
