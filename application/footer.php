<!-- footer on -->
<footer class="page-footer  blue">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">About Us</h5>
                <p class="grey-text text-lighten-4">We are a rajasthan based online company that helps to fill the all types of form easy and convienently.</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Subscribe</h5>
               <p>If you like to stay connected with us to get new information about new vacancies and various forms! Sign Up with you regular email.</p>
                <form action="<?php echo '//'.$_SERVER['HTTP_HOST'] ?>/index.php?get=email/subscribe" method="post" enctype="multipart/form-data">
                  <div class="input-field inline" style="margin-top:40px;">
                    <input id="email_inline" type="email" class="validate black-text" name="smail">
                    <label for="email_inline">Email</label>
                    <span class="helper-text" data-error="wrong" data-success="right"></span>
                  </div>
                  <input type="submit" name="submit" value="Subscribe" class="btn red">
                </form>
              </div>
            </div>
          </div>
          <div class="footer-copyright light-blue">
            <div class="container">
            © 2018-25 Copyright
            <a class="grey-text text-lighten-4 right" href="">FormSuvidha</a>
            </div>
          </div>
    </footer>
    <!-- footer off -->
</body>
<!--JavaScript at end of body for optimized loading-->
<!-- 1. Add latest jQuery and fancybox files -->

<script src="//code.jquery.com/jquery-3.3.1.min.js"></script>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>

<!-- zebra pagination -->
<script src="assets/liabrary/Zebra_Pagination/public/javascript/zebra_pagination.js"></script>
<!-- jquery js file include -->
<script type="javascript/text" src="assets/liabrary/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>

    <!-- materialize js file -->
    <script type="javascript/text" src="assets/liabrary/node_modules/materialize-css/dist/js/materialize.js"></script>
    <!-- custom js file -->
    <script type="text/javascript">
        //side nav menu script
    $(document).ready(function() {
        $('.sidenav').sidenav();
    });
// model
$(document).ready(function(){
    $('.modal').modal();
  });

  //sellect
  $(document).ready(function(){
    $('select').formSelect();
  });

  //date picker
  $(document).ready(function(){
    $('.datepicker').datepicker();
  });
   
   //collapsable
   $(document).ready(function(){
    $('.collapsible').collapsible();
  });
//materialize image box
$(document).ready(function(){
    $('.materialboxed').materialbox();
  });

  //dropdown
$(document).ready(function(){
$('.dropdown-trigger').dropdown();
});

//chips

  $('.chips').chips();
     </script>
</html>