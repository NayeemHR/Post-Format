<?php

$course_feature_image       = get_field('feature_section_image');
$course_feature_title       = get_field('feature_section_title');
$course_feature_body        = get_field('feature_section_body');


?>
    <!--    COURSES FEATURES-->

    <section id="course-features">
		<div class="container">
		
			<div class="section-header">
				<?php if(!empty($course_feature_image)) : ?>
			<img src="<?php echo $course_feature_image['url']; ?>" alt="<?php echo $course_feature_image['alt']; ?>">
			<?php endif; ?>
				<h2><?php echo $course_feature_title; ?></h2>
				<?php if(!empty($course_feature_body)) : ?>
				<p class="lead"><?php echo $course_feature_body; ?></p>
				<?php endif; ?>
			</div><!-- section-header -->
			
			<div class="row">
				<?php $loop =new WP_Query(array(
                'post_type' => 'course_feature',
                'orderby' => 'post_id',
                'order' => 'ASC',
                )); ?>
                
                <?php while($loop->have_posts( )) : $loop->the_post(); ?>
                
				<div class="col-sm-2">
					<i class="<?php the_field('course_feature_icon'); ?>"></i>
					<h4><?php the_title(); ?></h4>
				</div><!-- end col -->
				<?php endwhile; wp_reset_query(); ?>
				
				
			</div><!-- row -->
		</div><!-- container -->
	</section><!-- course-features -->
	
	