<?php 

$who_section_image          = get_field('who_section_image');
$who_section_title          = get_field('who_section_title');
$who_section_body           = get_field('who_section_body');

?>
   
    <!--    WHO BENEFITS-->

<section id="who-benefits">
		<div class="container">
			
			<div class="section-header">
			<?php if(!empty($who_section_image)) : ?>
			<img src="<?php echo $who_section_image['url']; ?>" alt="<?php echo $who_section_image['alt']; ?>">
			<?php endif; ?>
				<h2><?php echo $who_section_title; ?></h2>
			</div><!-- section-header -->
			
			<div class="row">
				<div class="col-sm-8 col-sm-offset-2">
					<h2><?php echo $who_section_body; ?></h2>
				</div><!-- end col -->
			</div><!-- row -->

		</div><!-- container -->
	</section><!-- who-benefits -->
   
