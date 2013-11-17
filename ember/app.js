App = Ember.Application.create();

// Cant find another place to put these :(
App.Router.map(function() {
        this.resource('about');
        this.resource('posts', function() {
                this.resource('post', { path: ':post_id' });
        });
});

// handlebar helpers
Ember.Handlebars.helper('format-date', function(date) {
        return moment(date).fromNow();
});

var showdown = new Showdown.converter();

Ember.Handlebars.helper('format-markdown', function(input) {
        return new Handlebars.SafeString(showdown.makeHtml(input));
});