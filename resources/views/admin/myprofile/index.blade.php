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
                @if (Auth::user()->profile_photo_path != null)
                <img width="100px" height="100px" class=" rounded-circle" src="{{ asset('storage/profileImage/' . Auth::user()->profile_photo_path) }}" alt="">
                @else
                <img width="100px" height="100px"" src="{{ asset('default-image/null-profile.jpg') }}" alt="">
                @endif
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                    <form action="{{ route('profile#update',Auth::user()->id) }}" class="form-horizontal" enctype="multipart/form-data" method="POST" >
                        @csrf
                      <div class="form-group row">

                        <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="name" id="inputName" placeholder="Name" value="{{ old('name',Auth::user()->name) }}">
                            @error('name')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" name="email" id="inputEmail" placeholder="Email" value="{{ old('email',Auth::user()->email) }}">
                          @error('email')
                            <small class="text-danger">{{ $message }}</small>
                          @enderror
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Image</label>
                        <div class="col-sm-10">
                          <input type="file" class="form-control" name="profile_photo_path" id="inputImage" placeholder="Image" value="{{ old('image',Auth::user()->profile_photo_path) }}">
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Phone</label>
                        <div class="col-sm-10">
                          <input type="number" class="form-control" id="inputPhone" name="phone" placeholder="Phone" value="{{ old('phone',Auth::user()->phone) }}">
                          @error('phone')
                            <small class="text-danger">{{ $message }}</small>
                          @enderror
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Address</label>
                        <div class="col-sm-10">
                          <textarea name="address" class="form-control" id="" cols="30" rows="3" placeholder="Address">{{ old('address',Auth::user()->address) }}</textarea>
                            @error('address')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                      </div>

                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <a href="{{ route('password#page',Auth::user()->id) }}" class="text-decoration-none text-muted">Change Password</a>
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
