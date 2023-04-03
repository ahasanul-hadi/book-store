<div>
    <div class="panel-body p-3 p-md-5">
        <div class="btn btn-primary my-3" style="background-color:#3C91E6 ">Completed Orders</div> 
        <div class="table-data" >
            <div id="tbl" class="p-1 p-md-5 rounded-3">                                             
        <div class="table-responsive rounded-3">            
            <table class="table table-striped">
                <thead>
                    <tr style="background-color: rgb(0, 109, 128);color: white;">
                        <th>Transaction ID</th>
                        <th>Book</th>
                        <th>User</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Amount</th>
                        <th>Order Date</th>
                        <th>Delivery Date</th>
                        <th class="text-center">Status</th>
                    </tr>
                </thead>
                <tbody id="tbldta" >
                    @foreach($orders as $order)
                    <tr>
                        <td>{{$order->transaction_id}}</td>
                        <td> <a target="_blank" href="{{route('book_details',$order->book_id)}}"> {{$order->book_name}} </a></td>
                        <td>{{$order->order_name}}</td>
                        <td>{{$order->order_email}}</td>                        
                        <td>{{$order->order_phone}}</td>
                        <td>{{$order->order_address1}}</td>
                        <td>{{$order->order_amount}}</td>
                        <td>{{$order->order_date}}</td>
                        <td>{{$order->delivery_date}}</td>
                        <td>{{$order->delivery_status}}</td>
                       
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
            </div>
        </div>
    </div>
</div>
