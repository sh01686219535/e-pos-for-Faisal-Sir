@stack('js')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script data-cfasync="false" src="https://cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
{{-- <script src="https://code.iconify.design/iconify-icon/2.1.0/iconify-icon.min.js" type="56de6d78367fe31896c465de-text/javascript"></script> --}}
<script src="{{asset('backendAsset')}}/assets/js/vendor.min.js" type="56de6d78367fe31896c465de-text/javascript"></script>
<script src="{{asset('backendAsset')}}/assets/js/app.min.js" type="56de6d78367fe31896c465de-text/javascript"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.iconify.design/3/3.1.0/iconify.min.js"></script>
<script src="{{asset('backendAsset')}}/assets/plugins/jvectormap-next/jquery-jvectormap.min.js" type="56de6d78367fe31896c465de-text/javascript"></script>
<script src="{{asset('backendAsset')}}/assets/plugins/jvectormap-content/world-mill.js" type="56de6d78367fe31896c465de-text/javascript"></script>
<script src="{{asset('backendAsset')}}/assets/plugins/apexcharts/dist/apexcharts.min.js" type="56de6d78367fe31896c465de-text/javascript"></script>
<script src="{{asset('backendAsset')}}/assets/js/demo/dashboard.demo.js" type="56de6d78367fe31896c465de-text/javascript"></script>
<script async src="https://www.googletagmanager.com/gtag/js?id=G-Y3Q0VGQKY3" type="56de6d78367fe31896c465de-text/javascript"></script>
<script type="56de6d78367fe31896c465de-text/javascript">
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-Y3Q0VGQKY3');
</script>
<script src="../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js"
    data-cf-settings="56de6d78367fe31896c465de-|49" defer></script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015"
    integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ=="
    data-cf-beacon='{"rayId":"8ba43765efbbd05f","version":"2024.8.0","r":1,"serverTiming":{"name":{"cfL4":true}},"token":"4db8c6ef997743fda032d4f73cfeff63","b":1}'
    crossorigin="anonymous"></script>
<script>
    $(document).ready(function() {
        $('.menu-item.has-sub > a').on('click', function(e) {
            e.preventDefault();
            var $this = $(this);
            $this.next('.menu-submenu').slideToggle(200);
            $this.find('.menu-caret').toggleClass('rotate-caret');
        });
    });
</script>
<style>
    .rotate-caret b {
        transform: rotate(90deg);
    }
</style>
{{-- datatable start --}}
<script src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/buttons/3.0.2/js/dataTables.buttons.js"></script>
<script src="https://cdn.datatables.net/buttons/3.0.2/js/buttons.dataTables.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/3.0.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/3.0.2/js/buttons.print.min.js"></script>
<script>
    new DataTable('#example', {
        layout: {
            topStart: {
                buttons: ['copy', 'csv', 'excel', 'pdf', 'print']
            }
        }
    });
</script>
{{-- datatable end --}}
{{-- sweetalert2 --}}
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    $(document).ready(function() {
        $('.delete-item').click(function(e) {
            e.preventDefault();
            var form = $(this).closest('form');
            var dataId = $(this).data('id');

            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit(); // Submit the form programmatically
                }
            });
        });
    });
</script>
{{-- sweetalert2 --}}

</body>

<!-- Mirrored from seantheme.com/quantum/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 28 Aug 2024 12:17:53 GMT -->

</html>
