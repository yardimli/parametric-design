		</div>
	</div>
<div class="footer">
	<div class="container">
		<ul class="footer-links">
			<li><a href="#"><?php _e('main.help'); ?></a></li>
			<li><a href="#"><?php _e('main.about'); ?></a></li>
			<li><a href="contact.php"><?php _e('main.contact'); ?></a></li>
		</ul>
		<p>&copy; <?php echo date('Y', time()) .' '. Config::get('app.name'); ?></p>
	</div>
</div>

<?php echo View::make('modals.load')->render() ?>

</body>
</html>