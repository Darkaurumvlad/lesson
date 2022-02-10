@extends('admin.layouts.main')

@section('content')
    <div class="card">
        <!-- /.card-header -->
        <div class="card-body col-4">
            <table class="table table-bordered text-right">
                <thead>
                <tr>
                    <th>Удобрения</th>
                    @foreach($products as $product)
                        <th><a href="{{ route('admin.archive.product', $product->id) }}">{{ $product->id }}</a></th>
                    @endforeach
                </tr>
                <tr>
                    <th>Клиенты</th>
                    @foreach($clients as $client)
                        <th><a href="{{ route('admin.archive.client', $client->id) }}">{{ $client->id }}</a></th>
                    @endforeach
                </tr>
                <tr>
                    <th>Культуры</th>
                    @foreach($cultures as $culture)
                        <th><a href="{{ route('admin.archive.culture', $culture->id) }}">{{ $culture->id }}</a></th>
                    @endforeach
                </tr>
                <tr>
                    <th>Пользователи</th>
                    @foreach($users as $user)
                        <th><a href="{{ route('admin.archive.user', $user->id) }}">{{ $user->id }}</a></th>
                    @endforeach
                </tr>
                </thead>

            </table>
        </div>

    </div>
@endsection
