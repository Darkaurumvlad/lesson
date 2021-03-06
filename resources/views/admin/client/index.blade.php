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
                </div>
                <div class="row">
                    <div class="col-9">
                        <div class="card">
                            <form>
                                <input type="checkbox" name="sort" value="name_up" id="sort1">
                                <label for="sort1">сортировать по имени по
                                    алфавиту</label><br>
                                <input type="checkbox" name="sort" value="name_down" id="sort2">
                                <label for="sort2">сортировать по имени с конца алфавита</label><br>
                                <input type="checkbox" name="sort" value="delivery_cost_up" id="sort3">
                                <label for="sort3">сортировать по стоимости поставки по
                                    возрастанию</label><br>
                                <input type="checkbox" name="sort" value="delivery_cost_down" id="sort4">
                                <label for="sort4">сортировать по
                                    стоимости поставки по убыванию</label><br>
                                <button class="btn btn-outline-success" type="submit">Сортировать</button>
                            </form>
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

                                            <td class="text-center"><a
                                                    href="{{ route('admin.client.show', $client->id) }}"><i
                                                        class="nav-icon fas fa-eye"></i></a></td>
                                            <td class="text-center"><a
                                                    href="{{ route('admin.client.edit', $client->id) }}"
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
                                    {{ $clients->withQueryString()->links() }}
                                </div>
                            </div>
                            <div class="row col-12">
                                <form>
                                    <input type="text" name="region" placeholder="Найти по региону">
                                    <input type="text" name="agreement_date" placeholder="Найти по дате регистрации">
                                    <input type="text" name="name" placeholder="Найти по имени">
                                    <input type="text" name="delivery_cost[]" class="form-control"
                                           placeholder="минимальная цена">
                                    <input type="text" name="delivery_cost[]" class="form-control"
                                           placeholder="максимальная цена">
                                    <button class="btn btn-outline-success" type="submit">Поиск</button>
                                </form>
                                {{--                                <form>--}}
                                {{--                                <input type="text" name="delivery_cost[]" class="form-control"--}}
                                {{--                                       placeholder="минимальная цена">--}}
                                {{--                                <input type="text" name="delivery_cost[]" class="form-control"--}}
                                {{--                                       placeholder="максимальная цена">--}}
                                {{--                                </form>--}}
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
