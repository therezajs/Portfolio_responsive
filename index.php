<?php
require("header.php");
?>
<div class="container">
  <div id="page1">
  	<a id="home"></a>
  	<div class="my_container">
      <h2>About me/</h2>
      <div class="row">
        <div class="col-xs-12 col-md-4">
          <div style="text-align:center;">
            <img src="images/avatar.png" class="img-circle my_avatar">
          </div>
        </div>
        <div class="col-xs-12 col-md-6">
          <p style="text-align:left">Hello, I am Thereza. <br>
          I am in love with programming ever since I stumbled upon codecademy last summer.<br>
          My life has since taken a very unexpected turn. I left my career in humantities and I want to make a living from programming. <br>
          I moved to San Francisco in October 2013 to attend a programming bootcamp, <a href="http://codingdojo.com/">Coding Dojo</a>.<br>
          Bachelor of Arts in Japanese studies. RailsGirls and CodingDojo alumni.</p>
        </div>
      </div>
    </div>
  </div>

  <div id="page2">
  <div class="container nu_container">
    <a id="skills"></a>
    <h2>Skills/</h2>
    <div class="my_container">
      <h4>Ruby on Rails • PHP • MySQL • Javascript • jQuery • Github • Heroku • Amazon S3 • HTML 5 • CSS 3 • MySQL • Bash Terminal • Sublime Text 2</h4>
    </div>
  </div>
  </div>
  <div id="page3">
  	<a id="contact"></a>
  	<h2>Contact/</h2>
  	<div class="my_container">
  		<div class="col-xs-12">
  		<button type="button" class="btn btn-default btn-lg my_button">
			  <span class="icon"><img src="images/icon-letter.png"></span><a href="mailto:therezascherrer@gmail.com"> therezascherrer@gmail.com</a>
			</button>
			</div>
			<div class="col-xs-12">
  		<button type="button" class="btn btn-default btn-lg my_button">
			  <span class="icon"><img src="images/icon-dropbox.jpg"></span><a href="https://www.dropbox.com/s/ety8jcibl3829jh/resume-thereza.pdf" target="_blank"> Resume</a>
			</button>
			</div>
			<div class="col-xs-12">
			<button type="button" class="btn btn-default btn-lg my_button">
			  <span class="icon"><img src="images/icon-github-2.jpg"></span><a href="https://github.com/therezajs" target="_blank"> therezajs</a>
			</button>
			</div>
			<div class="col-xs-12">
			<button type="button" class="btn btn-default btn-lg my_button">
			  <span class="icon"><img src="images/icon-linkedin.jpg"></span><a href="http://www.linkedin.com/in/thereza" target="_blank"> thereza</a>
			</button>
			</div>
			<div class="col-xs-12">
  		<button type="button" class="btn btn-default btn-lg my_button">
			  <span class="icon"><img src="images/icon-twitter-2.jpg"></span></span><a href="http://www.twitter.com/therezajs" target="_blank">  @therezajs</a>
			</button>
			</div>
		</div>
  </div>

  <div id="page4">
  <div class="container nu_container">
  	<a id="latest_works"></a>
  	<h2>Latest works/</h2>
  	<div class="my_container">
  		<div class="row">
        <h3 class="title">Rainbow Mural</h3>
        <div class="col-md-1"></div>
        <div class="col-md-5" >
          <a href="http://www.rainbowmural.com" target="_blank" class="img_bg"><img src="images/rainbow_slider2.png"></a>
          <div>
            <a href="https://github.com/therezajs/rainbowmural" target="_blank" class="height-sm"><span class="glyphicon glyphicon-hand-right"></span> source code</a>
          </div>
        </div>
        <div class="col-md-5" >
          <p><br>Explore street art around the world.<br>Like your favorite photos and engage in conversations with other users.</p>
          <p><strong>technologies</strong> PHP, MySQL, jQuery, Bootstrap, Flickr API, Google Maps API, and Heroku.</p>
        </div>
      </div>
      <!-- <div class="row my_row">
        <h3 class="title">Kiseki</h3>
        <div class="col-md-1"></div>
        <div class="col-md-5">
          <p><br>Facebook clone.<br>Post, find friends, send messages to other user and upload pictueres.</p>
          <p><strong>technologies</strong> Rails, PostgreSQL, Bootstrap, Amazon S3, and Heroku</p>

        </div>
        <div class="col-md-5">
          <a href="http://kisekinow.herokuapp.com" target="_blank" class="img_bg"><img src="images/kiseki_profile.png"></a>
          <br>
          <a href="https://github.com/therezajs/CodingDojo/tree/master/projects/Mixi" target="_blank" class="height-sm"><span class="glyphicon glyphicon-hand-right"></span> source code</a>
        </div>
      </div> -->
      <div class="row">
        <h3 class="title">Code the Games</h3>
        <div class="col-md-1"></div>
        <div class="col-xs-12 col-md-5">
          <a href="http://codezegame.herokuapp.com" target="_blank" class="img_bg"><img src="images/zegame_index.png"></a>
          <div>
            <a href="https://github.com/therezajs/CodeTheGame" target="_blank" class="height-sm"><span class="glyphicon glyphicon-hand-right"></span> source code</a>
          </div>
        </div>
        <div class="col-xs-12 col-md-5">
          <p><br>Play TicTacToe ot the sanke game.<br>Code is tested with rspec</p>
          <p><strong>technologies</strong> Rails, Javascript, Rspec, Bootstrap, and Heroku.</p>
        </div>
      </div>
    </div>
   </div>
   </div>
  <!-- <div id="page5">
  	<a id="mini_projects"></a>
  	<h2>Mini Projects/</h2>
  	<div class="my_container">
  	</div>
  </div>
 -->
</div><!-- /.container -->
<?php
require("footer.php");
?>