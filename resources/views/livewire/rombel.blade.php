<div>
  <div class="row">
      <div class="col-md-8">
          <div class="card">
              <div class="card-body">
                  <h2 class="fonr-weigh-bold mb-3">Rombel</h2>
                  <table class="table table-bordered table-hovered table-striped">
                      <thead>
                          <tr>
                              <th>No</th>
                              <th>Nama Rombel</th>

                          </tr>
                      </thead>
                      <tbody>
                          @foreach($rombels as $index=>$rombel)
                          <tr>
                              <td>{{$index + 1}}</td>
                              <td>{{$rombel->nama_rombel}}</td>
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
                <h2 class="fonr-weigh-bold mb-3">Create Rombel</h2>
                <form wire:submit.prevent="store">
                    <div class="form-group">
                        <label>Nama Rombel</label>
                        <input wire:model="nama_rombel" type="text" class="form-control">
                        @error('nama_rombel') <small class="text-danger">{{$message}}</small>@enderror
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">Submit</button>
                    </div>
                </form>
        </div>
    </div>
        <div class="card mt-3">
            <div class="card-body">
                <h3>{{ $nama_rombel }}</h3>
            </div>
        </div>
     </div>
  </div>
</div>
