@extends('master')
@section('content')
    <div class="custom-product">
        <div class="container">
            <div class="row">
                <div class="col-sm-10">
                    <table class="table">
                        <tbody>
                        <tr>
                            <td>Amount</td>
                            <td> = {{ $totalmoney }} Taka</td>
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
                            <td>= {{$totalmoney+60}} Taka</td>
                        </tr>
                        </tbody>
                    </table>
                    <div>
                        <form action="/orderplace" method="POST">
                            @csrf
                            <div class="form-group">
                                <lable>Type Your Address</lable>
                                <textarea name="address" placeholder="Enter your address"
                                          class="form-control @error('address') is-invalid @enderror"> </textarea>
                                @error('address')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>


                            <h5 class=" mt-5">Select payment Method:</h5>
                            <ul class="list-group mb-3">
                                <li class="list-group-item">
                                    <label>
                                        <input type="radio" value="online" name="payment">
                                        Online payment
                                    </label>
                                </li>
                                <li class="list-group-item">
                                    <label>
                                        <input type="radio" value="bkash" name="payment">
                                        Bkash payment
                                    </label>
                                </li>
                                <li class="list-group-item">
                                    <label>
                                        <input type="radio" value="cash_on_delivery" name="payment">
                                        Cash on delivery
                                    </label>
                                </li>
                            </ul>
                            <button type="submit" class="btn btn-primary">Order Now</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
