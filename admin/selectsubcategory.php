<?php
error_reporting(0);
session_start();
include_once'dbMysql.php';
//print_r($_POST);
$con = new DB_con();
if(isset($_POST['categoryId'])){
$table="subcategory";
$subcat = $_POST['categoryId'];
	$field = array('category_id','subcategory_name','subcategory_id' );
	$field_value = array($subcat);
	$res=$con->selectcatprod($table,$field_value,$field);
//print_r($res);
?>
<?php 
session_start();
echo "<option>Select Category</option>";

							 foreach($res as $key)
									  
								  // echo $key;
										echo'<option value="'.$key['subcategory_id'].'">'.$key['subcategory_name'].'</option>';
									
}

if(isset($_POST['sub_subcategory'])){
$table="sub_subcategory";
$subcat = $_POST['sub_subcategory'];
	$field = array('subcategory_id','sub_subcategory_name','sub_subcategory_id');
	$field_value = array($subcat);
$res=$con->selectcatprod($table,$field_value,$field);
//print_r($res);
?>
<?php 

echo "<option>Select Sub category</option>";

							 foreach($res as $key)

										echo'<option value="'.$key['sub_subcategory_id'].'">'.$key['sub_subcategory_name'].'</option>';
									
}


if(isset($_POST['search']))
{
	$table="product";
	$sku = $_POST['search'];
	$field = array('sku');
	$field_value = array($sku);
	$res=$con->search_sku($table,$field,$field_value);
	
	foreach($res as $key =>$value)
	
echo'<div class="show" align="left" id="spa">
<span class="name">'.$value[0].'</span>
</div>';

//echo $value[0];
	}
	//Update Price
if(isset($_POST['skucode']))
{
    $table="product";
	$sku = $_POST['skucode'];

	$field = array('sku','unit_price','mrp','discount');
	$field_value = array($sku);	
	$res=$con->update_sku($table,$field,$field_value);
	foreach($res as $key =>$value)
echo'<div class="form-group">
                        <label class="col-sm-2 control-label">Enter Unit Price </label>
                        <div class="col-sm-7 controls">
                          <input class="width-70" type="text" value="'.$value[1].'" data-toggle="tooltip" data-placement="top" name ="unit_price">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Enter MRP </label>
                        <div class="col-sm-7 controls">
                          <input class="width-70" type="text" value="'.$value[2].'" data-toggle="tooltip" data-placement="top" name="mrp">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Enter Discount </label>
                        <div class="col-sm-7 controls">
                          <input class="width-70" type="text" value="'.$value[3].'" data-toggle="tooltip" data-placement="top" name="discount">
                        </div>
                      </div>
                      ';
}
	//update Image
	
if(isset($_POST['image']))
{
    $table="product";
	$image = $_POST['image'];
	$field = array('sku','image','images2','images3','images4');
	$field_value = array($image);
	$res=$con->update_sku($table,$field,$field_value);
	foreach($res as $key =>$value)
echo'<div class="form-group">
                        <label class="col-sm-2 control-label">Upload Image </label>
                        <div class="col-sm-7 controls">
                          <input type="file" name="file" id="image"><img src="productimages/'.$value[1].'" style="width: 150px;">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Upload Image2 </label>
                        <div class="col-sm-7 controls">
                          <input type="file" name="file2" id="image"><img src="productimages/'.$value[2].'" style="width: 150px;">
                        </div>
                      </div>
                       <div class="form-group">
                        <label class="col-sm-2 control-label">Upload Image3 </label>
                        <div class="col-sm-7 controls">
                          <input type="file" name="file3" id="image"><img src="productimages/'.$value[3].'" style="width: 150px;">
                        </div>
                      </div>
                       <div class="form-group">
                        <label class="col-sm-2 control-label">Upload Image4 </label>
                        <div class="col-sm-7 controls">
                          <input type="file" name="file4" id="image"><img src="productimages/'.$value[4].'" style="width: 150px;">
                        </div>
                      </div>
                      ';
}
if(isset($_POST['attribute']))
{

 echo' <div class="form-group">
                        <label class="col-sm-2 control-label">Choose Color </label>
                        <div class="col-sm-7 controls">';
                       $table = "attributemanager";
                       $color ='color';
                       $field = array('attributes','description');
                       $field_value = array($color);
                       $result = $con->selectcatprod($table,$field_value,$field);


    $table = "product";
    $sku = $_POST['attribute'];
    $field_value = array($sku);
    $field = array('sku','unit_price','product_name','quantity');
    $resultpro = $con->selectcatprod($table,$field_value,$field);
    foreach($resultpro as $keypro =>$valpro)
        $UnitPrice =  $valpro['unit_price'];

    echo'<select name="color" class="form-control width-70 getvalue" required> ';
    foreach($result as $keyattr =>$valattr) {
        echo '<option value="'.$valattr['description'].'">'.ucfirst($valattr['description']).'</option>';
    }
        echo'</select>

         </div>
         </div>

         <div class="form-group">
                        <label class="col-sm-2 control-label">Choose Size</label>
                        <div class="col-sm-7 controls">';
    $table = "attributemanager";
    $size ='size';
    $field = array('attributes','description');
    $field_value = array($size);
    $resultsize = $con->selectcatprod($table,$field_value,$field);
echo'<select name="size" class="form-control width-70"  required>';
foreach($resultsize as $keysize =>$valsize) {
        echo '<option value="'.$valsize['description'].'">'.ucfirst($valsize['description']).'</option>';
    }
    echo'</select>
         </div></div>
<div class="form-group">
                        <label class="col-sm-2 control-label">Product Price</label>
                        <div class="col-sm-7 controls">
<input type="text" class="form-control width-70" value="'.$UnitPrice.'" name="price" required>
         </div></div>';
    echo'<div class="form-group">
                        <label class="col-sm-2 control-label">Status</label>
                        <div class="col-sm-7 controls">
<select name="status" class="form-control width-70"  required>
<option value="1">True</option>
<option value="0">False</option>
         </select>
         </div></div>';
    echo'<div class="form-group">
                        <label class="col-sm-2 control-label">Product Quantity</label>
                        <div class="col-sm-7 controls">
<input type="text" class="form-control width-70" value="" name="quantity" required>
         </div></div>

         <table class="table table-striped table-hover no-head-border">
                      <thead class="vd_bg-green vd_white">
                        <tr>
                          <th>Sr.no</th>
                          <th>SKU</th>
                          <th>Price</th>
                          <th>Color</th>
                          <th>Size</th>
                          <th>Quantity</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      <tbody>';
                      $table = "productattribute";
    $sku = $_POST['attribute'];
    $field_value = array($sku);
    $field = array('sku','price','color','size','quantity','status','id');
    $getResult = $con->selectcatprod($table,$field_value,$field);

    $i = 1;
    foreach($getResult as $keyResult =>$valResult){

        echo'<tr>
                          <td>'.$i.'</td>
                          <td>'.$valResult['sku'].'</td>
                          <td>'.$valResult['price'].'</td>
                          <td>'.$valResult['color'].'</td>
                          <td>'.$valResult['size'].'</td>
                          <td class="center">'.$valResult['quantity'].'</td>';?>
<td><i data="<?php echo $valResult['id'];?>" class="status_checks btn <?php echo ($valResult['status'])? 'btn-success' : 'btn-danger'?>"><?php echo ($valResult['status'])? 'Active' : 'Inactive'?></i></td>
<?php
        echo'</tr>';
        $i++;
    }

                     echo'</tbody>
         </table>';

}

if(isset($_POST['Getval'])){

    $attribute = $_POST['Getval'];
    $status = 0;
    $table = "attributemanager";
    $field_value = array($attribute,$status);
    $field = array('attributes','status','description');
    $resultdes = $con->selecttwocond($table,$field,$field_value);

    foreach($resultdes as $keyattrdes =>$valattrdes)
    {
        echo'<option value="'.$valattrdes['description'].'">'.$valattrdes['description'].'</option>';
    }


}

if(isset($_POST['size']))
{
 echo' <div class="form-group">
                        <label class="col-sm-2 control-label">Add Product Size </label>
                        <div class="col-sm-7 controls">
                           <select class="col-sm-7 controls" name="size">
						  <option value="S">S</option>
						  <option value="M">M</option>
						  <option value="L">L</option>
						  <option value="XL">XL</option>
						  <option value="XXl">XXL</option>
						  </select>
                        </div>
                      </div>
                          <div class="form-group">
                        <label class="col-sm-2 control-label">Add Product Quantity</label>
                        <div class="col-sm-7 controls">
                          <input class="width-70" type="text" placeholder="Input" data-toggle="tooltip" data-placement="top" name="quantity">
                        </div>
                      </div>
                      ';	
}

if(isset($_POST['search_product']))
{
	$table="product";
	$sku = $_POST['search_product'];
	$field = array('product_name');
	$field_value = array($sku);
	$res=$con->search_sku($table,$field,$field_value);
	
	foreach($res as $key =>$value)
	
echo'<div class="show" align="left" id="spa">
<span class="name">'.$value[4].'</span>
</div>';

//echo $value[0];
	}
	
	if(isset($_POST['search_keyword']))
{
	
	$table="product";
	$search_keyword = $_POST['search_keyword'];
	$field = array('sku');
	$field_value = array($search_keyword);
	$res=$con->searchingprod($table,$field,$field_value);
	
	foreach($res as $key =>$value)
echo'<div class="show" align="left" id="spa">
<span class="name">'.$value[0].'</span>
</div>';

//echo $value[0];
	}

if(isset($_POST['size_chart']))
{
	echo' <div class="form-group">
                        <label class="col-sm-2 control-label">Add Product Size : </label>
                        <div class="col-sm-7 controls">
                           <select class="col-sm-7 controls" name="size">
						  <option value="S">S</option>
						  <option value="M">M</option>
						  <option value="L">L</option>
						  <option value="XL">XL</option>
						  <option value="XXl">XXL</option>
						  </select>
                        </div>
           </div>
                  <div class="form-group">
                        <label class="col-sm-2 control-label">Add Brand Size : </label>
                        <div class="col-sm-7 controls">
                          <input class="width-70" type="text" placeholder="Input" data-toggle="tooltip" data-placement="top" name="brand_size">
                        </div>
                  </div>
                  <div class="form-group">
                        <label class="col-sm-2 control-label">Add Size No : </label>
                        <div class="col-sm-7 controls">
                          <input class="width-70" type="text" placeholder="Input" data-toggle="tooltip" data-placement="top" name="size_no">
                        </div>
                  </div>
                      ';
}


?>