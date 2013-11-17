App.PostsRoute = Ember.Route.extend({
    model: function() {
        return $.getJSON('/blog').then(function(data){
            console.dir(data);
            return data.posts.map(function(post) {
                post.body = post.content;
                return post;
            });
        });
    }
});
