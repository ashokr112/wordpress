
</main>
<footer class="site-footer" id="contact">
  <div class="wrap">
    <div class="footer-left">
      <h3><?php bloginfo('name'); ?></h3>
      <p class="footer-contact">12th Floor, ABC Corporate Tower, Gurugram, Haryana, India<br>Phone: +91 96307 59699 | Email: rawatashok88@gmail.com</p>
    </div>
    <div>
      <h4 style="color:#fff;margin:0 0 8px">Quick Links</h4>
      <?php wp_nav_menu(array('theme_location'=>'primary','container'=>false,'items_wrap'=>'<div>%3$s</div>')); ?>
    </div>
    <div>
      <h4 style="color:#fff;margin:0 0 8px">Follow Us</h4>
      <div class="socials">
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-linkedin-in"></i></a>
        <a href="https://wa.me/919630759699"><i class="fab fa-whatsapp"></i></a>
        <a href="mailto:rawatashok88@gmail.com"><i class="fa fa-envelope"></i></a>
      </div>
    </div>
  </div>
  <div style="text-align:center;margin-top:18px;color:rgba(255,255,255,0.75)">© <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All Rights Reserved.</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
