<div class="container">
    <h1><?php echo $articles['id']; ?></h1>
    <h3><?php echo $articles['title']; ?></h3>
    <p><?php echo $articles['description']; ?></p>

     <a class="btn btn-success" href="<? echo site_url('/posts'); ?>">Back</a>

    <a class="btn btn-success" href="<? echo site_url('/posts/edit/'.$articles['id']); ?>">Update</a>

    <form action="<? echo site_url('/posts/delete/'.$articles['id']); ?>" method="post" accept-charset="utf-8">
        <input style="margin-top:1em" type="submit" class="btn btn-danger" value="Delete">
    </form>
</div>