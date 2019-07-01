<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="reset.css">
        <link rel="stylesheet" type="text/css" href="Portfolio.css">
        <script src="blogFunctional.js" type="text/javascript"></script>

        <title>Home</title>

        <header>
          <div class="hContainer">
          <img class="hImg" src="images/bBanner.jpg" alt="A picture of a blog" width="304" height="228">

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
      <section>
      <figure>
      <img class="hImg" src="images/images.png" alt="A picture of me" width="304" height="1000">
      <figcaption>This is me</figcaption>
      </figure>
      <br>
      <br>
      <br>
      </div>
      </div>
      </section>
      </article>

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

        <hgroup>
        <h2 class="para">Introduction</h2>
        <p class="homeT">My name is Omar. I am currently studying computer science at Queen Mary University of London.
        For more information about me on either my personal interest or on my educational background please use the links provided.
        I hope you enjoy this website and are able to gather the information you need from it</p>

            <h3>Quote of the day</h3>

      <p class="headT">"Imagine living with no regrets. Take that imagination and act upon it. Hope without Action is just imagination"

      </div>
      </aside>
      </div>
    </div>
    <script>blogKeyOff()</script>
    <script>loginStatus()</script>

    <div id="footer">
      <footer>
        <p>Omar 2019</p>
      </footer>
    </div>

    </body>
</html>
