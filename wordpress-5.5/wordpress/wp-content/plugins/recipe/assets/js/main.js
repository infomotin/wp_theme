(function($) {
    $("#recipe_rating").bind('rated', function() {
        $(this).rateit('readonly', true);
        var form = {
            action: 'r_rate_recipe',
            rid: $(this).data('rid'),
            rating: $(this).rateit('value')
        };
        //sending js obj with js post method 
        $.post(recipe_obj.ajax_url, form, function(data) {

        });

    });
})(jQuery);