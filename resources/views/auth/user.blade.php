@extends('layouts.app')
@section('content')
    <section class="content-header">
      <h1 style="text-transform:uppercase">
        pengguna di @if(Auth::User()->id_departemen==10) FMIPA IPB @elseif(Auth::User()->id_departemen!=10) program studi {{$dept[0]->nama_departemen}} @endif
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">    
          <div class="box">
            <div class="box-header">
           <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary pull-left" style="margin-right: 10px" data-toggle="modal" data-target="#tambah_user">
            <i class="fa fa-user-plus"></i> <span>Tambah Pengguna</span>
            </button>
             <!-- Cari -->
              <div class="col-md-offset-10">
                <input class="form-control" id="myInput" type="text" placeholder="Cari...">
              </div> 
            </div>
           <!-- alert sukses dan eror -->
          <?php if(Session::has('success')): ?>
            <div class="col-md-4">
              <div class="alert alert-success">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <i class="icon fa fa-check"></i><strong>Berhasil!</strong> <?php echo Session::get('message', ''); ?>
              </div>
              </div>
          <?php endif;?>
          <?php if (count($errors) > 0):?>
             <div class="col-md-4">
                <div class="alert alert-danger" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <i class="icon fa fa-warning"></i><strong>Data yang Anda masukkan salah!</strong>
                        <ul>
                            @foreach($errors as $error)
                                <li>  {{ $error }} </li>
                            @endforeach
                        </ul>
                </div>
              </div>
          <?php
          endif; ?>
          <!-- tutup -->
            <div class="box-body"> 
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Tugas</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
              <tbody id="pengguna-list" name="pengguna-list">
                <?php $no = 0;?>
                @foreach ($user as $pengguna)
                <?php $no++; ?>
                <tr>
                  <td>{{$no}}</td>
                  <td>{{$pengguna->name}}</td>
                  <td>{{$pengguna->username}}</td>
                  <td>{{$pengguna->email}}</td>
                  @if($pengguna->role==1)
                  <td>SuperAdmin</td>
                  @elseif($pengguna->role==2)
                  <td>Admin</td>
                  @elseif($pengguna->role==3)
                  <td>Standar 1</td>
                  @elseif($pengguna->role==4)
                  <td>Standar 2 - Tata Pamong</td>
                  @elseif($pengguna->role==5)
                  <td>Standar 2 - Kerjasama</td>
                  @elseif($pengguna->role==6)
                  <td>Standar 3</td>
                  @elseif($pengguna->role==7)
                  <td>Standar 4</td>
                  @elseif($pengguna->role==8)
                  <td>Standar 5 - Keuangan</td>
                  @elseif($pengguna->role==9)
                  <td>Standar 5 - Sarana Prasarana</td>
                  @elseif($pengguna->role==10)
                  <td>Standar 6</td>
                  @elseif($pengguna->role==11)
                  <td>Standar 7</td>
                  @elseif($pengguna->role==12)
                  <td>Standar 8</td>
                  @elseif($pengguna->role==13)
                  <td>Standar 9</td>
                  @elseif($pengguna->role==14)
                  <td>Super User</td>
                  @endif
                  <td>
                  <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#edit_user{{$pengguna->id}}">
                  <span>Ubah</span>
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
                <h4 class="modal-title">Edit Pengguna</h4>
              </div>
              <div class="modal-body">
                <div class="box box-info">
                  <div class="panel-body">
                 <form class="form-horizontal" method="POST" action="{{ route('pengguna.update', $pengguna->id) }}">
                   {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Nama</label>
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
                            <label for="email" class="col-md-4 control-label">Alamat E-Mail</label>
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
                            <label for="password-confirm" class="col-md-4 control-label">Konfirmasi Password</label>
                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="form-group">
                          <label class="col-sm-4 control-label">Tugas</label>
                          <div class="col-sm-6">
                              <select name="role" class="form-control">
                                <!-- <option>Pilih Role</option> -->
                                @if($pengguna->id_dept==10)
                                <option value=1 {{$pengguna->role == 1 ? 'selected' : '' }}>SuperAdmin</option>
                                <option value=14 {{$pengguna->role == 14 ? 'selected' : '' }}>Super User</option>
                                <option value=3 {{$pengguna->role == 3 ? 'selected' : '' }}>Standar 1</option>
                                <option value=4 {{$pengguna->role == 4 ? 'selected' : '' }}>Standar 2 - Tata Pamong</option>
                                <option value=5 {{$pengguna->role == 5 ? 'selected' : '' }}>Standar 2 - Kerjasama</option>
                                <option value=6 {{$pengguna->role == 6 ? 'selected' : '' }}>Standar 3</option>
                                <option value=7 {{$pengguna->role == 7 ? 'selected' : '' }}>Standar 4</option>
                                <option value=8 {{$pengguna->role == 8 ? 'selected' : '' }}>Standar 5 - Keuangan</option>
                                <option value=9 {{$pengguna->role == 9 ? 'selected' : '' }}>Standar 5 - Sarana Prasarana</option>
                                <option value=10 {{$pengguna->role == 10 ? 'selected' : '' }}>Standar 6</option>
                                <option value=11 {{$pengguna->role == 11 ? 'selected' : '' }}>Standar 7</option>
                                <option value=12 {{$pengguna->role == 12 ? 'selected' : '' }}>Standar 8</option>
                                <option value=13 {{$pengguna->role == 13 ? 'selected' : '' }}>Standar 9</option>
                                @else
                                <option value=2 {{$pengguna->role == 2 ? 'selected' : '' }}>Admin</option>
                                <option value=14 {{$pengguna->role == 14 ? 'selected' : '' }}>Super User</option>
                                <option value=3 {{$pengguna->role == 3 ? 'selected' : '' }}>Standar 1</option>
                                <option value=4 {{$pengguna->role == 4 ? 'selected' : '' }}>Standar 2 - Tata Pamong</option>
                                <option value=5 {{$pengguna->role == 5 ? 'selected' : '' }}>Standar 2 - Kerjasama</option>
                                <option value=6 {{$pengguna->role == 6 ? 'selected' : '' }}>Standar 3</option>
                                <option value=7 {{$pengguna->role == 7 ? 'selected' : '' }}>Standar 4</option>
                                <option value=8 {{$pengguna->role == 8 ? 'selected' : '' }}>Standar 5 - Keuangan</option>
                                <option value=9 {{$pengguna->role == 9 ? 'selected' : '' }}>Standar 5 - Sarana Prasarana</option>
                                <option value=10 {{$pengguna->role == 10 ? 'selected' : '' }}>Standar 6</option>
                                <option value=11 {{$pengguna->role == 11 ? 'selected' : '' }}>Standar 7</option>
                                <option value=12 {{$pengguna->role == 12 ? 'selected' : '' }}>Standar 8</option>
                                <option value=13 {{$pengguna->role == 13 ? 'selected' : '' }}>Standar 9</option>
                                @endif
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
                <h4 class="modal-title">Tambah Pengguna</h4>
              </div>
              <div class="modal-body">
                <div class="box box-info">
                  <div class="panel-body">
                 <form class="form-horizontal" method="POST" action="{{ route('pengguna.store') }}">
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Nama</label>
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
                            <label for="email" class="col-md-4 control-label">Alamat E-Mail</label>
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
                            <label for="password-confirm" class="col-md-4 control-label">Konfirmasi Password</label>
                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-4 control-label">Tugas</label>
                          <div class="col-sm-6">
                              <select name="role" class="form-control">
                                <option>Pilih Tugas</option>
                                @if($pengguna->id_dept==10)
                                <option value=1>SuperAdmin</option>
                                <option value=14>Super User</option>
                                <option value=3>Standar 1</option>
                                <option value=4>Standar 2 - Tata Pamong</option>
                                <option value=5>Standar 2 - Kerjasama</option>
                                <option value=6>Standar 3</option>
                                <option value=7>Standar 4</option>
                                <option value=8>Standar 5 - Keuangan</option>
                                <option value=9>Standar 5 - Sarana Prasarana</option>
                                <option value=10>Standar 6</option>
                                <option value=11>Standar 7</option>
                                <option value=12>Standar 8</option>
                                <option value=13>Standar 9</option>
                                @else
                                <option value=2>Admin</option>
                                <option value=14>Super User</option>
                                <option value=3>Standar 1</option>
                                <option value=4>Standar 2 - Tata Pamong</option>
                                <option value=5>Standar 2 - Kerjasama</option>
                                <option value=6>Standar 3</option>
                                <option value=7>Standar 4</option>
                                <option value=8>Standar 5 - Keuangan</option>
                                <option value=9>Standar 5 - Sarana Prasarana</option>
                                <option value=10>Standar 6</option>
                                <option value=11>Standar 7</option>
                                <option value=12>Standar 8</option>
                                <option value=13>Standar 9</option>
                                @endif
                              </select>
                          </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Tambah Pengguna
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
