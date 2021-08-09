jQuery(document).ready(function ($) {

    var ta_document = $(document);

    ta_document.on('click', '.custom_media_button', function (e) {

        // Prevents the default action from occuring.
        e.preventDefault();
        var media_image_upload = $(this);
        var media_title = $(this).data('title');
        var media_button = $(this).data('button');
        var media_input_val = $(this).prev();
        var media_image_url_value = $(this).prev().prev().children('img');
        var media_image_url = $(this).siblings('.img-preview-wrap');

        var meta_image_frame = wp.media.frames.meta_image_frame = wp.media({
            title: media_title,
            button: {text: media_button},
            library: {type: 'image'}
        });
        // Opens the media library frame.
        meta_image_frame.open();
        // Runs when an image is selected.
        meta_image_frame.on('select', function () {

            // Grabs the attachment selection and creates a JSON representation of the model.
            var media_attachment = meta_image_frame.state().get('selection').first().toJSON();

            // Sends the attachment URL to our custom image input field.
            media_input_val.val(media_attachment.url);
            if (media_image_url_value !== null) {
                media_image_url_value.attr('src', media_attachment.url);
                media_image_url.show();
                LATESTVALUE(media_image_upload.closest("p"));
            }
        });
    });

    // Runs when the image button is clicked.
    jQuery('body').on('click', '.media-image-remove', function (e) {
        $(this).siblings('.img-preview-wrap').hide();
        $(this).prev().prev().val('');
    });

    var LATESTVALUE = function (wrapObject) {
        wrapObject.find('[name]').each(function () {
            $(this).trigger('change');
        });
    };

    $( '.businessup-install-plugins' ).click( function ( e ) {
        e.preventDefault();

        $( this ).addClass( 'updating-message' );
        $( this ).text( businessup_adi_install.btn_text );

        $.ajax({
            type: "POST",
            url: ajaxurl,
            data: {
                action     : 'businessup_getting_started',
                security : businessup_adi_install.nonce,
                slug : 'advanced-import',
                request : 1
            },
            success:function( response ) {
                setTimeout(function(){
                    $.ajax({
                        type: "POST",
                        url: ajaxurl,
                        data: {
                            action     : 'businessup_getting_started',
                            security : businessup_adi_install.nonce,
                            slug : 'shortbuild',
                            request : 2
                        },
                        success:function( response ) {
                            var extra_uri, redirect_uri, dismiss_nonce;
                            redirect_uri         = businessup_adi_install.adminurl+'/themes.php?page=advanced-import&browse=all';
                            window.location.href = redirect_uri;

                        },
                        error: function( xhr, ajaxOptions, thrownError ){
                            console.log(thrownError);
                        }
                    });
                }, 2000);
            },
            error: function( xhr, ajaxOptions, thrownError ){
                console.log(thrownError);
            }
        });
    } );

});
