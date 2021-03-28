$(document).ready(function() {
    $("a.img").hover(function(e) {
         e.preventDefault();
         var img = $('#img')[0]
         img.src =  $(this).attr('data-file')
         $("#img").removeClass("none");
    }, function(){
        img.src =  $(this).attr('')
        $("#img").addClass("none");
    });

    $('#search').submit(function (e) {
        e.preventDefault();
        if ($.support.pjax)
            $.pjax({url: "/search/" + e.target.elements[0].value, container: '#pjax-container'});
        else
            window.location.href = "/search/" + e.target.elements[0].value;
    });
});

$(document).on('submit', 'form[data-pjax]', function(event) {
    $.pjax.submit(event, '#pjax-container')
});

$(document).pjax('a', '#pjax-container');

$(document).pjax('a', '#pjax-container');