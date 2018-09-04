$(document).ready(function () {
    $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
    });

    $(':input[type="submit"]').prop('disabled', true);
    $(':input[type="text"]').keyup(function() {
        if($(this).val() != '') {
            let parent_dom = $(this).parent("li");
            let submit_dom = parent_dom.children(':input[type="submit"]');
            submit_dom.prop('disabled', false);
        }
    });

    $(":input[type='file']").on("change",function(event){
        let parent_dom = $(this).parent("form");
        let submit_dom = parent_dom.children(':input[type="submit"]');
        submit_dom.prop('disabled', false);
    }
    )
    
    $(':input[type="submit"]').click(function (e) { 
        alert("click");
        let parent_dom = $(this).parent("li");
        let text_dom = parent_dom.children(':input[type="text"]');
        // First way to get a value
        let dom_value = text_dom.val();
        let dom_name = text_dom.attr('name');
        
        $.ajax({
            type: "POST",
            url: "modifyDB",
            data: {name:dom_name, value:dom_value},
            dataType: "json",
            success: function (response) {
                alert('更改'+response.name +"為"+response.value);
            }
        });
        let submit_dom = parent_dom.children(':input[type="submit"]');
        submit_dom.prop('disabled', true);
    });

});