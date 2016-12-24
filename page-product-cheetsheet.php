<?php 
/**
 * This file is for debug purpose only to provide cheet sheet for object Product
 *
 *
 * @author 		PcCowboy
 * @package 	woo-theme_woobsite
 * @version     1
 */

if ( ! defined( 'ABSPATH' ) ) {
	//silence is golden :D
	exit; // Exit if accessed directly
}
?>



<?php get_header(); ?>

<?php $tempProduct = wc_get_product(99)->post;?>
<?php $tempProductVariable = new WC_Product_Variable($tempProduct);?>

<table>
	<tr>
		<td colspan="3"><pre>$tempProduct = wc_get_product(99)->post;
		$tempProductVariable = new WC_Product_Variable($tempProduct);</pre></td>
	</tr>
	
	<tr>
		<th>Product ID</th>
		<td><?php echo $tempProduct->ID;?></td>
		<td><pre>$tempProduct->ID;</pre></td>
	</tr>
	
	<tr>
		<th>Product Name</th>
		<td><?php echo $tempProduct->post_title;?></td>
		<td><pre>$tempProduct->post_title;</pre></td>
	</tr>
	
	<tr>
		<th>Author</th>
		<td><?php echo $tempProduct->post_author;?></td>
		<td><pre>$tempProduct->post_author;</pre></td>
	</tr>
	
	<tr>
		<th>Post Date GMT</th>
		<td><?php echo $tempProduct->post_date_gmt;?></td>
		<td><pre>$tempProduct->post_date_gmt;</pre></td>
	</tr>
	
	<tr>
		<th>Content</th>
		<td><?php echo $tempProduct->post_content;?></td>
		<td><pre>$tempProduct->post_content;</pre></td>
	</tr>
	
	<tr>
		<th>Excerpt</th>
		<td><?php echo $tempProduct->post_excerpt;?></td>
		<td><pre>$tempProduct->post_excerpt;</pre></td>
	</tr>
	
	<tr>
		<th>Comment Status</th>
		<td><?php echo $tempProduct->comment_status;?></td>
		<td><pre>$tempProduct->comment_status;</pre></td>
	</tr>
	
	<tr>
		<th>Ping</th>
		<td><?php echo $tempProduct->ping_status;?></td>
		<td><pre>$tempProduct->ping_status;</pre></td>
	</tr>
	
	<tr>
		<th>Post Password</th>
		<td><?php echo $tempProduct->post_password;?></td>
		<td><pre>$tempProduct->post_password;</pre></td>
	</tr>
	
	
	<tr>
		<th>Post Name</th>
		<td><?php echo $tempProduct->post_name;?></td>
		<td><pre>$tempProduct->post_name;</pre></td>
	</tr>
	
	
	<tr>
		<th>Post Type</th>
		<td><?php echo $tempProduct->post_type;?></td>
		<td><pre>$tempProduct->post_type;</pre></td>
	</tr>
	
	
	
	<tr>
		<th>Is On Sale</th>
		<td><?php echo $tempProductVariable->is_on_sale() ? 'true' : 'false';?></td>
		<td><pre>$tempProductVariable->is_on_sale();</pre></td>
	</tr>
	
	
	<tr>
		<th>Author</th>
		<td><?php echo $tempProduct->post_author;?></td>
		<td><pre>$tempProduct->post_author;</pre></td>
	</tr>
	
	
	<tr>
		<th>Author</th>
		<td><?php echo $tempProduct->post_author;?></td>
		<td><pre>$tempProduct->post_author;</pre></td>
	</tr>
	
	
	<tr>
		<th>Author</th>
		<td><?php echo $tempProduct->post_author;?></td>
		<td><pre>$tempProduct->post_author;</pre></td>
	</tr>
	
	
	<tr>
		<th>Author</th>
		<td><?php echo $tempProduct->post_author;?></td>
		<td><pre>$tempProduct->post_author;</pre></td>
	</tr>
	
	
	<tr>
		<th>Author</th>
		<td><?php echo $tempProduct->post_author;?></td>
		<td><pre>$tempProduct->post_author;</pre></td>
	</tr>
	
	
	<tr>
		<th>Author</th>
		<td><?php echo $tempProduct->post_author;?></td>
		<td><pre>$tempProduct->post_author;</pre></td>
	</tr>
	
	
	<tr>
		<th>Author</th>
		<td><?php echo $tempProduct->post_author;?></td>
		<td><pre>$tempProduct->post_author;</pre></td>
	</tr>
	
	
	<tr>
		<th>Author</th>
		<td><?php echo $tempProduct->post_author;?></td>
		<td><pre>$tempProduct->post_author;</pre></td>
	</tr>
	
	
	<tr>
		<th>td</th>
		<td>fd</td>
		<td>fd</td>
	</tr>

</table>
<div style="text-align: left">

<?php var_dump($tempProduct); ?>
<?php var_dump($tempProduct->post); ?>

</div>

<?php get_footer(); ?>