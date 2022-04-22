<footer class="main-footer custom-footer text-white pt-5 pb-3">
  <div class="container">
    <div class="row">

      <?php if ( is_active_sidebar( 'footer_widgets' ) ) : ?>
          <?php dynamic_sidebar( 'footer_widgets' )?>
      <?php endif; ?>

    </div>
  </div>
</footer>

<div class="copy pt-3 pb-3 border-black custom-footer">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <p class="small m-0">Copyright &copy; <?php echo date ('Y'); ?>. All Rights Reserved.</p>        
            </div>
        </div>                
    </div>
</div>

    <?php wp_footer(); ?>
  </body>
</html>