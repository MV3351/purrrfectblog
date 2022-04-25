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

<!-- Sign Up Modal -->

<!-- FOR FOOTER.PHP -->


<div class="modal fade" id="signupModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Sign Up to hear Meowt</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <input type="text" class="form-control form-control-sm mb-3" placeholder="Your Name" required>
          <input type="email" class="form-control form-control-sm mb-3" placeholder="Email ID" required>
          <div class="d-grid gap-2">
            <button class="btn btn-sm btn-success" type="submit"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z" />
              </svg> Sign Up to hear Meowt</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

    <?php wp_footer(); ?>
  </body>
</html>