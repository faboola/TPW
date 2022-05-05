<?php 
scandir('images'); //legge la cartella e restituisce un array
$entries = (scandir('images'));
/* posso ciclare il mio array*/
// foreach($entries as $entry) {
//     echo $entry;
//     echo '<br>';
// }

//USANDO READDIR:

// apre la directory
  $dir = opendir('images'); //apre la cartella e resituisce una variabile tipo RESOURCE
  
  // leggi la directory
  $fname = readdir($dir);
  //var_dump($fname);

  $output = '<div class="gallery">';
   while (($fname = readdir($dir))!==false) 
      {
        if ($fname !='.' && $fname != '..')
        //salto i nomi file . e ..
        //SE VOGLIO ESCLUDERE DELLE ESTENSIONI:
        //&& strpos($fname,'.png')==false
         {
        
        $output .='<div class="galleryItem">';
        $output .="<img src=\"images/$fname\">";
        $output .='</div>';
        }

    }

    $output .='</div>';
    echo $output;


//   {
  
//     var_dump($fname);
	  
// 	// strip elimina . e .. 
//     //if ($fname != '.' && $fname != '..' && (strpos($fname,'.LCK') == false)) 
//    // {
//      //usare $output!
//         //echo "<img src=\"images/$fname\">";
    
//     //}
//   }


  // close the directory
  closedir( $dir );


  //echo ($output);