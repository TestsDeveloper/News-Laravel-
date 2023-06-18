@extends('admin.layout.master')
@section("content")
<section class="content">
    <div class="container-fluid">
      <div class="row mt-4">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">
                <a href="./addNews.html"><button class="btn btn-sm btn-outline-dark">Add News</button></a>
              </h3>

              <div class="card-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                  <div class="input-group-append">
                    <button type="submit" class="btn btn-default">
                      <i class="fas fa-search"></i>
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
              <table class="table table-hover text-nowrap text-center">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Image</th>
                    <th>Viewer</th>
                    <th>React</th>
                    <th>Post Date</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>The Singer</td>
                    <td>
                      <img src="https://www.pinkvilla.com/pics/480x480/167366856_ariana-grande-1_1280*720_202301.jpg" class="img-thumbnail" width="100px">
                    </td>
                    <td>1.1k</td>
                    <td>1k</td>
                    <td>17/6/2023</td>
                    <td>
                      <a href="./newsEdit.html"><button class="btn btn-sm bg-dark text-white" ><i class="fas fa-edit"></i></button></a>
                      <button class="btn btn-sm bg-danger text-white"><i class="fas fa-trash-alt"></i></button>
                    </td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>The Rumbling</td>
                    <td>
                       <img src="https://www.billboard.com/wp-content/uploads/2022/01/02-Attack-on-Titan-The-Final-Season-Part-2-Opening%EF%BD%9CThe-Rumbling-SiM-screenshot-2022-billbooard-1548.jpg" class="img-thumbnail" width="100px">
                    </td>
                    <td>50k</td>
                    <td>2.5k</td>
                    <td>17/6/2023</td>
                    <td>
                      <a href="./newsEdit.html"><button class="btn btn-sm bg-dark text-white" ><i class="fas fa-edit"></i></button></a>
                      <button class="btn btn-sm bg-danger text-white"><i class="fas fa-trash-alt"></i></button>
                    </td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>Weather</td>
                    <td>
                       <img src="https://t4.ftcdn.net/jpg/02/66/38/15/360_F_266381525_alVrbw15u5EjhIpoqqa1eI5ghSf7hpz7.jpg" class="img-thumbnail" width="100px">
                    </td>
                    <td>600k</td>
                    <td>69.4k</td>
                    <td>17/6/2023</td>
                    <td>
                      <a href="./newsEdit.html"><button class="btn btn-sm bg-dark text-white" ><i class="fas fa-edit"></i></button></a>
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
