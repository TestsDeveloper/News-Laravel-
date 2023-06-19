@extends("admin.layout.master")
@section('content')
<section class="content">
    <div class="container-fluid">
      <div class="row mt-4">
        <div class="col-8 offset-3 mt-5">
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <legend class="text-center">Category Update</legend>
              </div>
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                    <form class="form-horizontal" action="{{route('update#category', $category['id'])}}" method="POST">
                        @csrf
                      <div class="form-group form-floating">
                          <input type="text" name="category_name" class="form-control @error('category_name') is-invalid @enderror" value="{{ $category['category_name'] }}">
                          <label for="floatingCategory" class="text-muted">Enter your category</label>
                          @error('category_name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                          @enderror
                      </div>
                      <div class="form-group">
                          <button type="submit" class="btn bg-info text-white">Update Category</button>
                      </div>
                    </form>

                  </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
