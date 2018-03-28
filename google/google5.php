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
      clientId: "331400846717-a16lahtu0hj7qleqotfoivvqbrbuvj8i.apps.googleusercontent.com"
    }
  ],
  context: [
  signUp: "sikrarin.ta@ocean.co.th"
  ]
});
</script>


</body>
</html>
