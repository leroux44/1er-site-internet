<script type="text/javascript">
$(document).ready(function(){
$('#paragraphe li').click(function(){
var text = $(this).children('p');
 
if (text.is(':hidden')){
text.slideDown('500');
$(this).children('span').html('-');
}
else {
 
$(this).children('span').html('+');
}
});
});
</script>