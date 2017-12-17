
<!--Create-->
<script type="text/javascript">

</script>
<body>
<?php $this->load->view("shared/nav.php"); ?>
<div class="container-fluid">
         <!---->
        <div class="col-sm-2">
            <div>
                <?php $this->load->view("quiznav.php"); ?>
            </div>
        </div>
         <div class="col-sm-10">
            <div class="text-center"><h3>Create New Quiz</h3> <hr></div>
                <div>
                    <form action="<?php echo base_url('quiz/newquiz'); ?>" method="post">
                        <label>Title :<input name="quiztitle" class="form-control" style = "width: 200px;" required></input> 
                        <label>Description :<input name="quizdescrip" class="form-control" style = "width: 500px;" required></input> 
                        <button id="btnSubmit" type ="submit" class="btn btn-lg btn-primary btn-wide margin-top-40">Save</button>
                    </form>     
            </div>
            <!-- display templates -->
            <hr>
            <!-- <div>
                <h6 class="text-center">Quiz templates</h6>
                <div>
                    <table style="width:100%">
                        <tr>
                            <th>Tite</th>
                            <th>Description</th> 
                        </tr>
                            <?php 
                                foreach ($quizzes_template as $quiz) 
                                {  
                                    ?>
                                    <tr>
                                        <td><?php echo $quiz->title;?></td>
                                        <td><?php echo $quiz->description;?></td>
                                        <td>  
                                            <a href="#" type ="submit" class="btn btn-default">Preview</a>                                            
                                            <a  href="<?php echo base_url('quiz/newquiz_temp/'. $quiz->id); ?>" type ="submit" class="btn btn-primary">Use Quiz</a>    
                                        </td> 
                                    </tr>
                                    <tr>
                                        <td><hr></td>
                                        <td><hr></td>
                                        <td><hr></td>
                                    </tr>
                                   
                                    <?php
                                }
                            ?>
                    </table>        
                </div>               
            </div> -->
            <!-- if admin put create button for quizzes -->
        </div>
</div>

<!-- End of Content-->
<!-- modals -->

<?php $this->load->view("shared/modal_sitesettings.php"); ?>

<?php $this->load->view("shared/modal_account.php"); ?>

<?php $this->load->view("shared/modal_deletesite.php"); ?>

<!-- /modals -->


<!-- Load JS here for greater good =============================-->
<?php if (ENVIRONMENT == 'production') : ?>
<script src="<?php echo base_url('build/sites.bundle.js'); ?>"></script>
<?php elseif (ENVIRONMENT == 'development') : ?>
<script src="<?php echo $this->config->item('webpack_dev_url'); ?>build/sites.bundle.js"></script>

<?php endif; ?>

<!--[if lt IE 10]>
<script>
$(function(){
    var msnry = new Masonry( '#sites', {
        // options
        itemSelector: '.site',
        "gutter": 20
    });

})
</script>
<![endif]-->
</body>
</html>