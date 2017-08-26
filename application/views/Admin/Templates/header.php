<!DOCTYPE html>
<html>
    <head>
        <title>Admin Panel</title>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <script type="text/javascript" src="<?= base_url(); ?>assets/js/jquery.js"></script>
        <link rel="stylesheet" href="<?= base_url();?>assets/css/bootstrap.min.css" type="text/css" />
    </head>
    <body>
        <nav class="navbar navbar-inverse">
            <ul class="nav navbar-nav">
              
                <li><a href="<?= base_url(); ?>Admin/Users"></a></li>
                <li><a href="<?= base_url(); ?>Admin/"></a></li>
                <li><a href="<?= base_url(); ?>restaurants/"></a></li>
        
            </ul>
              <ul class="nav navbar-nav navbar-right">
                
              <li class="right"> <a href="<?= base_url();?>users/login"> Login </a></li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
        
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">More <span class="caret"></span></a>
                    <ul class="dropdown-menu">
            
        
            <li><a href="#">Settings</a></li>
            <li><a href="#">Cart</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="<?= base_url();?>Admin/logout">Logout</a></a></li>
          </ul>
        </li>
      </ul>
        </nav>
            
   