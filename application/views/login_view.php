<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta http-equiv="Content-Language" content="en">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <title>Dashboard</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
  <link href="<?php echo base_url('assets/css/main.css');?>" rel="stylesheet"></head>
  <body>
    <div class="container">
      <div class="row">
       <div class="col-md-4 col-md-offset-4" style=" margin: 0 auto;">
         <form class="form-signin" action="<?php echo site_url('login/auth');?>" method="post">
           <h2 class="form-signin-heading">Please sign in</h2>
           <?php echo $this->session->flashdata('msg');?>
           <label for="username" class="sr-only">Username</label>
           <input type="text" name="email" class="form-control" placeholder="Email" required autofocus>
           <label for="password" class="sr-only">Password</label>
           <input type="password" name="password" class="form-control" placeholder="Password" required>
           <div class="checkbox">
             <label>
               <input type="checkbox" value="remember-me"> Remember me
             </label>
           </div>
           <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
         </form>
       </div>
       </div> <!-- /container -->
     </div>
     </body>
     </html>


