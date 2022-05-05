
<?php

  // apre la directory
  $dir = opendir('images');
  
  // leggi la directory
  $fname = readdir($dir);
  var_dump($fname);
  while (false !== ($fname = readdir($dir))) 
  {
  
    var_dump($fname);
	  
	// strip elimina . e .. 
    //if ($fname != '.' && $fname != '..' && (strpos($fname,'.LCK') == false)) 
   // {
     //usare $output!
        //echo "<img src=\"images/$fname\">";
    
    //}
  }


  // close the directory
  closedir( $dir );


  //echo ($output);


?>