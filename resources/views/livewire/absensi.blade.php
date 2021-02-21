<div>
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h2 class="fonr-weigh-bold mb-3">Absensi</h2>
                    <table class="table table-bordered table-hovered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>NIS/th>
                                <th>Tanggal Absensi</th>
                                <th>Jenis Kelamin</th>
                                <th>Keterangan Absensi</th>
  
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($absensis as $index=>$absensi)
                            <tr>
                                <td>{{$index + 1}}</td>
                                <td>{{$absensi->nis}}</td>
                                <td>{{$absensi->tgl_absensi}}</td>
                                <td>{{$absensi->jk}}</td>
                                <td>{{$absensi->ket_absensi}}</td>
                                
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
                  <h2 class="fonr-weigh-bold mb-3">Create Absensi</h2>
                  <form wire:submit.prevent="store">
                      <div class="form-group">
                          <label>NIS</label>
                          <input wire:model="nis" type="text" class="form-control">
                          @error('nis') <small class="text-danger">{{$message}}</small>@enderror
                      </div>
                      <div class="form-group">
                        <label>Tanggal Absensi</label>
                        <input wire:model="tgl_absensi" type="text" class="form-control">
                        @error('tgl_absensi') <small class="text-danger">{{$message}}</small>@enderror
                    </div>
                    <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <input wire:model="jk" type="text" class="form-control">
                        @error('jk') <small class="text-danger">{{$message}}</small>@enderror
                    </div>
                    <div class="form-group">
                        <label>Keterangan Absensi</label>
                        <input wire:model="ket_absensi" type="text" class="form-control">
                        @error('ket_absensi') <small class="text-danger">{{$message}}</small>@enderror
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
                  <h3>{{ $tgl_absensi }}</h3>
                  <h3>{{ $jk }}</h3>
                  <h3>{{ $ket_absensi }}</h3>


              </div>
          </div>
       </div>
    </div>
  </div>
  