
<div>    
    <style>
        .swiper-pointer-events {
            touch-action: pan-y;
        }
        .swiper {
            margin-left: auto;
            margin-right: auto;
            position: relative;
            overflow: hidden;
            list-style: none;
            padding: 0;
            z-index: 1;
        }
        .swiper-wrapper {
            position: relative;
            width: 100%;
            height: 100%;
            z-index: 1;
            display: flex;
            transition-property: transform;
            box-sizing: content-box
        }

        section {
            display: block;
        }
        .arrivals .arrivals-slider .box {
            display: flex;
            align-items: center;
            gap: 1.5rem;
            padding: 2rem 1rem;
            border: var(--border);
            margin: 1rem 0;
        }
        .swiper-slide {
            flex-shrink: 0;
            width: 100%;
            height: 100%;
            position: relative;
            transition-property: transform;
        }
    </style>

    <!-- MAIN -->
    <main>
        <div class="head-title">
            <div class="left">
                <h1>Dashboard</h1>
                <ul class="breadcrumb">
                    <li>
                        <a href="{{route("student_dashboard")}}">Dashboard</a>
                    </li>
                    <li><i class='bx bx-chevron-right'></i></li>
                    <li>
                        <a class="active" href="{{route("home")}}">Home</a>
                    </li>
                </ul>
            </div>
            <!-- <a href="#" class="btn-download">
                <i class='bx bxs-cloud-download'></i>
                <span class="text">Sale Report PDF</span>
            </a> -->
        </div>



        <section class="arrivals" id="arrivals">

            <h1 class="heading"> <span>Purchased Books</span> </h1>

            <div class="swiper arrivals-slider">

                <div class="swiper-wrapper">

                 @foreach($purchasedBooks as $newbook)
                    <a href="{{route('book_details',$newbook->id)}}" class="swiper-slide box">
                        <div class="image">
                            <img src="{{asset('assets/image/'.$newbook->book_image)}}" alt="">
                        </div>
                        <div class="content">
                            <h3>{{substr($newbook->book_name,0,28)}}</h3>
                            <div class="price">৳ {{$newbook->book_sale_price}} <span>৳ {{$newbook->book_price}}</span></div>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </a>
                    @endforeach
                </div>

            </div>
        </section>



        



            <!-- arrivals section starts  -->

    

            <!-- arrivals section ends -->





<!--         
        <ul class="box-info">
            <li>
                <i class='bx bxs-book'></i>
                <span class="text">
                    <h3>0</h3>
                    <p>Total Books</p>
                </span>
            </li>
            <li>
                <i class='bx bxs-calendar-check'></i>
                <span class="text">
                    <h3>0{{-- {{$totalUser}} --}}</h3>
                    <p>Total Course</p>
                </span>
            </li>
            <li>
                <i class='bx bxs-dollar-circle'></i>
                <span class="text">
                    <h3>৳ 0.00</h3>
                    <p>Total Cost</p>
                </span>
            </li>
        </ul>


        <div class="table-data">
            <div class="order">
                <div class="head">
                    <h3>Recent Orders</h3>
                    <i class='bx bx-search'></i>
                    <i class='bx bx-filter'></i>
                </div>
                <table>
                    <thead>
                        <tr>
                            <th>User</th>
                            <th>Date Order</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <img src="{{asset('assets/image/'.Auth::user()->profile_photo_path)}}">
                                <p>John Doe</p>
                            </td>
                            <td>01-10-2021</td>
                            <td><span class="status completed">Completed</span></td>
                        </tr>
                        <tr>
                            <td>
                                <img src="{{asset('assets/image/'.Auth::user()->profile_photo_path)}}">
                                <p>John Doe</p>
                            </td>
                            <td>01-10-2021</td>
                            <td><span class="status pending">Pending</span></td>
                        </tr>
                        <tr>
                            <td>
                                <img src="{{asset('assets/image/'.Auth::user()->profile_photo_path)}}">
                                <p>John Doe</p>
                            </td>
                            <td>01-10-2021</td>
                            <td><span class="status process">Process</span></td>
                        </tr>
                        <tr>
                            <td>
                                <img src="{{asset('assets/image/'.Auth::user()->profile_photo_path)}}">
                                <p>John Doe</p>
                            </td>
                            <td>01-10-2021</td>
                            <td><span class="status pending">Pending</span></td>
                        </tr>
                        <tr>
                            <td>
                                <img src="{{asset('assets/image/'.Auth::user()->profile_photo_path)}}">
                                <p>John Doe</p>
                            </td>
                            <td>01-10-2021</td>
                            <td><span class="status completed">Completed</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="todo">
                <div class="head">
                    <h3>Pie Chart</h3>
                </div>
                <div class="container p-5">                 
                    <div id="piechart" style="width: 100%; height: 400px;"></div>
                </div>                 
                {{-- <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                <script type="text/javascript">
                    google.charts.load('current', {'packages':['corechart']});
                    google.charts.setOnLoadCallback(drawChart);
             
                    function drawChart() {
             
                    var data = google.visualization.arrayToDataTable([
                        ['Month Name', 'Registered User Count'],
             
                            @php
                            foreach($pieChart as $d) {
                                echo "['".$d->month_name."', ".$d->count."],";
                            }
                            @endphp
                    ]);
             
                      var options = {
                        title: 'Users Growth',
                        is3D: false,
                      };
             
                      var chart = new google.visualization.PieChart(document.getElementById('piechart'));
             
                      chart.draw(data, options);
                    }
                  </script> --}}
            </div>
        </div> -->
    </main>
    <!-- MAIN -->
</div>
