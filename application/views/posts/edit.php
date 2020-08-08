<div class="container create">
	<div class="row">
		<div class="col-md-12">
            <h2><?= $title ?></h2>
            <div class='errormsg'>
                <?php echo validation_errors(); ?>
            </div>

            <!-- <? echo form_open('posts/update'); ?> -->
            <form action="<? echo site_url('/posts/update'); ?>" method="post" accept-charset="utf-8">
            <input type="hidden" name="id" value="<?php echo $articles['id']; ?>">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" name="title" value="<?php echo $articles['title']; ?>">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" name="description" ><?php echo $articles['description']; ?></textarea>
            </div>
            
            <button type="submit" class="btn btn-success">Update</button>
            </form>
        </div>
    </div>
</div>