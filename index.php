<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" />
  <link rel="stylesheet" type="text/css" href="dist/css/bootstrap.css" />
  <meta name="viewport" content="width=device-width, initial-scale=0.6" />
  <style>
    body {
      font-family:
        'HelveticaNeue-Light',
        'Helvetica Neue Light',
        'Helvetica Neue',
        Helvetica,
        Arial;
      color: #332b22;
    }
    .navbar {
      background-color: #332b22;
      color: #9acee5;
    }
    .navbar, .navbar-brand {
      font-size: 24px;
    }
    #main {
      background-color: #d6ebf1;
      margin-top: 50px;
      padding: 48px 0px 64px;
      text-align: center;
      font-size: 48px;
    }
    #skills {
      background-color: #9acee5;
      padding: 12px 0px 16px;
    }
    #skills .row {
      margin: 0px 8px;
    }
    #skills .col-md-2 {
      color: #06538e;
      font-size: 28px;
      text-align: center;
      padding: 12px;
    }
    #portfolio .row {
      margin: 48px 0px 72px;
    }
    #portfolio img {
      box-shadow: 4px 4px 16px #808080;
    }
    #resume {
      background-color: #d6ebf1;
      padding: 24px 0px 36px;
      text-align: center;
    }
    #resume .row {
      margin: 0px 12px;
    }
    #resume a.btn {
      width: 100%;
      margin: 12px 0px 16px;
      font-size: 150%;
    }
    #resume p {
      font-size: 21px;
      text-align: left;
    }
    #resume .summary {
      margin-bottom: 24px;
    }
    #resume img {
      margin-bottom: 36px;
      width: 100%;
      max-width: 180px;
    }
    footer {
      background-color: #9acee5;
      padding: 12px 0px 16px;
      font-size: 16px;
      text-align: center;
    }
    /*

#332b22 24.5 % Black Magic (Brown)
#b2a390 22.3 % Eagle (Green)
#7f8384 11.4 % Grey (Grey)
#d6ebf1 9.7 % Pattens Blue (Blue)
#9acee5 9.0 % Cornflower (Blue)
#836833 8.3 % McKenzie (Brown)
#4e97c7 6.2 % Picton Blue (Blue)
#594a29 4.5 % Bronze Olive (Brown)
#06538e 2.2 % Dark Cerulean (Blue)
#a48230 1.8 % Reef Gold (Green)
    */
  </style>
</head>
<body>
  <nav class="navbar navbar-fixed-top">
    <div class="container">
        <div class="navbar-brand" style="width: 100%">
          Thereza Scherrer's Portfolio
          <div style="float: right;">履歴書</div>
        </div>
    </div>
  </nav>
  <div id="main">
    <div class="container">
      <div><b>I <span class="glyphicon">&hearts;</span> Coding</b></div>
      <div><b>コーディング大好き</b></div>
    </div>
  </div>
  <div id="skills">
    <div class="container">
      <div class="row">
        <div class="col-md-2 col-xs-4">Rails</div>
        <div class="col-md-2 col-xs-4">Javascript</div>
        <div class="col-md-2 col-xs-4">PHP</div>
        <div class="col-md-2 col-xs-4">MySQL</div>
        <div class="col-md-2 col-xs-4">HTML</div>
        <div class="col-md-2 col-xs-4">CSS</div>
      </div>
    </div>
  </div>
  <div id="portfolio">
    <div class="container">
      <div class="row">
        <div class="col-md-1 col-xs-0"></div>
        <div class="col-md-10 col-xs-12">
          <a href="http://www.rainbowmural.com" target="_blank">
          <img
            style="width: 100%"
            src="images/rainbow_slider2.png" />
          </a>
        </div>
        <div class="col-md-1 col-xs-0"></div>
      </div>
      <div class="row">
        <div class="col-md-1 col-xs-0"></div>
        <div class="col-md-10 col-xs-12">
          <a href="http://codezegame.herokuapp.com" target="_blank">
          <img
            style="width: 100%"
            src="images/zegame_index.png" />
          </a>
        </div>
        <div class="col-md-1 col-xs-0"></div>
      </div>
    </div>
  </div>
  <div id="resume">
    <div class="container">
      <div class="row summary">
        <div class="col-md-3 col-xs-4">
          <img
            class="img-circle"
            src="images/avatar.png" />
        </div>
        <div class="col-md-9 col-xs-8">
        <p>
          Konnichiwa, I am Thereza. Lorem ipsum dolor sit amet. Hire me. Hire me. Hire me. Your business so much needs me. Lorem and ipsum and dolor and sit all agree in this. Even amet agrees.
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 col-sm-6 col-xs-12">
          <a class="btn btn-success btn-lg" href="http://github.com/therezajs" target="_blank">
            Github
          </a>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
          <a class="btn btn-success btn-lg" href="http://www.linkedin.com/in/thereza" target="_blank">
            LinkedIn
          </a>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
          <a class="btn btn-success btn-lg" href="http://twitter.com/therezajs" target="_blank">
            Twitter
          </a>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
          <a class="btn btn-success btn-lg" href="https://www.dropbox.com/s/ety8jcibl3829jh/resume-thereza.pdf" target="_blank">
            Resume
          </a>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
          <a class="btn btn-success btn-lg" href="http://therezajs.tumblr.com" target="_blank">
            Blog
          </a>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
          <a class="btn btn-success btn-lg" href="mailto:therezascherrer@gmail.com">
            Email
          </a>
        </div>
      </div>
    </div>
  </div>
  <footer>
    <div class="container">
      Made with Love by Thereza, 2014
    </div>
  </footer>
</body>
</html>
