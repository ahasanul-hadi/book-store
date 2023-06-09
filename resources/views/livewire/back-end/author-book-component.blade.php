<div>
    <div class="panel-body p-3 p-md-5">
        <a href="{{route("author_add_book")}}"><div class="btn btn-primary my-3" style="background-color:#3C91E6 ">Add Books</div></a> 
        <div class="table-data" >  
            <div id="tbl" class="p-1 p-md-5 rounded-3">
                <div class="table-responsive rounded-3">            
                    <table class="table table-striped">
                        <thead>
                            <tr id="tabletr">
                                <th>ID</th>
                                <th>Book Name</th>
                                <th>Book Author Name</th>
                                <th>Book Cover Photo</th>
                                <th>Book Category</th>
                                <th>Book Price</th>
                                <th>Book Sale Price</th>            
                                <th>Delivery Charge</th>                        
                                <th>Book PDF</th>
                                <th>Book Index PDF</th>
                                <th>Book Demo Vedio</th>
                                <th colspan="2" class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody id="tbldta" >
                            @foreach($books as $book)
                            <tr>
                                <td>{{$book->id}}</td>
                                <td>{{$book->book_name}}</td>
                                <td>{{$book->book_author_name}}</td>
                                <td><img src="{{asset('assets/image/'.$book->book_image)}}" width="60" /></td>
                                <td>{{$book->book_category}}</td>
                                <td>৳{{$book->book_price}}</td>
                                <td>৳{{$book->book_sale_price}}</td>
                                <td>৳{{$book->delivery_charge}}</td>
                                <td>
                                    <button style="border: none;background-color: transparent;" wire:click="exportBookPdf({{$book->id}})">
                                        <img src="{{asset('assets/image/svg-icon/pdf.png')}}" width="60" />
                                    </button>
                                </td>
                                <td>
                                    <a href="{{route('author_read_book',$book->id)}}"><img src="{{asset('assets/image/svg-icon/pdf.png')}}" width="60" /></a>
                                </td>
                                <td>
                                    <video width="120" height="60" controls>
                                        <source src="{{asset('assets/image/'.$book->book_demo_vedio)}}" type="video/mp4">
                                    </video>
                                </td>
                                <td style="width: 6rem"> <a href="{{route('author_edit_book',$book->id)}}"><span style="font-size: 2rem; color:rgb(5, 128, 133)"><i class="fa-regular fa-pen-to-square"></i></span></a>
                            <a href="#" onclick="confirm('Are you sure,You want to delete this coupon ?') || event.stopImmediatePropagation()"
                                wire:click.prevent="deleteBook({{$book->id}})"
                                style="margin-left:10px;"><span style="font-size: 2rem; color:rgb(122, 21, 21)"><i class="fa-solid fa-trash"></i></span></a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{-- {{$books->links()}} --}}
                </div>
            </div>
        </div>
    </div>
</div>
