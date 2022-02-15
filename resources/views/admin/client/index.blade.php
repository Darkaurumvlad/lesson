@extends('admin.layouts.main')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Список клиентов</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard v1</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-1 mb-3">
                        <a href="{{ route('admin.client.create') }}" class="btn btn-block btn-primary">Добавить</a>
                    </div>
                    <form class="d-flex" action="{{ route('admin.client.index') }}">
                        <input class="form-control me-2" name="name" type="search" placeholder="Найти по имени" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Поиск</button>
                    </form>
                </div>
                <div class="row">
                    <div class="col-9">
                        <div class="card">
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                    <tr>
                                        <th>Имя клиента</th>
                                        <th>Дата регистрации</th>
                                        <th>Стоимость поставки</th>
                                        <th>Регион</th>
                                        <th colspan="3" class="text-center">действие</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($clients as $client)
                                        <tr>
                                            <td>{{ $client->name }}</td>
                                            <td>{{ $client->agreement_date }}</td>
                                            <td>{{ $client->delivery_cost }}</td>
                                            <td>{{ $client->region }}</td>

                                            <td class="text-center"><a href="{{ route('admin.client.show', $client->id) }}"><i
                                                        class="nav-icon fas fa-eye"></i></a></td>
                                            <td class="text-center"><a href="{{ route('admin.client.edit', $client->id) }}"
                                                   class="text-success"><i class="nav-icon fas fa-pen"></i></a></td>
                                            <td class="text-center">
                                                <form action="{{ route('admin.client.delete', $client->id) }}"
                                                      method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="border-0 bg-transparent">
                                                        <i class="nav-icon fas fa-trash-alt text-danger"
                                                           role="button"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                <div class="row mt-3">
                                    {{ $clients->links() }}
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
