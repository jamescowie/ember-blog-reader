App.PostRoute = Ember.Route.extend({
    model: function(params) {
        //return posts.findBy('id', params.post_id);
        return $.getJSON('http://tomdale.net/api/get_post/?id=' + params.post_id+'&callback=?').then(function(data) {
                data.post.body = data.post.content;
                return data.post;
            });
    }
});