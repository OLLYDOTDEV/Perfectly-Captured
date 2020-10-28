
var dir = "Perfectly-Captured/Small";
var fileextension = ".jpg";
 $.ajax({
    //This will retrieve the contents of the folder if the folder is configured as 'browsable'
    url: dir,
    success: function (data) {
        // List all mp4 file names in the page
        $(data).find("a:contains(" + fileextension + ")").each(function () {
            var filename = this.href.replace(window.location.host, "").replace("http:///", "");
            $("body").append($("<img src=" + dir + filename + "></img>"));
        });
    }
});