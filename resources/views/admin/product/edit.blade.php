@extends('admin.layouts.main')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Обновление товара</h1>
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
                        @if(session('success'))
                            <div class="alert alert-danger alert-dismissible fade show col-2" role="alert">
                                {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                        <form action="{{ route('admin.product.update', $product->id) }}" method="POST" class="col-6">
                            @csrf
                            @method('PATCH')
                            <div class="form-group">
                                <label>название товара</label>
                                <input type="text" class="form-control" name="name" placeholder="введите название"
                                       value="{{ $product->name }}">
                                @error('name')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>количество азота</label>
                                <input type="text" class="form-control" name="norm_azot"
                                       placeholder="введите количество"
                                       value="{{ $product->norm_azot }}">
                                @error('norm_azot')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>количество фосфора</label>
                                <input type="text" class="form-control" name="norm_fosfor"
                                       placeholder="введите количество"
                                       value="{{ $product->norm_fosfor }}">
                                @error('norm_fosfor')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>количество калия</label>
                                <input type="text" class="form-control" name="norm_kaliy"
                                       placeholder="введите количество"
                                       value="{{ $product->norm_kaliy }}">
                                @error('norm_kaliy')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div>

                            </div>
                            <div class="form-group">
                                <label>Район</label>
                                <input type="text" class="form-control" name="district"
                                       placeholder="введите название культуры"
                                       value="{{ $product->district }}">
                                @error('district')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>цена товара</label>
                                <input type="text" class="form-control" name="price" placeholder="укажите цену"
                                       value="{{ $product->price }}">
                                @error('price')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="category">Культура</label>
                                <select class="form-control" id="culture" name="culture_id">
                                    @foreach($cultures as $culture)
                                        @if($culture->id == $product->culture_id)
                                            <option value=""></option>
                                        @else
                                        <option
{{--                                                {{ $culture->id == $product->culture_id ? "selected" : "" }}--}}
                                            value="{{ $culture->id }}">{{ $culture->name }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="description">описание товара</label>
                                <textarea name="description" class="form-control" id="description"
                                          placeholder="описание товара">{{ $product->description }}</textarea>
                                @error('description')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>назначение товара</label>
                                <input type="text" class="form-control" name="function" placeholder="назначение"
                                       value="{{ $product->function }}">
                                @error('function')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <input type="submit" class="btn btn-primary" value="Обновить">
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
