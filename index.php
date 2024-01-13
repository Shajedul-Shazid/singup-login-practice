<?php
require "header.php";
?>

  <div class="container">
      <?php
      if(isset($_SESSION['userId'])){
          echo "<main>

  <!--Main layout-->
  <div class=\"container\">
    <!--First row-->
    <div class=\"row wow fadeIn\" data-wow-delay=\"0.2s\">
      <div class=\"col-md-12\">
        <div class=\"jumbotron\">
          <h2 class=\"h2-responsive\">Material Design for Bootstrap</h2>
          <br>
          <p>Powerful and free Material Design UI KIT</p>
          <hr>
          <p>Register for free and get access to amazing framework and beautiful components</p>
          <a target=\"_blank\" href=\"https://mdbootstrap.com/getting-started/\" class=\"btn btn-outline-unique\" rel=\"nofollow\">Download
            <i class=\"fas fa-download right\"></i></a>
          <a target=\"_blank\" href=\"https://mdbootstrap.com/material-design-for-bootstrap/\" class=\"btn btn-unique btn-ptc\"
             rel=\"nofollow\">Learn more <i class=\"fas fa-book right\"></i></a>
        </div>
      </div>
    </div>
    <!--/.First row-->

    <hr class=\"extra-margins\">

    <!--Second row-->
    <div class=\"row\">
      <!--First columnn-->
      <div class=\"col-lg-4\">
        <!--Card-->
        <div class=\"card wow fadeIn\" data-wow-delay=\"0.2s\">

          <!--Card image-->
          <img class=\"img-fluid\" src=\"https://mdbootstrap.com/img/Photos/Horizontal/Architecture/4-col/img%20(3).jpg\"
               alt=\"Card image cap\">

          <!--Card content-->
          <div class=\"card-body\">
            <!--Title-->
            <h4 class=\"card-title\">This is title</h4>
            <!--Text-->
            <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's
              content.</p>
            <a href=\"#\" class=\"btn btn-info\">Read more</a>
          </div>

        </div>
        <!--/.Card-->
      </div>
      <!--First columnn-->

      <!--Second columnn-->
      <div class=\"col-lg-4\">
        <!--Card-->
        <div class=\"card wow fadeIn\" data-wow-delay=\"0.4s\">

          <!--Card image-->
          <img class=\"img-fluid\" src=\"https://mdbootstrap.com/img/Photos/Horizontal/Architecture/4-col/img%20(1).jpg\"
               alt=\"Card image cap\">

          <!--Card content-->
          <div class=\"card-body\">
            <!--Title-->
            <h4 class=\"card-title\">This is title</h4>
            <!--Text-->
            <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's
              content.</p>
            <a href=\"#\" class=\"btn btn-info\">Read more</a>
          </div>

        </div>
        <!--/.Card-->

      </div>
      <!--Second columnn-->

      <!--Third columnn-->
      <div class=\"col-lg-4\">
        <!--Card-->
        <div class=\"card wow fadeIn\" data-wow-delay=\"0.6s\">

          <!--Card image-->
          <img class=\"img-fluid\" src=\"https://mdbootstrap.com/img/Photos/Horizontal/Architecture/4-col/img%20(4).jpg\"
               alt=\"Card image cap\">

          <!--Card content-->
          <div class=\"card-body\">
            <!--Title-->
            <h4 class=\"card-title\">This is title</h4>
            <!--Text-->
            <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's
              content.</p>
            <a href=\"#\" class=\"btn btn-info\">Read more</a>
          </div>

        </div>
        <!--/.Card-->
      </div>
      <!--Third columnn-->
    </div>
    <!--/.Second row-->
  </div>
  <!--/.Main layout-->

</main>
";
      }
        else{
            echo " <p>Yor are loged out</p>";
        }


      ?>



  </div>




<?php
require "footer.php";
?>