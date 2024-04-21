$(function() {
    var form = $('#contact-form');

    var formMessages = $('.ajax-response');

    $(form).submit(function(e) {
        e.preventDefault();

        var formData = $(form).serialize();

        $.ajax({
            type: 'POST',
            url: $(form).attr('action'),
            data: formData
        })
            .done(function(response) {
                if (response && response.message) {
                    $(formMessages).removeClass('error').addClass('success').text(response.message);
                } else {
                    console.log('Response received:', response);
                }

                $('#contact-form input,#contact-form textarea').val('');
            })
            .fail(function(data) {
                console.error('An error occurred:', data);

                $(formMessages).removeClass('success').addClass('error').text('Oops! An error occurred and your message could not be sent.');
            });
    });
});
