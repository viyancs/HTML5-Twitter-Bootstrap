<!doctype HTML>
<html lang="en">
    <head>
        <title>First Layout</title>
        <link href="../css/bootstrap.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../css/bootstrap-responsive.css" rel="stylesheet">
        <style type="text/css">
          body {
            padding-top: 20px;
            padding-bottom: 40px;
          }
          
          .tr-active {
              background-color: #EEE;
              border-color: #f5f5f5;
          }
		  
		  .tr-play {
			  background-color: #EEE;
		  }
          
          .tr-head {
              background-color: #FAFAFA;
              background-image: linear-gradient(to bottom, #FFFFFF, #F2F2F2);
              background-repeat: repeat-x;
              border: 1px solid #D4D4D4;
              border-radius: 4px 4px 4px 4px;
              box-shadow: 0 1px 4px rgba(0, 0, 0, 0.067);
              min-height: 40px;
              padding-left: 20px;
              padding-right: 20px;
          }
		  .right-box {
			padding: 20px;
			margin-bottom: 30px;
			font-size: 18px;
			font-weight: 200;
			line-height: 30px;
			color: inherit;
			background-color: #EEE;
			-webkit-border-radius: 6px;
			-moz-border-radius: 6px;
			border-radius: 6px;
	     }
		 .profile {
			padding:10px;
			overflow:hidden;	 
	     }

        </style>
            
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>
    <body>

        <div class="container">
            
            <div class="navbar">
                <div class="navbar-inner">
                    <ul class="nav">
                        <li class="active"><a href="">Home</a></li>
                        <li><a href="#"><img class="icon-question-sign"/> Help</a></li>
                    </ul>
                </div>
            </div>
            <div class="row-fluid">
                <div class="span12" >

                </div>
            </div>
            
            <!-- Main hero unit for a primary marketing message or call to action -->
            <div class="container-fluid">
                <div class="row-fluid">
                    <div class="span6" >
                        <table class="table table-hover table-bordered" id="rooms">
                            <thead>
                                <tr class="tr-head">
                                    <th>No</th>
                                    <th>Name Room</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody >
                                <tr class="tr-active">
                                    <td>1</td>
                                    <td>Sene Loe</td>
                                    <td>Wait</td>
                                </tr>
                                <tr class="success">
                                    <td>2</td>
                                    <td>Siapa yang mau coba</td>
                                    <td>Play</td>
                                </tr>
                                <tr class="success">
                                    <td>3</td>
                                    <td>Singgle Yuk</td>
                                    <td>Play</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Kau Pasti Kalah</td>
                                    <td>wait</td>
                                </tr>
                                <tr class="success">
                                    <td>5</td>
                                    <td>Show me your skill</td>
                                    <td>Play</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Kau Pasti Kalah</td>
                                    <td>wait</td>
                                </tr>
                                <tr class="success">
                                    <td>5</td>
                                    <td>Show me your skill</td>
                                    <td>Play</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>You lose</td>
                                    <td>wait</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>You lose</td>
                                    <td>wait</td>
                                </tr>
                                
                            </tbody>
                        </table>
                    </div>
                    <div class="span6 right-box">
                      <h3>Welcome, Rakhacs</h3>
                      <div class="row-fluid">
                        <ul class="thumbnails">
                          <li class="span6">
                            <div class="thumbnail">
                              <img src="http://placehold.it/300x200" alt="">
                              
                            </div>
                          </li>
                          <li class="span6">
                            <div class="thumbnail profile">
                                <p><span class="label">Your Profile</span></p>
                                <p><small><strong>Match : </strong></small><small>180</small></p>
                                <p><small><strong>win : </strong></small><small>100</small></p>
                                <p><small><strong>lose : </strong></small><small>80</small></p>
                                <p><small><strong>percent : </strong></small><small>55 %</small></p>
                            </div>
                          </li>
                        </ul>
                        <button type="button" id="create-room" class="btn btn-primary" data-loading-text="Loading...">Create Room</button>
          				</div>
                    </div><!--end span6-->
                </div>
            </div>
            
            	<div class="modal hide fade" id="modal-create-room">
                  <div class="modal-header">
                    
                    <h3>Create Room</h3>
                  </div>
                  <div class="modal-body">
                      <input type="text" placeholder="room title">
                  </div>
                  <div class="modal-footer">
                        <a href="http://localhost:85/HTML5-Twitter-Bootstrap/rps/public/arena" class="btn btn-primary">Create</a>
                  </div>
                </div>
            	<!--end modal-create-room -->

            <hr>
                
            <footer>
                <p>&copy; by viyancs</p>
            </footer>
                
        </div> <!-- /container -->

        
        <script src="../js/jquery-latest.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script>
            $(function(){
                //giving active unactive css of tr
                function rmAct(){
                    $("#rooms").find('tbody').find('tr').each(function(){
                        $(this).removeClass('tr-active')
                    });
                }
                
				//giving click function on tr
                $('#rooms > tbody').delegate('tr:not(.success)','click',function(){
                    rmAct(); //clear active tr
                    $(this).addClass('tr-active');
                })
				
				$('#rooms > tbody').delegate('tr:not(.success)','dblclick',function(){
                    window.location.replace('http://localhost:85/HTML5-Twitter-Bootstrap/rps/public/arena');
                });
				
				$("#create-room").click(function(){
					$(this).button('loading');	
					$('#modal-create-room').modal('show');
				});
				
				//reset button loading
				$("#modal-create-room").on('hidden',function(){
					$("#create-room").button('reset');
				});
	
            })
        </script>
    </body>
</html>