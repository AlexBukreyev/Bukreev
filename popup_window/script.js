// popup window
$('.show_popup').click(function() {
    var popup_id = $('#' + $(this).attr("rel"));
    $(popup_id).show();
    $('.overlay_popup').show();
})
$('.overlay_popup').click(function() {
    $('.overlay_popup, .popup').hide();
    $('.envelope').show();
})
// const $envelope = $('.envelope'),
//     $popup = $('.popup'),
//     $popupOverlay = $('.overlay_popup'),
//     $popupClose = $('.close');
//
// $envelope.on('click', showPopup);
// $popupClose.on('click', hidePopup);
//
// function showPopup() {
//     $envelope.hide();
//     $popupClose.show();
//     $popupOverlay.show();
//     $popup.filter(`#${$(this).parent().attr('rel')}`).show();
// }
//
// function hidePopup() {
//     $envelope.show();
//     $popupClose.hide();
//     $popupOverlay.hide();
//     $popup.hide();
// }




// $('.envelope').click(function () {
//     $('.envelope').hide();
//     $('.close').show();
// })
// $('.close').click(function () {
//     $('.close').hide();
//     $('.envelope').show();
// })

// ajax GET to the remote server
function ajax_get(url, callback) {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            console.log('responseText:' + xmlhttp.responseText);
            try {
                var data = JSON.parse(xmlhttp.responseText);
            } catch(err) {
                console.log(err.message + " in " + xmlhttp.responseText);
                return;
            }
            callback(data);
        }
    };

    xmlhttp.open("GET", url, true);
    xmlhttp.send();
}

ajax_get('http://dev.nexusmedia-ua.com/devtest/', function(data) {

    for (var i=0; i < data["messages"].length; i++) {
        var html = '<div>';
            html += '<div style="width: 30px" ><img src="' + data["messages"][i]["image"] + '">' +  "</div>";
            html += '<div style="margin-left: 60px;margin-top: -45px"><h5 >' + data["messages"][i]["name"] + "</h5></div>";
            html += '<div style="margin-left: 60px;"><h6>' + data["messages"][i]["title"] + "</h6></div>";
            html += '</div>';
            html += '<div class="object-top"><h6>' + data["messages"][i]["message"] + "</h6></div>";
    }
    document.getElementById("text").innerHTML = html;
});


//
