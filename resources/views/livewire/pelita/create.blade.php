
  
  <!-- Modal -->
  <div wire:ignore.self class="modal fade" id="addUmat" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Data Umat</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

            {{-- Nama --}}
            <div class="row mb-3">
                <label for="nama" class="col-sm-2 col-form-label col-form-label-sm">Nama</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control form-control-sm" id="nama" placeholder="Nama" wire:model="nama">
                </div>
            </div>

            {{-- Mandarin --}}
            <div class="row mb-3">
                <label for="mandarin" class="col-sm-2 col-form-label col-form-label-sm">Nama Mandarin</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control form-control-sm" id="mandarin" placeholder="Nama Mandarin" wire:model="mandarin">
                </div>
            </div>

            {{-- Panggilan --}}
            <div class="row mb-3">
                <label for="panggilan" class="col-sm-2 col-form-label col-form-label-sm">Nama Panggilan</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control form-control-sm" id="panggilan" placeholder="Nama Panggilan" wire:model="panggilan">
                </div>
            </div>

            {{-- jenis_kelamin --}}
            <div class="d-flex mb-3">
                <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Jenis Kelamin</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio"  wire:model="jenis_kelamin" value="Laki-laki" >
                    <label class="form-check-label me-3" >
                      Laki-laki 乾
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio"  wire:model="jenis_kelamin" value="Wanita">
                    <label class="form-check-label me-3" >
                      Wanita 坤
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio"  wire:model="jenis_kelamin" value="Anak Laki-laki">
                    <label class="form-check-label me-3" >
                      Anak laki-laki 童
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio"  wire:model="jenis_kelamin" value="Anak Perempuan ">
                    <label class="form-check-label me-3" >
                      Anak perempuan 女
                    </label>
                </div>
            </div>

            {{-- Umur --}}
            <div class="row mb-3">
                <label for="umur" class="col-sm-2 col-form-label col-form-label-sm">Umur</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control form-control-sm" id="umur" placeholder="Umur" wire:model="umur">
                </div>
            </div>

            {{-- Alamat --}}
            <div class="row mb-3">
                <label for="alamat" class="col-sm-2 col-form-label col-form-label-sm">Alamat</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control form-control-sm" id="alamat" placeholder="Alamat" wire:model="alamat">
                </div>
            </div>

            {{-- Kota --}}
            <div class="row mb-3">
                <label for="kota" class="col-sm-2 col-form-label col-form-label-sm">Kota</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control form-control-sm" id="kota" placeholder="Kota" wire:model="kota">
                </div>
            </div>

            {{-- Telepon --}}
            <div class="row mb-3">
                <label for="telepon" class="col-sm-2 col-form-label col-form-label-sm">Telepon</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control form-control-sm" id="telepon" placeholder="Telepon" wire:model="telepon">
                </div>
            </div>

            {{-- hp --}}
            <div class="row mb-3">
                <label for="hp" class="col-sm-2 col-form-label col-form-label-sm">Handphone</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control form-control-sm" id="hp" placeholder="Handphone" wire:model="hp">
                </div>
            </div>

            {{-- tanggal_mohon_tao --}}
            <div class="row mb-3">
                <label for="tgl_mohon_tao" class="col-sm-2 col-form-label col-form-label-sm">Tgl mohon Tao</label>
                <div class="col-sm-10">
                  <input type="date" class="form-control form-control-sm"  placeholder="Tgl mohon Tao" wire:model="tanggal_mohon_tao">
                </div>
            </div>

            {{-- sd3h --}}
            <div class="d-flex mb-3">
              <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">S. Dharma 3 hari</label>
              <div class="form-check">
                  <input class="form-check-input" type="radio"  wire:model="sd3h" value="Sudah" >
                  <label class="form-check-label me-3" >
                    Sudah
                  </label>
              </div>
              <div class="form-check">
                  <input class="form-check-input" type="radio"  wire:model="sd3h" value="Belum" >
                  <label class="form-check-label me-3" >
                    Belum
                  </label>
              </div>
            </div>

            {{-- vegetarian --}}
            <div class="d-flex mb-3">
              <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Vegetarian total</label>
              <div class="form-check">
                  <input class="form-check-input" type="radio"  wire:model="vegetarian" value="Sudah" >
                  <label class="form-check-label me-3" >
                    Sudah
                  </label>
              </div>
              <div class="form-check">
                  <input class="form-check-input" type="radio"  wire:model="vegetarian" value="Belum" >
                  <label class="form-check-label me-3" >
                    Belum
                  </label>
              </div>
            </div>

            {{-- daerah_id --}}
            <div class="row mb-3">
                <label for="daerah" class="col-sm-2 col-form-label col-form-label-sm">Daerah</label>
                <div class="col-sm-10">
                    <select class="form-select form-select-sm" wire:model="daerah_id">
                        <option selected>Open this select menu</option>
                        @foreach($daerah as $d)
                            <option value="{{ $d->id }}">{{ $d->daerah }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            {{-- keterangan --}}
            <div class="row mb-3">
                <label for="keterangan" class="col-sm-2 col-form-label col-form-label-sm">Keterangan</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control form-control-sm" id="keterangan" placeholder="Keterangan" wire:model="keterangan">
                </div>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary modalClose" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" wire:click.prevent="store">Save changes</button>
        </div>
      </div>
    </div>
  </div>