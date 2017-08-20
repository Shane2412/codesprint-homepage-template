<div class="container-fluid">
<br><br>
 <div class="col-lg-6 col-md-4 col-sm-3 col-lg-offset-3"> 
                  
                  <div class="panel panel-custom animated bounceIn" style="padding:20px; border-radius:20px; opacity:0.9;">
                    <div class="panel-heading" style="border-radius:15px;"> <h1 style="color:white; text-align:center;" ><?= $views['name'];?> </h1>  </div>
                        <hr class="my-4">
                  
                  <div class="panel-body">
                  <div class="jumbotron">
                        <p class="lead"><strong>In Stock <?= $views['quantity'];?></strong></p>  <br>
                  </div>
                  
                  <button class="btn btn-info" type="submit" value="bid" onclick="confirm('Confirm To Bid');">Bid</button>
                 
                  <a href="<?= site_url('Farmers/edit_crop/'.$views['cid']);?>"class="btn btn-primary" type="submit" value="Edit" name="edit">Edit</a>
                  <?= form_open('Farmers/delete_crop/'.$views['cid']); ?>
                  <br>
                  <button class="btn btn-danger" type="submit" value="delete" onclick="confirm('Are you sure you want to delete <?= $views['name'];?>');">Delete</button>
                  </form>
                  <hr class="my-4">
                  
                       
                        </div>
                  </div>
            </div>
            
    </div>