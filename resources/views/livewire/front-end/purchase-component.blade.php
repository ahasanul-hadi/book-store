<section class="details">
        <div class="details_image">
            <img height="300px" width="150" src="{{asset('assets/image/'.$book->book_image)}}" alt="">
        </div>
        <div class="content">
            <h3>{{$book->book_name}}</h3>
            <div class="price">৳ {{$book->book_sale_price}} <span>৳ {{$book->book_price}}</span></div>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="wrapper" style="margin-top:5px">
                <div class="tabs">
                  <ul>                    
                    <li style="display: inline;">
                        <p class="readbtn">Book Details</p>
                      </li>
                    <li style="display: inline;"><a href="{{route('read_book_index',$book->id)}}" class="readbtn">Read Book Index</a></li>
                    <li data-list="tab_2" style="display: inline;">
                        <p class="readbtn">Demo Vedio</p>
                    </li>                    
                    {{-- <li style="display: inline;"></li> --}}
                  </ul>
                </div>
              
              
              </div>
        </div>   
    </div>
    </section>


<div class="container" style="margin-top:-40px;">
    <div class="py-5 text-center">
        <h2>Payment</h2>
    </div>

    <div class="row">
        <div class="col-md-4 order-md-2 mb-4">
            <h4 class="d-flex justify-content-between align-items-center mb-3">
                <span class="text-muted">Your cart</span>
                <span class="badge badge-secondary badge-pill">1</span>
            </h4>
            <ul class="list-group mb-3">
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Book Name</h6>
                        <small class="text-muted">{{$book->book_name}}</small>
                    </div>
                    <span class="text-muted">{{$book->book_sale_price}}</span>
                </li>

                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Delivery Charge</h6>
                    </div>
                    <span class="text-muted">{{$book->delivery_charge}}</span>
                </li>
                
                <li class="list-group-item d-flex justify-content-between">
                    <span>Total (BDT)</span>
                    <strong>{{$book->book_sale_price + $book->delivery_charge}} TK</strong>
                </li>
            </ul>
        </div>
        <div class="col-md-8 order-md-1">
            <h4 class="mb-3">Billing address</h4>
            <form action="{{ url('/pay') }}" method="POST" class="needs-validation">
                <input type="hidden" value="{{ csrf_token() }}" name="_token" />
                <input type="hidden" value="{{$book->id}}" name="book_id" readonly/>
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="firstName">Full name</label>
                        <input type="text" name="customer_name" class="form-control" id="customer_name" placeholder=""
                               value="John Doe" required>
                        <div class="invalid-feedback">
                            Valid customer name is required.
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="mobile">Mobile</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">+88</span>
                        </div>
                        <input type="text" name="customer_mobile" class="form-control" id="mobile" placeholder="Mobile"
                               value="01711xxxxxx" required>
                        <div class="invalid-feedback" style="width: 100%;">
                            Your Mobile number is required.
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="email">Email</label>
                    <input type="email" name="customer_email" class="form-control " id="email"
                           placeholder="you@example.com" value="you@example.com" required>
                    <div class="invalid-feedback">
                        Please enter a valid email address for shipping updates.
                    </div>
                </div>

                <div class="mb-3">
                    <label for="address">Address</label>
                    <input type="text" name="customer_add1" class="form-control" id="address" placeholder="1234 Main St"
                           value="93 B, New Eskaton Road" required>
                    <div class="invalid-feedback">
                        Please enter your shipping address.
                    </div>
                </div>

                <div class="mb-3">
                    <label for="address2">Address 2 <span class="text-muted">(Optional)</span></label>
                    <input type="text" name="customer_add2" class="form-control" id="address2" placeholder="Apartment or suite">
                </div>


                <div class="mb-3">
                    <label for="datepicker">Delivery Date</label>
                    <div class="form-group">
                        <div class='input-group date' id='datetimepicker'>
                        <input name="delivery_date" type='text' class="form-control" required/>
                        <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                        </div>
                    </div>
                </div>

                <button class="btn btn-primary btn-lg btn-block" type="submit">Continue to Pay</button>
            </form>
        </div>
    </div>

</div>
