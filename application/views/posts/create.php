<div class="container create">
	<div class="row">
		<div class="col-md-12">
            <h2><?= $title ?></h2>
            <div class='errormsg'>
                <?php echo validation_errors(); ?>
            </div>

            <!-- <? echo form_open('posts/create'); ?> -->
            <form action="<? echo site_url('/posts/create'); ?>" method="post" accept-charset="utf-8">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" name="title" placeholder="Title">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" name="description" placeholder="Description"></textarea>
            </div>
            
            <button type="submit" class="btn btn-success">Submit</button>
            </form>
        </div>
    </div>
</div>