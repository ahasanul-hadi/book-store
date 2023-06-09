<div>
    <!-- home section starts  -->

    <section class="home" id="home">

        <div class="row">

            <div class="content">
                <h3>upto 75% off</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam deserunt nostrum accusamus. Nam
                    alias sit necessitatibus, aliquid ex minima at!</p>
                <a href="#" class="btn">shop now</a>
            </div>

            <div class="swiper books-slider">
                <div class="swiper-wrapper">
                    @foreach($newbooks as $newbook)
                    <a href="{{route('book_details',$newbook->id)}}" class="swiper-slide"><img src="{{asset('assets/image/'.$newbook->book_image)}}" alt=""></a>
                    @endforeach
                </div>
                <img src="{{asset("assets/image/stand.png")}}" class="stand" alt="">
            </div>

        </div>

    </section>

    <!-- home section ense  -->

    <!-- featured section starts  -->

    <section class="featured" id="featured">

        <h1 class="heading"> <span>featured books</span> </h1>

        <div class="swiper featured-slider">

            <div class="swiper-wrapper">
                @foreach($books as $book)
                    
                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="{{route('book_details',$book->id)}}" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <a href="{{route('book_details',$book->id)}}"><img src="{{asset('assets/image/'.$book->book_image)}}" alt=""></a>                        
                    </div>
                    <div class="content">
                        <h3>{{substr($book->book_name,0,28)}}</h3>
                        <div class="price">৳ {{$book->book_sale_price}} <span>৳ {{$book->book_price}}</span></div>
                        <a href="{{route('book_purchase',$book->id)}}" class="btn">Buy Now</a>
                    </div>
                </div>

                @endforeach

            </div>

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>

        </div>

    </section>

    <!-- featured section ends -->

    <!-- newsletter section starts -->

    <section class="newsletter">
        
        <form wire:submit.prevent="subscription">
            <h3>subscribe for latest updates</h3>
            @if(Session::has('message'))
                        <h3 class="alert alert-success" style="color: greenyellow" role="alert">{{Session::get('message')}}</h3>
                        @endif
            <input type="email" name="" placeholder="enter your email" id="" class="box" wire:model="subscription_email">
            <input type="submit" value="subscribe" class="btn">
        </form>

    </section>

    <!-- newsletter section ends -->

    <!-- arrivals section starts  -->

    <section class="arrivals" id="arrivals">

        <h1 class="heading"> <span>new arrivals</span> </h1>

        <div class="swiper arrivals-slider">

            <div class="swiper-wrapper">

                @foreach($newbooks as $newbook)
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

        <div class="swiper arrivals-slider">

            <div class="swiper-wrapper">
                @foreach($oldbooks as $oldbook)
                <a href="{{route('book_details',$oldbook->id)}}" class="swiper-slide box">
                    <div class="image">
                        <img src="{{asset('assets/image/'.$oldbook->book_image)}}" alt="">
                    </div>
                    <div class="content">
                        <h3>{{substr($oldbook->book_name,0,28)}}</h3>
                        <div class="price">৳ {{$oldbook->book_sale_price}} <span>৳ {{$oldbook->book_price}}</span></div>
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

    <!-- arrivals section ends -->

    <!-- deal section starts  -->

    <section class="deal">

        <div class="content">
            <h3>deal of the day</h3>
            <h1>upto 50% off</h1>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde perspiciatis in atque dolore tempora
                quaerat at fuga dolorum natus velit.</p>
            <a href="#" class="btn">shop now</a>
        </div>

        <div class="image">
            <img src="{{asset("assets/image/deal-img.jpg")}}" alt="">
        </div>

    </section>

    <!-- deal section ends -->

    <!-- reviews section starts  -->

    <section class="reviews" id="reviews">

        <h1 class="heading"> <span>client's reviews</span> </h1>

        <div class="swiper reviews-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide box">
                    <img src="{{asset("assets/image/pic-1.png")}}" alt="">
                    <h3>john deo</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aspernatur nihil ipsa placeat.
                        Aperiam at sint, eos ex similique facere hic.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="{{asset("assets/image/pic-2.png")}}" alt="">
                    <h3>john deo</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aspernatur nihil ipsa placeat.
                        Aperiam at sint, eos ex similique facere hic.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="{{asset("assets/image/pic-3.png")}}" alt="">
                    <h3>john deo</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aspernatur nihil ipsa placeat.
                        Aperiam at sint, eos ex similique facere hic.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
                <div class="swiper-slide box">
                    <img src="{{asset("assets/image/pic-4.png")}}" alt="">
                    <h3>john deo</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aspernatur nihil ipsa placeat.
                        Aperiam at sint, eos ex similique facere hic.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="{{asset("assets/image/pic-5.png")}}" alt="">
                    <h3>john deo</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aspernatur nihil ipsa placeat.
                        Aperiam at sint, eos ex similique facere hic.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="{{asset("assets/image/pic-6.png")}}" alt="">
                    <h3>john deo</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aspernatur nihil ipsa placeat.
                        Aperiam at sint, eos ex similique facere hic.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>

            </div>

        </div>

    </section>

    <!-- reviews section ends -->

    <!-- blogs section starts  -->

    <section class="blogs" id="blogs">

        <h1 class="heading"> <span>our blogs</span> </h1>

        <div class="swiper blogs-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide box">
                    <div class="image">
                        <img src="{{asset("assets/image/blog-1.jpg")}}" alt="">
                    </div>
                    <div class="content">
                        <h3>blog title goes here</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, odio.</p>
                        <a href="#" class="btn">read more</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="image">
                        <img src="{{asset("assets/image/blog-2.jpg")}}" alt="">
                    </div>
                    <div class="content">
                        <h3>blog title goes here</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, odio.</p>
                        <a href="#" class="btn">read more</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="image">
                        <img src="{{asset("assets/image/blog-3.jpg")}}" alt="">
                    </div>
                    <div class="content">
                        <h3>blog title goes here</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, odio.</p>
                        <a href="#" class="btn">read more</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="image">
                        <img src="{{asset("assets/image/blog-4.jpg")}}" alt="">
                    </div>
                    <div class="content">
                        <h3>blog title goes here</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, odio.</p>
                        <a href="#" class="btn">read more</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="image">
                        <img src="{{asset("assets/image/blog-5.jpg")}}" alt="">
                    </div>
                    <div class="content">
                        <h3>blog title goes here</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, odio.</p>
                        <a href="#" class="btn">read more</a>
                    </div>
                </div>

            </div>

        </div>

    </section>

    <!-- blogs section ends -->


    @include('sweetalert::alert')

</div>
