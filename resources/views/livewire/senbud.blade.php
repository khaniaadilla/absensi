@extends('home')
<div>
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h2 class="fonr-weigh-bold mb-3">Senbud</h2>
                    <table class="table table-bordered table-hovered table-striped">
                     @extends('home')
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Senbud</th>
                                <th>PJ Senbud</th>
  
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($senbuds as $index=>$senbud)
                            <tr>
                                <td>{{$index + 1}}</td>
                                <td>{{$senbud->nama_senbud}}</td>
                                <td>{{$senbud->pj_senbud}}</td>
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
                  <h2 class="fonr-weigh-bold mb-3">Create Senbud</h2>
                  <form wire:submit.prevent="store">
                      <div class="form-group">
                          <label>Nama Senbud</label>
                          <input wire:model="nama_senbud" type="text" class="form-control">
                          @error('nama_senbud') <small class="text-danger">{{$message}}</small>@enderror
                      </div>
                      <div class="form-group">
                        <label>PJ Senbud</label>
                        <input wire:model="pj_senbud" type="text" class="form-control">
                        @error('pj_senbud') <small class="text-danger">{{$message}}</small>@enderror
                    </div>
                      <div class="form-group">
                          <button type="submit" class="btn btn-primary btn-block">Submit</button>
                      </div>
                  </form>
          </div>
      </div>
          <div class="card mt-3">
              <div class="card-body">
                  
                  <h3>{{ $nama_senbud }}</h3>
                  <h3>{{ $pj_senbud }}</h3>


              </div>
          </div>
       </div>
    </div>
  </div>
  