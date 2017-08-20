
<h1 class="animated bounceInDown" style="text-align:center; color:white;"> Create New Post </h1>


<?php echo form_open('Buyers/post'); ?>
<div class="container">
      
    <div class="col-lg-6 col-lg-offset-3 animated pulse">
        <div class="panel panel-default" style="padding:25px 20px 50px 20px">
            
            
            <h4> Title: </h4>
            <input class="form-control" type="text" name="crop_type" placeholder="Give your post a Title"/>
            <br>
            
            <!--<h4> Crop Type: </h4>-->
            <!--<select class="form-control" type="text" name="crop_type" placeholder="Crop Type"> -->
            <!--//Grabbing dynamic data from database-->
            <!--<?php foreach($types as $type) :?>-->
            <!--<option><?= $type->name; ?></option>-->
            <!--<?php endforeach ?>-->
            
            
            
            <!--</select>-->
            
            <!--<br>-->
            
            <!--<div class="row">-->
            <!--<div class="col-lg-3">-->
            <!--<h4> Quantity: </h4>-->
            <!--<input class="form-control" type="number" name="order_quantity" placeholder="Quantity"/>-->
            <!--</div>-->
            <!--&nbsp&nbsp&nbsp-->
            <!--<div class="col-lg-3">-->
            <!--<h4> Unit: </h4>-->
            <!--<select class="form-control" type="number" min="0" name="order_units" placeholder="Units">-->
            <!--  <option> Unit </option>-->
            <!--  <option> Oz </option>-->
            <!--  <option> Lb </option>-->
            <!--  <option> Kg </option>-->
            <!--  <option> Ton </option>-->
            
              
              
              
            
            
            <!--</select>-->
            <!--</div>-->
            </div>
            
            <br>
            <h4> Start Date of Order: </h4>
            <input class="form-control" type="date" name="start_date_of_order" placeholder="Start Date of Order"/>'
            
            <h4> End Date of Order: </h4>
            <input class="form-control" type="date" name="end_date_of_order" placeholder="End Date of Order"/>
            
            
            <!--<br>-->
            <!--<h4> Description: </h4>-->
            <!--<textarea class="form-control" type="text" name="post_desc" style="resize:vertical; height:200px;"> </textarea>-->
            
            <br> <br>
            
            <input class="btn btn-custom form-control" type="submit" name="submit" value="Post">
      
        </div>
    </div>

</form>

</div>