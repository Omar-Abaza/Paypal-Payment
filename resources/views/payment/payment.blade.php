<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
</head>

<body>
    <div class="container">
        <div class="row" style="margin-top: 45px">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">Add Your Payment</div>
                    <div class="card-body">
                        <form action="{{ url('charge') }}" method="post">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="">Payment</label>
                                <input type="text" class="form-control" name="amount"
                                    placeholder="Enter your payment">
                                <span class="text-danger error-text"></span>
                            </div>
                            <div class="form-group">
                                <input type="submit" name="submit" class="btn btn-block btn-success" value="Pay Now">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>

</html>
