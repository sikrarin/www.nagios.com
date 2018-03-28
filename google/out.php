<!DOCTYPE html>
<html>
<head>
	<title>Page Title</title>
</head>
<body>
<a href="#" onclick="signOut();">Sign out</a>
<script>
  function signOut() {
    var auth2 = gapi.auth2.getAuthInstance();
    auth2.signOut().then(function () {
      console.log('User signed out.');
    });
  }
</script>
<a href="http://localhost/google3.php">here</a> sign out


</body>
</html>
