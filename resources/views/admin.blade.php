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




    <!-- Venobox Script for Image Preview -->
    <script src="{{ asset('/vendor/venobox/venobox.min.js') }}" type="text/javascript"></script>

    <!-- Livewire Alert Scripts -->

    <!-- Toastr Notifications -->
    <script src="{{ asset('vendor/toastr/toastr.min.js') }}"></script>

    <!-- Custom Notification Handling -->
    <script>
        document.addEventListener("livewire:init", () => {
            Livewire.on("toast-success", event => toastr.success(event.message));
            Livewire.on("toast-error", event => toastr.error(event.message));
            Livewire.on("toast-info", event => toastr.info(event.message));
            Livewire.on("toast-warning", event => toastr.warning(event.message));
        });
    </script>

    <!-- Flash Messages -->
    <script>
        // Success Message Popup Notification
        @if (Session::has('toast-success'))
            toastr.success("{{ Session::get('toast-success') }}");
        @endif

        // Info Message Popup Notification
        @if (Session::has('toast-info'))
            toastr.info("{{ Session::get('toast-info') }}");
        @endif

        // Warning Message Popup Notification
        @if (Session::has('toast-warning'))
            toastr.warning("{{ Session::get('toast-warning') }}");
        @endif

        // Error Message Popup Notification
        @if (Session::has('toast-error'))
            toastr.error("{{ Session::get('toast-error') }}");
        @endif

    </script>

@stop
