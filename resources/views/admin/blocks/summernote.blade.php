<script src="{{ asset('vendor/summernote/summernote.min.js') }}"></script>
<script>
    // Summernote
    $(function () {
      $('#summernote').summernote({
        height:300,
        lang:'ru-RU',
        minHeight:500,
        maxHeight:800,
        placeholder: 'Введите текст',
        callbacks: {
            onImageUpload: function(image) {
                uploadImage(image[0]);
            },
            onBlurCodeview: function() {
        return $(this).val($(this).summernote('code'));
        }
        }
      })
    })
    function uploadImage(image) {
    var data = new FormData();

    const csrfToken = document.querySelector('input[name="_token"]').value;
     data.append("image", image);
    $.ajax({
        url: '/admin/images/upload',
        cache: false,
        contentType: false,
        processData: false,
        data: data,
        type: "post",
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},

        success: function(url) {
            // var image = $('<img>').attr('src', 'https://' + url);
            var image = $('<img>').attr('src',   url);
            $('#summernote').summernote("insertNode", image[0]);
        },
        error: function(data) {
            console.log(data);
        }
    });
}

</script>
