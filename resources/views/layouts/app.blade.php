<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="body">
        <div class="app__wrapper">
            @include('layouts.header')

            @yield ('content')
            @include('layouts.footer')
            @include('partials.login')
            <div id="scroll" class="scroll">
                <span>+</span>
            </div>

            
    @livewireScripts
    <script> 
        $(document).ready(function(){ $('.modal__form').on('submit', function(e) { e.preventDefault(); 
        $.ajax({ url: $(this).attr('action'), type: 'POST', dataType: 'JSON', data: $(this).serialize(), success: function(response) { if (response.success === true) { location.href = '/';
        } else { showErrors(response.errors); } }, error: function(xhr, status, error) { showErrors(xhr.responseJSON.errors); } }); }); function showErrors(errors) { Object.keys(errors).forEach(key => { let fieldSelector = `.modal__error span[data-error="${key}"]`; $(fieldSelector).removeClass('hidden'); $(fieldSelector).text(errors[key][0]); }); } }); </script>
    </body>
</html>
