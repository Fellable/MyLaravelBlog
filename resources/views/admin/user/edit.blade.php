@extends('admin.layouts.main')
@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Редактирование пользователя</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Добавление пользователя</li>
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
                        <form action=" {{ route('admin.user.update',  $user->id ) }}" method="POST" class="col-4">
                            @csrf
                            @method('PATCH')
                            <div class="form-choup">
                                <label> Название</label>
                                <input type="text" name="name" class="form-control" placeholder="Имя"
                                       value="{{ $user->name }}">
                            </div>
                            @error('name')
                            <div class="text-danger"> {{ $message }}</div>
                            @enderror

                            <label> Email</label>
                            <input type="text" name="email" class="form-control" placeholder="Имейл пользователя"
                                   value="{{ $user->email }}">

                    @error('email')
                    <div class="text-danger">  {{ $message }}</div>
                    @enderror

                    <div class="form-group w-50">
                        <lable> Выберите роль</lable>
                        <select name="role" class="form-control">
                            @foreach ($roles as $id => $role)
                                <option value="{{ $id }}"
                                    {{ $id == $user->role ? 'selected' : ' '}}
                                > {{ $role }} </option>
                            @endforeach
                        </select>
                    </div>


                    <input type="submit" class="btn btn-primary" value="Обновить">
                    </form>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection
