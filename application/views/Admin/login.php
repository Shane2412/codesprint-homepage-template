<h1 class="text-center animated bounceInDown" style="color:white"> Admin Login </h1>

<?= form_open('Admin/login'); ?>

   
<div class="container">
       
  
   
    <div class="row">
        <div class="col-md-4 col-md-offset-4 panel panel-default animated zoomIn" style="padding:60px 25px 90px 25px;">

           
            <form class="form-horizontal form">
            <div class="form-group input-group y">
                <input class="form-control" type="text" name="email" placeholder="Admin Email" required autofocus/>
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"> </i> </span>
            </div>
            <div class="form-group input-group">
                <input type="password" name="password" class="form-control" placeholder="Admin Password" required autofocus/>
                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"> </i> </span>

          
            </div> <br>
                <button type="submit" class="btn btn-primary btn-block btn-round-lg">Login</button>
            </div>
            </form>
        </div>
        
    </div>
</div>
    
<?= form_close(); ?>