
<!--Dashboard-->
<script type="text/javascript">
    
</script>
<body>
    <?php $this->load->view("shared/nav.php"); ?>
  
    <div class="container-fluid">
     	    <div class="col-sm-2">
                <div>
     	            <?php $this->load->view("quiznav.php"); ?>
     	        </div>
     	    </div>
     	    <!---->
     	    <div class="col-sm-10">
                <div><p><h3><?php echo $quiz->title;?></h3> <h5><?php echo $quiz->description;?></h5></p></div>
                <hr>
                <div><h6> Add Question here</h6></div>
                <div class="panel panel-default">
                    <div class="panel-body">
                        <form action="<?php echo base_url('quiz/newquestion'); ?>" method="post">
                            <input type="hidden" name="quizid" value="<?php echo $quiz->id;?>"></input>
                            <label>Question :<input name="questiontitle" class="form-control" style = "width: 500px;" required></input>
                            <button type ="submit" class="btn btn-lg btn-primary btn-wide margin-top-40">Add Question</button>
                        </form>  
                    </div>
                </div>
                
                <div><p><h6> Questions : </h6><?php echo count($questions)?> questions are created</p></div>
                <hr>
                <div>
                    <table style="width:100%">
                            <?php 
                                $index=0;
                                foreach ($questions as $question) 
                                {  
                                    $index++;
                                    ?>
                                    <tr>
                                        <td><p>Question<?php echo $index?></p> </td>
                                        <td><?php echo $question->title;?></td>
                                        <td>
                                        <a href="<?php echo base_url('quiz/update_answers/'. $question->id); ?>" type ="submit" class="btn btn-primary">Update Answers</a>
                                        <a href="<?php echo base_url('quiz/delete_question/'. $question->id); ?>" type ="submit" class="btn btn-danger">Delete</a> 
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><hr></td>
                                        <td><hr></td>
                                    </tr> 
                                    <?php
                                }
                            ?>
                    </table>
                </div>
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