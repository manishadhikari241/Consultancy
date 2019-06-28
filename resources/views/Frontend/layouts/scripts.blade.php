<!-- jQuery -->
<script src="{{asset('js/Frontend/jquery.min.js')}}"></script>
<!-- Bootstrap JS -->
<script src="{{asset('js/Frontend/bootstrap.min.js')}}"></script>
<!-- slick slider -->
<script src="{{asset('js/Frontend/slick.min.js')}}"></script>
<!-- aos -->
<script src="{{asset('js/Frontend/aos.js')}}"></script>
<!-- venobox popup -->
<script src="{{asset('js/Frontend/venobox.min.js')}}"></script>
<!-- mixitup filter -->
<script src="{{asset('js/Frontend/mixitup.min.js')}}"></script>
<!-- google map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU&libraries=places"></script>
<script src="{{asset('js/Frontend/gmap.js')}}"></script>
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>

<!-- Main Script -->
<script src="{{asset('js/Frontend/script.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script>
    @if(\Illuminate\Support\Facades\Session::has('success'))
    toastr.success("{{\Illuminate\Support\Facades\Session::get('success')}}");
    @endif
    @if(\Illuminate\Support\Facades\Session::has('error'))
    toastr.error("{{\Illuminate\Support\Facades\Session::get('error')}}");
    @endif
    @if ($errors->any())
    @foreach($errors->all() as $error)
    toastr.warning("{{ $error }}");
    @endforeach
    @endif


</script>