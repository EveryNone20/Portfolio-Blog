function addComment()
{
  var ok = confirm("Do you wish to post?");
  if(ok==true)
  {
  }
  else
  {
    return false;
  }
}

function messagePopUp()
{
  alert("Message submitted");
}
function blogFunction(e)
{
  console.log(e);
  e.preventDefault();
  var login = localStorage.getItem("login");
  if(login==1)
  {
    blogKeyOff();
    window.open("AddPost.html","_self");
  }
  else
  {
    alert("Please log in first");
    return false;
  }
}

function loginStatus()
{
  var log = localStorage.getItem("login");
  if(log==1)
  {
    document.getElementById("login").innerHTML = ("Welcome User!");
    document.getElementById("button5").value = "Log Out";
  }
  else
  {
    document.getElementById("login").innerHTML = ("Please log In!");
    document.getElementById("button5").value = "Log In";
  }
}

function login(e)
{
  console.log(e);
  e.preventDefault();
  var checker = document.getElementById("button5").value;

  if(checker=="Log Out")
  {
    var d = confirm("Are you sure you want to log out?");
    if(d==true)
    {
      localStorage.removeItem("login");
      localStorage.removeItem("title");
      localStorage.removeItem("post");
      window.open("logout.php","_self");
      loginStatus();
    }
    else
    {
      return false;
    }
  }
  else
  {
    window.open("Login.html","_self");
  }

}

function setLogin()
{
  localStorage.setItem("login", 1);
}

function register(e)
{
  console.log(e);
  e.preventDefault();
  window.open("Register.html","_self");
}

function home(e)
{
  console.log(e);
  e.preventDefault();
  window.open("index.php","_self");
}

function FinishRegistration()
{
  var p1 = document.getElementById("inputPassword1").value;
  var p2 = document.getElementById("inputPassword2").value;

  if(p1!=p2)
  {
    alert("Please use the same password for both fields");
    return false;
  }
}

function viewBlog(e)
{
  console.log(e);
  e.preventDefault();
  var checker = localStorage.getItem("login");
  if(checker==1)
  {
    window.open("viewBlog.php","_self");
  }
  else
  {
    alert("You need to log in first");
    return false;
  }
}

//Add blogFunction post scripts
function clearFunction()
{
  var clear = confirm("Do you wish to clear?");
  if(clear==true)
  {
    document.getElementById('textA2').setAttribute('value', "");
    document.getElementById('title').setAttribute('value', "");
  }
  else
  {
    return false;
  }
}

function validation(e)
{
  console.log(e);
  var title = document.getElementById("title").value;
  var text = document.getElementById("textA2").value;

  if(title=="")
  {
    document.getElementById("title").style.backgroundColor = "red";
  }
  if(text=="")
  {
    document.getElementById("textA2").style.backgroundColor = "red";
  }
  if(title!="")
  {
    document.getElementById("title").style.backgroundColor = "white";
  }
  if(text!="")
  {
    document.getElementById("textA2").style.backgroundColor = "white";
  }
  if(title==""||text=="")
  {
    e.preventDefault();
  }
  else if(title==""&&text=="")
  {
    e.preventDefault();
  }
  var title = document.getElementById("title").value;
  var post = document.getElementById("textA2").value;
  localStorage.setItem("title", title);
  localStorage.setItem("post", post);
  blogKeyOn();
}

function backData()
{
  if(localStorage.getItem("back")==1)
  {
    var tit = localStorage.getItem("title");
    var pos = localStorage.getItem("post");
    document.getElementById('title').setAttribute('value', localStorage.getItem('title'));
    document.querySelector('textarea').value=localStorage.getItem('post');
    blogKeyOff();
  }
}

function blogKeyOn()
{
  localStorage.setItem("back", 1);
}

function blogKeyOff()
{
  localStorage.setItem("back", 0);
}
