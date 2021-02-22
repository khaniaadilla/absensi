@extends('home')
<div>
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h2 class="fonr-weigh-bold mb-3">Rayon</h2>
                    <table class="table table-bordered table-hovered table-striped">
                        @extends('home')
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Rayon</th>
                                <th>Nama Pemray</th>
  
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($rayons as $index=>$rayon)
                            <tr>
                                <td>{{$index + 1}}</td>
                                <td>{{$rayon->nama_rayon}}</td>
                                <td>{{$rayon->nama_pemray}}</td>
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
                  <h2 class="fonr-weigh-bold mb-3">Create Rayon</h2>
                  <form wire:submit.prevent="store">
                      <div class="form-group">
                          <label>Nama Rayon</label>
                          <input wire:model="nama_rayon" type="text" class="form-control">
                          @error('nama_rayon') <small class="text-danger">{{$message}}</small>@enderror
                      </div>
                      <div class="form-group">
                        <label>Nama Pemray</label>
                        <input wire:model="nama_pemray" type="text" class="form-control">
                        @error('nama_pemray') <small class="text-danger">{{$message}}</small>@enderror
                    </div>
                      <div class="form-group">
                          <button type="submit" class="btn btn-primary btn-block">Submit</button>
                      </div>
                  </form>
          </div>
      </div>
          <div class="card mt-3">
              <div class="card-body">
                  
                  <h3>{{ $nama_rayon }}</h3>
                  <h3>{{ $nama_pemray }}</h3>


              </div>
          </div>
       </div>
    </div>
  </div>
  