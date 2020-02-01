<?php foreach ($posts as $post):?>
<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="row">
    <h1><?php echo $post['post_subject']?></h1>
    <p><?php echo $post['post_text']?></p>
    <div>
            <div> Posted:
                <span class="badge badge-success"><?php echo $post['post-created']?>
                </span>
            </div>Tags:
        <span class="badge badge-primary">alice</span>
        <span class="badge badge-primary">story</span>
        <span class="badge badge-primary">blog</span>
        <span class="badge badge-primary">personal</span></div>
</div>
    <hr>
<?php endforeach;?>
