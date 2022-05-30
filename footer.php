<footer class="container-fluid text-center"><!-- div for the main image to stretch s to the edge of the page-->

<div class="container"><!-- div to hold the content in the middle of the page-->
    <div class="row"><!-- a row that gives us access to the BS columns-->
        <div class="col-md-6 widgetleft">
    
          <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-left') ) : 
endif; ?>

        </div>
        <div class="col-md-6 ">
        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-right') ) : 
endif; ?>
</div><!-- row-->
    </div><!-- container -->
</div><!-- container-fluid-->

</footer>
<?php wp_footer(); ?>
</body>
</html>
