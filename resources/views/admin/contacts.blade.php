@extends('admin.layouts.main')
@section('content')
    <h1 class="h3 mb-2 text-gray-800">Order Contacts</h1>
    <div class="card shadow mb-4">
        @if (session('msg'))
            <span class=" mt-2 alert alert-danger"> {{ session('msg') }} </span>
        @endif

        <div class="card-header py-3">
      
        <h6 class="m-0 font-weight-bold text-primary">Order Contacts</h6>
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Service</th>
                    <th>Message</th>
                </tr>
                </thead>
                <tbody>
                    <?php $i=0; ?>
                @foreach ($contacts as $contact)
                <?php $i++; ?>
                <tr>
                    <td> {{$i}} </td>
                    <td>{{ $contact->name }}</td>
                    <td>{{ $contact->email }}</td>
                    <td>{{ $contact->service }}</td>
                    <td>{{ $contact->message }}</td>
                   
                </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    </div>
@endsection