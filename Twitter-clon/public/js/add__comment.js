//  $rules = array(
//             'text' => 'required',
//         );
//         $error = Validator::make($request->all(), $rules);

//         if ($error->fails()) {
//             $result = array(
//                 'errors' => $error->errors()->all()
//             );

//             echo json_encode($result);
//         }
//         $form__data = $request->all();

//         Comment::create($form__data);
//         $result = array('success' => 'Data Added successfully.');
//         echo json_encode($result);

$('#comment__form').on('submit', function (event) {
    event.preventDefault();
    var action__url = '';
    if ($('#action').val() == 'Add') {
        action__url = "{{route('comment.store')}}";
    }
    $.ajax({
        url: action__url,
        method: "POST",
        data: $(this).serialize(),
        dataType: "json",
        success: function (data) {
            var html = '';
            if (data.errors) {
                html = '<div class="alert alert-danger">';
                for (var count = 0; count < data.errors.length; count++) {
                    html += 'p' + data.errors[count] + '</p>';
                }
                html += '</div>';
            }
            if (data.success) {
                $('#comment__form')[0].reset();
            }
            $('#form__result').html(html);
        }
    })
})
