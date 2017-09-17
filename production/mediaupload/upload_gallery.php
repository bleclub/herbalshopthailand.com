<?php
//If directory doesnot exists create it.
$output_dir = "gallery/";
include('../library/database.php');
date_default_timezone_set("Asia/Bangkok");
$db = new database();

if(isset($_FILES["myfile"]))
{
	$ret = array();

	$error =$_FILES["myfile"]["error"];
   {
    
    	if(!is_array($_FILES["myfile"]['name'])) //single file
    	{
            $RandomNum   = md5(time());
            
            $ImageName      = str_replace(' ','-',strtolower($_FILES['myfile']['name']));
            $ImageType      = $_FILES['myfile']['type']; //"image/png", image/jpeg etc.
         
            $ImageExt = substr($ImageName, strrpos($ImageName, '.'));
            $ImageExt       = str_replace('.','',$ImageExt);
            $ImageName      = preg_replace("/\.[^.\s]{3,4}$/", "", $ImageName);
            $NewImageName = $ImageName.'_'.$RandomNum.'.'.$ImageExt;

       	 	move_uploaded_file($_FILES["myfile"]["tmp_name"],$output_dir. $NewImageName);
       	 	 //echo "<br> Error: ".$_FILES["myfile"]["error"];
       	 	
			$value_single = array(
				"name" => $ImageName,
				"media_type" => 'gallery',
				"filename" => $NewImageName,
				"status" => 'disable',
				"createdate" => date('Y-m-d H:i:s')
			);
			$query_single = $db->insert("media", $value_single);
			
			 
	       	if ($query_single == TRUE) {
                	$ret[$NewImageName]= $output_dir.$NewImageName;
			}
				 
				 
			
    	}
    	else
    	{
            $fileCount = count($_FILES["myfile"]['name']);
    		for($i=0; $i < $fileCount; $i++)
    		{
                $RandomNum   = md5(time());
            
                $ImageName      = str_replace(' ','-',strtolower($_FILES['myfile']['name'][$i]));
                $ImageType      = $_FILES['myfile']['type'][$i]; //"image/png", image/jpeg etc.
             
                $ImageExt = substr($ImageName, strrpos($ImageName, '.'));
                $ImageExt       = str_replace('.','',$ImageExt);
                $ImageName      = preg_replace("/\.[^.\s]{3,4}$/", "", $ImageName);
                $NewImageName = $ImageName.'_'.$RandomNum.'.'.$ImageExt;
                
				
				$value_multi = array(
					"name" => $ImageName,
					"media_type" => 'gallery',
					"filename" => $NewImageName,
					"status" => 'disable',
					"createdate" => date('Y-m-d H:i:s')
				);
				$query_multi = $db->insert("media", $value_multi);
				if ($query_multi == TRUE) {
                	$ret[$NewImageName]= $output_dir.$NewImageName;
				}
    		    move_uploaded_file($_FILES["myfile"]["tmp_name"][$i],$output_dir.$NewImageName );	
				
    		}
    	}
    }
    echo json_encode($ret);

}  mysql_close();

?>