<body class="body-custom">

    <?php $this->load->view("shared/nav.php"); ?>

    <!-- New Content -->
    <div id="wrapper">
      <!-- Sidebar -->
      <div id="sidebar-wrapper">
            <nav id="spy">
                <?php $this->load->view("quizmenunav.php"); ?>
            </nav>
      </div>
      <!-- Page content -->
      <div id="page-content-wrapper">
          <div class="page-content">
              <div class="container-q ">
                    <div id="new-optin" class="tabcontent">               
   
                        <div class="row row-c-u-f r-p-q">
                            <div class="content-p-q">
                                <div class="col-md-4 c-p-q-l">
                                    <?php $cquiz = $quiz[0]; ?>
                                    <h6 class="t-w-u">Title: <?php echo $cquiz->title?></h6>
                                    <h6 class="t-w-u">Outcomes: 
                                        <?php
                                            if(count($cquiz->outcomes) > 0){
                                                echo 'Complete';
                                                $outcomesStatus=true;
                                            }
                                            else{
                                                echo 'Incomplete';
                                                $outcomesStatus=false;
                                            } 
                                        ?>
                                    </h6>
                                    <h6 class="t-w-u">Questions: 
                                        <?php 
                                            if(count($cquiz->questions) > 0){
                                                echo 'Complete';
                                                $questionsStatus=true;
                                            }
                                            else{
                                                echo 'Incomplete';
                                                $questionsStatus=false;
                                            } 
                                        ?>
                                    </h6>
                                    <h6 class="t-w-u">Outcome Mapping: 
                                        <?php 
                                            
                                            if($outcomesStatus){
                                                $isOutcomeComplete = true;
                                                foreach ($cquiz->questions as $question) {
                                                
                                                    foreach ($question->choices as $choice) {
                                                        if($choice->outcome_id == NULL){
                                                            $isOutcomeComplete = false;
                                                        }
                                                    }
                                                }
                                            }else{
                                                $isOutcomeComplete = false;
                                            }
                                            
                                            if(!$isOutcomeComplete){
                                                echo "Incomplete";
                                                $mapStatus=false;
                                            }
                                            else{
                                                echo "Complete";
                                                $mapStatus=true;
                                            }
                                        ?><hr><?php
                                        if($outcomesStatus==true && $questionsStatus==true && $mapStatus==true){
                                            if(!$cquiz->isactive){
                                                ?>  
                                                <h5 class="t-w-u">Your Quiz is Ready to<br>Publish!</h5>
                                                <br><br>
                                                <a href="<?php echo base_url('quiz/publishcreatedquiz'); ?>" type ="submit" class="btn btn-primary btn-r-u" style="width:200px;word-spacing: 10px;"><i class="fa  fa-check" aria-hidden="true"> Publish!</i></a>
                                                <?php
                                            }else{
                                                ?>
                                                <h5 class="t-w-u">Your Quiz is already<br>Published!</h5>
                                                <br><br>
                                                <a href="<?php echo base_url('quiz/unpublishcreatedquiz'); ?>" type ="submit" class="btn btn-primary btn-r-u" style="width:200px;word-spacing: 10px;"><i class="fa fa-wrong" aria-hidden="true"> UnPublish!</i></a>
                                                <?php
                                            }
                                            
                                        }else{
                                            ?>  
                                                <h5 class="t-w-u">Your Quiz is not yet Ready to<br>Publish!</h5>
                                            <?php    
                                        }
                                        ?>
                                    </h6>

                                </div>
                                <div class="col-md-4 c-p-q-r">
                                    <!-- <p>header link here</p> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
  </div>
    <!-- End of Content-->
    <!-- modals -->
    <script>
    $('#myModal').on('shown.bs.modal', function () {
    $('#myInput').trigger('focus')
    })
    </script>
    <!-- Load JS here for greater good =============================-->

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
    s