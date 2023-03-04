<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.15.5/dist/sweetalert2.all.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        @if(Session::has('success') )
             Swal.fire(
              'Success!',
              "{{ session('success')}}",
              'success'
            )
        @endif

        @if(Session::has('not_success') )
             Swal.fire(
              'Error!',
              "{{ session('not_success')}}",
              'error'
            )
        @endif

        @if(Session::has('error') )
             Swal.fire(
              'Error!',
              "",
              'error'
            )
        @endif

     });  
</script>
