<!--
    Please Customize and design Interface for Login
-->
<h1 class="animated bounceInDown" style="color:white; text-align:center;"> Log in to Farmer's Paradise  </h1>



<?php echo validation_errors(); ?>

<?php echo form_open('Users/login'); ?>

<div class="col-lg-4 col-lg-offset-4">
    
    <div class="panel panel-primary animated pulse" style="padding:25px 20px 80px 20px; opacity:0.9;">

<h4>Username</h4>
<input class="form-control" type="text" name="uname" value="" size="50" />

<h4>Password</h4>
<input class="form-control" type="text" name="password" value="" size="50" />

<br><br>

<div><input class="form-control btn btn-custom" type="submit" value="Submit" /></div>


    </div>
</div>

</form>