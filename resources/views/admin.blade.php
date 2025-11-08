<!-- adminlte::page -->
@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <div class="container mt-5">
        <!-- Content goes here -->
    </div>
@stop

@section('css')
    {{-- Extra stylesheets can be added here if needed --}}


    <!-- Toastr Stylesheet -->
    <link rel="stylesheet" href="{{ asset('vendor/toastr/toastr.css') }}">



    <!-- Venobox for Image Preview -->
    <link href="{{ asset('vendor/venobox/venobox.min.css') }}" rel="stylesheet">

    <!-- Application CSS -->
    @vite(['resources/js/appAdmin.js', 'resources/css/appAdmin.css'])
@stop

@section('js')
    <!-- SweetAlert2 Scripts -->
    <script src="{{ asset('vendor/sweetalert2/sweetalert2.all.js') }}"></script>



    <!-- Venobox Script for Image Preview -->
    <script src="{{ asset('/vendor/venobox/venobox.min.js') }}" type="text/javascript"></script>

    <!-- Livewire Alert Scripts -->

    <!-- Toastr Notifications -->
    <script src="{{ asset('vendor/toastr/toastr.min.js') }}"></script>

    <!-- Custom Notification Handling -->
    <script>
        document.addEventListener("livewire:init", () => {
            Livewire.on("toast", (event) => {
                toastr[event.notify](event.message);
            });
        });

    </script>

    <!-- Flash Messages -->
    <script>
        // Success Message Popup Notification
        @if (Session::has('success'))
            toastr.success("{{ Session::get('success') }}");
        @endif

        // Info Message Popup Notification
        @if (Session::has('info'))
            toastr.info("{{ Session::get('info') }}");
        @endif

        // Warning Message Popup Notification
        @if (Session::has('warning'))
            toastr.warning("{{ Session::get('warning') }}");
        @endif

        // Error Message Popup Notification
        @if (Session::has('error'))
            toastr.error("{{ Session::get('error') }}");
        @endif

        toastr.success("QWerty");
    </script>

@stop
