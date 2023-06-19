@extends('admin.layout.master')
@section("content")
<section class="content">
    <div class="container-fluid">
      <div class="row mt-4">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">User Contact</h3>

              <div class="card-tools">
                <div class="input-group input-group-sm" style="width: 150px;margin-top:1px;">
                  <input type="text" name="table_search" class="form-control float-right outline-none" placeholder="Search">
                    <button type="submit" class="btn btn-outline-dark outline-none">
                      <i class="fas fa-search"></i>
                    </button>
                </div>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
              <table class="table table-hover text-nowrap text-center">
                <thead>
                  <tr>
                    <th>Contact ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>aung thu hein</td>
                    <td>ahein8604@gmail.com</td>
                    <td>Yangon</td>
                    <td>
                      <button class="btn btn-sm bg-dark text-white"><i class="fas fa-edit"></i></button>
                      <button class="btn btn-sm bg-danger text-white"><i class="fas fa-trash-alt"></i></button>
                    </td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>aung thu hein</td>
                    <td>ahein8604@gmail.com</td>
                    <td>Yangon</td>
                    <td>
                      <button class="btn btn-sm bg-dark text-white"><i class="fas fa-edit"></i></button>
                      <button class="btn btn-sm bg-danger text-white"><i class="fas fa-trash-alt"></i></button>
                    </td>
                  </tr>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>aung thu hein</td>
                    <td>ahein8604@gmail.com</td>
                    <td>Yangon</td>
                    <td>
                      <button class="btn btn-sm bg-dark text-white"><i class="fas fa-edit"></i></button>
                      <button class="btn btn-sm bg-danger text-white"><i class="fas fa-trash-alt"></i></button>
                    </td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>aung thu hein</td>
                    <td>ahein8604@gmail.com</td>
                    <td>Yangon</td>
                    <td>
                      <button class="btn btn-sm bg-dark text-white"><i class="fas fa-edit"></i></button>
                      <button class="btn btn-sm bg-danger text-white"><i class="fas fa-trash-alt"></i></button>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>

    </div><!-- /.container-fluid -->
  </section>
@endsection
