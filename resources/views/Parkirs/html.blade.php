<section class="content">
    <div class="container-fluid">
      <div class="card">
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
                    <th>Last Updated By</th>
                    <th>Action</th>
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
                        <td>{{ $data_parkir_row->jam_keluar!='' ? '' : '-' }}</td>
                        <td>{{ $data_parkir_row->total_jam!='' ? '' : 'Perhitungan berjalan' }}</td>
                        <td>{{ Carbon\Carbon::parse($data_parkir_row->updated_at)->format('d-m-Y H:i:s') }}</td>
                        <td>
                          @if($data_parkir_row->status==0)
                            <button type="button" class="btn btn-md btn-danger">Delete</button>
                          @endif
                        </td>
                      </tr>                       
                    @endforeach
                  </tbody>               
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
    </div>
    <!-- /.container-fluid -->
</section>
