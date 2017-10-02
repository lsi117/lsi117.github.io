<!DOCTYPE html>

<html>
<html lang="en">
    <head>
        <title><?php echo $title; ?></title>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
        <meta name="viewport" content="width=device-width,initial-scale= 1.0,user-scalable=yes">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta name="HandheldFriendly" content="true" />
        <meta name="author" content="Lauren Inacio" />
        <meta name="description" content="Lauren Inacio | Jr. Front-End Web Developer" />
        <meta name="keywords" content="lauren inacio, inacio, resume, front end web developer, junior web developer, web developer, artist, artwork"/>
        <meta name="robots" content="index,follow" />
        
        
        <link rel="stylesheet" type="text/css" href="CSS/Stylesheet.css" />
        <link rel="icon" type="image/png" href="Images/favicon.ico" />
        <link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet" />
        <link href="//cdn.rawgit.com/noelboss/featherlight/1.7.8/release/featherlight.min.css" type="text/css" rel="stylesheet" />                 
        
        
        
        
        <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-102805000-1', 'auto');
  ga('send', 'pageview');

</script>
    </head>
<body>

  <header>
    <a href="/"><h1>Lauren Inacio</h1>
    <sub>Jr.  Front-End Developer</sub></a>
    <ul>
        <li><a href="/">Home</a></li>
      <li><a href="About.php">About</a></li>
      <!--<li><a href="#">Projects</a></li>-->
      <li><a href="Artwork.php">Artwork</a></li>
    </ul>
  </header>
  <section>
    <?php echo $content; ?>

  </section>

    
    <footer>
        <p class="foot">Contact Information:<br />
        &#x2709; <a href="mailto:laureninacio@gmail.com" target="_blank">laureninacio@gmail.com</a><br />
        &#x2706; 914-844-5633</p>
        
    </footer>

<script>
document.getElementById("funButton").addEventListener("click", displaySay);

function displaySay() {
    document.getElementById("say").innerHTML = "&#128586; Wow! Nice! That took some courage &#128586;" ;
}
</script>


<script src="//code.jquery.com/jquery-latest.js"></script>
<script src="//cdn.rawgit.com/noelboss/featherlight/1.7.8/release/featherlight.min.js" type="text/javascript" charset="utf-8"></script>
</body>
</html>

