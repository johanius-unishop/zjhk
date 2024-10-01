@extends('adminlte::page')
@section('title', 'Dashboard')

@section('content_header')
<h1>Dashboard</h1>
@stop

@section('content')
<p>Проверка связи.</p>

Версия Laravel {{app()->version()}}



<div class="row">
    <div class="col-md-6 col-sm-6 col-12">
        <div class="info-box bg-gradient-info">
            <span class="info-box-icon"><i class="far fa-bookmark"></i></span>
            <div class="info-box-content">
                <span class="info-box-text">Sitemap</span>
                @if ($sitemap_exists)
                <span class="info-box-number">Ссылок: {{ $sitemap_urls }}</span>
                <span class="info-box-number">Создан: {{ date("Y-m-d H:i:s", $sitemap_stats['mtime']) }} </span>
                <span class="info-box-number">Размер файла: {{ $sitemap_stats['size'] }} </span>
                @else
                <span class="info-box-number">Файл не существует</span>
                @endif
                <div class="progress">
                    <div class="progress-bar" style="width: 100%"></div>
                </div>
                <span class="progress-description">

                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
                        <i class="fas fa-sync"></i> {{ $sitemap_button }}
                    </button>
                </span>
            </div>
        </div>
    </div>

</div>



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Важно</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Вы действительно хотите запустить регенерацию sitemap.xml?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Отмена</button>
                <a class="btn btn-danger" href="{{ route('admin.regenerate_sitemap') }}" role="button"> Регенерация
                    sitemap</a>
            </div>
        </div>
    </div>
</div>



@stop

@section('css')
{{-- Add here extra stylesheets --}}
{{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
<script>
    console.log("Hi, I'm using the Laravel-AdminLTE package!");

</script>
@stop
