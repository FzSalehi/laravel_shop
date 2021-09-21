</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{ asset('admin/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap -->
<script src="{{ asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE -->
<script src="{{ asset('admin/dist/js/adminlte.js') }}"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="{{ asset('admin/plugins/chart.js/Chart.min.js') }}"></script>
<script src="{{ asset('admin/dist/js/demo.js') }}"></script>
<script src="{{ asset('admin/dist/js/pages/dashboard3.js') }}"></script>
<script src="{{ asset('admin/plugins/ckeditor/ckeditor.js') }}"></script>
<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .then( editor => {
        console.log( editor );
    } )
    .catch( error => {
        console.error( error );
    } );

</script>


</body>
</html>
