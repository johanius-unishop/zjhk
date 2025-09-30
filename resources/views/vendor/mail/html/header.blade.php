@props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="https://laravel.com/img/notification-logo.png" class="logo" alt="Laravel Logo">
@else
{{ $slot }}
<img src="{{ asset('images/icons/logo.png') }}" alt="Logo Kevtek" width="150" height="auto" class="logo">
@endif
</a>
</td>
</tr>
