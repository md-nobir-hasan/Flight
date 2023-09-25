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
    @stack('custom_js')
  </body>
</html>
