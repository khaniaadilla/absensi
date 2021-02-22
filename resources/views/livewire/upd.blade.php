@extends('home')
<div>
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h2 class="fonr-weigh-bold mb-3">Upd</h2>
                    <table class="table table-bordered table-hovered table-striped">
                        @extends('home')
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama UPD</th>
                                <th>PJ UPD</th>
  
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($upds as $index=>$upd)
                            <tr>
                                <td>{{$index + 1}}</td>
                                <td>{{$upd->nama_upd}}</td>
                                <td>{{$upd->pj_upd}}</td>
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
                  <h2 class="fonr-weigh-bold mb-3">Create UPD</h2>
                  <form wire:submit.prevent="store">
                      <div class="form-group">
                          <label>Nama UPD</label>
                          <input wire:model="nama_upd" type="text" class="form-control">
                          @error('nama_upd') <small class="text-danger">{{$message}}</small>@enderror
                      </div>
                      <div class="form-group">
                        <label>PJ UPD</label>
                        <input wire:model="pj_upd" type="text" class="form-control">
                        @error('pj_upd') <small class="text-danger">{{$message}}</small>@enderror
                    </div>
                      <div class="form-group">
                          <button type="submit" class="btn btn-primary btn-block">Submit</button>
                      </div>
                  </form>
          </div>
      </div>
          <div class="card mt-3">
              <div class="card-body">
                  
                  <h3>{{ $nama_upd }}</h3>
                  <h3>{{ $pj_upd }}</h3>


              </div>
          </div>
       </div>
    </div>
  </div>
  