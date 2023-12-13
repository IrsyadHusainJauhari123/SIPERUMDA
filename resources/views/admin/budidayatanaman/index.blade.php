@extends('components.admin')
@section('content')
    <div class="page-content fade-in-up">
        <div class="ibox">
            <div class="ibox-head">
                <div class="ibox-title">Menu Budidaya Tanaman</div>
                @if ($list_budidayatanaman->count() == 0)
                    <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#basicModal">
                        <i class="fa fa-plus"></i> Tambah Data</button>
                @endif


                <!-- Modal -->
                <div class="modal fade" id="basicModal">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <form action="{{ url('budidayatanaman') }}" method="post" enctype="multipart/form-data">
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
                                    <div class="form-group">
                                        <label for="nama_bisnis" class="control-label">Nama Bisnis</label>
                                        <input type="text" name="nama_bisnis" class="form-control" id="nama_bisnis">
                                    </div>
                                    <div class="form-group">
                                        <label for="keterangan" class="control-label">keterangan</label>
                                        <input type="text" name="keterangan" class="form-control" id="keterangan">
                                    </div>
                                    {{-- <div class="form-group">
                                                    <label for="" class="control-label">Level</label>
                                                    <select name="level" class="form-control">
                                                        <option value="">--Pilih--</option>
                                                        <option value="Visi">Visi</option>
                                                        <option value="Misi">Misi</option>
                                                        <option value="Misi">Tupoksi</option>
                                                    </select>
                                                </div> --}}

                                    <div class="form-group">
                                        <label for="" class="control-label">Foto</label>
                                        <input type="file" name="foto" class="form-control">
                                    </div>

                                </div>
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

            {{-- <div class="card-body">
                            @if ($list_strukturanggota == [0])

                            @endif --}}
            <div class="card-body">
                <div class="table-responsive">
                    <table id="table1" class="table table-datatable table-bordered">

                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Aksi</th>

                                {{-- <th>Judul</th> --}}
                                <th>Nama Bisnis</th>
                                <th>Keterangan</th>
                                <th>Foto</th>



                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($list_budidayatanaman as $budidayatanaman)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        <div class="btn-group">
                                            {{-- <a href="{{ url('visimisi', $stuktur_anggota->id) }}" class="btn btn"
                                                            style="background: rgb(13, 186, 195)">
                                                            <i class="fa fa-info" style="color: black"></i>
                                                        </a> --}}
                                            <a href="" class="btn btn-warning" data-toggle="modal"
                                                data-target="#edit{{ $budidayatanaman->id }}">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            @include('components.utils.delete', [
                                                'url' => url('budidayatanaman', $budidayatanaman->id),
                                            ])

                                        </div>
                                    </td>
                                    {{-- <td>{{ $stuktur_anggota->judul }}</td> --}}

                                    </td>
                                    <td>{{ $budidayatanaman->nama_bisnis }}</td>
                                    <td>{{ $budidayatanaman->keterangan }}</td>
                                    {{-- <td>{{ $beranda->foto }}</td> --}}
                                    {{-- <td>{{ $beranda->foto }}</td> --}}
                                    {{-- <td>
                                                    <img style="height: 20px"
                                                        src="{{ url("public/$budidayatanaman->foto") }}" alt="">
                                                </td> --}}
                                    <td>
                                        <img style="height: 100px" src="{{ url("$budidayatanaman->foto") }}" alt="">
                                    </td>


                                </tr>


                                {{-- Modal Edit Start --}}
                                @foreach ($list_budidayatanaman as $budidayatanaman)
                                    <div class="modal fade" id="edit{{ $budidayatanaman->id }}">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <form action="{{ url('budidayatanaman', $budidayatanaman->id) }}"
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
                                                                        class="form-control" value="{{ $stuktur_anggota->judul }}">
                                                                </div> --}}
                                                        {{-- <div class="form-group">
                                                            <label for="" class="control-label">Bagian</label>
                                                            <select name="id_divisi" class="form-control">
                                                                <option value="{{ $stuktur_anggota->divisi->id }}">
                                                                    {{ $stuktur_anggota->divisi->nama_divisi }}</option>
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
                                                                        value="{{ $stuktur_anggota->jabatan }}">
                                                                </div> --}}
                                                        {{-- <div class="form-group">
                                                                        <label for="status">Status</label>
                                                                        <select name="level" class="form-control">
                                                                            <option value="{{ $stuktur_anggota->level }}">
                                                                                {{ $stuktur_anggota->level }}</option>
                                                                            <option value="Visi">Visi</option>
                                                                            <option value="Misi">Misi</option>
                                                                            <option value="Tupoksi">Tupoksi</option>

                                                                        </select>
                                                                    </div> --}}
                                                        <div class="form-group">
                                                            <label for="nama_anggota" class="control-label">Nama
                                                                Bisnis</label>
                                                            <input type="text" name="nama_bisnis" class="form-control"
                                                                value="{{ $budidayatanaman->nama_bisnis }}"
                                                                id="nama_bisnis">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="keterangan" class="control-label">Keterangan</label>
                                                            <input type="text" name="keterangan" class="form-control"
                                                                value="{{ $budidayatanaman->keterangan }}" id="keterangan">
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
@endsection
