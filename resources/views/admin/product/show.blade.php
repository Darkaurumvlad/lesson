@extends('admin.layouts.main')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6 d-flex align-items-center">
                        <h1 class="m-0 mr-2">{{ $product->name }}</h1>
                        <a href="{{ route('admin.product.edit', $product->id) }}" class="text-success"><i class="nav-icon fas fa-pen"></i></a>
                        <form action="{{ route('admin.product.delete', $product->id) }}"
                              method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="border-0 bg-transparent">
                                <i class="nav-icon fas fa-trash-alt text-danger"
                                   role="button"></i>
                            </button>
                        </form>
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
                    <div class="col-9">
                        <div class="card">
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <tr>
                                        <td>Название</td>
                                        <td>{{ $product->name }}</td>
                                    </tr>
                                    <tr>
                                        <td>Содержание азота</td>
                                        <td>{{ $product->norm_azot }}</td>
                                    </tr>
                                    <tr>
                                        <td>Содержание фосфора</td>
                                        <td>{{ $product->norm_fosfor }}</td>
                                    </tr>
                                    <tr>
                                        <td>Содержание калия</td>
                                        <td>{{ $product->norm_kaliy }}</td>
                                    </tr>
                                    <tr>
                                        <td>Культура</td>
                                        <td>{{ $product->culture->name }}</td>
                                    </tr>
                                    <tr>
                                        <td>Район</td>
                                        <td>{{ $product->district }}</td>
                                    </tr>
                                    <tr>
                                        <td>Цена</td>
                                        <td>{{ $product->price }}</td>
                                    </tr>
                                    <tr>
                                        <td>Описание</td>
                                        <td>{{ $product->description }}</td>
                                    </tr>
                                    <tr>
                                        <td>Назначение</td>
                                        <td>{{ $product->function }}</td>
                                    </tr>
                                    </tbody>
                                </table>
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
