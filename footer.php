<footer>
	<div class="footer">
		<div class="contact">
			<?php 
				$footerPod = new Pod('footer-block');
				$footerPod->findRecords('company-name', -1);
				echo $footerPod->showTemplate('Footer Block Template');
			?>
			<p class="copyright">&copy;
				<?php echo date('Y'); ?> Brandscape - All rights reserved.</p>
		</div>
		<div class="social">
			<div class="icons">
				<?php 
					$socialPod = pods('social-media-link', array('orderby'=>'menu_order'));
					echo $socialPod->showTemplate('Footer Social Media Icons');
				?>
			</div>
			<div class="developer">
				<p>Developed by the team at LeverageIT</p>
			</div>
		</div>
	</div>
	<?php wp_footer(); ?>
</footer>
