<div wire:poll="refreshSubscribers">
    @if ($size > 0)
    <div class="alert alert-danger">
        <p> В очереди находятся задания (<b>{{ $size }}</b>)! </p>
        <p>Дождитесь их выполнения!</p>
    </div>
    @endif
</div>
