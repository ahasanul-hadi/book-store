@if($order->status =='Complete')         
      <h2 style="text-align:center;color:green;">Your payment is successfull</h2><br><br>
      
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
    <div class="row">
        <div class="well col-xs-10 col-sm-10 col-md-6 col-xs-offset-1 col-sm-offset-1 col-md-offset-3">
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <address>
                        <strong>Hearts Medi Study</strong>
                        <br>
                        heartsmedistudy@gmail.com
                        <br>
                        <abbr title="Phone">P:</abbr>  +8801761319100
                    </address>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 text-right">
                    <p>
                        <em>Date: {{ date('Y-m-d H:i:s') }}</em>
                    </p>
                    <p>
                        <em >Transaction ID #:<strong style="color:red;"> {{$order->transaction_id}} </strong></em>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="text-center">
                    <h1>Receipt</h1>
                </div>
                </span>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Book</th>
                            <th>#</th>
                            <th class="text-center">Price</th>
                            <th class="text-center">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="col-md-9"><em>{{$book->book_name}}</em></h4></td>
                            <td class="col-md-1" style="text-align: center"> 1 </td>
                            <td class="col-md-1 text-center">{{$book->book_sale_price}}</td>
                            <td class="col-md-1 text-center">{{$book->book_sale_price}}</td>
                        </tr>
                        
                        <tr>
                            <td class="col-md-9"><em>Delivery Charge</em></h4></td>
                            <td class="col-md-1" style="text-align: center">  </td>
                            <td class="col-md-1 text-center">{{$order->delivery_charge}}</td>
                            <td class="col-md-1 text-center">{{$order->delivery_charge}}</td>
                        </tr>
                       
                        <tr>
                            <td>   </td>
                            <td>   </td>
                            <td class="text-right">
                            <p>
                                <strong>Subtotal: </strong>
                            </p>
                            <p>
                                <strong>Tax: </strong>
                            </p></td>
                            <td class="text-center">
                            <p>
                                <strong>{{$order->amount}}</strong>
                            </p>
                            <p>
                                <strong>0.00</strong>
                            </p></td>
                        </tr>
                        <tr>
                            <td>   </td>
                            <td>   </td>
                            <td class="text-right"><h4><strong>Total: </strong></h4></td>
                            <td class="text-center text-danger"><h4><strong>{{$order->amount}}</strong></h4></td>
                        </tr>
                    </tbody>
                </table>
                
            </div>
        </div>
    </div>


@elseif($order->status =='Canceled')
    <br><br><h1 style="text-align:center;color:red;">Your payment is Canceled.</h1><br><br>

@elseif($order->status =='Failed')
    <br><br><h1 style="text-align:center;color:red;">Your payment was failed. Please retry after some time</h1><br><br>

@else 

<br><br><h1 style="text-align:center;color:red;">Invalid Transaction</h1><br><br>

@endif