@extends('admin.layouts.main')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Добавление товара</h1>
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
                    <div class="col-12">
                        <form action="{{ route('admin.fertilizer.store') }}" method="POST" class="col-6">
                            @csrf
                            <div class="form-group">
                                <label>название товара</label>
                                <input type="text" class="form-control" name="name" placeholder="введите название">
                            </div>
                            <div class="form-group">
                                <label for="description">описание товара</label>
                                <textarea name="description" class="form-control" id="description"
                                          placeholder="описание товара">{{ old('description') }}</textarea>
                            </div>
                            <div class="form-group">
                                <label>цена товара</label>
                                <input type="text" class="form-control" name="price" placeholder="укажите цену">
                            </div>
                            <div class="form-group">
                                <label>изображение</label>
                                <input type="text" class="form-control" name="image" placeholder=" добавьте изображение">
                            </div>
                            <input type="submit" class="btn btn-primary" value="Добавить">
                        </form>
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
