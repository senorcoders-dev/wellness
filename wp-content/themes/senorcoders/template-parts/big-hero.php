
<?php
$image = get_field('hero_image', 'option');
?>
<div id="hero" style="background: url('<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>');">
    <!--<div style="background: url('<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>');" class="cover"></div>-->
    <div class="overlay"></div>
    <div class="content">
        <h1>Senorcoders</h1>
        <p>Loremp ipsum Loremp ipsum Loremp ipsum Loremp ipsum </p>
        <a ref="#" class="btn">Let's Design</a>
    </div>
</div>