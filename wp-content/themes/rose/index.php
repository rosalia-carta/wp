  
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
 </div>
 </div>
 
 <form class="form-contats">
   <div class="row">
     <!--start contats -->
     <div class="col-md-6">
      <div class="form-group">
        
 <label for="exampleInputEmail1">Indirizzo email</label>
                    <div class="input-group">
                      <span class="input-group-addon" id="basic-addon1"><i class="glyphicon glyphicon-envelope"></i></span>
                      <input name="email" type="email" class="form-control input-lg" id="exampleInputEmail1" placeholder="Digita qui la tua email" required>
                    </div>



                  </div>
                  <div class="form-group">
 <label for="exampleInputTelefono">Telefono</label>
                 <div class="input-group">
                  <span class="input-group-addon" id="basic-addon1"><i class="glyphicon glyphicon-phone-alt"></i></span>
                  <input name="telefono" type="number" class="form-control input-lg" placeholder="Digita qui il tuo numero di telefono" required>
                </div>



              </div>
            </div>
            <div class="col-md-6">
             <label for="exampleInputmessage">Messaggio</label>
             <textarea class="form-control" rows="3"></textarea>
           </div>

         </div>
         <div class="row text-center">
           <button type="submit" class="btn btn-default">Invio</button>
         </div>
       </form>
     </div>
     <?php get_footer(); ?> 
