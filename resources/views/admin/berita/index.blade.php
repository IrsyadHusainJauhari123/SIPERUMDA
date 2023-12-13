@extends('components.admin')
@section('content')
    <div class="page-content fade-in-up">
        <div class="ibox">
            <div class="ibox-head">
                <div class="ibox-title">Menu Profil</div>
                <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#basicModal">
                    <i class="fa fa-plus"></i> Tambah Data</button>



                <!-- Modal -->
                <div class="modal fade" id="basicModal">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <form action="{{ url('berita') }}" method="post" enctype="multipart/form-data">
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
                                        <label for="judul">Judul Berita</label>
                                        <input type="text" class="form-control" id="judul" name="judul"
                                            placeholder="judul">
                                    </div>
                                    <div class="form-group">
                                        <label for="nama">Nama Pembuat</label>
                                        <input type="text" class="form-control" id="nama" name="nama_pembuat"
                                            placeholder="Nama_Pembuat">
                                    </div>

                                    <div class="form-group">
                                        <label for="tanggal">tanggal</label>
                                        <input type="text" class="form-control" id="tanggal" name="tanggal"
                                            placeholder="tanggal">
                                    </div>





                                    {{-- <div class="form-group">
                                                    <label for="tempat_lahir">Tempat Lahir</label>
                                                    <input type="text" class="form-control" id="tempat_lahir"
                                                        name="tempat_lahir" placeholder="Tempat_Lahir">
                                                </div>

                                                <div class="form-group">
                                                    <label for="tanggal_lahir">Tanggal_Lahir</label>
                                                    <input type="text" class="form-control" id="tanggal_lahir"
                                                        name="tanggal_lahir" placeholder="Tanggal_Lahir">
                                                </div> --}}

                                    {{-- <div class="form-group">
                                                    <label for="jabatan">Jabatan</label>
                                                    <input type="text" class="form-control" id="jabatan" name="jabatan"
                                                        placeholder=" Jabatan">
                                                </div> --}}




                                    <div class="form-group">
                                        <label for="keterangan">Keterangan Berita</label>
                                        <textarea class="form-control" id="keterangan" name="keterangan" placeholder="keterangan"></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="" class="control-label">Foto</label>
                                        <input type="file" name="foto" class="form-control">
                                    </div>
                                    {{-- <div class="form-group">
                                                    <label for="alamat">Alamat</label>
                                                    <input type="text" class="form-control" id="alamat" name="alamat"
                                                        placeholder="alamat">
                                                </div> --}}
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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
                <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0"
                    width="100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Aksi</th>
                            <th style="width: 15%">Judul</th>
                            {{-- <th>Nama Pembuat</th> --}}
                            {{-- <th>Tanggal Lahir</th>
                                        <th>Tempat Lahir</th> --}}
                            <th>Tanggal</th>
                            <th>Keterangan</th>
                            {{-- <th>Jabatan</th> --}}
                            <th>Foto</th>
                            {{-- <th>Level</th> --}}
                            {{-- <th width="100px">Aksi</th> --}}
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($list_berita as $berita)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>
                                    <div class="btn-group">
                                        {{-- <a href="{{ url('berita', $berita->id) }}" class="btn btn"
                                                        style="background: rgb(13, 186, 195)">
                                                        <i class="fa fa-info" style="color: black"></i>
                                                    </a> --}}
                                        <a href="" class="btn btn-warning" data-toggle="modal"
                                            data-target="#edit{{ $berita->id }}">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        @include('components.utils.delete', [
                                            'url' => url('berita', $berita->id),
                                        ])

                                    </div>
                                </td>
                                <td>{{ $berita->judul }}</td>
                                <td>{{ $berita->tanggal }}</td>
                                {{-- <td>{{ $berita->judul }}</td> --}}
                                {{-- <td>{{ $berita->tempat_lahir }}</td> --}}
                                <td>{{ $berita->keterangan }}</td>
                                {{-- <td>{{ $berita->pendidikan_terakhir }}</td> --}}
                                {{-- <td>{{ $berita->jabatan }}</td> --}}
                                <td>{{ $berita->foto }}</td>
                                {{-- <td>{{ $pemerintah->level }}</td> --}}
                                {{-- <td>{{ $berita->judul }}</td> --}}

                            </tr>

                            {{-- Modal Edit Start --}}
                            @foreach ($list_berita as $berita)
                                <div class="modal fade" id="edit{{ $berita->id }}">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <form action="{{ url('berita', $berita->id) }}" method="post"
                                                enctype="multipart/form-data">
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

                                                    <div class="form-group">
                                                        <label for="" class="control-label">Judul</label>
                                                        <input type="text" name="judul" class="form-control"
                                                            value="{{ $berita->judul }}">
                                                    </div>
                                                    {{-- <div class="form-group">
                                                            <label for="" class="control-label">Bagian</label>
                                                            <select name="id_divisi" class="form-control">
                                                                <option value="{{ $berita->divisi->id }}">
                                                                    {{ $berita->divisi->nama_divisi }}</option>
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
                                                                        value="{{ $berita->jabatan }}">
                                                                </div> --}}




                                                    <div class="form-group">
                                                        <label for="tanggal">Tanggal</label>
                                                        <input type="text" class="form-control" id="tanggal"
                                                            value="{{ $berita->tanggal }}" name="tanggal"
                                                            placeholder="tanggal">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="keterangan">Keterangan Berita</label>
                                                        <textarea class="form-control" id="keterangan" name="keterangan">{{ $berita->keterangan }}</textarea>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="foto">Masukan Foto</label>
                                                                <input type="file" class="form-control" id="foto"
                                                                    name="foto" value="{{ $berita->foto }}">
                                                            </div>
                                                        </div>
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
@endsection
