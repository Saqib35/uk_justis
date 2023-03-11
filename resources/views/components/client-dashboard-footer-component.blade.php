@php $design_by=\App\Models\header_and_footer::pluck('design_by')->first() @endphp
<footer class="footer text-center text-sm-left">
    &copy; {{$design_by}} <span class="text-muted d-none d-sm-inline-block float-right"></span>
</footer>