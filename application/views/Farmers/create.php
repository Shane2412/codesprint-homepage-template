
<!--
    name, price, quality, crop_max_count, produce_date, estimate_date, quantity
-->

<?= form_open('Farmers/create'); ?>
<div class="container">
     
     <div class="col-lg-6 col-lg-offset-3 animated pulse">
       <div class="panel" style="padding:25px 20px 50px 25px; opacity:0.9 ;">
     
     <div class="panel panel-heading">
       <h1 class="animated bounceInDown" style="color:white; text-align:center;"> Tell Us What you have in Stock for Persons in Demands  <h1>
     </div>
     
     <!--<div class="panel-body">-->
     <!--<h4> Title: </h4>-->
     <!--<input class="form-control" type="text" name="crop_type" placeholder="Give your post a Title">-->
     <!--<br>-->
     
     <h4> Crop Type: </h4>
     <input class="form-control" type="text" name="name" placeholder="Name of Crop"/>
     <br>
     
     <h4> Price: </h4>
     <input class="form-control" type="number" name="price"> </textarea>
     <br>
 
     <h4> Quality: </h4>
     <input class="form-control" type="text" name="quality"> </textarea>
     <br>
     
      <h4> How much is in stock? </h4>
     <input class="form-control" type="number" name="crop_max_count"> </textarea>
     <br>
     
     <h4> Production Date: </h4>
     <input class="form-control" type="date" name="produce_date"> </textarea>
     <br>
     
     <h4> Estimate Date: </h4>
     <input class="form-control" type="date" name="estimate_date"> </textarea>
     <br>

    <h4> Quantity: </h4>
     <input class="form-control" type="number" name="quantity"> </textarea>
     <br>
     <!--<h4> Description: </h4>-->
     <!--<textarea class="form-control" style="resize:vertical; height:200px;" type="text" name="post_desc"> </textarea>-->
     <!--<br>-->
     
    
     <input class="btn btn-custom btn-block" type="submit" name="submit" >
        </div>
    </div>
</div>
    
</form>

</div>





