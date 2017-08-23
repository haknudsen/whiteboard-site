// JavaScript Document

$(document).ready(function () {
    $.ajax({
        url: "http://seovideoexperts.com/wp-json/wp/v2/posts?per_page=1",
        success: function (result) {
            var excerpt = result[0].excerpt.rendered;
            var linkStart = '[&hellip;]';
            var theLink = '<a href="http://seovideoexperts.com/">[&hellip;]</a>';
            var excerptLink = excerpt.replace(linkStart, theLink);
            $("#excerpt").html(excerptLink);
            var title = '<a href="http://seovideoexperts.com/">' + result[0].title.rendered + '</a>';
            $('#title').html(title);
        },
        error: function (xhr) {
            alert("An error occured: " + xhr.status + " " + xhr.statusText);
        }
    });
});
