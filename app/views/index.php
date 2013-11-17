<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bloggr in Ember.js and Laravel</title>
    <!-- include twitter bootstrap -->
    <link rel="stylesheet" href="/css/builds/main.css">
</head>
<body>
    <div class="container">
        <script type="text/x-handlebars">
            <div class="navbar navbar-default" role="navigation">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Bloggr</a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li>{{#link-to 'posts'}}Posts{{/link-to}}</li>
                        <li>{{#link-to 'about'}}About{{/link-to}}</li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>

            {{outlet}}
        </script>

    </div> <!-- end of the container -->


    <!-- load all of the ember.js content. Libs is copiled version of jQuery, Ember, Handlebars etc -->
    <script src="/js/builds/libs.js"></script>
    <script src="/js/builds/templates.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/showdown/0.3.1/showdown.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.4.0/moment.min.js"></script>

    <script src="/js/builds/app.js"></script>
</body>
</html>
