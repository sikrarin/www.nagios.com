<!DOCTYPE html>
<html>
<head>
	<title>Page Title</title>
</head>
<body>
<script src="https://apis.google.com/js/platform.js" async defer></script>
<meta name="google-signin-client_id" content="331400846717-r08gt1211kg62q1h3jtrv3ik5cq27k56.apps.googleusercontent.com">
<div class="g-signin2" data-onsuccess="onSignIn"></div>

function onSignIn(googleUser) {
  var id_token = googleUser.getAuthResponse().id_token;
  ...
}

var xhr = new XMLHttpRequest();
xhr.open('POST', 'https://yourbackend.example.com/tokensignin');
xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
xhr.onload = function() {
  console.log('Signed in as: ' + xhr.responseText);
};
xhr.send('idtoken=' + id_token);


</body>
</html>
