<x-mail::message>
    {{-- Greeting --}}
    @if (!empty($greeting))
        # {{ $greeting }}
    @else
        @if ($level === 'error')
            # @lang('Что-то пошло не так!')
        @endif
    @endif

    {{-- Intro Lines --}}
    @foreach ($introLines as $line)
        {{ $line }}
    @endforeach

    {{-- Action Button --}}
    @isset($actionText)
        <?php
        $color = match ($level) {
            'success', 'error' => $level,
            default => 'primary',
        };
        ?>
        <x-mail::button :url="$actionUrl" :color="$color">
            {{ $actionText }}
        </x-mail::button>
    @endisset

    {{-- Outro Lines --}}
    @foreach ($outroLines as $line)
        {{ $line }}
    @endforeach

    {{-- Salutation --}}
    @if (!empty($salutation))
        {{ $salutation }}
    @else
        @lang('С уважением,')<br>
        @lang('коллектив ООО "Кевтек"')
    @endif

    {{-- Subcopy --}}
    @isset($actionText)
        <x-slot:subcopy>
            <div style="margin-top: 1em;"> <!-- Небольшой отступ сверху -->
                <p>Если у вас возникли проблемы при нажатии кнопки "<strong>{{ $actionText }}</strong>", скопируйте и
                    вставьте URL ниже в свой веб-браузер:</p>
                <pre class="break-all"><code>[{{ $displayableActionUrl }}]({{ $actionUrl }})</code></pre> <!-- Удобный контейнер для URL -->
            </div>
        </x-slot:subcopy>
    @endisset
</x-mail::message>
