<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Bakoteh-upper-ict-club-election-app">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>Creative - Bootstrap Admin Template</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <!-- Bootstrap CSS -->
  <link href="../bootstrap/" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="css/elegant-icons-style.css" rel="stylesheet" />
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <!-- full calendar css-->
  <!-- <link href="assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" /> -->
  <!-- <link href="assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" /> -->
  <!-- easy pie chart-->
  <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
  <link href="css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
  <!-- Custom styles -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet" />
  <link href="css/jquery-ui-1.10.4.min.css" rel="stylesheet">


</head>

<body>
  <style>
    #content-box {
      transition: 1000ms;
    }
    .candidate-img{
      border-radius: 50%;
       width: 40%;
       height: 20vh;
       margin-top: -5em;
     
    }
  </style>
  <!-- container section start -->
  <section id="container" class="">


    <header class="header dark-bg">
      <div class="toggle-nav">
        <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i
            class="icon_menu"></i></div>
      </div>

      <!--logo start-->
      <a href="index.html" class="logo">Election <span class="lite">Admin</span></a>
      <!--logo end-->

      <div class="top-nav notification-row" id="top_menu">
        <!--  s
          earch form start -->
        <button class="btn btn-secondary btn-sm" name='newPost'>
          <i class="fa fa-plus" aria-hidden="true"></i>Add Postition
        </button>

        <button class="btn btn-primary btn-sm" name='newCandidate'>
          <i class="fa fa-plus" aria-hidden="true"></i> New Candidate
        </button>


      </div>


    </header>
    <!--header end-->

    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
          <li class="active">
            <a class="" href="index.php">
              <i class="icon_house_alt"></i>
              <span>Dashboard</span>
            </a>
          </li>

        </ul>

        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <!--overview start-->
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-laptop"></i> Dashboard</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
              <li><i class="fa fa-laptop"></i>Dashboard</li>
            </ol>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box blue-bg">
              <i class="fa fa-users" aria-hidden="true"></i>
              <div class="count">0.0</div>
              <div class="title">Candidates</div>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->


          <!--/.col-->

          <div class="col-lg-4 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box dark-bg">
              <i class="fa fa-thumbs-o-up"></i>
              <div class="count">4.362</div>
              <div class="title">Votes</div>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->

          <div class="col-lg-4 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box green-bg">
              <i class="fa fa-user" aria-hidden="true"></i>
              <div class="count">4.0</div>
              <div class="title">Admiins</div>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->

        </div>
        <!--/.row-->

        <div class="row" id="content-box">
          <div class="col-12">
            <div class="card card-bg">
              <div class="card-header bg-primary text-light mb-5">
                <h3>ELECTION RESULT FOR PRESIDENTIAL</h3>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-3">
                    <div class="card">
                      <div class="img text-center mx-auto mt-5">
                        <img class="card-img-top candidate-img" src="https://yt3.ggpht.com/a/AGF-l79MNrlsk7bvZw5cYyxr68-oeMjpltt_JsmfgA=s900-c-k-c0xffffffff-no-rj-mo" alt="candidate">
                      </div>
                      
                      <div class="card-body">
                        <h5 class="card-title">Title</h5>
                        <p class="card-text">Content</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer">
                Footer
              </div>
            </div>
          </div>

        </div>
        <!-- project team & activity end -->

      </section>
      <div class="text-right">
        <div class="credits">


          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> and customized by BcTech
        </div>
      </div>
    </section>
    <!--main content end-->
  </section>
  <!-- container section start -->
  <script src="../UI.js"></script>
  <script src="js/custom.js"></script>
  <!-- javascripts -->
 
  <!-- bootstrap -->
  <script src="js/bootstrap.js"></script>




  <script>
    //knob
    $(function () {
      $(".knob").knob({
        'draw': function () {
          $(this.i).val(this.cv + '%')
        }
      })
    });

    //carousel
    $(document).ready(function () {
      $("#owl-slider").owlCarousel({
        navigation: true,
        slideSpeed: 300,
        paginationSpeed: 400,
        singleItem: true

      });
    });

    //custom select box

    $(function () {
      $('select.styled').customSelect();
    });

    /* ---------- Map ---------- */
    $(function () {
      $('#map').vectorMap({
        map: 'world_mill_en',
        series: {
          regions: [{
            values: gdpData,
            scale: ['#000', '#000'],
            normalizeFunction: 'polynomial'
          }]
        },
        backgroundColor: '#eef3f7',
        onLabelShow: function (e, el, code) {
          el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
        }
      });
    });
  </script>

</body>

</html>