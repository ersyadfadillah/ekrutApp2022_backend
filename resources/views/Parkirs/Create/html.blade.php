<section class="content">
    <div class="container-fluid">
        <div class="col-6">
          <!-- general form elements -->
          <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Buat Data Parkir Masuk</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" id="form_post" method="post">
              @csrf
                <div class="card-body">
                  <div class="form-group">
                    {{-- <input type="hidden" class="form-control" id="kode_unik" name="kode_unik" value="{{ mt_rand(100000, 999999) }}"> --}}
                    <input type="hidden" class="form-control" id="kode_unik" name="kode_unik" value="{{ date('sdimHy') }}">
                    <input type="hidden" class="form-control" id="jam_masuk" name="jam_masuk" value="{{ date('Y-m-d H:i:s') }}">
                    <input type="hidden" class="form-control" id="status" name="status" value="0">
                    <input type="hidden" class="form-control" id="id_created" name="id_created" value="1">
                    <input type="hidden" class="form-control" id="id_updated" name="id_updated" value="1">
                    
                    <div class="row">
                      <div class="col-sm-6">
                        <!-- textarea -->
                        <div class="form-group">
                          <label>Tanggal Masuk</label>
                          <input type="text" class="form-control" id="vtgl_masuk" value="{{ date('d-m-Y') }}" readonly>
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label>Jam Masuk</label>
                          <input type="text" class="form-control" id="vjam_masuk" value="{{ date('H:i:s') }}" readonly>
                        </div>
                      </div>
                    </div>

                  </div>
                  <div class="form-group">
                    <label for="no_pol">No Polisi</label>
                    <input type="text" class="form-control" id="no_pol" name="no_pol" required>
                  </div>
                  <div class="form-group">
                    <label for="id_tipe_kendaraan">Tipe Kendaraan</label>                    
                    <select class="form-control select2" id="id_tipe_kendaraan" name="id_tipe_kendaraan" style="width: 100%;" required>
                      <option selected="selected" value="1">Mobil</option>
                    </select>
                  </div>       
                  <div class="form-group">
                    <label for="id_tarif">Tarif / Jam</label>
                    <input type="hidden" class="form-control" id="id_tarif" name="id_tarif" value="1" readonly required>
                    <input type="text" class="form-control" id="no_pol" value="3000" readonly required>
                  </div>       
               
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
        </div>
    </div>
    <!-- /.container-fluid -->
</section>
