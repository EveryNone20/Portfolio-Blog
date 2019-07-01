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
      <div class="pad"></div>
      <section class="hBlog">
          <p class="time"> 🕒 31st March 2019 9:42 Europe/London</p>
          <p><b>hey</b></p>
          <p class="blog">hey</p>
          <br>
          <br>
        </section>
        <section class="hBlog2">
        <div class="align4"><br>
        <form method="post" onsubmit="return addComment()" action="addComment.php">
        <textarea name="addC" rows="5" cols="60" required></textarea><br>
        <input type="hidden" name="ID" value="58">
        <input class="button6" type="Submit" value="Add Comment">
        </form>
        </div>
        <br>
        <br>
        </section><section class="hBlog">
          <p class="time"> 🕒 29th March 2019 11:59 Europe/London</p>
          <p><b>bob</b></p>
          <p class="blog">bob</p>
          <br>
          <br>
        </section>
        <section class="hBlog2">
        <div class="align4"><p class="time"> 🕒 20:40 Europe/London 29th March 2019</p>
            <p class="blog">ok</p>
            <br>
            <iframe
            src="https://www.facebook.com/plugins/like.php?href=http%3A%2F%2Flocalhost%3A9080%2FWebdesign%2Fportfolio%2FviewBlog.php&width=450&layout=standard&action=like&size=small&show_faces=true&share=true&height=80&appId"
            width="450" height="80" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe><br>
        <form method="post" onsubmit="return addComment()" action="addComment.php">
        <textarea name="addC" rows="5" cols="60" required></textarea><br>
        <input type="hidden" name="ID" value="57">
        <input class="button6" type="Submit" value="Add Comment">
        </form>
        </div>
        <br>
        <br>
        </section><section class="hBlog">
          <p class="time"> 🕒 28th March 2019 12:11 Europe/London</p>
          <p><b>2nd blog</b></p>
          <p class="blog">web project</p>
          <br>
          <br>
        </section>
        <section class="hBlog2">
        <div class="align4"><br>
        <form method="post" onsubmit="return addComment()" action="addComment.php">
        <textarea name="addC" rows="5" cols="60" required></textarea><br>
        <input type="hidden" name="ID" value="56">
        <input class="button6" type="Submit" value="Add Comment">
        </form>
        </div>
        <br>
        <br>
        </section><section class="hBlog">
          <p class="time"> 🕒 28th March 2019 12:10 Europe/London</p>
          <p><b>my blog</b></p>
          <p class="blog">hshg  qjhwkj</p>
          <br>
          <br>
        </section>
        <section class="hBlog2">
        <div class="align4"><p class="time"> 🕒 12:11 Europe/London 28th March 2019</p>
            <p class="blog">nice blog</p>
            <br>
            <iframe
            src="https://www.facebook.com/plugins/like.php?href=http%3A%2F%2Flocalhost%3A9080%2FWebdesign%2Fportfolio%2FviewBlog.php&width=450&layout=standard&action=like&size=small&show_faces=true&share=true&height=80&appId"
            width="450" height="80" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe><p class="time"> 🕒 12:12 Europe/London 28th March 2019</p>
            <p class="blog">yes</p>
            <br>
            <iframe
            src="https://www.facebook.com/plugins/like.php?href=http%3A%2F%2Flocalhost%3A9080%2FWebdesign%2Fportfolio%2FviewBlog.php&width=450&layout=standard&action=like&size=small&show_faces=true&share=true&height=80&appId"
            width="450" height="80" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe><br>
        <form method="post" onsubmit="return addComment()" action="addComment.php">
        <textarea name="addC" rows="5" cols="60" required></textarea><br>
        <input type="hidden" name="ID" value="55">
        <input class="button6" type="Submit" value="Add Comment">
        </form>
        </div>
        <br>
        <br>
        </section><br><br><br>      </div>
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
      <p class="headT">"Why look so into the future when the present is staring right into your face."

      
      </aside>
      </div>

      <div id="footer">
        <footer>
          <p>Omar 2019</p>
        </footer>
      </div>

    <script>blogKeyOff()</script>
    <script>loginStatus()</script>

    </body>
</html>
