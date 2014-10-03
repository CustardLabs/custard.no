<?php $timeSinceArray = getTimeSince("2014-10-01"); ?>

<div class="container">
  <div class="row">
    <div class="col-md-8">
      <div class="row">
        <div class="col-sm-6">
          <h2>About us</h2>
          <p>
            Established in October 2014 in Oslo to bring focus to the exciting area of organisation and membership management systems.
          </p>
          <p>
            We are a small team with an experienced affiliate network, allowing us to work on small or large projects and keep overhead costs 
            low.
          </p>
          <p><a class="btn btn-default" href="/about" role="button">Read more &raquo;</a></p>
        </div>
        <div class="col-sm-6">
          <h2>What we do</h2>
          <p>We specialise in building relationships and long term solutions with organisations, in particular in the area of membership administration.</p>
          <p>Backend development is mostly PHP based, whilst frontend is shifting towards popular libraries, standards and frameworks such as Angular.js, JQuery, HTML5, Twitter Bootsrap and more...</p>
          <p><a class="btn btn-default" href="/projects" role="button">Projects &raquo;</a></p>
        </div>
      </div>
      <div class ="row">
        <div class="col-xs-12">
          <h2>Contact us</h2>
          <p>This company is brand new, really - it's only <strong><?php echo $timeSinceArray["days"]; ?></strong> days old, so we do not have an official mailing/visiting address just yet.</p>
          <p>Enquiries via email to <span id="email_link">info{#}custard.no</span> are more than welcome. You can also get in touch via <a href="https://www.facebook.com/custardlabs">Facebook</a> or <a href="https://twitter.com/custardlabs">Twitter</a></p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <h2>Activity feed</h2>
      <p>This section will show CustardLabs related activity from Github, Facebook and Twitter</p>
      <div id="lifestream" data-limit="10">&nbsp;</div>
      <!--<p><a class="btn btn-default" href="/activity" role="button">More &raquo;</a></p>-->
    </div>
  </div>
</div>
