<?php
use dosamigos\ckeditor\CKEditorInline;
?>

<section id="home">
    <h1>ecology</h1>
    <?php CKEditorInline::begin(['preset' => 'basic']);?>
        <input type="text" name="text">
    <?php CKEditorInline::end();?>
</section>