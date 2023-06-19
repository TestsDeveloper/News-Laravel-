@extends("admin.layout.master")
@section("content")
<section class="content">
    <div class="container-fluid">
      <div class="row mt-4">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">
                <a href="{{ route("create#category") }}"><button class="btn btn-sm btn-outline-dark">Add Category</button></a>
              </h3>

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
                    <th>ID</th>
                    <th>New Category</th>
                    <th>Created Date</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>Gaming</td>
                    <td>11-7-2023</td>
                    <td>
                      <a href="./categoryUpdate.html"><button class="btn btn-sm bg-dark text-white"><i class="fas fa-edit"></i></button></a>
                      <button class="btn btn-sm bg-danger text-white"><i class="fas fa-trash-alt"></i></button>
                    </td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Health</td>
                    <td>11-7-2014</td>
                    <td>
                      <a href="./categoryUpdate.html"><button class="btn btn-sm bg-dark text-white"><i class="fas fa-edit"></i></button></a>
                      <button class="btn btn-sm bg-danger text-white"><i class="fas fa-trash-alt"></i></button>
                    </td>
                  </tr>
                   <tr>
                    <td>3</td>
                    <td>Business</td>
                    <td>11-7-2014</td>
                    <td>
                      <a href="./categoryUpdate.html"><button class="btn btn-sm bg-dark text-white"><i class="fas fa-edit"></i></button></a>
                      <button class="btn btn-sm bg-danger text-white"><i class="fas fa-trash-alt"></i></button>
                    </td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>Sing</td>
                    <td>11-7-2014</td>
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
