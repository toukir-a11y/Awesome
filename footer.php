
<?php $footer= get_field("footer",'option');?>
<footer id="footer">
			<div class="container">
				<div class="row">
					<div class="col text-center">
						<a class="footer-brand d-flex align-items-center justify-content-center" href="index.html">
							<img src="<?php echo $footer['footer_logo'];?>" class="img-fluid" alt="">
					    	<?php echo $footer['footer_title'];?>
						</a>
					</div>
				</div>
			</div>
		</footer>
	</body>
	<?php wp_footer();?>
</html>