@extends('components.admin')
@section('content')
    <div class="page-content fade-in-up">
        <div class="ibox">
            <div class="ibox-head">
                <div class="ibox-title">Menu User</div>
                <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#basicModal">
                    <i class="fa fa-plus"></i> Tambah Data</button>
                <div class="modal fade" id="basicModal">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <form action="{{ url('user') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="modal-header" style="background: #3b4268">
                                    <h5 class="modal-title text-white">Tambah Data Bagian</h5>
                                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                    </button>
                                </div>

                                <div class="modal-body">
                                    {{-- <div class="form-group">
                                            <label for="" class="control-label">Bagian</label>
                                            <select name="id_divisi" class="form-control">
                                                <option value="">--Pilih Bagian--</option>
                                                @foreach ($list_divisi as $item)
                                                    <option value="{{ $item->id }}">{{ $item->nama_divisi }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div> --}}
                                    {{-- <div class="form-group">
                                                    <label for="judul" class="control-label">Judul</label>
                                                    <input type="text" name="judul" class="form-control"
                                                        id="judul">
                                                </div> --}}
                                    <div class="form-group">
                                        <label for="" class="control-">Nama</label>
                                        <input type="text" class="form-control" name="nama">
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="control-">Username</label>
                                        <input type="username" class="form-control" name="username">
                                    </div>
                                    {{-- <div class="form-group">
                                                    <label for="" class="control-">Username</label>
                                                    <input type="text" class="form-control" name="username">
                                                </div> --}}
                                    <div class="form-group">
                                        <label for="" class="control-">Email</label>
                                        <input type="email" class="form-control" name="email">
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="control-">Password</label>
                                        <input type="password" class="form-control" name="password">
                                    </div>
                                    {{-- <div class="form-group">
                                                    <label for="" class="control-">NO HP</label>
                                                    <input type="text" class="form-control" name="no_handphone">
                                                </div> --}}
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button class="btn btn-primary">Save</button>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!--Modal Tambah -->
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0"
                    width="100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Aksi</th>
                            {{-- <th>Judul</th> --}}
                            <th>Nama</th>
                            <th>Username</th>
                            <th>Email</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($list_user as $user)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>
                                    <div class="btn-group">
                                        {{-- <a href="{{ url('user', $user->id) }}" class="btn btn"
                                                        style="background: rgb(13, 186, 195)">
                                                        <i class="fa fa-info" style="color: black"></i>
                                                    </a> --}}
                                        <a href="" class="btn btn-warning" data-toggle="modal"
                                            data-target="#edit{{ $user->id }}">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        @include('components.utils.delete', [
                                            'url' => url('user', $user->id),
                                        ])

                                    </div>
                                </td>
                                {{-- <td>{{ $user->judul }}</td> --}}
                                <td>{{ $user->nama }}</td>
                                <td>{{ $user->username }}</td>
                                <td>{{ $user->email }}</td>
                            </tr>

                            {{-- Modal Edit Start --}}
                            @foreach ($list_user as $user)
                                <div class="modal fade" id="edit{{ $user->id }}">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <form action="{{ url('user', $user->id) }}" method="post"
                                                enctype="multipart/form-data">
                                                @csrf
                                                @method('put')
                                                <div class="modal-header" style="background: #3b4268">
                                                    <h5 class="modal-title text-white">Edit Data Bagian</h5>
                                                    <button type="button" class="close"
                                                        data-dismiss="modal"><span>&times;</span>
                                                    </button>
                                                </div>

                                                <div class="modal-body">

                                                    {{-- <div class="form-group">
                                                                    <label for=""
                                                                        class="control-label">Judul</label>
                                                                    <input type="text" name="nama"
                                                                        class="form-control" value="{{ $user->judul }}">
                                                                </div> --}}
                                                    {{-- <div class="form-group">
                                                            <label for="" class="control-label">Bagian</label>
                                                            <select name="id_divisi" class="form-control">
                                                                <option value="{{ $user->divisi->id }}">
                                                                    {{ $user->divisi->nama_divisi }}</option>
                                                                @foreach ($list_divisi as $item)
                                                                    <option value="{{ $item->id }}">
                                                                        {{ $item->nama_divisi }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div> --}}
                                                    {{-- <div class="form-group">
                                                                    <label for=""
                                                                        class="control-label">Jabatan</label>
                                                                    <input type="text" name="jabatan"
                                                                        class="form-control"
                                                                        value="{{ $user->jabatan }}">
                                                                </div> --}}
                                                    <div class="form-group">
                                                        <label for="" class="control-">Nama</label>
                                                        <input type="text" class="form-control" name="nama"
                                                            value="{{ $user->nama }}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="" class="control-">Username</label>
                                                        <input type="username" class="form-control" name="username"
                                                            value="{{ $user->username }}">
                                                    </div>
                                                    {{-- <div class="form-group">
                                                                    <label for="" class="control-">Username</label>
                                                                    <input type="text" class="form-control" name="username">
                                                                </div> --}}
                                                    <div class="form-group">
                                                        <label for="" class="control-">Email</label>
                                                        <input type="email" class="form-control" name="email"
                                                            value="{{ $user->email }}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="" class="control-">Password</label>
                                                        <input type="password" class="form-control" name="password">
                                                    </div>
                                                    {{-- <div class="form-group">
                                                                    <label for="" class="control-">NO HP</label>
                                                                    <input type="text" class="form-control" name="no_handphone">
                                                                </div> --}}
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">Close</button>
                                                        <button class="btn btn-primary">Save</button>
                                                    </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            {{-- Modal Edit End --}}
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
