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
              background-color: #f5f5f5;
              border-color: #f5f5f5;
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


        </style>
        <link href="../css/bootstrap-responsive.css" rel="stylesheet">
            
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
                                <tr>
                                    <td>2</td>
                                    <td>Siapa yang mau coba</td>
                                    <td>Play</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Singgle Yuk</td>
                                    <td>Play</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Kau Pasti Kalah</td>
                                    <td>wait</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Show me your skill</td>
                                    <td>Play</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>You lose</td>
                                    <td>wait</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="span6">
                        <p>content right</p>
                    </div>
                </div>
            </div>
                
            <hr>
                
            <footer>
                <p>&copy; by viyancs</p>
            </footer>
                
        </div> <!-- /container -->

        
        <script src="../js/jquery-latest.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script>
            $(function(){
                
                function rmAct(){
                    $("#rooms").find('tbody').find('tr').each(function(){
                        $(this).removeClass('tr-active')
                    });
                }
                
                $('#rooms > tbody').delegate('tr','click',function(){
                    rmAct(); //clear active tr
                    $(this).addClass('tr-active');
                })
                
            })
        </script>
    </body>
</html>