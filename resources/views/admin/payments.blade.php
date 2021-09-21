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
                پرداخت ها</h1>
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
                          <h3 class="card-title">لیست پرداخت ها</h3>

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
                              <tbody>
                              <tr>
                                  <th>تاریخ</th>
                                  <th>قیمت</th>
                                  <th>آیدی سفارش</th>
                                  <th>کاربر</th>
                                  <th>درگاه پرداخت</th>
                                  <th>تراکنش</th>
                                  <th>کد رهگیری</th>
                              </tr>
                              <tr>
                                  <td>۲۵ مرداد ۱۴۰۰</td>
                                  <td>۲۳۰۰۰ تومان</td>
                                  <td>۲۱</td>
                                  <td>میلاد بسحاق</td>
                                  <td>
                                      ملت
                                  </td>
                                  <td>
                                      <span class="badge bg-success">موفق</span>
                                  </td>
                                  <td>۵۸۸۴۸۳۹۹۹۰۲</td>
                              </tr>
                              <tr>
                                  <td>۲۵ مرداد ۱۴۰۰</td>
                                  <td>۲۳۰۰۰ تومان</td>
                                  <td>۲۱</td>
                                  <td>میلاد بسحاق</td>
                                  <td>
                                      ملت
                                  </td>
                                  <td>
                                      <span class="badge bg-success">موفق</span>
                                  </td>
                                  <td>۵۸۸۴۸۳۹۹۹۰۲</td>
                              </tr>
                              <tr>
                                  <td>۲۵ مرداد ۱۴۰۰</td>
                                  <td>۲۳۰۰۰ تومان</td>
                                  <td>۲۱</td>
                                  <td>میلاد بسحاق</td>
                                  <td>
                                      ملت
                                  </td>
                                  <td>
                                      <span class="badge bg-success">موفق</span>
                                  </td>
                                  <td>۵۸۸۴۸۳۹۹۹۰۲</td>
                              </tr>
                              <tr>
                                  <td>۲۵ مرداد ۱۴۰۰</td>
                                  <td>۲۳۰۰۰ تومان</td>
                                  <td>۲۱</td>
                                  <td>میلاد بسحاق</td>
                                  <td>
                                      ملت
                                  </td>
                                  <td>
                                      <span class="badge bg-success">موفق</span>
                                  </td>
                                  <td>۵۸۸۴۸۳۹۹۹۰۲</td>
                              </tr>
                              <tr>
                                  <td>۲۵ مرداد ۱۴۰۰</td>
                                  <td>۲۳۰۰۰ تومان</td>
                                  <td>۲۱</td>
                                  <td>میلاد بسحاق</td>
                                  <td>
                                      ملت
                                  </td>
                                  <td>
                                      <span class="badge bg-success">موفق</span>
                                  </td>
                                  <td>۵۸۸۴۸۳۹۹۹۰۲</td>
                              </tr>
                              <tr>
                                  <td>۲۵ مرداد ۱۴۰۰</td>
                                  <td>۲۳۰۰۰ تومان</td>
                                  <td>۲۱</td>
                                  <td>میلاد بسحاق</td>
                                  <td>
                                      ملت
                                  </td>
                                  <td>
                                      <span class="badge bg-success">موفق</span>
                                  </td>
                                  <td>۵۸۸۴۸۳۹۹۹۰۲</td>
                              </tr>
                              <tr>
                                  <td>۲۵ مرداد ۱۴۰۰</td>
                                  <td>۲۳۰۰۰ تومان</td>
                                  <td>۲۱</td>
                                  <td>میلاد بسحاق</td>
                                  <td>
                                      ملت
                                  </td>
                                  <td>
                                      <span class="badge bg-success">موفق</span>
                                  </td>
                                  <td>۵۸۸۴۸۳۹۹۹۰۲</td>
                              </tr>
                              </tbody></table>
                      </div>
                      <!-- /.card-body -->
                  </div>
                  <!-- /.card -->
                  <div class="d-flex justify-content-center">
                      <ul class="pagination mt-3">
                          <li class="page-item"><a class="page-link" href="#">«</a></li>
                          <li class="page-item"><a class="page-link" href="#">۱</a></li>
                          <li class="page-item"><a class="page-link" href="#">۲</a></li>
                          <li class="page-item"><a class="page-link" href="#">۳</a></li>
                          <li class="page-item"><a class="page-link" href="#">»</a></li>
                      </ul>
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
