value=75
$(document).ready(function () {
    //header
    $('#reboot').click(function () {

        $.ajax({
            url: "index.php",
            method: "post",
            success: function (res) {
                $(".display-4").empty();
                $(".display-4").append('Wake up! Time to die!');
                $(".lead").empty();
                $(".lead").append("T'endors pas, c'est l'heure de mourir.");
                console.log(res);
            }
        });
    });
    $('#1').click(function () {
        $.ajax({
            url: "index.php",
            method: "post",
            success: function (res) {
                $(".display-4").empty();
                $(".display-4").append('Page 1!');
                $(".lead").empty();
                $(".lead").append("Ceci est la page 1");
                console.log(res);
            }
        });
    });
    $('#2').click(function () {
        $.ajax({
            url: "index.php",
            method: "post",
            success: function (res) {
                $(".display-4").empty();
                $(".display-4").append('Page 2');
                $(".lead").empty();
                $(".lead").append("Ceci est la page 2");
                console.log(res);
            }
        });
    });
    $('#3').click(function () {
        $.ajax({
            url: "index.php",
            method: "post",
            success: function (res) {
                $(".display-4").empty();
                $(".display-4").append('Page 3');
                $(".lead").empty();
                $(".lead").append("Ceci est la page 3");
                console.log(res);
            }
        });
    });
    $('#plus').click(function () {
        value=value+1
        if(value>=100)
        {
            value=100
        }
        $.ajax({
            url: "index.php",
            method: "post",
            success: function (res) {
                $(".progress").empty();
                $(".progress").append('<div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: '+value+'%"></div>');
                
                console.log(res);
            }
        });
    });
    $('#moin').click(function () {
        value=value-1
        if(value<=0)
        {
            value=0
        }
        $.ajax({
            url: "index.php",
            method: "post",
            success: function (res) {
                $(".progress").empty();
                $(".progress").append('<div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: '+value+'%"></div>');
                
                console.log(res);
            }
        });
    });
    $('#formvalidation').click(function () {
        if ($("#exampleInputPassword1").val().empty())
        {
            console.log(42)
        }
    });
});


