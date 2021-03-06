@extends('admin.templates.index')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2 mt-4">
          <div class="col-12">
            <h1 class="m-0 text-dark">
                <a class="nav-link drawer" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
                دسته بندی ها
                <a class="btn btn-primary float-left text-white py-2 px-4" href="{{ route('category.create')}}">افزودن دسته بندی جدید</a>
            </h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
          <div class="row">
              <div class="col-12">
                  <div class="card">
                      <div class="card-header">
                          <div class="row mt-5">
                            <div class="col-md-12">
                                @if (session('success'))
                                    <div class="alert alert-success">{{ session('success') }}</div>
                                @endif
                            </div>
                          </div>
                          <h3 class="card-title">لیست دسته بندی ها</h3>

                          <div class="card-tools">
                              <div class="input-group input-group-sm" style="width: 150px;">
                                  <input type="text" name="table_search" class="form-control float-right" placeholder="جستجو">

                                  <div class="input-group-append">
                                      <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <!-- /.card-header -->
                      <div class="table table-striped table-valign-middle mb-0">
                          <table class="table table-hover mb-0">
                              <tbody><tr>
                                  <th>نامک</th>
                                  <th>عنوان</th>
                                  <th>تاریخ ایجاد</th>
                                  <th>عملیات</th>
                              </tr>
                              @foreach ($categories as $category )
                              <tr>
                                <td>{{ $category->slug }}</td>
                                <td>{{ $category->title }}</td>
                                <td>{{ $category->created_at }}</td>
                                <td class="">
                                    <a href="{{ route('category.edit',$category->id) }}" class="btn btn-default btn-icons"><i class="fa fa-edit"></i></a>
                                    <form action="{{ route('category.destroy',$category->id) }}" method="post" style="display: inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-default btn-icons"><i class="fa fa-trash"></i></button>
                                    </form>
                                </td>
                              </tr>
                              @endforeach
                              </tbody>
                            </table>
                      </div>
                      <!-- /.card-body -->
                  </div>
                  <!-- /.card -->
                  <div class="d-flex justify-content-center">
                      {{ $categories->links()}}
                  </div>
              </div>
          </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection
