


<?php echo form_open('Buyers/create'); ?>
<div class="container">
     
     <div class="col-lg-6 col-lg-offset-3 animated pulse">
       <div class="panel" style="padding:25px 20px 50px 25px; opacity:0.9 ;">
     
     <div class="panel panel-heading">
       <h1 class="animated bounceInDown" style="color:white; text-align:center;"> Create New Post  <h1>
     </div>
     
     <div class="panel-body">
     <h4> Title: </h4>
     <input class="form-control" type="text" name="post_title" placeholder="Give your post a Title">
     <br>
     
     <h4> Crop Type: </h4>
     <select class="form-control" type="text" name="crop_type" placeholder="Crop Type">
        <option> Fruit </option>
        <option> Vegetable </option>
     </select>
     <br>
 
     <div class="row">
     
     <div class="col-lg-3">
     <h4> Quantity: </h4>
     <input class="form-control" type="number" name="quantity" placeholder="Quantity">
     <br>
     </div>
     
     <div class="col-lg-3">
     <h4> Unit: </h4>
       <select class="form-control" type="text" name="unit" placeholder="Unit">
       <option> Unit </option>
       <option> Ounce (Oz) </option>
       <option> Pound (Lb)  </option>
       <option> Kilogram (Kg) </option>
       <option> Ton </option>
       </select>
     <br>
     </div>
    </div>
    
     <h4> Start Date: </h4>
     <input class="form-control" type="date" name="start_date_of_order"> </textarea>
     <br>
     
     <h4> End Date: </h4>
     <input class="form-control" type="date" name="end_date_of_order"> </textarea>
     <br>


     <h4> Description: </h4>
     <textarea class="form-control" style="resize:vertical; height:200px;" type="text" name="post_desc"> </textarea>
     <br>
     
    
     <input class="btn btn-custom btn-block" type="submit" name="submit" >
        </div>
    </div>
</div>
    
</form>

</div>





