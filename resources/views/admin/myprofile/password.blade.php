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
                      <form class="form-horizontal">
                        <div class="form-group row">
                          <label for="inputName" class="col-sm-4 col-form-label">Old Password</label>
                          <div class="col-sm-8">
                            <input type="password" class="form-control" id="inputOld" placeholder="Old Password">
                          </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputName" class="col-sm-4 col-form-label">New Password</label>
                            <div class="col-sm-8">
                              <input type="password" class="form-control" id="inputNew" placeholder="New Password">
                            </div>
                          </div>

                          <div class="form-group row">
                            <label for="inputName" class="col-sm-4 col-form-label">Confirm Password</label>
                            <div class="col-sm-8">
                              <input type="password" class="form-control" id="inputConfirm" placeholder="Confirm Password">
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
