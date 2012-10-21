(function() {

$('#twitter-users').find('a').on('click', function() {
name = $(this).attr('id');

$("#tweets").html('<img src="ajax-loader.gif" />');  

$.ajax({
url: 'twitter-JSON.php',
data: {
name: name
},
type: 'GET',
success: function(res) {
$("#tweets").html(res);
}

});

});

$('#tweets').ajaxComplete(function() {

$('#tweets').find('li').on('click', function() {
$(this).addClass('read');
console.log($(this).attr('class'));
});
});
})();