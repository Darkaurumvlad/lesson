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
                        <form action="{{ route('admin.product.store') }}" method="POST" class="col-6">
                            @csrf
                            <div class="form-group">
                                <label>название товара</label>
                                <input type="text" class="form-control" name="name" placeholder="введите название">
                                @error('name')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>количество азота</label>
                                <input type="text" class="form-control" name="norm_azot" placeholder="введите количество">
                                @error('norm_azot')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>количество фосфора</label>
                                <input type="text" class="form-control" name="norm_fosfor" placeholder="введите количество">
                                @error('norm_fosfor')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>количество калия</label>
                                <input type="text" class="form-control" name="norm_kaliy" placeholder="введите количество">
                                @error('norm_kaliy')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="category">Culture</label>
                                <select class="form-control" name="culture_id">
                                    @foreach($cultures as $culture)
                                        <option
                                            {{ old('culture_id') == $culture->id ? 'selected' : '' }}

                                            value="{{ $culture->id }}">{{ $culture->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Район</label>
                                <input type="text" class="form-control" name="district" placeholder="введите район">
                                @error('district')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>цена товара</label>
                                <input type="text" class="form-control" name="price" placeholder="укажите цену">
                                @error('price')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="description">Описание товара</label>
                                <textarea name="description" class="form-control"
                                          placeholder="описание товара"></textarea>
                                @error('description')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Назначение</label>
                                <input type="text" class="form-control" name="function" placeholder="назначение">
                                @error('function')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
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
