<!DOCTYPE html>
<html>
<head>
	<title>Page Title</title>
</head>
<body>
<script src="https://smartlock.google.com/client"></script>

<script>
window.onGoogleYoloLoad = (googleyolo) => {
  // The 'googleyolo' object is ready for use.
};
const retrievePromise = googleyolo.retrieve({
  supportedAuthMethods: [
    "https://accounts.google.com",
    "googleyolo://id-and-password"
  ],
  supportedIdTokenProviders: [
    {
      uri: "https://accounts.google.com",
      clientId: "331400846717-r08gt1211kg62q1h3jtrv3ik5cq27k56.apps.googleusercontent.com"
    }
  ]
});

</script>











</body>
</html>
