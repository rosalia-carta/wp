  
 <?php get_header(); ?>
<div class="row">
    <div class="col-md-12 welcome">
        <h1><?php bloginfo('name') ?></h1>
        <h2><?php bloginfo('description') ?></h2>
    </div>
</div>
</div>
</div>

<div class="row" id="contact">
    <div class="col-lg-12 text-center">
      <h1>Contattaci</h1>
      <h2>e ti risponderemo al più presto</h2>
    </div>
  </div>
  <div class="row">
    <form class="form-contats">
      <div class="col-md-6">
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>

<div class="input-group">
          <span class="input-group-addon" id="basic-addon1"><i class="glyphicon glyphicon-envelope"></i></span>
          <input name="email" type="email" class="form-control input-lg" id="exampleInputEmail1" placeholder="Digita qui la tua email" required>
        </div>





    <!--      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Please, type here your email address" required autofocus>
-->



        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Please, insert your password" required>
        </div>
      </div>
      <div class="col-md-6">
        <label for="exampleInputPassword1">Message</label>
        <textarea class="form-control" placeholder="Please, write a message" rows="3"></textarea>
      </div>
      <div class="col-md-12 text-center">
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </form>
  </div>
</div>
<?php get_footer(); ?>

