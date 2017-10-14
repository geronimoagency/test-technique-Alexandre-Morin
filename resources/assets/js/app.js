(function($){
    $(function(){
        // Init scroll to top
        $.scrollUp({
            topSpeed: 1000,
            animationInSpeed: 1000,
            animationOutSpeed: 1000
        });

        // Fill Popup Modal Comments on shown
        $('#comments').on('shown.bs.modal',function(e){
            var item = JSON.parse($(e.relatedTarget).attr('data-item'));

            $(this)
                .find('.modal-header img.tn')
                .attr({
                    'src': item.image.src,
                    'srcset': item.image.srcset
                });

            $(this)
                .find('.modal-header h3')
                .text(item.title);

            $(this)
                .find('.modal-header p')
                .text(item.description);

            $(this)
                .find('.modal-body h4>span')
                .text(item.count_comments);

            $(this)
                .find('.modal-body article')
                .append('<h5>' + item.comments.author + '</h5><p class="date">' + item.comments.published_at + '</p><p>' + item.comments.comment + '</p>')
                .clone().prependTo('article');
        });

        // Clear Popup Modal Comments on leaving
        $('#comments').on('hidden.bs.modal', function(){
            $(this)
                .find('.modal-header img.tn')
                .removeAttr('src');

            $(this)
                .find('.modal-header img.tn')
                .removeAttr('srcset');

            $(this)
                .find('.modal-header h3')
                .text('');

            $(this)
                .find('.modal-header p')
                .text('');

            $(this)
                .find('.modal-body h4>span')
                .text('');

            $(this)
                .find('.modal-body article')
                .text('');
        });

        // Ajax Validation Form Add Comment
        $('#commentsForm').on('submit', function(e){
            e.preventDefault();
            var form = $(this);

            $.ajax({
                method: form.attr('method'),
                url: form.attr('action'),
                data: form.serialize(),
                dataType: "json"
            })
                .done(function(){
                    $('.alert-success')
                        .removeClass('hidden')
                        .find('h4')
                        .text('Merci pour votre commentaire');

                    $('.alert')
                        .delay(3000)
                        .fadeOut(500);
                });
        });
    });
})(jQuery);