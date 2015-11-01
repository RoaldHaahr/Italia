//http://stackoverflow.com/questions/16837525/resize-div-height-with-jquery

$(document).ready(function() {

    var right;

    if($(document).width() > 319) {

        $('#image-right' && '#left img').load(function() {
    
            right = $('#image-right').height();

            if($(document).width() > 1024) {
                setHeight('#content');  
            } else if($(document).width() < 1025 && $(document).width() > 768 && $('#right').css('display') != 'none') {
                $('#right').height(right);
                $('#content').height(right * 1.4);  
            } else {
                var left = $('#left img').height();
                $('#content').height(left * 3 * 1.0679);
            }

        });

    }

    window.onresize = function() {

        if($(document).width() > 1024) {
            setHeight('#content');  
        } else if($(document).height() < 1025 && $(document).height() > 768) {
            right = $('#image-right').height();
            $('#content').height(right * 1.4);  
        } else {
            $('#content').height($('#left img').height() * 3 * 1.0679);
        }

    }; 
});

function setHeight(div) {
   div = $(div);

   var rightHeight = $('#image-right').height();   

   $(div).height(rightHeight);
   console.log(div +" " + rightHeight);
}