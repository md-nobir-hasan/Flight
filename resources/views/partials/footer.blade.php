    <script src="{{asset('asset/bootstrap53.min.js')}}"></script>
@stack('js_linking')
    <script>
        const sidenav = document.getElementById('sidenav');
        const wrapper = document.getElementById('wrapper');
        const sidenav_toggler = document.getElementById('sidenav_toggler');
        const close_sidenav = document.getElementById('close_sidenav');

        sidenav_toggler.addEventListener('click',()=>{
            sidenav.classList.toggle('nshow');
            wrapper.classList.toggle('nshow');
        });

        close_sidenav.addEventListener('click',()=>{
            sidenav.classList.add('nshow');
            wrapper.classList.add('nshow');
        });

    </script>
    <script src="{{asset('asset/toastr/toastr-helper.js')}}"></script>
<script src="{{asset('asset/toastr/toastr.js')}}"></script>
<script>
    toastr.options = {
  "closeButton": true,
  "debug": false,
  "newestOnTop": true,
  "progressBar": true,
  "positionClass": "toast-top-right",
  "preventDuplicates": false,
  "onclick": null,
  "showDuration": "300",
  "hideDuration": "1000",
  "timeOut": "5000",
  "extendedTimeOut": "1000",
  "showEasing": "swing",
  "hideEasing": "linear",
  "showMethod": "fadeIn",
  "hideMethod": "fadeOut"
}
</script>
    @stack('custom_js')
  </body>
</html>
