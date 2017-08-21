<?php
    $startTimeStamp = strtotime($views['start_date_of_order']);
    $endTimeStamp = strtotime($views['end_date_of_order']);
                        
    $timeDiff = abs($endTimeStamp - $startTimeStamp);
                        
    $numberDays = $timeDiff/86400;  // 86400 seconds in one day
                        
    // and you might want to convert to integer
    $numberDays = intval($numberDays);
    ?>
    
 <div class="container-fluid">
<br><br>
 <div class="col-lg-6 col-md-4 col-sm-3 col-lg-offset-3"> 
                  
                  <div class="panel panel-custom animated bounceIn" style="padding:20px; border-radius:20px; opacity:0.9;">
                    <div class="panel-heading" style="border-radius:15px;"> <h1 style="color:white; text-align:center;" ><?= $views['crop_type'];?> </h1>  </div>
                        <hr class="my-4">
                  
                  <div class="panel-body">
                  <div class="jumbotron">
                        <p class="lead"><strong>I need <?=$views['order_quantity']; ?> lb of <?= $views['crop_type'];?> within <?= $numberDays;?> days</strong></p>  <br>
                  </div>
                  
                  <button class="btn btn-info" type="submit" value="bid" data-toggle="modal" data-target="#bid">Bid</button>
                 
                  <a href="<?= site_url('Buyers/edit_Demands/'.$views['oid']);?>"class="btn btn-primary" type="submit" value="Edit" name="edit">Edit</a>
                  <?= form_open('Buyers/delete/'.$views['oid']); ?>
                  <br>
                  <button class="btn btn-danger" type="submit" value="delete" onclick="confirm('Are you sure you want to delete <?= $views['crop_type']; ?>');">Delete</button>
                  </form>
                  <hr class="my-4">
                  
                        <div class="panel panel-default" style="padding:15px;">
                              <h4>Leave a comment</h4><br>
                              <form>
                                    <div class="form-group">
                              <textarea class="form-control" type="text" name="comment" style="height:100px; resize:vertical;;"> </textarea>
                              <br>
                              
                                    </div>
                                    
                                <hr class="my-4">
                                <button class="btn btn-primary pull-right" type="submit" value="">Submit</button>
                              
                              </form>
                        </div>
                        </div>
                  </div>
            </div>
            
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
