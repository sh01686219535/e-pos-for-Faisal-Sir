
@include('backend.partials.style')
    {{-- <div id="loader" class="app-loader">
        <div class="d-flex align-items-center">
            <div class="app-loader-circle"></div>
            <div class="app-loader-text">LOADING...</div>
        </div>
    </div> --}}


    <div id="app" class="app">
        @include('backend.partials.header')
        @include('backend.partials.sidebar')
        @include('backend.partials.mobile-icon')
        @yield('content')
        @include('backend.partials.themColor')

    </div>
    @include('backend.partials.script')

  