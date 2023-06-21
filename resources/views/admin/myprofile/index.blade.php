@extends('admin.layout.master')
@section("content")
<section class="content">
    <div class="container-fluid">
      <div class="row mt-4">
        <div class="col-12 col-md-9 offset-3 mt-5">
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <legend class="text-center">User Profile</legend>
              </div>
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                    <form action="{{ route('profile#update',$userData->id) }}" class="form-horizontal" enctype="multipart/form-data" method="POST" >
                        @csrf
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="name" id="inputName" placeholder="Name" value="{{ old('name',$userData->name) }}">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" name="email" id="inputEmail" placeholder="Email" value="{{ old('email',$userData->email) }}">
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Image</label>
                        <div class="col-sm-10">
                          <input type="file" class="form-control" name="image" id="inputImage" placeholder="Image" value="{{ old('image',$userData->profile_photo_path) }}">
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Phone</label>
                        <div class="col-sm-10">
                          <input type="number" class="form-control" id="inputPhone" name="phone" placeholder="Phone" value="{{ old('phone',$userData->phone) }}">
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Address</label>
                        <div class="col-sm-10">
                          <textarea name="address" class="form-control" id="" cols="30" rows="5" placeholder="Address">{{ old('address',$userData->address) }}</textarea>
                        </div>
                      </div>

                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <a href="#" class="text-decoration-none text-muted">Change Password</a>
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="submit" class="btn bg-info text-white">Submit</button>
                        </div>
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
