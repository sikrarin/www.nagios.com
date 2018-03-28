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
</script>

<script>
const hintPromise = googleyolo.hint({
  supportedAuthMethods: [
    "https://accounts.google.com"
  ],
  supportedIdTokenProviders: [
    {
      uri: "https://accounts.google.com",
      clientId: "YOUR_GOOGLE_CLIENT_ID"
    }
  ]
});
</script>

</body>
</html>
