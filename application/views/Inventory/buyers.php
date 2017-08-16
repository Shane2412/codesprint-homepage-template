

<?php echo validation_errors(); ?>

<?php echo form_open('Buyers/create'); ?>
<div class="container">
      <div class="col-lg-2">
      <input class="form-control" type="text" name="status" placeholder="Post a demand" style="width:200px;">
      </div>
      
      <div class="col-lg-1">
      <input class="btn btn-default form-control" type="submit" name="submit" value="Post">
      </div>

</form>

</div>

<br>

<div class="container-fluid">
      
      <h1 class="animated bounceInDown" style="color:white;"> Current Demands </h1> <br><br>
      
            
            
             <div class="col-lg-6 col-md-4 col-sm-3"> 
                  
                  <div class="panel panel-custom animated bounceIn" style="padding:20px; border-radius:20px; opacity:0.9;">
                    <div class="panel-heading" style="border-radius:15px;"> <h1 style="color:white; text-align:center;" >Dry Coconuts </h1>  </div>
                        <hr class="my-4">
                  
                  <div class="panel-body">
                  <div class="jumbotron">
                        <p class="lead"><strong>I need 10 lb of Coconuts within 4 weeks</strong> </p>  <br>
                  </div>
                  
                  <a href="<?= base_url()?>welcome/viewpost" class="btn btn-info" value="viewmore">View More </a>
                  <hr class="my-4">
                        </div>
                  </div>
            </div>
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            <!--<div class="col-lg-6 col-md-4 col-sm-3"> -->
                  
            <!--      <div class="panel panel-info animated bounceIn" style="padding:20px; border-radius:20px; opacity:0.9;">-->
            <!--        <div class="panel-heading" style="border-radius:15px;"> <h1 style="color:white; text-align:center;" >Dry Coconuts </h1>  </div>-->
            <!--            <hr class="my-4">-->
                  
            <!--      <div class="panel-body">-->
            <!--      <div class="jumbotron">-->
            <!--            <p class="lead"><strong>I need 10 lb of Coconuts within 4 weeks</strong></p>  <br>-->
            <!--      </div>-->
                  
            <!--      <button class="btn btn-info" type="submit" value="bid">Bid</button>-->
            <!--      <hr class="my-4">-->
                  
            <!--            <div class="panel panel-default" style="padding:15px;">-->
            <!--                  <h4>Leave a comment</h4><br>-->
            <!--                  <form>-->
            <!--                        <div class="form-group">-->
            <!--                  <textarea class="form-control" type="text" name="comment" style="height:100px; resize:vertical;;"> </textarea>-->
            <!--                  <br>-->
            <!--                  <button class="btn btn-primary pull-right" type="submit" value="">Submit</button>-->
            <!--                        </div>-->
            <!--                  </form>-->
            <!--            </div>-->
            <!--            </div>-->
            <!--      </div>-->
            <!--</div>-->
            
            
            
            
            
            
          
            
            
            
            

</div>