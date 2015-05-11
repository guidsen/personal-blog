<html>
<head>
    <title>Laravel</title>
    <link href='http://fonts.googleapis.com/css?family=Lora:400,700' rel='stylesheet' type='text/css'>
    <link href="css/prism.css" rel="stylesheet" type="text/css">
    <link href="css/app.css" rel="stylesheet" type="text/css">
</head>
<body>

<div class="wrapper col-md-8 col-md-offset-2">
    <section class="profile clearfix">
        <img class="pull-left avatar" src="images/myself.png">
        <div class="profile-info">
            <p>
                Hi, my name is Guido Schmitz. <br>
                I'm a web developer trying to keep up with the latest coding trends.
            </p>
            <p>
                Currently I'm working for a startup called Flex-Appeal.
            </p>
            <p>
                You can find me at twitter <a href="#">@guidsen</a> or connect me via <a href="#">LinkedIn</a>.
            </p>
        </div>
    </section>
    <section class="posts-container">
        <article class="post">
            <div class="post-heading">
                <h2 class="post-title">Lumen as a micro-service</h2>

                <div class="post-info">February 21, 2015</div>
            </div>
            <div class="post-content">
                Proin eget consequat nibh. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac
                turpis egestas. Donec porta ultrices libero, sed pulvinar neque sodales non. Aliquam erat volutpat.
                Etiam
                sit amet est ultrices velit pretium ultrices eu ut nisi. Maecenas eleifend tellus vitae lorem posuere,
                non
                accumsan nisl lobortis. Aliquam ac orci laoreet, elementum ipsum ut, cursus tortor. Nam sit amet gravida
                arcu, vel faucibus dolor.

<pre><code class="language-php">Schema::create('posts', function(Blueprint $table) {
    $table->increments('id');
    $table->string('title');
    $table->text('body');
    $table->timestamps();
});</code></pre>

                Proin eget consequat nibh. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac
                turpis egestas. Donec porta ultrices libero, sed pulvinar neque sodales non. Aliquam erat volutpat.
                Etiam
                sit amet est ultrices velit pretium ultrices eu ut nisi. Maecenas eleifend tellus vitae lorem posuere,
                non
                accumsan nisl lobortis. Aliquam ac orci laoreet, elementum ipsum ut, cursus tortor. Nam sit amet gravida
                arcu, vel faucibus dolor.
            </div>
        </article>
    </section>
</div>
<script src="scripts/prism.js" type="text/javascript"></script>
</body>
</html>
