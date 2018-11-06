//edit email template - by Donald Lokong
$('#login_form').submit(function(e) {
    e.preventDefault();

    $('#login_text').text('');
    $('.alert').empty();

    $.ajax({
        url: baseURL + 'backend/ajax/auth/login/',
        type: "POST",
        data: $('#login_form').serialize(),
        dataType: "JSON",
        success: function (row) {

            if (row.response == true) {

                $('.alert').append(' <div class="alert-success">Welcome back <strong class="text-white">' + row.data.user_fullname + '</strong>,Your account is ready.</div>');
                $('#login_text').text('Success');
                setTimeout(function () {
                    location.reload();
                }, 2000)
            } else {
                $('#login_text').empty();
                $('.alert').append(' <div class="alert-error">' + row.error + '</div>');
                $('#login_text').text('try again');
            }


        },
        error: function (jqXHR, textStatus, errorThrown) {
            $('#login_text').empty();
            $('#login_text').text('try again');
            $('.alert').append(' <div class="alert-error">Error:{' + errorThrown + '}</div>');

        }
    });

});