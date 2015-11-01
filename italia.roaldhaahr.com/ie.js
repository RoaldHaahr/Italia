//http://stackoverflow.com/questions/19999388/jquery-check-if-user-is-using-ie

function msieversion() {

        var ua = window.navigator.userAgent;
        var msie = ua.indexOf("MSIE ");

        if (msie > 0 || !!navigator.userAgent.match(/Trident.*rv\:11\./))      // If Internet Explorer, return version number
            alert("Please use Google Chrome or Mozilla Firefox for view of this website.");

    return false;
}