$(document).ready(function () {
    fetch_user_data();
    function fetch_user_data(query = '') {
        if (query != '')
            $.ajax({
                url: urlSearch,
                method: 'GET',
                data: { 'query': query },
                dataType: 'json',
                success: function (data) {
                    $('#users_data').html(data.user_data);
                    $('#total_records').text(data.total_data);
                }
            })
    }
    $(document).on('keyup', '#search', function () {
        var query = $(this).val();
        fetch_user_data(query);
    });
    $('.like').on('click', function (event) {
        event.preventDefault();
        var isLike = event.target.nextElementSibling != null;
        var postId = event.target.parentNode.dataset['postid'];
        console.log(isLike);
        console.log(postId);
        console.log(userId);

        $.ajax({
            type: 'POST',
            url: urlLike,
            dataType: 'json',
            // processData: false,
            // contentType: false,
            // cache: false,
            data: { user_id: userId, post_id: postId, like: isLike, _token: token },
            // mimeType: 'multipart/form-data',
            // headers: {
            //     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            // },
            // success: function (data) {
            //     console.log(data)
            // }
        })
            .done(function (data) {
                console.log('DONE :: ', data);
            })
            .fail((jqXHR, options, error) => {
                console.log('FAIL :: ', jqXHR);
            })
    });
})
