<form method="post" action="" enctype="multipart/form-data">
        <h3>Or Import Csv File:</h3>  
         <table >
            <tbody><tr valign="top">
         <td> <input type="file" name="excel_file" accept=".csv"></td>
       <td> <input type="submit" name="import" value="Import"></form></td>
      </tr></tbody></table>

<?php
use SimpleExcel\SimpleExcel;

if(isset($_POST['import'])){
    global $wpdb;
    if(move_uploaded_file($_FILES['excel_file']['tmp_name'],$_FILES['excel_file']['name'])){
        require_once('SimpleExcel/SimpleExcel.php'); 
        $time = date('Y-m-d');
        $excel = new SimpleExcel('csv');                  
        
        $excel->parser->loadFile($_FILES['excel_file']['name']);           
        
        $foo = $excel->parser->getField(); 
        $count = 1;
    
        while(count($foo)>$count){
            $productauth_serial = $foo[$count][0];
            $query="INSERT INTO ".$table_name_serial." set productauth_serial= '".$productauth_serial."', productauth_guarantee= '".null."',registration_date= '".$time."'";
            $res =   $wpdb->query($query); 
            $count++;
        }
        if ($res){
            echo '<div style="padding:20px;" class="notice notice-success mc4wp-is-dismissible">Your Product Successfully yoooo Added</div>';
        }  else{
           echo '<div style="padding:20px;" class="notice notice-danger mc4wp-is-dismissible">Some Technical Problem. Please try again.</div>';
        }
                   
        
        
                   
        
        
    }
}
?>