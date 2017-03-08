<?php get_header() ?>

<div id="content_block">
	<div class="container">
		<div class="row">

	<?php
	$post_info = get_post();
	$post_name = (!empty($post_info->post_name)) ? $post_info->post_name : '';
 	$query = new WP_Query( array( 'name' => $post_name ) );
	while ($query -> have_posts()): $query -> the_post();
		?>

		<div class="col-md-6">
			<div class="fotorama" data-nav="thumbs" data-width="525" data-thumbwidth="110" data-thumbheight="80" data-allowfullscreen="true" data-loop="true">
				<?php the_content( ); ?>
			</div>

			<div class="panorama">
				<?php echo (get_post_meta($post->ID, 'panorama', true)); ?>
			</div>

			<div class="video-cont">
				<?php echo (get_post_meta($post->ID, 'video', true)); ?>
			</div>
		</div>

		<div class="col-md-6">
			<div class="date_text">
				<img src="<?php bloginfo('template_url'); ?>/img/icons/circle.png" alt="circle">
				<p class="selling"><?php echo (get_post_meta($post->ID, 'продажа-аренда', true)); ?></p>
				<p class="slash">/</p>
				<p class="object_name"><?php echo (get_post_meta($post->ID, 'тип объекта', true)); ?></p>
				<br>
				<p class="public">Дата публикации:</p><p class="date_p"><?php the_date(); ?></p>
			</div>
			<div class="address">
				<p class="street"><?php echo (get_post_meta($post->ID, 'adress', true)); ?></p>
				<p>(</p><p><?php echo (get_post_meta($post->ID, 'город', true)); ?></p><p>)</p>
			</div>
			<div class="price_text">
				<strong><?php echo (get_post_meta($post->ID, 'цена', true)); ?></strong>
				<p>без комісії</p>
			</div>
			<div class="table_rev">
				<table>
					<tr>
						<td><?php echo (get_post_meta($post->ID, 'кол-во комнат', true)); ?> кімнати</td>
						<td><?php echo (get_post_meta($post->ID, 'Пощадь', true)); ?><sup>2</sup></td>
						<td><?php echo (get_post_meta($post->ID, 'Этаж', true)); ?></td>
					</tr>
				</table>
			</div>
			<input class="callbeck" type="submit" value="Замовити зворотній зв'язок">
			<div class="info">
				<table>
					<caption>Інформація</caption>
					<tr>
						<td>Загальна площа</td>
						<td><?php echo (get_post_meta($post->ID, 'Пощадь', true)); ?>м<sup>2</sup></td>
					</tr>
					<tr>
						<td>Житлова площа</td>
						<td><?php echo (get_post_meta($post->ID, 'Жилая площадь', true)); ?>м<sup>2</sup></td>
					</tr>
					<tr>
						<td>Площа кухні</td>
						<td><?php echo (get_post_meta($post->ID, 'Площадь кухни', true)); ?>м<sup>2</sup></td>
					</tr>
					<tr>
						<td>Кімнат</td>
						<td><?php echo (get_post_meta($post->ID, 'кол-во комнат', true)); ?></td>
					</tr>
					<tr>
						<td>Поверх</td>
						<td><?php echo (get_post_meta($post->ID, 'Этаж', true)); ?></td>
					</tr>
				</table>
			</div>
			<div class="description">
				<h2>Опис</h2>
				<p>
					<?php echo (get_post_meta($post->ID, 'Описание', true)); ?>
				</p>
			</div>
		</div>
		<?php break; ?>
	<?php endwhile; ?>

		</div>
	</div>
</div>

<?php get_footer() ?>