<?php 



$filename = basename($_SERVER['SCRIPT_FILENAME']); 

switch($filename){


    // Add metadata for ATV TOURS Page ==== 
    case 'atv-tours.php':
        $page_title = "Atv Tours";
        $meta_discription = "Atv discription" ;
        $meta_keywords = "Atv keywords tours trip ofroads";
        break;
    
    //  Add metadata for HOME PAGE ==== 
    case 'index.php':
        $page_title = "Welcome to the aruba home page";
        $meta_discription = "Atv discription" ;
        $meta_keywords = "Atv keywords tours trip ofroads";
        break;

    //  Add metadata for CATEGORY PAGE ====     
    case 'category.php':
        $page_title = "Welcome to the aruba category page";
        $meta_discription = "Atv discription" ;
        $meta_keywords = "Atv keywords tours trip ofroads";
        break;

    //  this will be default meta details ===     
    default:
        $page_title = "Welcome to the aruba category page";
        $meta_discription = "Atv discription" ;
        $meta_keywords = "Atv keywords tours trip ofroads";

    
}

?>