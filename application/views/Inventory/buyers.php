<div class="container-fluid">
     
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
                  <input type="submit" name="bid" onclick="confirm('Bid This <?= $buyer->crop_type?>?');" value="Bid" class="btn btn-success"/>
                  <hr class="my-4">
                        </div>
                  </div>
                  <?php endforeach; ?>
                  
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