<!-- resources/views/components/toastr.blade.php -->
<div id="toastr-container"></div>

@section('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Проверяем наличие сообщения в сессии
            const toastMessage = "{{ session('toast_message') ?? '' }}";

            if (toastMessage !== "") {
                toastr.success(toastMessage, 'Успешно!', {
                    closeButton: true,
                    progressBar: true,
                    positionClass: 'toast-top-right',
                    preventDuplicates: true,
                });

                // Очищаем сессионное сообщение
                $.ajax({
                    url: '/clear-toast-message',
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function () {
                        console.log('Сессионное сообщение очищено.');
                    }
                });
            }
        });
    </script>
@endsection
