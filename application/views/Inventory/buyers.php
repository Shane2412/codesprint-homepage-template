<div class="container-fluid"> 
            <hr>
           <h3 style:"color:white"><?php
            if($this->session->userdata('logged_in'))
            {
           'Welcome '.$this->session->userdata('uname'); 
           }?></h3> 
     
      <h1 class="animated bounceInDown" style="color:white;"> Current Demands </h1> <br><br>
      
            
            
             <div class="col-lg-6 col-md-4 col-sm-3"> 
                   <?php foreach($buyers as $buyer):?>
                  <div class="panel panel-custom animated bounceIn" style="padding:20px; border-radius:20px; opacity:0.9;">
                        
                    <div class="panel-heading" style="border-radius:15px;"> <h1 style="color:white; text-align:center;" ><?= $buyer->crop_type;?></h1></div>
                        <hr class="my-4">
                  <h5>By Nick</h5>
                  <div class="panel-body">
                  <div class="jumbotron">
                        <?php
                        $startTimeStamp = strtotime($buyer->start_date_of_order);
                        $endTimeStamp = strtotime($buyer->end_date_of_order);
                        
                        $timeDiff = abs($endTimeStamp - $startTimeStamp);
                        
                        $numberDays = $timeDiff/86400;  // 86400 seconds in one day
                        
                        // and you might want to convert to integer
                        $numberDays = intval($numberDays);
                        ?>
                        <p class="lead"><strong>I need <?= $buyer->order_quantity;?> lb of <?= $buyer->crop_type;?> within <?= $numberDays?> Days</strong> </p>  <br>
                  </div>
                  
                  <a href="<?= base_url()?>welcome/viewpost/<?= $buyer->oid?>" class="btn btn-info" value="viewmore">View More </a>
                  <!--<input type="submit" name="bid" onclick="confirm('Bid This <?= $buyer->crop_type?>?');" value="Bid" class="btn btn-success"/>-->
                  <input type="submit" name="bid" data-toggle="modal" data-target="#bid" value="Bid" class="btn btn-success"/>
                  
                  <hr class="my-4">
                        </div>
                  </div>
                  <?php endforeach; ?>
                  
            </div>
            
            
            
            
            


            
                  <!-- Modal for Bid -->
<div class="modal fade" id="bid" tabindex="-1" role="dialog" aria-labelledby="bid" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Bid</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" data-dismiss="modal">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          
          <div class="container">
              
              <div class="container">
              <h3>  Requirements: </h3>
              Crop: <?= $buyer->crop_type;?> <br>
              Amount: <?= $buyer->order_quantity;?> lbs <br>
              Time: <?= $numberDays?> Days
              </div>
             
        <br><br>
        <form>
            <div class="col-lg-4">
            <div class="form-group">
                <h4> How much units of <?= $buyer->crop_type;?> can you fulfill? </h4>
                <input class="form-control" type="number" name=""/>
            </div>
             <div class="form-group">
                <h4> What Cost Can You Produce <?= $buyer->crop_type;?> for? </h4>
                <input class="form-control" type="number" name=""/>
            </div>
            </div>
            
            
        </form>
        
        </div>
          
        </div>
      <div class="modal-footer">
          
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-custom" type="submit">Complete Bid</button>
       
      </div>
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