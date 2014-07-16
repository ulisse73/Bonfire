	<footer class="container-fluid footer">
		<p class="pull-right">
			Executed in {elapsed_time} seconds, using {memory_usage}.<br />
			Powered by <a href="http://cibonfire.com" target="_blank"><span class="icon-fire"></span>&nbsp;Bonfire</a> <?php echo BONFIRE_VERSION; ?>
		</p>
	</footer>
	<div id="debug"><!-- Stores the Profiler Results --></div>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="public/assets/js/jquery-1.8.2.js"><\/script>');</script>
    <?php echo Assets::js(); ?>
</body>
</html>