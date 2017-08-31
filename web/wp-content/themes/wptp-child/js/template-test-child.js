(function ($) {
    $('#get-one-post').on('submit', function (event) {
        event.preventDefault();

        var $form = $(this),
            formData = {};

        $form.serializeArray().map(function (x) {
            formData[x.name] = x.value;
        });
        var request = wp.ajax.send({data: formData});

        request
            .done(function (response) {
                var tmpl = wp.template('single'),
                    post = tmpl(response);

                $('#post-container').append(post);
                // update the offset
                var $offset = $('[name="offset"]');
                $offset.val(parseInt($offset.val(), 10) + 1);
            })
            .fail(function (response) {
                // handle fail state
            })
            .always(function (r) {
                console.log(r);
            });
    });
})(jQuery);
