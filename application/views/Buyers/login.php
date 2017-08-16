<!--
    Please Customize and design Interface for Login
-->




<?php echo validation_errors(); ?>

<?php echo form_open('Buyers/login'); ?>

<div class="col-lg-4 col-lg-offset-4">
    
    <div class="panel panel-custom animated pulse" style="padding:25px 20px 80px 20px; opacity:0.9;">
        
        <div class="panel-heading">
            <h1 class="animated bounceInDown" style="color:white; text-align:center;"> Log in as Buyer </h1>
            
        </div>

<div class="panel-body">
<h4>Username</h4>
<input class="form-control" type="text" name="uname" value="" size="50" />

<h4>Password</h4>
<input class="form-control" type="text" name="password" value="" size="50" />

<br><br>

<input type="submit" class="btn-block btn btn-custom" value="Submit" />

<h5>or <a href="<?= base_url();?>Buyers/register">Register Here </a> as a Buyer</h5>
    
    </div>
    </div>
</div>


</form>

