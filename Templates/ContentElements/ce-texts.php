<?php
$class = isset($class) ? $class : '';
$headline = isset($headline) ? $headline : '';
$subtitle = isset($subtitle) ? $subtitle : '';
$text = isset($text) ? $text:'';
$download = isset($download) ? $download:'';
?>
<div class="ce-text <?php if( !empty( $class ) ): echo $class; endif;?>">
    <div class="headline">
        <?php if( !empty( $headline ) ): ?>
        <h2> <?php echo $headline ?></h1>
        <?php endif; ?>
    </div>
    <?php if( !empty( $text ) ): ?>
    <div class="text">
        <?php if( !empty( $subtitle ) ): ?>
            <h4 > <?php echo $subtitle ?></h3>
        <?php endif; ?>
        <p>
            <?php echo $text; ?>
        </p>
    </div>
    <?php endif; ?>
    <?php if( !empty( $download ) ): ?>
    <div class="ce-download-list">
        <a href="#" class="download-link" download>
            <div class="text-download">Download</div>
            <span class="file-name"> <?php echo $download; ?></span>
        </a>
    </div>
    <?php endif; ?>
</div>