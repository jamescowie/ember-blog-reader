App.PostsRoute = Ember.Route.extend({
    model: function() {
        //return posts;
        return $.getJSON('http://tomdale.net/api/get_recent_posts/?callback=?').then(function(data){
            return data.posts.map(function(post) {
                post.body = post.content;
                return post;
            });
        });
    }
});
