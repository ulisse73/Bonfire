	<footer>
		<div class="container">
			<div class="row">
				<div class="column size1of2">
                    <a href="<?php echo site_url(SITE_AREA . '/settings/users/edit/' . $this->auth->user_id()); ?>">My Account</a>
				</div>
				<div class="column size1of2 last-column">
					<p>{elapsed_time} seconds. {memory_usage}<br/>
                        Built with <a href="http://cibonfire.com" target="_blank"><span class="icon-fire"></span>&nbsp;Bonfire</a>
					</p>
				</div>
			</div>
		</div>
	</footer>
	<div id="debug"><!-- Stores the Profiler Results --></div>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="public/assets/js/jquery-1.8.2.js"><\/script>');</script>
	<?php echo Assets::js(); ?>
</body>
</html>