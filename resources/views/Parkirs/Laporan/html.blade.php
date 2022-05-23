<section class="content">
    <div class="container-fluid">
      <div class="card">
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Cari Data Parkir</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" id="form_post" method="post" action="/parkir/laporan" enctype="multipart/form-data">
              @csrf
                <div class="card-body">                  
                  <div class="form-group">                    
                    <label for="kode_unik">Periode</label>
                    <div class="row">
                      <div class="col-sm-3">
                        <input type="date" class="form-control" id="tgl_awal" name="tgl_awal" required>
                      </div>
                      <div class="col-sm-1">
                        <label for="" class="text-center">s.d</label>
                      </div>
                      <div class="col-sm-3">
                        <input type="date" class="form-control" id="tgl_akhir" name="tgl_akhir" required>
                      </div>
                      <div class="col-sm-2">
                        <button type="submit" id="cari_laporan" class="btn btn-primary">Lihat Laporan</button>
                      </div>
                      <div class="col-sm-2">
                        <button type="submit" id="export_laporan" class="btn btn-success">Export Laporan</button>
                      </div>
                    </div>
                  </div>               
                </div>
              </form>
            </div>
            <!-- /.card -->
        </div>
        <div class="col-12">
              <div class="card-header">
                <h3 class="card-title">Parkir List</h3>
              </div>
              <!-- /.card-header -->
             <div class="row ml-3 mt-3">
                <div class="col-4">
                </div>
             </div>
              <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Kode Unik</th>
                    <th>No Polisi</th>
                    <th>Tipe Kendaraan</th>
                    <th>Tarif / jam (Rp.)</th>
                    <th>Status</th>
                    <th>Waktu Masuk</th>
                    <th>Waktu Keluar</th>
                    <th>Total Jam</th>
                    <th>Total Tarif (Rp.)</th>
                    <th>Last Updated By</th>
                    {{-- <th>Action</th> --}}
                  </tr>
                  </thead>
                  <tbody class="text-center">
                    @foreach ($data_parkir as $data_parkir_row)
                      <tr>
                        <th scope="row">{{ $data_parkir_row->id }}</th>
                        <td>{{ $data_parkir_row->kode_unik }}</td>
                        <td>{{ $data_parkir_row->no_pol }}</td>
                        <td>{{ $data_parkir_row->tipe_kendaraan }}</td>
                        <td>{{ $data_parkir_row->tarif }}</td>
                        <td>
                          @if($data_parkir_row->status==0)
                            Parkir Aktif
                          @else
                            Parkir Selesai 
                          @endif</td>
                        <td>{{ Carbon\Carbon::parse($data_parkir_row->jam_masuk)->format('d-m-Y H:i:s') }}</td>
                        <td>{{ $data_parkir_row->jam_keluar!='' ? Carbon\Carbon::parse($data_parkir_row->jam_keluar)->format('d-m-Y H:i:s') : '-' }}</td>
                        <td>{{ $data_parkir_row->total_jam!='' ? $data_parkir_row->total_jam : 'Perhitungan berjalan' }}</td>
                        <td>{{ $data_parkir_row->total_tarif }}</td>
                        <td>{{ Carbon\Carbon::parse($data_parkir_row->updated_at)->format('d-m-Y H:i:s') }}</td>
                        {{-- <td>
                          @if($data_parkir_row->status==0)
                            <button type="button" class="btn btn-md btn-danger">Delete</button>
                          @endif
                        </td> --}}
                      </tr>                       
                    @endforeach
                  </tbody>               
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
    <!-- /.container-fluid -->
</section>
