$(document).ready(function() {
    $('#artForm').submit(function(event) {
        event.preventDefault();

        // Lấy giá trị từ form
        var name = $('#name').val();
        var email = $('#email').val();
        var message = $('#message').val();

        // Gửi dữ liệu đến process.php bằng AJAX
        $.ajax({
            type: 'POST',
            url: 'process.php',
            data: {
                name: name,
                email: email,
                message: message
            },
            success: function(response) {
                alert(response); // Hiển thị thông báo từ server
            }
        });
    });
});
