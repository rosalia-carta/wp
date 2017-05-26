  
    <?php get_header();?> 
    <div class="row">
            <div class="col-md-12 welcome">
             <h2><?php bloginfo('name')?></h2>
             <h4><?php bloginfo('description')?></h4>
         </div>
     </div>
 
 
 <div class="container-fluid" id="contat">
       <div class="row text-center">
         <h1>Contattaci</h1>
         <h3>e ti risponderemo al più presto</h3>
       </div>
       <form class="form-contats">
         <div class="row">
           <!--start contats -->
           <div class="col-md-6">
            <div class="form-group">
             <label for="exampleInputEmail1">Indirizzo Email</label>
             <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Please type yuor Email" required>
           </div>
           <div class="form-group">
             <label for="exampleInputPassword1">Password</label>
             <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Choose your Password" required>
           </div>
         </div>
         <div class="col-md-6">
           <label for="exampleInputPassword1">Messaggio</label>
           <textarea class="form-control" rows="3"></textarea>
         </div>
         <!--end contats-->
       </div>
       <div class="row text-center">
         <button type="submit" class="btn btn-default">Invio</button>
       </div>
     </form>
     </div>
  <?php get_footer(); ?> 
