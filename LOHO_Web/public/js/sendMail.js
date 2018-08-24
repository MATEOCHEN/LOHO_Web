
    $(document).ready(function () {
        $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                  }
              });

        $('#emailButton').click(function ($) { 
            $.ajax({
                type: "POST",
                url: "{{ url('/Account/EmailVerification') }}",
                data: { date : '2015-03-12'},
                dataType: "json",
                success: function (response) {
                   alert(response); 
                }
            });
        });
    });