<!--     NOS PARTENAIRES     -->
<div class="nos_partenaires">
    <div class="container partners">
        <h2 class="nos_partenaires_title"><span>Our</span> <span style="font-weight: bold">Partners</span></h2>
            <?php

        $images = get_field('our_partners');
        $size = 'medium'; // (thumbnail, medium, large, full or custom size)

        if ($images): ?>
            <ul class="partners_thumbnails">
                <?php foreach ($images as $image): ?>
                    <li>
                        <?php echo wp_get_attachment_image($image['ID'], $size); ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>

    </div>

</div>