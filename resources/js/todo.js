$(document).ready(function(){
    $("#add").click(function(e) {
        e.preventDefault();

        let title = $("input[name=title]").val();
        let description = $("textarea[name=description]").val();
        let dueTo = $("input[name=dueto]").val();

        $.ajax({
            type: 'POST',
            url: '/todo',
            data: {
                title: title,
                description: description,
                dueto: dueTo
            },
            success: function(data) {
                $("#todo").append(
                    "<li>"+title+" | "+ dueTo + "</li>"
                );
            }
        })
    });
});

