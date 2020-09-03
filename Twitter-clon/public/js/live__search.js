$(document).ready(function(){
        fetch_customer_data();
        function fetch_customer_data(query ='')
        {
            if(query != '')
            $.ajax({
                url:"{{ route('live_search.action')}}",
                method: 'GET',
                data:{'query':query},
                dataType: 'json',
                success:function(data)
                {
                    $('#users_data').html(data.table_data);
                    $('#total_records').text(data.total_data);
                }
            })
        }
        $(document).on('keyup', '#search', function(){
            var query = $(this).val();
            fetch_customer_data(query);
        });
    })
