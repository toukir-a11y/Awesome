<?php get_header();?>
<?php  $four= get_field('error_page', 'option');?>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <h1 style= "margin-top:200px; text-align:center;color:red;"><?php echo $four;?></h1> 
        </div>
    </div>
</div>

<?php get_footer(); ?>
