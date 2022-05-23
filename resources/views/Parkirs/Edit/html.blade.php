<section class="content">
    <div class="container-fluid">
            <div class="col-md-6">
              <!-- general form elements -->
              <div class="card card-primary">
                  <div class="card-header">
                    <h3 class="card-title">Cari Data Parkir Keluar</h3>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <form role="form" id="form_post" method="post">
                  @csrf
                    <div class="card-body">                  
                      <div class="form-group">                    
                        <label for="kode_unik">Kode Unik</label>
                        <div class="row">
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="kode_unik" name="kode_unik" required>
                          </div>
                          <div class="col-sm-2">
                            <button type="submit" class="btn btn-primary">Cari Kendaraan</button>
                          </div>
                        </div>
                      </div>               
                    </div>
                  </form>
                </div>
                <!-- /.card -->
            </div>
            <div class="col-md-6">
              <!-- general form elements -->
              <div class="card card-warning">
                  <div class="card-header">
                    <h3 class="card-title">Buat Data Parkir Keluar</h3>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                    <form role="form" id="form_post2" method="post">
                    @csrf
                      <div class="card-body">
                          <div class="form-group">
                            
                            <div class="row">
                              <div class="col-sm-6">
                                <!-- textarea -->
                                <div class="form-group">
                                  <label>Tanggal Masuk</label>
                                  <input type="text" class="form-control" id="vtgl_masuk" readonly>
                                </div>
                              </div>
                              <div class="col-sm-6">
                                <div class="form-group">
                                  <label>Jam Masuk</label>
                                  <input type="text" class="form-control" id="vjam_masuk" readonly>
                                </div>
                              </div>
                            </div>
  
                          </div>
                          <div class="form-group">
                            <label for="no_pol">No Polisi</label>
                            <input type="text" class="form-control" id="no_pol" readonly>
                          </div>
                          <div class="form-group">
                            <label for="id_tipe_kendaraan">Tipe Kendaraan</label>                                         
                            <input type="text" class="form-control" id="tipe_kendaraan" readonly>
                          </div>       
                          <div class="form-group">
                            <label for="id_tarif">Tarif / Jam</label>                
                            <input type="text" class="form-control" id="tarif" readonly>
                          </div>  
                          <hr>  
                          <div class="row">
                            <div class="col-sm-6">
                              <!-- textarea -->
                              <div class="form-group">
                                <label>Tanggal Keluar</label>
                                <input type="hidden" class="form-control" id="jam_keluar" name="jam_keluar" value="{{ date('Y-m-d H:i:s') }}">
                                <input type="text" class="form-control" id="vtgl_keluar" readonly>
                              </div>
                            </div>
                            <div class="col-sm-6">
                              <div class="form-group">
                                <label>Jam Keluar</label>
                                <input type="text" class="form-control" id="vjam_keluar" readonly>
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="total_jam">Total Jam</label>                
                            <input type="text" class="form-control" id="total_jam" name="total_jam" readonly>
                          </div>  
                          <div class="form-group">
                            <label for="total_tarif">Total Tarif</label>                
                            <input type="text" class="form-control" id="total_tarif" name="total_tarif" readonly>
                          </div>  
                      </div>
                      <!-- /.card-body -->
                      <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </div>
                    </form>
                
                <!-- /.card -->
            </div>
    </div>
  <!-- /.container-fluid -->
</section>
