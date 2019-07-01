<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="reset.css">
        <link rel="stylesheet" type="text/css" href="Portfolio.css">

        <script src="blogFunctional.js" type="text/javascript"></script>
        <title>Blog</title>

        <header>
          <div class="hContainer">
          <img class="hImg" src="images/bBanner.jpg" alt="A picture of University" width="304" height="228">

          </div>
        </header>

        <nav>
          <ul class="main">
              <li class= "first"><a class="first"  href="index.php"><b>Omar Hassan Abdi</b></a></li>
              <li class="first"><a class="first" id="aboutMe" href="About_Me.html">About Me</a></li>
              <li class="first"><a class="first" id="Achievements" href="Achievements.html">Achievements</a></li>
              <li class="first"><a class="first" id="Education" href="Education.html">Education</a></li>
              <li class="first"><a class="first" id="Experience" href="Experience.html">Experience</a></li>
              <li class="first"><a class="first" id="Portfolio" href="Portfolio.html">Portfolio</a></li>
              <li class="first"><a class="first" id="Contact"href="Contact.html">Contact</a></li>
              <li class="first"><a class="first" id="Blog"href="Blog.html">Blog</a></li>

          </ul>
        </nav>
    </head>
    <body>

      <div class="flex-container">

      <div class="column left">
      <div class="row">
      <article>
        
      <section class="hBlog">
      <p class="time"> 🕒 29th June 2019 14:25 Europe/London</p>
      <p><b></b></p>
      <p class="blog"></p>
      <br>
      <br>
    </section>
    <section class="hBlog2">
    <div class="align4">
    <br>
    <form method="post" action="addPost.php">
    <input class="button6" type="Submit" value="Post" name="post2">
    <input class="button6" type="Submit" value="Back" name="back">
    </form>
    </div>
    <br>
    <br>
    </section>      </div>
      </div>

      <div class="column right">
      <div class="row">
      <aside>
        <p id="login"></p>
        <div class="align">
        <form>
        <input id="button5" type="Submit" value="Login" onclick="return login(event)">
        <input class="button" type="Submit" value="Add Blog Post" onclick="return blogFunction(event)">
        </form>
        </div>
          <h3>Quote of the day</h3>
          <p class="headT">"To do is to be."

      <br>
      <br>
      </aside>
      </div>
    </div>
      </div>
    <script>
    loginStatus()
    </script>

    <div id="footer">
      <footer>
        <p>Omar 2019</p>
      </footer>
    </div>

    </body>
</html>
