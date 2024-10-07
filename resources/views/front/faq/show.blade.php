@extends('layouts.front')





@section('content')
{{ Breadcrumbs::render('faq'  ) }}
Faq

<div class="accordion" id="accordionExample">
    @foreach ($data as $faq)
    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $faq->id }}" aria-expanded="true" aria-controls="collapse{{ $faq->id }}">
                {{ $faq->question }}
            </button>
        </h2>
        <div id="collapse{{ $faq->id }}" class="accordion-collapse    @if ($loop->first) show   @endif " data-bs-parent="#accordionExample">
            <div class="accordion-body">
                {!! $faq->answer !!} </div>
        </div>
    </div>
    @endforeach
</div>
@stop
