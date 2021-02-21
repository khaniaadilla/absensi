<div>
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h2 class="fonr-weigh-bold mb-3">Siswa</h2>
                    <table class="table table-bordered table-hovered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>NIS</th>
                                <th>Nama</th>
                                <th>Rombel</th>
                                <th>Rayon</th>
                                <th>Senbud</th>
                                <th>UPD</th>
                                <th>Alamat</th>
                                <th>Tanggal Lahir</th>
                                <th>Jenis Kelamin</th>
  
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($siswas as $index=>$siswa)
                            <tr>
                                <td>{{$index + 1}}</td>
                                <td>{{$siswa->nis}}</td>
                                <td>{{$siswa->nama}}</td>
                                <td>{{$siswa->id_rombel}}</td>
                                <td>{{$siswa->id_rayon}}</td>
                                <td>{{$siswa->id_senbud}}</td>
                                <td>{{$siswa->id_upd}}</td>
                                <td>{{$siswa->alamat}}</td>
                                <td>{{$siswa->tgl_lahir}}</td>
                                <td>{{$siswa->jk}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
            </div>
        </div>
   </div>
        <div class="col-md-4">
          <div class="card">
              <div class="card-body">
                  <h2 class="fonr-weigh-bold mb-3">Create Siswa</h2>
                  <form wire:submit.prevent="store">
                      <div class="form-group">
                          <label>NIS</label>
                          <input wire:model="nis" type="text" class="form-control">
                          @error('nis') <small class="text-danger">{{$message}}</small>@enderror
                      </div>
                      <div class="form-group">
                        <label>Nama</label>
                        <input wire:model="nama" type="text" class="form-control">
                        @error('nama') <small class="text-danger">{{$message}}</small>@enderror
                    </div>
                    <div class="form-group">
                        <label>Rombel</label>
                        <input wire:model="id_rombel" type="text" class="form-control">
                        @error('id_rombel') <small class="text-danger">{{$message}}</small>@enderror
                    </div>
                    <div class="form-group">
                        <label>Rayon</label>
                        <input wire:model="id_rayon" type="text" class="form-control">
                        @error('id_rayon') <small class="text-danger">{{$message}}</small>@enderror
                    </div>
                    <div class="form-group">
                        <label>Senbud</label>
                        <input wire:model="id_senbud" type="text" class="form-control">
                        @error('id_senbud') <small class="text-danger">{{$message}}</small>@enderror
                    </div>
                    <div class="form-group">
                        <label>UPD</label>
                        <input wire:model="id_upd" type="text" class="form-control">
                        @error('id_upd') <small class="text-danger">{{$message}}</small>@enderror
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <input wire:model="alamat" type="text" class="form-control">
                        @error('alamat') <small class="text-danger">{{$message}}</small>@enderror
                    </div>
                    <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <input wire:model="tgl_lahir" type="text" class="form-control">
                        @error('tgl_lahir') <small class="text-danger">{{$message}}</small>@enderror
                    </div>
                    <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <input wire:model="jk" type="text" class="form-control">
                        @error('jk') <small class="text-danger">{{$message}}</small>@enderror
                    </div>
                      <div class="form-group">
                          <button type="submit" class="btn btn-primary btn-block">Submit</button>
                      </div>
                  </form>
          </div>
      </div>
          <div class="card mt-3">
              <div class="card-body">
                  <h3>{{ $nis }}</h3>
                  <h3>{{ $nama }}</h3>
                  <h3>{{ $id_rombel }}</h3>
                  <h3>{{ $id_rayon }}</h3>
                  <h3>{{ $id_senbud }}</h3>
                  <h3>{{ $id_upd }}</h3>
                  <h3>{{ $alamat }}</h3>
                  <h3>{{ $tgl_lahir }}</h3>
                  <h3>{{ $jk }}</h3>
              </div>
          </div>
       </div>
    </div>
  </div>
  