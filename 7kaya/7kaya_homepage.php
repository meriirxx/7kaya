<!DOCTYPE html>
<html>
  <head>
    <title>My Home Page</title>
    <link rel="stylesheet" type="text/css" href="7kaya_homepage.css">
  </head>
  <body>
    <?php include 'header.php'; ?>
    <div style="height: 300px; position: relative;">
      <div style="height: 200px; overflow-y: scroll; position: absolute; top: 50px; left: 0; right: 0; bottom: 0;">
        <!-- scrollable content here -->
      </div>
      <p style="margin-top: 250px;"></p>
    </div>
    <?php include 'nav.php'; ?>
    <footer>
      <div class="new-nav__social">
        <p class="new-nav__social-title">Our socials</p>
        <div class="new-nav__social-list">
          <a class="new-nav__social-link" href="https://www.instagram.com/sidekick.browser/" target="_blank" rel="nofollow">
            <img src="https://www.meetsidekick.com/wp-content/uploads/2022/07/instagram-7-1.svg" width="17" height="17" alt="Instagram" loading="lazy">
          </a>
          <a class="new-nav__social-link" href="https://www.linkedin.com/company/sidekickbrowser/" target="_blank" rel="nofollow">
            <img src="https://www.meetsidekick.com/wp-content/uploads/2022/07/linkedin.svg" width="18" height="18" alt="LinkedIn" loading="lazy">
          </a>
          <a class="new-nav__social-link" href="https://twitter.com/meetsidekick" target="_blank" rel="nofollow">
            <img src="https://www.meetsidekick.com/wp-content/uploads/2022/07/twitter-2-1.svg" width="18" height="18" alt="Twitter" loading="lazy">
          </a>
        </div>
      </div>
    </footer>
  </body>
</html>
