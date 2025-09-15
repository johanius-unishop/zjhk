<div class="product-desc__docs">
    @if (count($data['files']) > 0)
    <h5 class="product-desc__docs-title">Документация</h5>
    <div class="product-desc__docs-wrapper">

        @if (isset($data['files']['specification']))
        <p><img src="{{ asset('images/icons/note.svg') }}" alt="характеристики"><a href="{{ $data['files']['specification'] }}">
                <span>Технические характеристики {{ $data['product']->name }}</span>
            </a>
        </p>
        @endif

        @if (isset($data['files']['overviewInformation']))
        <p><img src="{{ asset('images/icons/note.svg') }}" alt="характеристики"><a href="{{ $data['files']['overviewInformation'] }}"> <span>Вырезка из каталога</span></a>
        </p>
        @endif

        @if (isset($data['files']['dimensionalDrawing']))
        <p><img src="{{ asset('images/icons/ruler.svg') }}" alt="чертеж"> <a href="{{ $data['files']['dimensionalDrawing'] }}">
                <span>Габаритный чертёж</span>
            </a>
        </p>
        @endif

        @if (isset($data['files']['3dModel']))
        <p><img src="{{ asset('images/icons/3d.svg') }}" alt="3д-модель"><a href="{{ $data['files']['3dModel'] }}">
                <span>3D-модель</span>
            </a>
        </p>
        @endif


        <a href="#" download="#"><img src="{{ asset('images/icons/download.svg') }}" alt="скачать"><span>Скачать всё</span></a>
    </div>
    @endif
</div>
