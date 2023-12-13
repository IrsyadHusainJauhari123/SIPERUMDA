@extends('components.admin')
@section('content')
    <div class="container">
        <div class="row">
            <div class="container">
                <div class="col-md-12 "></div>

                <div class="card">
                    <div class="body">
                        <div class="card-header">
                            <h4 class="card-title">Data Pemerintahan</h4>
                            <button type="button" class="btn btn-primary float-right" data-toggle="modal"
                                data-target="#basicModal">
                                <i class="fa fa-plus"></i> Tambah Data</button>
                            <!-- Modal -->
                            <div class="modal fade" id="basicModal">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <form action="{{ url('pemerintahan') }}" method="post"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="modal-header" style="background: #3b4268">
                                                <h5 class="modal-title text-white">Tambah Data Bagian</h5>
                                                <button type="button" class="close"
                                                    data-dismiss="modal"><span>&times;</span>
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
                                                    <label for="nama">Nama</label>
                                                    <input type="text" class="form-control" id="nama" name="nama"
                                                        placeholder="Nama">
                                                </div>

                                                <div class="form-group">
                                                    <label for="periode">Periode</label>
                                                    <input type="text" class="form-control" id="periode" name="periode"
                                                        placeholder="Periode">
                                                </div>



                                                <div class="form-group">
                                                    <label for="pendidikan_terakhir">Pendidikan Terakhir</label>
                                                    <input type="text" class="form-control" id="pendidikan_terakhir"
                                                        name="pendidikan_terakhir" placeholder="Pendidikan_terakhir">
                                                </div>

                                                <div class="form-group">
                                                    <label for="tempat_lahir">Tempat Lahir</label>
                                                    <input type="text" class="form-control" id="tempat_lahir"
                                                        name="tempat_lahir" placeholder="Tempat_Lahir">
                                                </div>

                                                <div class="form-group">
                                                    <label for="tanggal_lahir">Tanggal_Lahir</label>
                                                    <input type="text" class="form-control" id="tanggal_lahir"
                                                        name="tanggal_lahir" placeholder="Tanggal_Lahir">
                                                </div>

                                                <div class="form-group">
                                                    <label for="jabatan">Jabatan</label>
                                                    <input type="text" class="form-control" id="jabatan" name="jabatan"
                                                        placeholder=" Jabatan">
                                                </div>

                                                <div class="form-group">
                                                    <label for="status">Status</label>
                                                    <select name="level" class="form-control">
                                                        <option>--- Level ---</option>
                                                        <option value="Bupati">Bupati</option>
                                                        <option value="WakilBupati">WakilBupati</option>
                                                        {{-- <option value="CAMAT">CAMAT</option>
                                                        <option value="Wakil Camat">Wakil Camat</option> --}}
                                                        {{-- <option value="Galeri">Galeri</option> --}}
                                                    </select>
                                                </div>


                                                <div class="form-group">
                                                    <label for="deskripsi">Isi</label>
                                                    <textarea class="form-control" id="deskripsi" name="deskripsi" placeholder="Isi"></textarea>
                                                </div>

                                                <div class="form-group">
                                                    <label for="" class="control-label">Foto</label>
                                                    <input type="file" name="foto" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="alamat">Alamat</label>
                                                    <input type="text" class="form-control" id="alamat" name="alamat"
                                                        placeholder="alamat">
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">Close</button>
                                                    <button class="btn btn-primary">Save</button>
                                                </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!--Modal Tambah -->
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="table1" class="table table-datatable table-bordered">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Aksi</th>
                                        {{-- <th>Judul</th> --}}
                                        <th>Nama</th>
                                        <th>Tanggal Lahir</th>
                                        <th>Tempat Lahir</th>
                                        <th>Periode</th>
                                        <th>Pendidikan Terakhir</th>
                                        <th>Jabatan</th>
                                        <th>Alamat</th>
                                        {{-- <th>Level</th> --}}
                                        {{-- <th width="100px">Aksi</th> --}}
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($list_pemerintahan as $pemerintahan)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>
                                                <div class="btn-group">
                                                    {{-- <a href="{{ url('pemerintahan', $pemerintahan->id) }}" class="btn btn"
                                                        style="background: rgb(13, 186, 195)">
                                                        <i class="fa fa-info" style="color: black"></i>
                                                    </a> --}}
                                                    <a href="" class="btn btn-warning" data-toggle="modal"
                                                        data-target="#edit{{ $pemerintahan->id }}">
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                    @include('components.utils.delete', [
                                                        'url' => url('pemerintahan', $pemerintahan->id),
                                                    ])

                                                </div>
                                            </td>
                                            <td>{{ $pemerintahan->nama }}</td>
                                            <td>{{ $pemerintahan->tanggal_lahir }}</td>
                                            <td>{{ $pemerintahan->tempat_lahir }}</td>
                                            <td>{{ $pemerintahan->periode }}</td>
                                            <td>{{ $pemerintahan->pendidikan_terakhir }}</td>
                                            <td>{{ $pemerintahan->jabatan }}</td>
                                            <td>{{ $pemerintahan->alamat }}</td>
                                            {{-- <td>{{ $pemerintah->level }}</td> --}}
                                            {{-- <td>{{ $pemerintahan->judul }}</td> --}}

                                        </tr>

                                        {{-- Modal Edit Start --}}
                                        @foreach ($list_pemerintahan as $pemerintahan)
                                            <div class="modal fade" id="edit{{ $pemerintahan->id }}">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <form action="{{ url('pemerintahan', $pemerintahan->id) }}"
                                                            method="post" enctype="multipart/form-data">
                                                            @csrf
                                                            @method('put')
                                                            <div class="modal-header" style="background: #3b4268">
                                                                <h5 class="modal-title text-white">Edit Data Bagian
                                                                </h5>
                                                                <button type="button" class="close"
                                                                    data-dismiss="modal"><span>&times;</span>
                                                                </button>
                                                            </div>

                                                            <div class="modal-body">

                                                                {{-- <div class="form-group">
                                                                    <label for=""
                                                                        class="control-label">Judul</label>
                                                                    <input type="text" name="nama"
                                                                        class="form-control" value="{{ $pemerintahan->judul }}">
                                                                </div> --}}
                                                                {{-- <div class="form-group">
                                                            <label for="" class="control-label">Bagian</label>
                                                            <select name="id_divisi" class="form-control">
                                                                <option value="{{ $pemerintahan->divisi->id }}">
                                                                    {{ $pemerintahan->divisi->nama_divisi }}</option>
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
                                                                        value="{{ $pemerintahan->jabatan }}">
                                                                </div> --}}
                                                                <div class="form-group">
                                                                    <label for="nama">Nama</label>
                                                                    <input type="text" class="form-control"
                                                                        id="nama" value="{{ $pemerintahan->nama }}"
                                                                        name="nama" placeholder="Nama">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="periode">Periode</label>
                                                                    <input type="text" class="form-control"
                                                                        id="periode"
                                                                        value="{{ $pemerintahan->periode }}"
                                                                        name="periode" placeholder="Periode">
                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="pendidikan_terakhir">Pendidikan
                                                                        Terakhir</label>
                                                                    <input type="text" class="form-control"
                                                                        id="pendidikan_terakhir"
                                                                        name="pendidikan_terakhir"
                                                                        placeholder="Pendidikan_terakhir"
                                                                        value="{{ $pemerintahan->pendidikan_terakhir }}">
                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="jabatan"> Jabatan</label>
                                                                    <input type="text" class="form-control"
                                                                        id="masa_jabatan"
                                                                        value="{{ $pemerintahan->jabatan }}"
                                                                        name="jabatan" placeholder="jabatan">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="tanggal_lahir">Tanggal_lahir</label>
                                                                    <input type="text" class="form-control"
                                                                        id="tanggal_lahir"
                                                                        value="{{ $pemerintahan->tanggal_lahir }}"
                                                                        name="tanggal_lahir" placeholder="tanggal_lahir">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="tempat_lahir">Tempat Lahir</label>
                                                                    <input type="text" class="form-control"
                                                                        id="tempat_lahir"
                                                                        value="{{ $pemerintahan->tempat_lahir }}"
                                                                        name="tempat_lahir" placeholder="tempat_lahir">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="status">Status</label>
                                                                    <select name="level" class="form-control">
                                                                        <option value="{{ $pemerintahan->level }}">
                                                                            {{ $pemerintahan->level }}</option>
                                                                        <option value="Bupati">Bupati</option>
                                                                        <option value="WakilBupati">WakilBupati
                                                                        </option>
                                                                        <option value="Camat">Camat</option>
                                                                        <option value="WakilCamat">WakilCamat</option>
                                                                        {{-- <option value="Galeri">Galeri</option> --}}
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="deskripsi">Isi</label>
                                                                    <textarea class="form-control" id="deskripsi" name="deskripsi">{{ $pemerintahan->deskripsi }}</textarea>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <label for="foto">Masukan Foto</label>
                                                                            <input type="file" class="form-control"
                                                                                id="foto" name="foto"
                                                                                value="{{ $pemerintahan->foto }}">
                                                                        </div>
                                                                    </div>
                                                                </div>


                                                                <div class="form-group">
                                                                    <label for="alamat">Alamat</label>
                                                                    <input type="text" class="form-control"
                                                                        id="alamat" name="alamat"
                                                                        placeholder="alamat"
                                                                        value="{{ $pemerintahan->alamat }}">
                                                                </div>


                                                            </div>
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
            </div>
        </div>
    </div>
    </div>
@endsection
