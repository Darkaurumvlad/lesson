@extends('admin.layouts.main')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Список товаров</h1>
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
                        <a href="{{ route('admin.product.create') }}" class="btn btn-block btn-primary">Добавить</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-9">
                        <div class="card">
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                                <form action="">
                                    <input type="checkbox" name="sort" value="name_up">
                                    <label for="vehicle1">сортировать по наименованию по
                                        алфавиту</label><br>
                                    <input type="checkbox" name="sort" value="name_down">
                                    <label for="vehicle1">сортировать по наименованию с конца алфавита</label><br>
                                    <button type="submit">сортировать по наименованию</button>
                                </form>
                                <form action="">
                                    <input type="checkbox" name="sort" value="price_up">
                                    <label for="vehicle1">сортировать по цене по
                                        возрастанию</label><br>
                                    <input type="checkbox" name="sort" value="price_down">
                                    <label for="vehicle1">сортировать по цене по
                                        убыванию</label><br>
                                    <button type="submit">сортировать по цене</button>
                                </form>
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                    <tr>
                                        <th>название</th>
                                        <th>норма азота</th>
                                        <th>норма фосфора</th>
                                        <th>норма калия</th>
                                        <th>район</th>
                                        <th>культура</th>
                                        <th>цена</th>
                                        <th>описание</th>
                                        <th>назначение</th>
                                        <th colspan="3" class="text-center">действие</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($products as $product)
                                        <tr>
                                            <td>{{ $product->name }}</td>
                                            <td>{{ $product->norm_azot }}</td>
                                            <td>{{ $product->norm_fosfor }}</td>
                                            <td>{{ $product->norm_kaliy }}</td>
                                            <td>{{ $product->district }}</td>
                                            <td>{{ $product->culture->name }}</td>
                                            <td>{{ $product->price }}</td>
                                            <td>{{ $product->description }}</td>
                                            <td>{{ $product->function }}</td>
                                            <td class="text-center"><a
                                                    href="{{ route('admin.product.show', $product->id) }}"><i
                                                        class="nav-icon fas fa-eye"></i></a></td>
                                            <td class="text-center"><a
                                                    href="{{ route('admin.product.edit', $product->id) }}"
                                                    class="text-success"><i class="nav-icon fas fa-pen"></i></a></td>
                                            <td class="text-center">
                                                <form action="{{ route('admin.product.delete', $product->id) }}"
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
                                    {{ $products->withQueryString()->links() }}
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-2">
                        <form class="d-flex" action="{{ route('admin.product.index') }}">
                            <input class="form-control me-2" name="name" type="search" placeholder="Найти по названию"
                                   aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Поиск</button>
                        </form>
                    </div>
                    <div class="col-3">
                        <form class="d-flex" action="{{ route('admin.product.index') }} ">
                            <div class="card-body">
                                <div class="row">
                                    <div>
                                        <lable>норма азота</lable>
                                        <input type="text" name="norm_azot[]" class="form-control"
                                               placeholder="минимальная норма">
                                    </div>
                                    <div>
                                        <input type="text" name="norm_azot[]" class="form-control"
                                               placeholder="максимальная норма">
                                    </div>
                                    <button class="btn btn-outline-success" type="submit">Поиск</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-3">
                        <form class="d-flex" action="{{ route('admin.product.index') }} ">
                            <div class="card-body">
                                <div class="row">
                                    <div>
                                        <lable>норма фосфора</lable>
                                        <input type="text" name="norm_fosfor[]" class="form-control"
                                               placeholder="минимальная норма">
                                    </div>
                                    <div>
                                        <input type="text" name="norm_fosfor[]" class="form-control"
                                               placeholder="максимальная норма">
                                    </div>
                                    <button class="btn btn-outline-success" type="submit">Поиск</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-3">
                        <form class="d-flex" action="{{ route('admin.product.index') }} ">
                            <div class="card-body">
                                <div class="row">
                                    <div>
                                        <lable>норма калия</lable>
                                        <input type="text" name="norm_kaliy[]" class="form-control"
                                               placeholder="минимальная норма">
                                    </div>
                                    <div>
                                        <input type="text" name="norm_kaliy[]" class="form-control"
                                               placeholder="максимальная норма">
                                    </div>
                                    <button class="btn btn-outline-success" type="submit">Поиск</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="col-2">
                        <form class="d-flex" action="{{ route('admin.product.index') }}">
                            <input class="form-control me-2" name="district" type="search" placeholder="Найти по району"
                                   aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Поиск</button>
                        </form>
                    </div>
                    <div class="col-2">
                        <form class="d-flex" action="{{ route('admin.product.index') }}">
                            <div class="form-group">
                                <label>Культуры</label>
                                <select name="culture_id[]" class="select2" multiple="multiple"
                                        data-placeholder="Выберите тэги" style="width: 100%;">
                                    @foreach($cultures as $culture)
                                        <option value="{{ $culture->id }}">{{ $culture->name }}</option>
                                    @endforeach
                                </select>
                                <button class="btn btn-outline-success" type="submit">Поиск</button>
                                @error('culture_id')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </form>
                    </div>
                    <div class="col-3">
                        <form class="d-flex" action="{{ route('admin.product.index') }} ">
                            <div class="card-body">
                                <div class="row">
                                    <div>
                                        <lable>поиск по цене</lable>
                                        <input type="text" name="price[]" class="form-control"
                                               placeholder="минимальная цена">
                                    </div>
                                    <div>
                                        <input type="text" name="price[]" class="form-control"
                                               placeholder="максимальная цена">
                                    </div>
                                    <button class="btn btn-outline-success" type="submit">Поиск</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-2">
                        <form class="d-flex" action="{{ route('admin.product.index') }}">
                            <input class="form-control me-2" name="description" type="search"
                                   placeholder="Найти по описанию"
                                   aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Поиск</button>
                        </form>
                    </div>
                    <div class="col-2">
                        <form class="d-flex" action="{{ route('admin.product.index') }}">
                            <input class="form-control me-2" name="function" type="search"
                                   placeholder="Найти по назначению"
                                   aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Поиск</button>
                        </form>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
