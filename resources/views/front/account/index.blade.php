@extends('layouts.app')

@section('title', SEOMeta::getTitle())

@section('content')
    <main>
Ghbdtn
    </main>
@endsection

@section('css')


@stop

@section('scripts')

    @if ($errors->has('email') || $errors->has('password'))
        <script>
            $(function() {
                $('#loginModal').modal({
                    show: true
                });
            });
        </script>
    @endif


@stop
