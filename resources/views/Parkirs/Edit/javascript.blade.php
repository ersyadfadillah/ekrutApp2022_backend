<script>
$(document).ready(function (){
    $('#posts').addClass('active');
});


$('#form_post').submit(function(e){
    e.preventDefault();

    var data = $('#form_post').serialize();
    var url = '{{route("parkir.keluar.cari")}}';
    $.ajax({
        type: 'POST',
        dataType: 'JSON',
        url: url,
        data: data,
        success: function(data){
            if(data.status === true){
                $('#vtgl_masuk').val(data.data.jam_masuk);
                $('#vjam_masuk').val(data.data.jam_masuk);
                $('#no_pol').val(data.data.no_pol);
                $('#tipe_kendaraan').val(data.data.tipe_kendaraan);
                $('#tarif').val(data.data.tarif);

                let hours = Math.abs(new Date(data.data.jam_masuk) - new Date()) / 36e5;
                
                $('#vtgl_keluar').val(("0" + (new Date().getDate())).slice(-2)+'-'+ ("0" + (new Date().getMonth())).slice(-2)+'-'+(new Date().getFullYear()));
                $('#vjam_keluar').val(("0" + (new Date().getHours())).slice(-2)+':'+ ("0" + (new Date().getMinutes())).slice(-2)+':'+ ("0" + (new Date().getSeconds())).slice(-2));

                $('#total_jam').val(hours);
                $('#total_tarif').val(data.data.total_tarif);                

                Swal.fire({
                position: 'center',
                icon: 'success',
                title: 'data ditemukan!!',
                showConfirmButton: false,
                timer: 1500
                });
            }else{
                Swal.fire({
                position: 'center',
                icon: 'error',
                title: 'data tidak ditemukan!!',
                showConfirmButton: false,
                timer: 1500
                });
            }
            console.log(data)
            
        }, error: function(error){
            console.log(error);
        }
    });
});


</script>
