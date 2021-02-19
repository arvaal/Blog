<?php include DIR_APP . 'Views/Default/Commons/Header.tpl'; ?>

<?php foreach ($articles as $article) { ?>
    <h2><?php echo $article['name']; ?></h2>
    <p><?php echo $article['text']; ?></p>
    <hr>
<?php } ?>

<?php include DIR_APP . 'Views/Default/Commons/Footer.tpl'; ?>
