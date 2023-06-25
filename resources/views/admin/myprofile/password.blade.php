@extends('admin.layout.master')
@section('content')

    <section class="content">
      <div class="container-fluid">
        <div class="row mt-4">
          <div class="col-8 offset-3 mt-5">
            <div class="col-md-9">
              <div class="card">
                <div class="card-header p-2">
                  <legend class="text-center">Change Password</legend>
                </div>
                <div class="card-body">
                  <div class="tab-content">
                    <div class="active tab-pane" id="activity">
                      <form action="{{ route('password#change',Auth::user()->id) }}" method="POST" class="form-horizontal">
                        @csrf
                        <div class="form-group row">
                          <label for="inputName" class="col-sm-4 col-form-label">Old Password</label>
                          <div class="col-sm-8">
                            <input type="password" class="form-control @error('oldPassword') is-invalid @enderror @if(session('wrong')) is-invalid @endif "  name="oldPassword" id="inputOld" placeholder="Old Password">
                            @error('oldPassword')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                            @if(session('wrong'))
                            <small class="text-danger">{{ session('wrong') }}</small>
                            @endif
                          </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputName" class="col-sm-4 col-form-label">New Password</label>
                            <div class="col-sm-8">
                              <input type="password" class="form-control  @error('newPassword') is-invalid @enderror" id="inputNew" name="newPassword" placeholder="New Password">
                                @error('newPassword')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                          </div>

                          <div class="form-group row">
                            <label for="inputName" class="col-sm-4 col-form-label">Confirm Password</label>
                            <div class="col-sm-8">
                              <input type="password" class="form-control  @error('confirmPassword') is-invalid @enderror" name="confirmPassword" id="inputConfirm" placeholder="Confirm Password">
                                @error('confirmPassword')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                          </div>



                        <div class="form-group row">
                          <div class="text-center">
                            <button type="submit" class="btn bg-info text-white px-5">Change Password</button>
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
