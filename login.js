var count = 2;

function validate ()
{
   var user = document.login.username.value.toString().toLowerCase();
   var password = document.login.password.value;
   var valid = false;
   var usernameArray = ["admin"]
   var passwordArray = ["Webtech"]
   for (var i = 0; i < usernameArray.length; i++)



if (user == usernameArray[i])
if (password == passwordArray [i])
{
   valid = true;
   break;
}

if(valid)
{
   alert("Login was successful");
   window.location.href='./index.php';
   return false ;
}
else 
{
    alert("Wrong password or username")
}
}