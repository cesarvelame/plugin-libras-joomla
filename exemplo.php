<?

/* Exemplo de view no override */

$attributes = json_decode($this->item->attribs);
$video = $attributes->video;

?>

<?php if ($video != null) : ?>
<dd class="libras">
<?php echo 'Libras: <a href='.$video.'>Assista à Notícia</a>' ?>
</dd>
<?php endif; ?>