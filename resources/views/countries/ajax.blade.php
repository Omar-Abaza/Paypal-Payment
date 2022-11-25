@extends('layouts.app')

@section('styles')
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Countries</div>

                    <div class="panel-body">
                        <table class="table" id="counties-table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Country name</th>
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
            $('#counties-table').DataTable({
                "processing": true,
                "serverSide": true,
                "ajax": "{{ route('get.countries.list') }}",
                "columns": [
                    { "data": "id" },
                    { "data": "country_name" },
                ]
            });
        });
    </script>
@endsection
