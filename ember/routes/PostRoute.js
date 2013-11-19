App.PostRoute = Ember.Route.extend({
    model: function(params) {
        //return posts.findBy('id', params.post_id);
        return $.getJSON('/blog/show').then(function(data) {
                return data.post;
            });
    }
});