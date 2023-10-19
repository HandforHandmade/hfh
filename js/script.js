// password view
$('.view-password').find('.input-password').each(function(index, input) {
    var $input = $(input);
    $input.parent().find('.icon-view').click(function() {
        var change = "";
        if ($(this).find('i').hasClass('fa-eye')) {
            $(this).find('i').removeClass('fa-eye')
            $(this).find('i').addClass('fa-eye-slash')
            change = "text";
        } else {
            $(this).find('i').removeClass('fa-eye-slash')
            $(this).find('i').addClass('fa-eye')
            change = "password";
        }
        var rep = $("<input type='" + change + "' />")
            .attr('id', $input.attr('id'))
            .attr('name', $input.attr('name'))
            .attr('class', $input.attr('class'))
            .val($input.val())
            .insertBefore($input);
        $input.remove();
        $input = rep;
    }).insertAfter($input);
});



function iconFormat(icon) {
    if (!icon.id) { return icon.text; }
    var $icon = $(
        '<span ><img sytle="display: inline-block;" src="images/dropdwon/' + icon.element.value.toLowerCase() + '.png"  /> ' + icon.text + '</span>'
    );
    return $icon;
}


$(document).ready(function() {
    // time picker

});