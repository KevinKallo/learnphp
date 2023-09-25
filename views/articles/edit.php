<?php include __DIR__ . '/../partials/Header.php'; ?>
<div class="container">
   <h1>Edit Article</h1>
</div>
    <form action="/admin/articles/edit?id=<?=$article->id?>" method="POST">
        <div class="field">
            <label class="label">Title</label>
                <div class="control">
                    <input class="input" type="text" placeholder="Title" name="title" id="title" value="<?=$article->title?>">
                </div>
        </div>
        <div class="field">
                <label class="label">Content</label>
            <div class="control">
                <textarea class="textarea" placeholder="Content..." name="body" id="body"><?=$article->body?></textarea>
            </div>
        </div>
        <div class="field">
            <div class="control">
                <input class="button is-primary" type="submit">
            </div>
        </div>
   
    </form>

<?php include __DIR__ . '/../partials/footer.php'; ?>