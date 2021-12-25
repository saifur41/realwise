<body class="bg-gradient-primary" style="background: linear-gradient(#0a3b3d, #24b2a1);">
    <div class="container">
        <main class="py-4">
            @include('_alert')
            <iframe src="{{route('grafana.logout')}}" frameborder="0" height="0" width="0"></iframe>
            @yield('content')
        </main>
    </div>

    <script src="{{ asset('/assets/js/jquery.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>

</body>