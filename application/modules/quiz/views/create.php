
<!--Create-->
<script type="text/javascript">
    
</script>
<body>
    <div class="container-fluid">
     	    <!---->
     	    <div class="container-fluid">
             <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.9.0.min.js"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
            <script type="text/javascript">

                    $(function(){
                    $(".btn-copy").on('click', function(){
                        var ele = $(this).closest('.example-2').clone(true);
                        $(this).closest('.example-2').after(ele);
                    })
                    })
                $(function() {
                $("#add").click(function() {
                    div = document.createElement('div');
                    $(div).addClass("inner").html("");
                    document.getElementById("srt").value = document.getElementById("Ultra").value;
                    if(document.getElementById("srt").value>0)
                    $("#container").append(div);
                    });
                });
                function run() {
                     document.getElementById("srt").value = document.getElementById("Ultra").value;
                     if(document.getElementById("srt").value>0)
                     var greeting = "Category" + document.getElementById("srt").value;
                     document.getElementById("demo").innerHTML = greeting;  
                }
                $(document).ready(function(){
                    $("#show").click(function(){
                        $("p").show();
                    });
                });
                function showDiv() {
                document.getElementById('welcomeDiv').style.display = "block";
                }
            </script>
            <style>
            #container {border: 1px solid red; padding: 10px; width: 100%;}
            .inner {border: 1px solid green; padding:40px;margin: 10px; width: auto;}   
            #add{float:right; margin:50px auto; padding:20px 30px 20px 30px;}
            .row{
                padding:20px;
            }
            </style>
            <body>
            
            <div id="container">
                <div class="text-center"><h3>Create New Quiz</h3> <hr></div>
                <div>
                    <label>Title :<input id="quiztitle" class="form-control" style = "width: 200px;" required></input> 
                    <label>Description :<input id="quizdescrip" class="form-control" style = "width: 500px;" required></input> 
                    <a href="quiz/newquiz" class="btn btn-lg btn-primary btn-wide margin-top-40">Save</a>
                </div>     
            <div class="example-1">
                    <div class="example-2"> 
                <div class="row">
                    <div class="col-md-3">
                        <h4 id="quiztitle">Quiz1</h4>
                        <h6 id="quizdescription">new Quiz</h6>
                    </div>
                    <div class="col-md-2">                          
                    <div class="form-group">
                        <label for="exampleSelect1">Choose</label>
                        <select class="form-control" id="Ultra" onchange="run()">
                            <option>Category</option>
                                <!-- an id category is the id found in the table -->
                            <!-- fetch category from table -->
                            <option value="1">Travel</option>
                            <option value="2">School</option>
                            <option value="3">Entreprenuer</option>
                            <option value="4">4</option>
                        </select>
                    </div>
                    </div>
                    <div class="col-md-5">                          
                        <button id="add" type="button" class="btn btn-copy btn-success">Add!</button>
                    </div>           
                </div>
                <button type="button" class="btn btn-success" value="Show Div" onclick="showDiv()">Add Question!</button>
                <input  style="display:none;" class="form-control answer_list" id="welcomeDiv" aria-describedby="emailHelp" placeholder="Enter email">
                <div class="form-group">
                        <label for="exampleSelect1">Choose Type</label>
                        <select class="form-control" id="Ultra" onchange="run()">
                            <option value="1">T/F</option>
                        </select>
                    </div>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1"> T
                        </label>
                        </div>
                        <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2"> F
                        </label>
                        </div>
                    </div>
                    <button type="button" class="btn btn-success">Submit!</button>
                    </div>    
     	    </div>
            <div>
                <a href="quiz/newquiz" class="btn btn-lg btn-primary btn-wide margin-top-40">Add New Quiz</a>
                <a href="quiz/viewquizzes" class="btn btn-lg btn-primary btn-wide margin-top-40">View Quizzes</a>
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
