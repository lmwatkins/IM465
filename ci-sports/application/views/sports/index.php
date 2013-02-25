<?php foreach ($sports as $sports_item): ?>

    <h2><?php echo $sports_item['title'] ?></h2>
    <div id="main">
        <?php echo $sports_item['text'] ?>
    </div>
    <p><a href="sports/<?php echo $sports_item['slug'] ?>">View Description</a></p>

<?php endforeach ?>