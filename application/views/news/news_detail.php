<script>
    $('#left_menu').hide();
</script>
<style>
    #page-wrapper {
        margin-left: 0px;
    }
</style>
<div class="row">
    <div class="panel panel-primary">
        <div class="panel-heading w3-theme"><?php echo $news->topic; ?></div>
        <div class="panel-body">
            <?php echo $news->detail;?>
        </div>
        <div class="panel-footer">
            <span >
                <?php echo to_thai_date($news->date_sent); ?>
            </span>
        </div>
    </div>
</div>