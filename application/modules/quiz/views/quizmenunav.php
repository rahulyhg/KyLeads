<html>
     <!--<link rel="stylesheet" type="text/css" href="../../../assets/css/sidenav.css">-->
    
</html>
<script type="text/javascript">
    
</script>
<body class="body-custom">
  <div id="wrapper">
    <div id="sidebar-wrapper">
      <nav id="spy">
          <ul class="nav sidebar-nav-u nav-u">
               
                <li class="active"><a href="quiz/quiz_configure"><i class="fa fa-wrench" aria-hidden="true">&nbsp&nbsp&nbsp&nbsp Configure</i></a></li>
                <li><a href="quiz/outcome"><i class="fa fa-folder-open-o" aria-hidden="true">&nbsp&nbsp&nbsp&nbsp Outcomes</i></a></li>
                <li><a href="quiz/quizquestions"><i class="fa fa-question-circle" aria-hidden="true">&nbsp&nbsp&nbsp&nbsp Questions</i></a></li>
                <li><a href="quiz/quizreview"><i class="fa fa-eye" aria-hidden="true">&nbsp&nbsp&nbsp&nbsp Review</i></a></li>
                <li><a href="quiz/publishquiz"><i class="fa fa-desktop" aria-hidden="true">&nbsp&nbsp&nbsp&nbsp Publish</i></a></li>
                <hr>
                <li><a href="quiz/dashboard/<?php echo $this->session->userdata('quizproj_id')?>"><i class="fa fa-tachometer" aria-hidden="true">&nbsp&nbsp&nbsp&nbsp Dashboard</i></a></li>
                <li><a href="quiz/forms"><i class="fa fa-question-circle" aria-hidden="true">&nbsp&nbsp&nbsp&nbsp Quiz Optin-in form</i></a></li>
                <li><a href="quiz/contacts"><i class="fa fa-users" aria-hidden="true">&nbsp&nbsp&nbsp&nbsp Contacts</i></a></li>
                <li><a href="quiz/integrations"><i class="fa fa-code-fork" aria-hidden="true">&nbsp&nbsp&nbsp&nbsp Integrations</i></a></li>

          </ul>
      </nav>
    </div>
  </div>
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
