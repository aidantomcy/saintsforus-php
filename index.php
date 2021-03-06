<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="css/index.css"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins&display=swap"
      rel="stylesheet"
    />
    <meta name="theme-color" content="#b0e0e6" />
    <link rel="manifest" href="manifest.json">
    <link rel="shortcut icon" href="icon/favicon.ico" type="image/x-icon">
    <meta 
      name="description" 
      content="This is a website about a few Catholic saints, whose intercession we rely on in our day-to-day lives." 
    />
    <title>Saints for Us - Home</title>
  </head>
  <body>
    <?php include "inc/navbar.php"; ?>

    <div class="container-fluid">
      <h1 class="title pt-4">Saints for Us</h1>
      <div class="quote">
        <h1>"Your word is a lamp to guide my feet and a light for my path."</h1>
        <h1 class="align-right">-Psalm 119:105</h1>
      </div>
      <div class="images-right">
        <img
          src="img/jesus-christ-home-image.jpeg"
          alt=""
          class="img-1"
          loading="lazy"
        />
        <img
          src="img/jesus-christ-home-image2.jpeg"
          alt=""
          class="img-2"
          loading="lazy"
        />
      </div>
      <div class="links">
        <h2>
          <a href="saints/stanthony.html">St. Anthony of Padua</a>
        </h2>
        <h2>
          <a href="saints/stfrancisassisi.html">St. Francis of Assisi</a>
        </h2>
        <h2>
          <a href="saints/staidanlindisfarne.html">St. Aidan of Lindisfarne</a>
        </h2>
        <h2><a href="saints/stfrancisxavier.html">St. Francis Xavier</a></h2>
        <h2>
          <a href="saints/blessedcarloacutis.html">Blessed Carlo Acutis</a>
        </h2>
        <h2><a href="saints/stagnes.html">St. Agnes</a></h2>
        <h2>
          <a href="saints/stkuriakose.html">St. Kuriakose Chavara</a>
        </h2>
        <h2><a href="saints/stjoan.html">St. Joan of Arc</a></h2>
        <h2><a href="saints/stpeter.html">St. Peter</a></h2>
        <h2><a href="saints/stbernadette.html">St. Bernadette</a></h2>
        <h2>
          <a href="saints/stjohnbaptist.html">St. John the Baptist</a>
        </h2>
        <h2><a href="saints/mothermary.html">Mother Mary</a></h2>
        <h2><a href="saints/stjoseph.html">St. Joseph</a></h2>
        <h2><a href="saints/motherteresa.html">Mother Teresa</a></h2>
        <h2><a href="saints/stthomas.html">St. Thomas</a></h2>
        <h2><a href="saints/stsebastian.html">St. Sebastian</a></h2>
        <h2><a href="saints/stjohnpaulii.html">Pope St. John Paul II</a></h2>
        <h2>
          <a href="saints/stclareassisi.html">St. Clare of Assisi</a>
        </h2>
        <h2><a href="saints/stgeorge.html">St. George</a></h2>
        <h2><a href="saints/stpaul.html">St. Paul</a></h2>
        <h2><a href="saints/stvianney.html">St. Vianney</a></h2>
        <h2><a href="saints/stphilipneri.html">St. Philip Neri</a></h2>
        <h2><a href="saints/stphilip.html">St. Philip</a></h2>
        <h2><a href="saints/stjohnxxiii.html">Pope St. John XXIII</a></h2>
        <h2>
          <a href="saints/sttherese.html">St. Therese of Liseux</a>
        </h2>
        <h2><a href="saints/stnicholas.html">St. Nicholas</a></h2>
        <h2>
          <a href="saints/stfrancisdesales.html">St. Francis de Sales</a>
        </h2>
        <h2><a href="saints/stdevasahayampillai.html">St. Devasahayam Pillai</a></h2>
        <h2><a href="saints/stalphonsa.html">St. Alphonsa</a></h2>
      </div>
      <hr>
      <div class="contact-info container-fluid">
        <p>
          <br />
          Made by-<a href="https://aidantomcy.github.io" target="_blank"
            >Aidan Tomcy Champannoor</a
          ><br /><br />
          If you have any doubts/complaints/feedback, please mail your queries
          to
          <a href="mailto:info@saintsforus.com"
            >info@saintsforus.com</a
          >/<a href="mailto:aidantomcy@gmail.com">aidantomcy@gmail.com</a>
          <br /><br />
          <a href="feedback.php">Submit Feedback</a><br />
          Source-<a href="https://www.wikipedia.org/" target="_blank">Wikipedia</a>
        </p>
      </div>
    </div>

    <script
      src="js/bootstrap.bundle.min.js"
      defer
    ></script>
    <script>
      const links = document.querySelectorAll("h2");
      const title = document.querySelector("h1");
      const imgs = document.querySelectorAll("img");
      links.forEach((link) => {
        link.classList.add("pb-2");
      });
      imgs.forEach((img) => img.ondragstart = () => false)

      if (window.innerWidth <= 922) {
        title.classList.add("pb-4");
      }

      if ("serviceWorker" in navigator) {
        navigator.serviceWorker.register("./service-worker.js");
      }

      document.addEventListener("contextmenu", (e) => {
        e.preventDefault();
      });
    </script>
  </body>
</html>
