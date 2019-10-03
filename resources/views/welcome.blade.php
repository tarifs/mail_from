<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Card Payment Information</title>

    {{--        Bootrap CSS--}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
   <div class="container-fluid">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-heading text-center"><h2><strong>Card Payment Information</strong></h2>
                    <h4 class="text-center text-success">{{Session::get('message')}}</h4>
                </div>
                <hr>
                <div class="card-body">

                    <form class="form-horizontal" method="post" action="{{ route('mail_sent') }}">
                        @csrf
                        <div class="form-group row{{ $errors->has('name_on_card') ? ' has-error' : '' }}">
                            <label for="name_on_card" class="col-md-2 col-from-label">Name on Card <span style="color: red"><b>*</b></span></label>

                            <div class="col-md-10">
                                <input id="name_on_card" type="text" class="form-control" name="name_on_card" value="{{ old('name_on_card') }}" required>

                                @if ($errors->has('name_on_card'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name_on_card') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-2 col-from-label">Email <span style="color: red"><b>*</b></span></label>

                            <div class="col-md-10">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row{{ $errors->has('address') ? ' has-error' : '' }}">
                            <label for="address" class="col-md-2 col-from-label">Address <span style="color: red"><b>*</b></span></label>

                            <div class="col-md-10">
                                <input id="address" type="text" class="form-control" name="address" value="{{ old('address') }}" required>

                                @if ($errors->has('address'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('address') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row{{ $errors->has('state') ? ' has-error' : '' }}">
                            <label for="state" class="col-md-2 col-from-label">State <span style="color: red"><b>*</b></span></label>

                            <div class="col-md-10">
                                <input id="state" type="text" class="form-control" name="state" value="{{ old('state') }}" required>

                                @if ($errors->has('state'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('state') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row{{ $errors->has('town_city') ? ' has-error' : '' }}">
                            <label for="town_city" class="col-md-2 col-from-label">Town/City <span style="color: red"><b>*</b></span></label>

                            <div class="col-md-10">
                                <input id="town_city" type="text" class="form-control" name="town_city" value="{{ old('town_city') }}" required>

                                @if ($errors->has('town_city'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('town_city') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row{{ $errors->has('zip') ? ' has-error' : '' }}">
                            <label for="zip" class="col-md-2 col-from-label">Zip <span style="color: red"><b>*</b></span></label>

                            <div class="col-md-10">
                                <input id="zip" type="text" class="form-control" name="zip" value="{{ old('zip') }}" required>

                                @if ($errors->has('zip'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('zip') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row{{ $errors->has('order_number') ? ' has-error' : '' }}">
                            <label for="order_number" class="col-md-2 col-from-label">Order Number <span style="color: red"><b>*</b></span></label>

                            <div class="col-md-10">
                                <input id="order_number" type="text" class="form-control" name="order_number" value="{{ old('order_number') }}" required>

                                @if ($errors->has('order_number'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('order_number') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row{{ $errors->has('card_number') ? ' has-error' : '' }}">
                            <label for="card_number" class="col-md-2 col-from-label">Card Number <span style="color: red"><b>*</b></span></label>

                            <div class="col-md-10">
                                <input id="card_number" type="text" class="form-control" name="card_number" value="{{ old('card_number') }}" required>

                                @if ($errors->has('card_number'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('card_number') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row{{ $errors->has('expire_date') ? ' has-error' : '' }}">
                            <label for="expire_date" class="col-md-2 col-from-label">Expire Date <span style="color: red"><b>*</b></span></label>

                            <div class="col-md-10">
                                <input id="expire_date" type="text" class="form-control" name="expire_date" value="{{ old('expire_date') }}" required>

                                @if ($errors->has('expire_date'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('expire_date') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row{{ $errors->has('cvv') ? ' has-error' : '' }}">
                            <label for="cvv" class="col-md-2 col-from-label">CVV <span style="color: red"><b>*</b></span></label>

                            <div class="col-md-10">
                                <input id="cvv" type="text" class="form-control" name="cvv" value="{{ old('cvv') }}" required>

                                @if ($errors->has('cvv'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('cvv') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row{{ $errors->has('amount') ? ' has-error' : '' }}">
                            <label for="amount" class="col-md-2 col-from-label">Amount <span style="color: red"><b>*</b></span></label>

                            <div class="col-md-10">
                                <input id="amount" type="text" class="form-control" name="amount" value="{{ old('amount') }}" required>

                                @if ($errors->has('amount'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('amount') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row{{ $errors->has('message') ? ' has-error' : '' }}">
                            <label for="message" class="col-md-2 col-from-label">Message</label>

                            <div class="col-md-10">
                                <textarea id="message" name="body_message" cols="60" rows="5" class="form-control"></textarea>

                                @if ($errors->has('message'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('message') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-md-2 col-from-label"></label>

                            <div class="col-md-10">
                                <input id="" name="submit" value="Submit" class="form-control btn btn-success" type="submit">
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
{{--    Bootrap JS--}}
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
