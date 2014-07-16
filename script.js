$("document").ready(function() {
    $(document).on("mousemove", function(event) {
        $("h1").text("X: " + event.pageX + ", Y: " + event.pageY);
        var X = event.pageX;
        var Y = event.pageY;


    });

    function rastgele(x, y) {
        /*x ten y'ye kadar rastgele sayı ver*/
        return ~~(Math.random() * y) + x;
    }
    setInterval(function() {
        var sayi = rastgele(1, 500);
        $("#icersi").text(sayi);
        $.post("/socket.php",function(data){
            $("#ha2").text(data);
        });

    }, 500);

});