@extends('admin.layout.master')
@section("content")
<section class="content row">
    @if (session('deleteSuccess'))
    <div class="col-5 offset-7 mt-3">
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>
                 <i class="fa-solid fa-check"></i> {{session('deleteSuccess')}} 
            </strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
    </div>
    @endif

    @if (session('updateSuccess'))
    <div class="col-5 offset-7 mt-3">
        <div class="alert alert-success  alert-dismissible fade show" role="alert">
            <strong>
                 <i class="fa-solid fa-check"></i> {{session('updateSuccess')}}
            </strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
    </div>
    @endif

    <div class="container-fluid">
    
      <div class="row mt-3">
        <div class="col-12">
        
          <div class="card">
            <div class="card-header">
              <h3 class="card-title d-flex align-items-center">
                <a href="{{ route('news#createPostPage') }}"><button class="btn btn-sm btn-outline-dark">Add News</button></a>
                <button class="btn btn-sm btn-dark ms-2" disabled>Total - {{ count($posts) }}</button>
              </h3>

              <div class="card-tools">

                <form action="{{route('new#postList')}}" method ="get">
                    @csrf
                    <div class="d-flex input-group-sm" >
                        <input name="key" type="text" class="form-control " name="searchData" placeholder="Search" value="{{ request('key')}} ">
                        <button class="btn btn-dark ms-2">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </form>

              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
                
              @if (count($posts) == 0)
              <h2 class="text-center text-danger mt-5">
                There is no news yet!
              </h2>
              @else
              <table class="table table-hover text-nowrap text-center">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Category</th>
                    <th>Image</th>
                    <th>Viewer</th>
                    <th>React</th>
                    <th>Post Date</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($posts as $post)
                  <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->category_name }}</td>
                    <td>
                      <img src="{{ asset('storage/'.$post->image) }}" class="img-thumbnail" width="100px">
                    </td>
                    <td>{{ $post->view_count }}</td>
                    <td>{{ $post->reaction_count }}</td>
                    <td>{{ $post->created_at->format('D/F/Y') }}</td>
                    <td>
                      <a title="Edit" href="{{ route('news#detailPostPage',$post->id) }}"><button class="btn btn-sm bg-dark text-white" ><i class="fas fa-edit"></i></button></a>
                      <a title="Delete" href="{{ route('news#deletePost',$post->id) }}" class="btn btn-sm bg-danger text-white"><i class="fas fa-trash-alt"></i></a>
                    </td>
                  </tr>
                  @endforeach

                </tbody>
              </table>
              <div class="px-2">
                {{ $posts->links("pagination::bootstrap-5") }}
            </div>
              @endif

            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>

    </div><!-- /.container-fluid -->
  </section>
@endsection
