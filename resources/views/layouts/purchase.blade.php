<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="SSLCommerz">
    <title>Hearts Medi Study | Payment</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>


    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/css/bootstrap-datetimepicker.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="{{asset("assets/css/style.css")}}">

    @livewireStyles
</head>


<body class="bg-light">

    <!-- header section starts  -->

    <header class="header">

        <div class="header-1">

            <a href="{{route("home")}}" class="logo"> <i class="fas fa-book"></i> Hearts Medi Study </a>

            @livewire('front-end.search-component')

            <div class="icons">
                <div id="search-btn" class="fas fa-search"></div>
            </div>
            @if (!Auth::user())
                <div>
                    <a class="btn btn-primary" href="/login" class="btn btn-xs btn-info pull-right">Login</a>
                </div>
            @else
                <div>
                    <a class="btn btn-primary" href="/author/new-orders" class="btn btn-xs btn-info pull-right">Dashboard</a>
                </div>
            @endif

        </div>

      

        <div class="header-2">
            <nav class="navbar">
                <a href="{{route("home")}}">home</a>
                <a href="{{route("all_books")}}">all books</a>
                <a href="{{route("home")}}#featured" target="_parent">featured</a>
                <a href="{{route("home")}}#arrivals" target="_parent">arrivals</a>
                <a href="{{route("home")}}#reviews" target="_parent">reviews</a>
                
            </nav>
        </div>

    </header>

    <div style="color:red; font-weight:bold; font-size: 18px;text-align:center;margin-top:20px;">
        @if($errors->any())
            {{ implode('', $errors->all(':message')) }}
        @endif
    </div>
    <!-- header section ends -->

    {{$slot}}



    <!-- footer section starts  -->

    <section class="footer">

        <div class="box-container">

            <div class="box">
                <h3>our locations</h3>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> House -15, Road-17, Nikunjo 2 </a>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> Khilkhet, Dhaka-1229, Bangladesh. </a>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7299.2635477463045!2d90.41279297656592!3d23.83168965227218!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c65e78f46ee1%3A0x3e009fd37c89634f!2sNikunja%202%2C%20Dhaka!5e0!3m2!1sen!2sbd!4v1663319882562!5m2!1sen!2sbd"
                    width="250" height="125" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

            <div class="box">
                <h3>quick links</h3>
                <a href="{{route("home")}}#home"> <i class="fas fa-arrow-right"></i> Home </a>
                <a href="{{route("all_books")}}"> <i class="fas fa-arrow-right"></i> All Books </a>
                <a href="{{route("home")}}#featured"> <i class="fas fa-arrow-right"></i> Featured Books </a>
                <a href="{{route("home")}}#arrivals"> <i class="fas fa-arrow-right"></i> Arrivals Books </a>
            </div>

            <div class="box">
                <h3>extra links</h3>
                <a href="{{route("home")}}"> <i class="fas fa-arrow-right"></i> Hearts Medi Study </a>
                <a href="{{route("home")}}#reviews"> <i class="fas fa-arrow-right"></i> Reviews </a>
            </div>

            <div class="box">
                <h3>Feel free to contact with us</h3>
                <a href="#"> <i class="fas fa-phone"></i> +8801761319100 </a>
                <a href="#"> <i class="fas fa-envelope"></i> heartsmedistudy@gmail.com </a>
                <img src="{{asset("assets/image/worldmap.png")}}" class="map" alt="">
            </div>

        </div>

        <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
            <a href="#" class="fab fa-pinterest"></a>
        </div>

        <div class="credit"> @copyright <span> Hearts Medi Study</span> | all rights reserved! </div>

    </section>

    <!-- footer section ends -->





    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/js/bootstrap-datetimepicker.min.js"></script>
  

    {{-- Search Close--}}
    {{-- toggle script --}}
    <script>
        $(document).ready(function () {

     
            $('#datetimepicker').datetimepicker({
                    format: 'DD-MM-YYYY HH:mm:ss',
                    keepOpen: false,
            });

            $('#datetimepicker').on('changeDate', function(){
                $(this).datepicker('hide');
            });




            $(".content .tab_content").hide();
            $(".content .tab_content:first-child").show();

            $("ul li").click(function () {

                $("ul li").removeClass("active");
                $(this).addClass("active");

                var current_tab = $(this).attr("data-list");
                $(".content .tab_content").hide();
                $("." + current_tab).show();
            })
        });

    </script>
    {{-- toggle script close --}}

    @if (!Auth::user())
    <script>
        let loginForm = document.querySelector('.login-form-container');

        document.querySelector('#login-btn').onclick = () => {
            loginForm.classList.toggle('active');
        }

        document.querySelector('#close-login-btn').onclick = () => {
            loginForm.classList.remove('active');
        }

        let signupForm = document.querySelector('.signup-form-container');

        document.querySelector('#signup-btn').onclick = () => {
            signupForm.classList.toggle('active');
        }

        document.querySelector('#close-signup-btn').onclick = () => {
            signupForm.classList.remove('active');
        }

    </script>
    @endif
    @include('sweetalert::alert')
    @livewireScripts


</body>

</html>
