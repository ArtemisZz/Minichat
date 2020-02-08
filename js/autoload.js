//Show the messages in chatbox
$(document).ready(function () {
    function getData() {
        $.ajax({
            type: 'POST',
            url: '../controllers/auto-reload.php',
            success: function (data) {
                $('#chatbox').html(data);
            }
        });
    }
    getData();
    setInterval(function () {
        getData();
    }, 1000);  // it will refresh your data every 1 sec

});

//Scroll to the end
$("#chatbox").animate({scrollTop: $(this).height()}, "normal")

//Open-close the chat box
function revertPopUp() {
    if(document.getElementsByClassName("popup")[0].style.display = "block"){
        document.getElementsByClassName("popup")[0].style.display = "none";
    }
    else {
        document.getElementsByClassName("popup")[0].style.display = "block";
    }
}