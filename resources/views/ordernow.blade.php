@extends('master');
@section('content');
<div class="custom-product">

    <div class="col-sm-10">
        <table class="table">

            <tbody>
            <tr>
                <td>Amount</td>
                <td>= {{$totalmoney}} Taka</td>

            </tr>
            <tr>
                <td>Tax</td>
                <td>= 0 Taka</td>

            </tr>
            <tr>
                <td>Delivery Charge</td>
                <td> = 60 Taka</td>

            </tr>
            <tr>
                <td>Total Ammount</td>
                <td>= {{$totalmoney+60}} Taka </td>

            </tr>
            </tbody>
        </table>
        <div>
            <form action="/orderplace" method="POST">
                @csrf
                <div class="form-group">
                     <lable>Type Your Address</lable>
                    <textarea name="address"   placeholder="Enter your address" class="form-control" > </textarea>
                </div>
                <div class="form-group">
                    <label for="pwd">Payment Method:</label> <br> <br>
                    <input type="radio"  value="cash" name="payment"><span>Online payment</span> <br> <br>
                    <input type="radio" value="cash"  name="payment"><span>Bikash payment</span> <br> <br>
                    <input type="radio" value="cash"  name="payment"><span>Cash On Delivery</span> <br>
                </div>

                <button type="submit" class="btn btn-primary">Order Now</button>
            </form>
        </div>

    </div>
</div>

@endsection
