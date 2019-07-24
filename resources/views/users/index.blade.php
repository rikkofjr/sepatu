@extends('layouts.argon')
@section('title')
    User
@endsection
@section('dynamic-script')
<link rel="stylesheet" type="text/css" href="{{ asset('css/lib/datatable/jquery.dataTables.css') }}">
<script type="text/javascript" charset="utf8" src="{{ asset('js/jquery.dataTables.js') }}"></script>


@endsection
@section('content')
{{-- jika memiliki data lebih dari satu --}}
@if(count($users) > 0)
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h1 class="text-gray">User</h1>
            </div>
            <div class="card-body">
            <div class="table-responsive">
                 <!-- Projects table -->
                <table class="table align-items-center table-flush" id="judultable">
                    <thead class="thead-light">
                    <tr>
                        <th scope="col">Username</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Email</th>
                        <th scope="col">Role</th>
                        <th scope="col">Tanggal Masuk</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $usr)
                        <tr>
                            <td><a href="{{ route ('users.edit',['ordr' => $usr->id]) }}">{{$usr->username}}</a></td><td>{{$usr->name}}</td>
                            <td>
                                {{$usr->email}}<br/>
                            </td>
                            <td>
                                @if(!empty($usr->getRoleNames()))
                                    @foreach($usr->getRoleNames() as $v)
                                    <label class="badge badge-success">{{ $v }}</label>
                                    @endforeach
                                @endif
                            </td>
                            <td>{{$usr->created_at->format('d/m/Y | H:i')}}</td>
                            
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                </div>
            </div>
            <div class="card-footer">
            
            </div>
        </div>
    </div>
    <script>
    $(document).ready( function () {
        $('#judultable').DataTable({
            "autoWidth" :false,
            "lengthMenu": [[5, 10, 25, 50, -1], [5, 10, 25, 50, "All"]]
        });    
    } );
</script>

<script type="text/javascript">
     function confirmUpdate() {
        return confirm('Are you sure you want to delete?');
     }
</script>
@endif
{{-- endof - jika memiliki data lebih dari satu --}}
@endsection