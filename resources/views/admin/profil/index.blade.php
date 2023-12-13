@extends('components.admin')
@section('content')
    <div class="page-content fade-in-up">
        <div class="ibox">
            <div class="ibox-head">
                <div class="ibox-title">Menu Profil</div>
                <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#basicModal">
                    <i class="fa fa-plus"></i> Tambah Data</button>

            </div>
            <!-- Modal -->
            <div class="modal fade" id="basicModal">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <form action="{{ url('profil') }}" method="post" enctype="multipart/form-data">
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
                                    <label for="" class="control-label">Level</label>
                                    <select name="level" class="form-control">
                                        <option value="">--Pilih--</option>
                                        <option value="Visi">Visi</option>
                                        <option value="Sejarah">Sejarah</option>
                                        <option value="Misi">Misi</option>
                                        <option value="Misi">Tupoksi</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="keterangan">Keterangan</label>
                                    <textarea class="form-control" id="keterangan" name="keterangan" placeholder="Isi"></textarea>
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

            <div class="card-body">
                <div class="table-responsive">

                    <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0"
                        width="100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Aksi</th>
                                {{-- <th>Judul</th> --}}
                                <th>Level</th>
                                <th>Keterangan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($list_profil as $profil)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        <div class="btn-group">
                                            {{-- <a href="{{ url('visimisi', $profil->id) }}" class="btn btn"
                                                style="background: rgb(13, 186, 195)">
                                                <i class="fa fa-info" style="color: black"></i>
                                            </a> --}}
                                            <a href="" class="btn btn-warning" data-toggle="modal"
                                                data-target="#edit{{ $profil->id }}">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            @include('components.utils.delete', [
                                                'url' => url('profil', $profil->id),
                                            ])

                                        </div>
                                    </td>
                                    {{-- <td>{{ $profil->judul }}</td> --}}
                                    <td>{{ $profil->level }}</td>
                                    <td>{{ $profil->keterangan }}</td>
                                </tr>

                                {{-- Modal Edit Start --}}
                                @foreach ($list_profil as $profil)
                                    <div class="modal fade" id="edit{{ $profil->id }}">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <form action="{{ url('profil', $profil->id) }}" method="post"
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
                                                            class="form-control" value="{{ $profil->judul }}">
                                                    </div> --}}
                                                        {{-- <div class="form-group">
                                                <label for="" class="control-label">Bagian</label>
                                                <select name="id_divisi" class="form-control">
                                                    <option value="{{ $profil->divisi->id }}">
                                                        {{ $profil->divisi->nama_divisi }}</option>
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
                                                            value="{{ $profil->jabatan }}">
                                                    </div> --}}
                                                        <div class="form-group">
                                                            <label for="status">Status</label>
                                                            <select name="level" class="form-control">
                                                                <option value="{{ $profil->level }}">
                                                                    {{ $profil->level }}</option>
                                                                <option value="Visi">Visi</option>
                                                                <option value="Sejarah">Sejarah</option>
                                                                <option value="Misi">Misi</option>
                                                                <option value="Tupoksi">Tupoksi</option>

                                                            </select>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="nama">Keterangan</label>
                                                            {{-- <textarea value="{{ $profil->keterangan }}" name="keterangan" style="width: 100%; height: 150px;"></textarea> --}}
                                                            <textarea name="keterangan" style="width: 100%; height: 150px;">{{ $profil->keterangan }}</textarea>
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
        <div>
            {{-- <a class="adminca-banner" href="http://admincast.com/adminca/" target="_blank">
                <div class="adminca-banner-ribbon"><i class="fa fa-trophy mr-2"></i>PREMIUM TEMPLATE</div>
                <div class="wrap-1">
                    <div class="wrap-2">
                        <div>
                            <img src="./assets/img/adminca-banner/adminca-preview.jpg"
                                style="height:160px;margin-top:50px;" />
                        </div>
                        <div class="color-white" style="margin-left:40px;">
                            <h1 class="font-bold">ADMINCA</h1>
                            <p class="font-16">Save your time, choose the best</p>
                            <ul class="list-unstyled">
                                <li class="m-b-5"><i class="ti-check m-r-5"></i>High Quality Design</li>
                                <li class="m-b-5"><i class="ti-check m-r-5"></i>Fully Customizable and Easy Code</li>
                                <li class="m-b-5"><i class="ti-check m-r-5"></i>Bootstrap 4 and Angular 5+</li>
                                <li class="m-b-5"><i class="ti-check m-r-5"></i>Best Build Tools: Gulp, SaSS, Pug...</li>
                                <li><i class="ti-check m-r-5"></i>More layouts, pages, components</li>
                            </ul>
                        </div>
                    </div>
                    <div style="flex:1;">
                        <div class="d-flex justify-content-end wrap-3">
                            <div class="adminca-banner-b m-r-20">
                                <img src="./assets/img/adminca-banner/bootstrap.png"
                                    style="width:40px;margin-right:10px;" />Bootstrap v4
                            </div>
                            <div class="adminca-banner-b m-r-10">
                                <img src="./assets/img/adminca-banner/angular.png"
                                    style="width:35px;margin-right:10px;" />Angular v5+
                            </div>
                        </div>
                        <div class="dev-img">
                            <img src="./assets/img/adminca-banner/sprite.png" />
                        </div>
                    </div>
                </div>
            </a> --}}
        </div>
    </div>
@endsection
