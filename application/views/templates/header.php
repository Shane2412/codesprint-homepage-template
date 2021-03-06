<!DOCTYPE html>
<html>
    <head>
        <title>Farmer's Paradise</title>
        
        <link rel="stylesheet" href="<?= base_url();?>assets/css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="<?= base_url();?>assets/css/animate.css" type="text/css">
        <link rel="stylesheet" href="<?= base_url();?>assets/css/font-awesome.min.css" type="text/css" />
        <link rel="stylesheet" href="<?= base_url();?>assets/css/styles.css" type="text/css" >
        <script type="text/javascript" src="<?= base_url();?>assets/js/Chart.min.js"></script>
        <script type="text/javascript" src="<?= base_url();?>assets/js/custom.js"></script>
        <link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
        <script type="text/javascript" src="<?= base_url();?>assets/js/bootstrap.min.js"></script>
        
        <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">-->
        <!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>-->
        
        <!-- CDN -->
        <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->
        <!--<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js"></script>-->
        <!--<link rel="stylesheet" href="https://bootswatch.com/lumen/bootstrap.min.css" type="text/css" />-->
        <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.css" type="text/css" />-->
        <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css" />-->
        
        
        <style type="text/css">
          
          body
          {
            background-image: url('/assets/images/cherryBG.png');
            background-repeat: no-repeat;
            background-size: cover;
            padding:0px 0px 80px 0px;
          }
        
        </style>
        
        
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        
        
    </head>
    <body>
        <nav class="navbar navbar-default " style="opacity:0.9;">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?= base_url(); ?>">Farmer's Paradise</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
      <ul class="nav navbar-nav navbar-right">
        
        
            
         
      <li><a href="<?= base_url(); ?>welcome/buyers"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Buyers </a></li>
       <li><a href="<?= base_url(); ?>welcome/seller"><i class="fa fa-money" aria-hidden="true"></i> Sellers </a></li> 
      <?php if($this->session->userdata('logged_in')): ?>
                
        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"> </i> Settings <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#"><?= $this->session->userdata('uname');?></a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li class="divider"></li>
            <li><a href="#">Logout</a></li>
          </ul>
        </li>
      </ul>
      
      <?php endif; ?>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search" style="width:700px; align:center;">
        </div>
        <!--<button type="submit" class="btn btn-default"> <button>-->
        
        <a class="btn btn-default" href="#">
          <i class="fa fa-search"></i> </a>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="<?= base_url();?>home"><i class="fa fa-home" aria-hidden="true"></i> Home </a></li>
        
      </ul>
    </div>
  </div>
</nav>