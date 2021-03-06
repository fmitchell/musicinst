<div class="primary-wrapper">

    <div class="primary-wrapper-inner-wrapper">

    	<div class="top-bar"></div>

    	<div class="header-wrapper">

    		<div class="header-inner-wrapper">

    			<?php include('includes/header.inc'); ?>

    		</div> <!-- end header-inner-wrapper -->

    	</div>  <!-- end header-wrapper -->

		<div class="content-wrapper">

		    <div class="content-inner-wrapper">

		    	<div class="breadcrumb-wrapper margin-top-large">

		    		<?php echo $breadcrumb; ?>

		    	</div>

				<div class="body-wrapper">

				    <div class="body-inner-wrapper">

				    	<div class="left-column">

				    		<div class="secondary-navigation-wrapper">

				    			<?php if(isset($left_navigation)): echo $left_navigation; endif; ?>

				    		</div>

				    		<?php if($node->field_show_events['und'][0]['value'] && !empty($taxonomy_blocks['events'])): ?>

				    			<div class="listing-block-wrapper">

				    				<div class="listing-block-top">

				    					<span class="title blue-font">Upcoming Events</span>

				    				</div> <!-- end listing-block-top -->

				    				<div class="listing-block-bottom">

										<?php echo $taxonomy_blocks['events']; ?>

				    	    		</div> <!-- end lising block-bottom -->

				    	    	</div> <!-- end listing-block-wrapper -->

				    	    <?php endif; ?>

				    	    <?php if(!empty($related_links)): ?>

				    	    	<div class="related-links-wrapper">

				    	    		<?php echo $related_links; ?>

					    	    </div>

				    		<?php endif; ?>

				    	</div>  <!-- end left-column -->

				    	<div class="middle-column">

				    		<div class="main-content-wrapper">
				    		<?php print render($messages); ?>
								<?php if ($title): echo '<h1>'.$title.'</h1>'; endif; ?>
		    	    			<?php if ($tabs): echo render($tabs); endif; ?>

		    	    			<?php if($node->field_show_banner['und'][0]['value']): ?>
		    	    				<div class="banner-image-wrapper">
										<?php echo $taxonomy_blocks['banner']; ?>
			    	    			</div>
			    	    		<?php endif; ?>

		    	    			<?php echo render($page['content']); ?>

				    		</div>

				    	</div> <!-- end middle-column -->

				    	<div class="right-column">

				    		<div class="inner-wrapper">

				        		<div class="static-block-wrapper">

									<?php echo render($page['static_blocks']); ?>

				        		</div>

								<?php if($node->field_show_feature_story['und'][0]['value'] && !empty($taxonomy_blocks['feature_story'])): ?>

				    	    		<div class="listing-block-item first">

				    	    			<div class="listing-block-item-inner-wrapper">

				    	    				<?php echo $taxonomy_blocks['feature_story']; ?>

				    	    			</div> <!-- end listing-block-item-inner-wrapper -->

				    	    		</div>  <!-- end listing-block-item -->

				    	    	<?php endif; ?>

				    	    	<?php if($node->field_show_feature_video['und'][0]['value'] && !empty($taxonomy_blocks['feature_video'])): ?>

				        			<div class="listing-block-item last">

				        			    <div class="listing-block-item-inner-wrapper">

				    						<?php echo $taxonomy_blocks['feature_video']; ?>

				        			    </div>

				    				</div>

				    			<?php endif; ?>

				        	</div>

				    	</div> <!-- end right-column -->

				    	<div class="clear"></div>

				    </div> <!-- end body-inner-wrapper -->

				</div> <!-- end body-wrapper -->

		    	<div class="clear"></div>

		    </div> <!-- end content-inner-wrapper -->

		</div> <!-- end content-wrapper -->

    </div>  <!-- end primary-inner-wrapper -->

</div>  <!-- end primary-wrapper -->

<div class="secondary-wrapper">

    <div class="secondary-wrapper-inner-wrapper">

    	<div class="footer-wrapper">

    		<div class="footer-inner-wrapper">

    			<?php include('includes/footer.inc'); ?>

    		</div>

    	</div>

    </div>

</div>

