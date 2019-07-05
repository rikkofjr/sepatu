<!DOCTYPE html>

<html>

<head>

    <title>Laravel 5.8 Datatables Tutorial - ItSolutionStuff.com</title>

    <meta name="csrf-token" content="{{ csrf_token() }}">

    

    <link href="{{ asset('argon/vendor/nucleo/css/nucleo.css') }}" rel="stylesheet">
    <link href="{{ asset('argon/css/argon.css?v=1.0.0') }}" rel="stylesheet">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script type="text/javascript" charset="utf8" src="{{ asset('js/jquery.dataTables.js') }}"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/lib/datatable/jquery.dataTables.css') }}">

</head>

<body>

    

<div class="container">

    <h1>Laravel 5.8 Datatables Tutorial <br/> HDTuto.com</h1>

    <table class="table table-bordered data-table">

        <thead>

            <tr>

                <th>Atas Nama</th>

                <th name="kode">Kodenya</th>

                <th name="nohp">Nomor Handphone</th>
                <th name="status">Status</th>

            </tr>

        </thead>

        <tbody>

        </tbody>

    </table>

</div>

   

</body>

   

<script type="text/javascript">

  $(function () {

    

    var table = $('.data-table').DataTable({

        processing: true,

        serverSide: true,

        ajax: "{{ route('jsonOrder') }}",

        columns: [

            {data: 'atas_nama', name: 'atas_nama'},

            {data: 'kode', name: 'kode'},
            {data: 'nohp', name: 'nohp'},
            {data: 'nama_status', name: 'status'},

        ]

    });

    

  });

</script>
    <script src="{{asset ('argon/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset ('argon/vendor/chart.js/dist/Chart.min.js')}}"></script>
    <script src="{{asset ('argon/js/argon.js?v=1.0.0')}}"></script>
</html>