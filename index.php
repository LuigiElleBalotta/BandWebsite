<?php 



?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Luigi Elle Balotta - The Band</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="css/animate.css" rel="stylesheet">
  <script src="js/wow.js"></script>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">
    
<!-- NAVBAR -->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">The Band Logo</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#home">HOME</a></li>
                <li><a href="#band">BAND</a></li>
                <li><a href="#tour">TOUR</a></li>
                <li><a href="#contact">CONTACT</a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">MORE
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Merchandise</a></li>
                        <li><a href="#">Extras</a></li>
                        <li><a href="#">Media</a></li>
                    </ul>
                </li>
                <li><a href="#"><span class="glyphicon glyphicon-search"></span></a></li>
            </ul>
        </div>
    </div>
</nav>
<div id="home">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="img/ny.jpg" alt="New York">
                <div class="carousel-caption">
                    <h3>New York</h3>
                    <p>The atmosphere in New York is lorem ipsum.</p>
                </div>
            </div>

            <div class="item">
                <img src="img/chicago.jpg" alt="Chicago">
                <div class="carousel-caption">
                    <h3>Chicago</h3>
                    <p>Thank you, Chicago - A night we won't forget.</p>
                </div>
            </div>

            <div class="item">
                <img src="img/la.jpg" alt="Los Angeles">
                <div class="carousel-caption">
                    <h3>LA</h3>
                    <p>Even though the traffic was a mess, we had the best time.</p>
                </div>
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

<div id="band" class="container text-center">
  <h3 class="wow animated fadeInUp">THE BAND</h3>
  <p class="wow animated fadeInUp"><em>We love music!</em></p>
  <p class="wow animated fadeInUp">We have created a fictional band website. Lorem ipsum..</p>
  <br>
  <div class="row">
      <div class="col-sm-4">
          <p><strong>Name</strong></p>
          <a href="#artist1" data-toggle="collapse">
              <img class="img-circle person wow animated rotateIn" src="img/avatar.png" alt="nome">
          </a>
          <div id="artist1" class="collapse">
              <p>Guitarist and Lead Vocalist</p>
              <p>Loves long walks on the beach</p>
              <p>Member since 1988</p>
          </div>
      </div>
      <div class="col-sm-4">
          <p><strong>Name</strong></p>
          <a href="#artist2" data-toggle="collapse">
              <img class="img-circle person wow animated rotateIn" src="img/avatar.png" alt="nome">
          </a>
          <div id="artist2" class="collapse">
              <p>Guitarist and Lead Vocalist</p>
              <p>Loves long walks on the beach</p>
              <p>Member since 1988</p>
          </div>
      </div>
      <div class="col-sm-4">
          <p><strong>Name</strong></p>
          <a href="#artist3" data-toggle="collapse">
              <img class="img-circle person wow animated rotateIn" src="img/avatar.png" alt="nome">
          </a>
          <div id="artist3" class="collapse">
              <p>Guitarist and Lead Vocalist</p>
              <p>Loves long walks on the beach</p>
              <p>Member since 1988</p>
          </div>
      </div>
  </div>
</div>

<div class="bg-1">
    <div id="tour" class="container">
        <h3 class="text-center wow animated fadeInUp">Tour Dates</h3>
        <p class="text-center wow animated fadeInUp">Lorem ipsum we'll play you some music.<br> Remember to book your tickets!</p>
        <ul class="list-group">
            <li class="list-group-item">September  <span class="label label-danger">Sold Out!</span></li>
            <li class="list-group-item">October  <span class="label label-danger">Sold Out!</span></li>
            <li class="list-group-item">November <span class="badge">3</span></li>
        </ul>
        <div class="row text-center">
            <div class="col-sm-4 wow animated wobble">
                <div class="thumbnail">
                    <img src="img/paris.jpg" alt="Paris">
                    <p><strong>Paris</strong></p>
                    <p>Fri. 27 November 2015</p>
                    <button class="btn" data-toggle="modal" data-target="#myModal">Buy Tickets</button>
                </div>
            </div>
            <div class="col-sm-4 wow animated wobble">
                <div class="thumbnail">
                    <img src="img/newyork.jpg" alt="New York">
                    <p><strong>New York</strong></p>
                    <p>Sat. 28 November 2015</p>
                    <button class="btn" data-toggle="modal" data-target="#myModal">Buy Tickets</button>
                </div>
            </div>
            <div class="col-sm-4 wow animated wobble">
                <div class="thumbnail">
                    <img src="img/sanfran.jpg" alt="San Francisco">
                    <p><strong>San Francisco</strong></p>
                    <p>Sun. 29 November 2015</p>
                    <button class="btn" data-toggle="modal" data-target="#myModal">Buy Tickets</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="contact" class="container">
    <h3 class="text-center wow animated fadeInUp">Contact</h3>
    <p class="text-center wow animated fadeInUp"><em>We love our fans!</em></p>
    <div class="row test">
        <div class="col-md-4">
            <p class="wow animated slideInLeft">Fan? Drop a note.</p>
            <p class="wow animated slideInLeft"><span class="glyphicon glyphicon-map-marker"></span>Chicago, US</p>
            <p class="wow animated slideInLeft"><span class="glyphicon glyphicon-phone"></span>Phone: +00 1515151515</p>
            <p class="wow animated slideInLeft"><span class="glyphicon glyphicon-envelope"></span>Email: mail@mail.com</p>
        </div>
        <div class="col-md-8 wow animated wobble">
            <div class="row">
                <div class="col-sm-6 form-group">
                    <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
                </div>
                <div class="col-sm-6 form-group">
                    <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
                </div>
            </div>
            <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea>
            <div class="row">
                <div class="col-md-12 form-group">
                    <button class="btn pull-right" type="submit">Send</button>
                </div>
            </div>
        </div>
    </div>
    <h3 class="text-center wow animated fadeInUp">From The Blog</h3>
    <ul class="nav nav-tabs wow animated zoomInUp">
        <li class="active"><a data-toggle="tab" href="#menu">Mike</a></li>
        <li><a data-toggle="tab" href="#menu1">Chandler</a></li>
        <li><a data-toggle="tab" href="#menu2">Peter</a></li>
    </ul>

    <div class="tab-content wow animated zoomInUp">
        <div id="menu" class="tab-pane fade in active">
            <h2>Mike Ross, Manager</h2>
            <p>Man, we've been on the road for some time now. Looking forward to lorem ipsum.</p>
        </div>
        <div id="menu1" class="tab-pane fade">
            <h2>Chandler Bing, Guitarist</h2>
            <p>Always a pleasure people! Hope you enjoyed it as much as I did. Could I BE.. any more pleased?</p>
        </div>
        <div id="menu2" class="tab-pane fade">
            <h2>Peter Griffin, Bass player</h2>
            <p>I mean, sometimes I enjoy the show, but other times I enjoy other things.</p>
        </div>
    </div>
</div>
<div id="googleMap"></div>

<!-- Add Google Maps -->
<script src="http://maps.googleapis.com/maps/api/js"></script>
<script>
    var myCenter = new google.maps.LatLng(44.928624, 10.522915);
        var map = null;
    function initialize() {
            var mapProp = {
            center:myCenter,
            zoom:12,
            scrollwheel:false,
            draggable:false,
            mapTypeId:google.maps.MapTypeId.ROADMAP
        };

        map = new google.maps.Map(document.getElementById("googleMap"),mapProp);

        var marker = new google.maps.Marker({
            position:myCenter,
        });

        marker.setMap(map);
    }

    google.maps.event.addDomListener(window, 'load', initialize);
    google.maps.event.addDomListener(window, 'resize', function() {
        map.setCenter(new google.maps.LatLng(44.928624, 10.522915));
    });
</script>

<footer class="text-center">
    <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
        <span class="glyphicon glyphicon-chevron-up"></span>
    </a><br><br>
    <p>Bootstrap Theme Made By <a href="http://www.w3schools.com" data-toggle="tooltip" title="Visit w3schools">www.w3schools.com</a></p>
</footer>
<script>
    $(document).ready(function(){
        // Initialize Tooltip
        $('[data-toggle="tooltip"]').tooltip();
        
        // Add smooth scrolling to all links in navbar + footer link
        $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

            // Prevent default anchor click behavior
            event.preventDefault();

            // Store hash
            var hash = this.hash;

            // Using jQuery's animate() method to add smooth page scroll
            // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 900, function(){
                // Add hash (#) to URL when done scrolling (default click behavior)
                window.location.hash = hash;
            });
        });
        
    });
    var wow = new WOW ({
        offset:       75,          // distance to the element when triggering the animation (default is 0)
        mobile:       true,       // trigger animations on mobile devices (default is true)
    });
    wow.init();
</script>


<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4><span class="glyphicon glyphicon-lock"></span> Tickets</h4>
      </div>
      <div class="modal-body">
        <form role="form">
          <div class="form-group">
            <label for="psw"><span class="glyphicon glyphicon-shopping-cart"></span> Tickets, $23 per person</label>
            <input type="number" class="form-control" id="psw" placeholder="How many?">
          </div>
          <div class="form-group">
            <label for="usrname"><span class="glyphicon glyphicon-user"></span> Send To</label>
            <input type="text" class="form-control" id="usrname" placeholder="Enter email">
          </div>
          <button type="submit" class="btn btn-block">Pay
            <span class="glyphicon glyphicon-ok"></span>
          </button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
          <span class="glyphicon glyphicon-remove"></span> Cancel
        </button>
        <p>Need <a href="#">help?</a></p>
      </div>
    </div>
  </div>
</div>

</body>
</html>