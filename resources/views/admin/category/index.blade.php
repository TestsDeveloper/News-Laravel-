@extends("admin.layout.master")
@section("content")
<section class="content">
    <div class="container-fluid">
      <div class="row mt-4">
        @if (session("insertSuccess"))

            <div class="alert alert-success alert-dismissible fade show">
            <strong> {{session("insertSuccess")}} </strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert">
                <span>&times;</span>
            </button>
            </div>
        @endif

        @if (session("deleteSuccess"))

            <div class="alert alert-danger alert-dismissible fade show">
            <strong> {{session("deleteSuccess")}} </strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert">
                <span>&times;</span>
            </button>
            </div>
        @endif

        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">
                <a href="{{ route("create#category") }}"><button class="btn btn-sm btn-outline-dark">Add Category</button></a>
              </h3>

              <div class="card-tools">
                <div class="input-group input-group-sm" style="width: 150px;margin-top:1px;">
                    <form action="{{route('category#list')}}" method="get" class="input-group input-group-sm">
                        @csrf
                        <input type="text" name="key" class="form-control float-right outline-none" placeholder="search" value="{{ request('key')}}">
                        <button class="btn btn-outline-dark outline-none" type="submit">
                        <i class="fas fa-search"></i>
                    </form>
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
                  @foreach ( $categories as $item )
                    <tr>
                        <td>{{ $tiem->id }}</td>
                        <td>{{ $item->category_name }}</td>
                        <td>{{ $item->created_at->diffForHumans() }}</td>
                        <td>
                        <a href="{{ route('updatePage#category', $item['id']) }}" class="btn btn-sm bg-dark text-white"><i class="fas fa-edit"></i></a>
                        <a href="{{ route('delete#category', $item['id']) }}" class="btn btn-sm bg-danger text-white"><i class="fas fa-trash-alt"></i></a>
                        </td>
                    </tr>
                  @endforeach
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
