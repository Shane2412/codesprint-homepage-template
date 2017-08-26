<div class="container-fluid">
     
      <h1 class="animated bounceInDown" style="color:white;"> Current Stocks </h1> <br><br>
      
            
            
             <div class="col-lg-6 col-md-4 col-sm-3"> 
                   <?php foreach($farmers as $farmer):?>
                  <div class="panel panel-custom animated bounceIn" style="padding:20px; border-radius:20px; opacity:0.9;">
                        
                    <div class="panel-heading" style="border-radius:15px;"> <h1 style="color:white; text-align:center;" ><?= $farmer->name;?></h1></div>
                        <hr class="my-4">
                  <h5>By <?= $farmer->user_crop_id;?></h5>
                  <div class="panel-body">
                  <div class="jumbotron">
                        <p class="lead"><strong>I need  lb of  within </strong> </p>  <br>
                  </div>
                  
                  <a href="<?= base_url()?>Farmers/view/<?= $farmer->cid?>" class="btn btn-info" value="viewmore">View More </a>
                  <input type="submit" name="bid" onclick="confirm('Bid This <?= $farmer->name?>?');" value="Bid" class="btn btn-success"/>
                  <hr class="my-4">
                        </div>
                  </div>
                  <?php endforeach; ?>
                  
            </div>