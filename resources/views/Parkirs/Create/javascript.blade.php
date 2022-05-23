<script>
$(document).ready(function (){
    $('#posts').addClass('active');
});


$('#form_post').submit(function(e){
    e.preventDefault();

    var data = $('#form_post').serialize();
    var url = '{{route("parkir.masuk")}}';
    $.ajax({
        type: 'POST',
        dataType: 'JSON',
        url: url,
        data: data,
        success: function(data){
            if(data === true){
                Swal.fire({
                    title: 'Your posts has been saved',
                    icon: 'success',
                    confirmButtonText: 'Cetak Kartu',
                    confirmButtonColor: '#0069d9',
                    denyButtonColor: '#6c757d',
                    showDenyButton: true,
                    denyButtonText: 'Oke'
                }).then((result) => {
                    /* Read more about isConfirmed, isDenied below */
                    if (result.isConfirmed) {
                        Swal.fire('Saved!', '', 'success')
                        // print kartu
                    } else if (result.isDenied) {
                        window.location.reload()
                    }
                });
            }else if(data === false){
                Swal.fire({
                position: 'center',
                icon: 'error',
                title: 'Failed to save posts',
                showConfirmButton: false,
                timer: 3000
                });
            }else{
                Swal.fire({
                position: 'center',
                icon: 'error',
                title: data.message.title,
                showConfirmButton: false,
                timer: 3000
                });
            }
            console.log(data)
            
        }, error: function(error){
            console.log(error);
        }
    });
});


</script>
