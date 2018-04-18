@extends('layouts.app')
@section('content')
    <section class="content-header">
      <h1>
        PENGGUNA PADA DEPARTEMEN
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">    
          <div class="box">
            <div class="box-header">
           <!-- Button trigger modal -->
            @if(Auth::User()->id_departemen!=10)
            <button type="button" class="btn btn-primary pull-left" style="margin-right: 10px" data-toggle="modal" data-target="#tambah_user">
            <i class="fa fa-user-plus"></i> <span>Tambah User</span>
            </button>
            @endif
             <!-- Cari -->
              <div class="col-md-offset-10">
                <input class="form-control" id="myInput" type="text" placeholder="Cari...">
              </div> 
            </div>
            <!-- alert sukses dan eror -->
            @if(Session::has('message'))
              <div class="container">
                <div class="row">
                  <div class="col-sm-4 col-md-3">
                    <div class="alert alert-warning">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                        ×</button>
                       <span class="glyphicon glyphicon-ok"></span>{{ Session::get('message') }}
                    </div>
                  </div>
                </div>
              </div>
           @elseif(Session::has('message2'))
              <div class="container">
                <div class="row">
                  <div class="col-sm-5 col-md-4">
                    <div class="alert alert-success">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                        ×</button>
                      <span class="glyphicon glyphicon-ok"></span>{{ Session::get('message2') }}
                    </div>
                  </div>
                </div>
              </div>
          @endif
          <!-- tutup -->
            <div class="box-body"> 
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Actions</th>
                  </tr>
                </thead>
              <tbody>
                <?php $no = 0;?>
                @foreach ($user as $pengguna)
                <?php $no++; ?>
                <tr>
                <td>{{$no}}</td>
                <td>{{$pengguna->name}}</td>
                <td>{{$pengguna->username}}</td>
                <td>{{$pengguna->email}}</td>
                @if($pengguna->role==3)
                <td>Ketua Program Studi</td>
                @elseif($pengguna->role==4)
                <td>Ketua Tata Usaha Departemen</td>
                @elseif($pengguna->role==5)
                <td>Sekretaris Departemen</td>
                @elseif($pengguna->role==6)
                <td>Sekretaris Program Studi</td>
                @else
                <td></td>
                @endif
                <td>
                  <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#edit_user{{$pengguna->id}}">
                  <strong>Ubah</strong>
                  </button>
                    {!! Form::open(['method' => 'DELETE','route' => ['pengguna.destroy', $pengguna->id],'style'=>'display:inline']) !!}
                    {!! Form::submit('Hapus', ['class' => 'btn btn-danger btn-sm']) !!}
                    {!! Form::close() !!}
                </td>
              </tr>
              <!-- Edit -->
        <div class="modal fade" id="edit_user{{$pengguna->id}}">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Edit User</h4>
              </div>
              <div class="modal-body">
                <div class="box box-info">
                  <div class="panel-body">
                 <form class="form-horizontal" method="GET" action="{{ route('pengguna.update', $pengguna->id) }}">
                  <!-- {{ csrf_field() }} -->
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ $pengguna->name }}" required autofocus>
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                            <label for="username" class="col-md-4 control-label">Username</label>
                            <div class="col-md-6">
                                <input id="username" type="text" class="form-control" name="username" value="{{ $pengguna->username }}" required>
                                @if ($errors->has('username'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ $pengguna->email }}" required>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>
                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="form-group">
                          <label class="col-sm-4 control-label">Role</label>
                          <div class="col-sm-6">
                              <select name="role" class="form-control">
                                <option>Pilih Role</option>
                                <!-- <option value=1>SuperAdmin</option> -->
                                <!-- <option value=2>Admin</option> -->
                                <option value=3>Ketua Program Studi</option>
                                <option value=4>Ketua Tata Usaha Departemen</option>
                                <option value=5>Sekretaris Departemen</option>
                                <option value=6>Sekretaris Program Studi</option>
                              </select>
                          </div>
                        </div>
                        <br>
                        <br>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Simpan Perubahan
                                </button>
                            </div>
                        </div>
                    </form>
                  </div>
               </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->



                @endforeach
             </tbody>
           </table>
         </div>
       </div>
     </div>
   </div>

<!-- Tambah User -->
<div class="modal fade" id="tambah_user">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Tambah User</h4>
              </div>
              <div class="modal-body">
                <div class="box box-info">
                  <div class="panel-body">
                 <form class="form-horizontal" method="POST" action="{{ route('pengguna.store') }}">
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                            <label for="username" class="col-md-4 control-label">Username</label>
                            <div class="col-md-6">
                                <input id="username" type="text" class="form-control" name="username" value="{{ old('username') }}" required>
                                @if ($errors->has('username'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>
                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-4 control-label">Role</label>
                          <div class="col-sm-6">
                              <select name="role" class="form-control">
                                <option>Pilih Role</option>
                                <!-- <option value=1>SuperAdmin</option> -->
                                <!-- <option value=2>Admin</option> -->
                                <option value=3>Ketua Program Studi</option>
                                <option value=4>Ketua Tata Usaha Departemen</option>
                                <option value=5>Sekretaris Departemen</option>
                                <option value=6>Sekretaris Program Studi</option>
                              </select>
                          </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Tambah User
                                </button>
                            </div>
                        </div>
                    </form>
                  </div>
               </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        

</section>

@endsection
