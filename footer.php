
<?php $new= get_field("top");?>
<footer id="footer">
			<div class="container">
				<div class="row">
					<div class="col text-center">
						<a class="footer-brand d-flex align-items-center justify-content-center" href="index.html">
							<img src="<?php echo $new["fotter_logo"];?>" class="img-fluid" alt="">
					    	<?php echo$new["fotter_title"];?>
						</a>
					</div>
				</div>
			</div>
		</footer>

	<?php wp_footer();?>
	</body>
</html>