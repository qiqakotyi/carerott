/**
 * Created by phumlani on 1/6/16.
 */


jQuery(function() {
    jQuery( "#tabs" ).tabs();
});

jQuery('.validate').click(
    validate
);


function validate() {
    var url = document.getElementById("url").value;
    var pattern = /(ftp|http|https):\/\/(\w+:{0,1}\w*@)?(\S+)(:[0-9]+)?(\/|\/([\w#!:.?+=&%@!\-\/]))?/;
    if (pattern.test(url)) {
        alert("Url is valid");
        return true;
    }
    alert("Url is not valid!");
    return false;

}