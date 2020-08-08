<div class="container">
    <h2><?= $title ?></h2>

    <div class='successmsg'>
        <?php if($this->session->flashdata('successmsg')): ?> 
            <p><?php echo $this->session->flashdata('successmsg'); ?></p>
        <?php endif; ?>
    </div>

    <div class='deletemsg'>
        <?php if($this->session->flashdata('deletemsg')): ?> 
            <p><?php echo $this->session->flashdata('deletemsg'); ?></p>
        <?php endif; ?>
    </div>

    <a class="btn btn-success create-btn" href="<? echo site_url('/posts/create'); ?>">Create</a>
    <table id="myTable" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
        <thead>
		<tr>
			<th scope="col">Title</th>
			<th scope="col">Description</th>
			<th scope="col">Action</th>
		</tr>
		</thead>
        <tbody>           
                <?php foreach($articles as $article) : ?>
                 <tr class="table-active"> 
                        <td><?php echo $article['title']; ?></td>
                        <td><?php echo $article['description']; ?></td>

                        <td><p><a class="btn btn-success" href="<? echo site_url('/posts/'.$article['id']); ?>">Read More</a></p></td>
                </tr>   
                <?php endforeach; ?> 
        </tbody>
    </table>
</div>