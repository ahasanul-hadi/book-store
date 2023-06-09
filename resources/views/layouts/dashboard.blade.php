<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <!-- Font Awesome CSS -->
    <script src="https://kit.fontawesome.com/55d1e4a364.js" crossorigin="anonymous"></script>

    <!--Dashboard Boxicons -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <!-- Dashboard CSS -->
    <link rel="stylesheet" href="{{asset("assets/css/dashboard.css")}}">
    @livewireStyles
</head>

<body>
    <!-- SIDEBAR -->
    <section id="sidebar">
        <a href="{{route("home")}}" class="brand">
            <i class='bx bxs-book' style="color: rgb(0, 109, 128)"></i>
            <span class="text" style="color: rgb(0, 109, 128)">Hearts Medi Study</span>
        </a>
        <ul class="side-menu top">            
            @if(Auth::user()->utype === 'STD')
            <li class="active">
                <a href="{{route("student_dashboard")}}">
                    <i class='bx bxs-dashboard'></i>
                    <span class="text">Dashboard</span>
                </a>
            </li>
            <!-- <li>
                <a href="{{route('student_books')}}">
                    <i class='bx bxs-book-alt'></i>
                    <span class="text">My Books</span>
                </a>
            </li>            
            <li>
                <a href="#">
                    <i class='bx bxs-doughnut-chart'></i>
                    <span class="text">My Course</span>
                </a>
            </li>            
            <li>
                <a href="{{route("messages")}}">
                    <i class='bx bxs-message-dots'></i>
                    <span class="text">Message (@include('messenger.unread-count'))</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bxs-calendar-check'></i>
                    <span class="text">My Orders</span>
                </a>
            </li> -->
            @else
           
            <li>
                <a href="{{route("author_books")}}">
                    <i class='bx bxs-book-alt'></i>
                    <span class="text">Books</span>
                </a>
            </li>                     

            <li>
                <a href="{{route('author_pending')}}">
                    <i class='bx bxs-calendar-check'></i>
                    <span class="text">New Orders</span>
                </a>
            </li>

            <li>
                <a href="{{route('author_completed')}}">
                    <i class='bx bxs-calendar-check'></i>
                    <span class="text">Completed Orders</span>
                </a>
            </li>

            @endif
        </ul>
        <ul class="side-menu">
            @if(Auth::user()->utype === 'STD')
            <li>
                <a href="{{route('student_profile')}}">
                    <i class='bx bxs-cog'></i>
                    <span class="text">My profile</span>
                </a>
            </li>
            
            @endif
            <li>
                <a href="{{ route('logout') }}"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="logout">
                    <i class='bx bxs-log-out-circle'></i>
                    <span class="text">Logout</span>
                </a>                
                <form id="logout-form" method="POST" action="{{ route('logout') }}">
                  @csrf
              </form>
            </li>
        </ul>
    </section>
    <!-- SIDEBAR -->

    <!-- CONTENT -->
    <section id="content">
        <!-- NAVBAR -->
        <nav>
            <i class='bx bx-menu'></i>
            <a href="{{route('home')}}" class="nav-link">Home</a>
            <form action="{{route('book_search')}}">
                <div class="form-input">
                    <input type="search" name="search" id="search-box" placeholder="Search Books...">
                    <button type="submit" class="search-btn"><i class='bx bx-search'></i></button>
                </div>
            </form>             
            <input type="checkbox" id="switch-mode" hidden>
            <label for="switch-mode" class="switch-mode"></label>
           
           
        </nav>
        <!-- NAVBAR -->
        {{$slot}}

    </section>

    <!-- Dashboard JS -->
    <script src="{{asset("assets/js/dashboard.js")}}"></script>
    <!-- Bootstrap JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>

    {{-- Search --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script type="text/javascript">
        var path = "{{ route('autocompleteSearch') }}";
      
        $( "#search-box" ).autocomplete({
            source: function( request, response ) {
              $.ajax({
                url: path,
                type: 'GET',
                dataType: "json",
                data: {
                   search: request.term
                },
                success: function( data ) {
                   response( data );
                }
              });
            },
            select: function (event, ui) {
               $('#search-box').val(ui.item.label);
               console.log(ui.item); 
               return false;
            }
          });
      
    </script>
    {{-- Search Close--}}

    
    @livewireScripts
</body>

</html>
