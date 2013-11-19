App.PostsRoute = Ember.Route.extend({
    model: function() {
        return $.getJSON('/blog').then(function(data){
            return data.posts.map(function(post) {
                return post;
            });
        });
    }
});
