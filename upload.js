$(document).ready(function() {
    $('#uploadForm').submit(function(event) {
        event.preventDefault();
        
        var formData = new FormData($(this)[0]);
        
        $.ajax({
            url: 'upload.php',
            type: 'POST',
            data: formData,
            async: true,
            cache: false,
            contentType: false,
            processData: false,
            success: function(response) {
                var responseData = JSON.parse(response);
                
                $('#uploadedImage').attr('src', responseData.file_url);

                $('#uploadedImage').on('click', function() {
                    window.open(responseData.file_url, '_blank');
                });
            },
            error: function() {
                alert('Error uploading file.');
            }
        });
        
        return false;
    });
});
