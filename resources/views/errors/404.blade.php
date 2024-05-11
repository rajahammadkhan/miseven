  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <title>404 Error | Mi7</title>


  <meta name="description" content="404 Error | Mi7">
  <meta name="keywords" content="404 Error | Mi7">
  <!-- Fav Icon -->
    <link rel="icon" href="{{url('')}}/assets/images/favicon.webp" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,300;0,400;0,600;0,700;0,800;0,900;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Stylesheets -->
    <link href="{{url('')}}/assets/css/font-awesome-all.css" rel="stylesheet">
    <link href="{{url('')}}/assets/css/flaticon.css" rel="stylesheet">
    <link href="{{url('')}}/assets/css/owl.css" rel="stylesheet">
    <link href="{{url('')}}/assets/css/bootstrap.css" rel="stylesheet">
    <link href="{{url('')}}/assets/css/jquery.fancybox.min.css" rel="stylesheet">
    <link href="{{url('')}}/assets/css/animate.css" rel="stylesheet">
    <link href="{{url('')}}/assets/css/nice-select.css" rel="stylesheet">
    <link href="{{url('')}}/assets/css/color.css" rel="stylesheet">
    <link href="{{url('')}}/assets/css/style.css" rel="stylesheet">
    <link href="{{url('')}}/assets/css/responsive.css" rel="stylesheet">
    <style type="text/css">
    .float{
        position:fixed;
        width:50px;
        height:50px;
        bottom:40px;
        left:30px;
        background-color:#25d366;
        color:#FFF;
        border-radius:50px;
        text-align:center;
        font-size:30px;
        /*box-shadow: 2px 2px 3px #999;*/
        z-index:1000;
    }

    .float:hover{
        color: white;
    }

    .my-float{
        margin-top:11px;
    }
    </style>
</head>
<!-- page wrapper -->
<body>
    <div class="boxed_wrapper">
        <!-- preloader -->
        <div class="preloader"></div>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <a href="https://wa.me/{{getSettings('whatsapp_link')}}" class="float" target="_blank">
            <i class="fa fa-whatsapp my-float"></i>
        </a>
        <!-- preloader -->
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>

        <!-- error-section -->
        <section class="error-section centred">
            <div class="auto-container">
                <div class="inner-box">
                    <h1>404</h1>
                    <h2>page is not found. <br />the page is doesn’t exist or deleted</h2>
                    <a href="{{ route('home') }}" class="theme-btn-one">Go Back Home</a>
                </div>
            </div>
        </section>
        <!-- error-section end -->
    </div>
    <!-- jequery plugins -->
    <script src="{{url('')}}/assets/js/jquery.js"></script>
    <script src="{{url('')}}/assets/js/popper.min.js"></script>
    <script src="{{url('')}}/assets/js/bootstrap.min.js"></script>
    <script src="{{url('')}}/assets/js/owl.js"></script>
    <script src="{{url('')}}/assets/js/wow.js"></script>
    <script src="{{url('')}}/assets/js/validation.js"></script>
    <script src="{{url('')}}/assets/js/jquery.fancybox.js"></script>
    <script src="{{url('')}}/assets/js/appear.js"></script>
    <script src="{{url('')}}/assets/js/scrollbar.js"></script>
    <script src="{{url('')}}/assets/js/jquery.nice-select.min.js"></script>
     <script src="{{url('')}}/assets/js/bxslider.js"></script>

    <!-- main-js -->
    <script src="{{url('')}}/assets/js/script.js"></script>
    
<script type="text/javascript">
    // check for saved 'darkMode' in localStorage
let darkMode = localStorage.getItem("darkMode");

const darkModeToggle = document.querySelector("#dark-mode-toggle");

const enableDarkMode = () => {
  // 1. Add the class to the body
  document.body.classList.add("darkmode");
  // 2. Update darkMode in localStorage
  localStorage.setItem("darkMode", "enabled");
};

const disableDarkMode = () => {
  // 1. Remove the class from the body
  document.body.classList.remove("darkmode");
  // 2. Update darkMode in localStorage
  localStorage.setItem("darkMode", " ");
};

// If the user already visited and enabled darkMode
// start things off with it on
if (darkMode == "enabled") {
  enableDarkMode();
}

// When someone clicks the button
darkModeToggle.addEventListener("click", () => {
  // get their darkMode setting
  darkMode = localStorage.getItem("darkMode");

  // if it not current enabled, enable it
  if (darkMode !== "enabled") {
    enableDarkMode();
    // if it has been enabled, turn it off
  } else {
    disableDarkMode();
  }
});

</script>
</body><!-- End of .page_wrapper -->
</html>