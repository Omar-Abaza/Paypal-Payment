@extends('layouts.app')

@section('styles')
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Transactions</div>

                    <div class="panel-body">
                        <table class="table" id="paypal_paymet">
                            <thead>
                                <tr>
                                    <th>payment_id</th>
                                    <th>amount</th>
                                    <th>currency</th>
                                    <th>created_at</th>
                                    <th>payment_status</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('javascripts')
    <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready( function () {
            $('#paypal_paymet').DataTable({
                "processing": true,
                "serverSide": true,
                "ajax": "{{ route('getTransactions') }}",
                "columns": [
                    { "data": "payment_id" },
                    { "data": "amount" },
                    { "data": "currency" },
                    { "data": "created_at" },
                    { "data": "payment_status" }
                ]
            });
        });
    </script>
@endsection
