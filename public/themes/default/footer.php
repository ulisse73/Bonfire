    <?php if ( ! isset($show) || $show == true) : ?>
    <hr />
    <footer class="footer">
        <div class="container">
            <p>Powered by <a href="http://cibonfire.com" target="_blank">Bonfire <?php echo BONFIRE_VERSION; ?></a></p>
        </div>
    </footer>
    <?php endif; ?>
	<div id="debug"><!-- Stores the Profiler Results --></div>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="public/assets/js/jquery-1.8.2.js"><\/script>');</script>
	<?php echo Assets::js(); ?>
</body>
</html>