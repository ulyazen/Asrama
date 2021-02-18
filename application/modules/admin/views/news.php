<h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('admin/news'); ?>

<label for="title">Title</label>
<input type="text" name="title" /><br />

<label for="text">Text</label>
<textarea name="text"></textarea><br />

<input type="submit" name="submit" value="Create news item" />

</form>

<?php foreach ($news as $news_item) : ?>

    <h3><?php echo $news_item['title']; ?></h3>
    <div class="main">
        <?php echo $news_item['text']; ?>
    </div>
    <p><a href="<?php echo site_url('admin/view/' . $news_item['slug']); ?>">View article</a></p>

<?php endforeach; ?>