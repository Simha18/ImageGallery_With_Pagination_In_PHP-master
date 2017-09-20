

<!DOCTYPE html>

<html lang="en">

<head>

  <title>Bootstrap Example</title>

  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<body>

​

<div class="container">
     
 <?php
  
	echo"<div>";  
       	
              $files =array();
		      $files = scandir("img/");
		     
			  $files=array_slice($files,2);
		      $pages = array_chunk($files, 12,true);
                
			  $page = empty($_GET['page']) ? 0 : $_GET['page'];
			  
		foreach ($pages[$page] as $file) 
		{
            if ($file != "." && $file != "..") 
			{
				echo'<a style="padding:5px;"><img src="img/'.$file.'" style="margin-bottom: 20px;height: 312px;width: 175px;"/></a>';
            }
        } 
		
		echo"<br>";

        echo"</div>";  
         
		$i=0;
		 
		 
		$i= $i - 1; 
		echo'<ul class="pagination">';
		echo "<li><a class='frist' href=\"index.php?page=0\">First</a></li>";
		for ($i=0 ; $i <count($pages); $i++) 
		{
			
            echo "<li><a href=\"index.php?page=$i\">$i</a></li>";
			
        }
		
		$i= $i-1;
		echo "<li><a href=\"index.php?page=$i\">Last</a></li>";
        echo"</ul>"; 
    
 

 ?>
  
</div>
</body>

</html>

​

