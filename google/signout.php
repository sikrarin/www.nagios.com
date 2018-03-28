<html>
<head>
   <meta name="google-signin-client_id" content="331400846717-r08gt1211kg62q1h3jtrv3ik5cq27k56.apps.googleusercontent.com">
</head>
<body>
  <script>
    function signOut() {
      var auth2 = gapi.auth2.getAuthInstance();
      auth2.signOut().then(function () {
        console.log('User signed out.');
      });
    }

    function onLoad() {
      gapi.load('auth2', function() {
        gapi.auth2.init();
      });
    }
  </script>
  <a href="#" onclick="signOut();">Sign out</a>

  <script src="https://apis.google.com/js/platform.js?onload=onLoad" async defer></script>
</body>
</html>
