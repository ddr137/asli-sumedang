@include('template_news.head')
<!-- SECTION -->
<div class="section">
    <!-- container -->
            <div class="container">
                <!-- row -->
                    <div id="hot-post" class="row hot-post">
                @yield('isi')
                @include('template_news.widget')
            </div>
</div>
@include('template_news.footer')
