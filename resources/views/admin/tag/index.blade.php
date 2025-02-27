@extends('admin.layouts.main')
@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Теги</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.main.index') }}">Главная</a></li>
                            <li class="breadcrumb-item active">Теги</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="col-12">
                </div>

                    <div class="card">
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Название</th>
                                    <th colspan="3" class="text-center">Действие</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($tag as $tag2)
                                    <tr>
                                        <td>{{ $tag2->id }}</td>
                                        <td>
                                            <p class="text-wrap">{{ $tag2->title }}</p>
                                        </td>
                                        <td><a href="{{ route('admin.tag.show', $tag2->id) }}"> <i class="fas fa-eye"></i> </a></td>
                                        <td><a href="{{ route('admin.tag.edit', $tag2->id) }}"
                                               class="text-success"> <i class="fas fa-pencil-alt"> </i> </a></td>
                                        <td>
                                            <form action="{{ route('admin.tag.delete', $tag2->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="border-0 bg-transparent text-danger">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>

                    <!-- Small boxes (Stat box) -->
                    <div class="row pb-2">
                        <div class="col-2">
                            <a href="{{ route ('admin.tag.create') }}" class="btn btn-block btn-primary">Добавить</a>
                        </div>
                    </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
