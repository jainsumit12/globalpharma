<header class="header-1" id="header">
      <div class="vd_top-menu-wrapper" style="background-color: #000;">
        <div class="container ">
          <div class="vd_top-nav vd_nav-width  ">
          <div class="vd_panel-header">
          	<div>
                  <?php 
                  include_once 'config.php';
                  	$query = "select * from logo where id='1'";
                      $run = mysqli_query($conn, "$query");
                      if(mysqli_num_rows($run)>0){
                        while($row=mysqli_fetch_assoc($run)){
                            echo '<a href=""><img alt="logo" style="max-width: 34%;
                            border-radius: 89px;" src="../images/logo/'.$row['img'].'"></a>';
                          }
                      }
                  ?>
            
            </div>
            <!-- logo -->
            <!-- <div class="vd_panel-menu  hidden-sm hidden-xs" data-intro="<strong>Minimize Left Navigation</strong><br/>Toggle navigation size to medium or small size. You can set both button or one button only. See full option at documentation." data-step=1>
            		                	<span class="nav-medium-button menu" data-toggle="tooltip" data-placement="bottom" data-original-title="Medium Nav Toggle" data-action="nav-left-medium">
	                    <i class="fa fa-bars"></i>
                    </span>
                                		                    
                	<span class="nav-small-button menu" data-toggle="tooltip" data-placement="bottom" data-original-title="Small Nav Toggle" data-action="nav-left-small">
	                    <i class="fa fa-ellipsis-v"></i>
                    </span> 
                                       
            </div>
            <div class="vd_panel-menu left-pos visible-sm visible-xs">
                                 
                        <span class="menu" data-action="toggle-navbar-left">
                            <i class="fa fa-ellipsis-v"></i>
                        </span>  
                            
                              
            </div>
            <div class="vd_panel-menu visible-sm visible-xs">
                	<span class="menu visible-xs" data-action="submenu">
	                    <i class="fa fa-bars"></i>
                    </span>        
                          
                        <span class="menu visible-sm visible-xs" data-action="toggle-navbar-right">
                            <i class="fa fa-comments"></i>
                        </span>                   
                   	 
            </div>                                      -->
            <!-- vd_panel-menu -->
          </div>
          <!-- vd_panel-header -->
            
          </div>    
          <div class="vd_container">
          	<div class="row">
            	 

            </div>
          </div>
        </div>
        <!-- container --> 
      </div>
      <!-- vd_primary-menu-wrapper --> 

  </header>

<script type="text/javascript">

    function notify(commandString){
        $.ajax({
            type:"GET",
            url:"notification.php",
            data:{command:commandString},
            cache: false,
            success: function(html)
            {
               // alert(html)
                $("#not").remove();
                $(".notify").after(html);
                $(".badge").html($(".notify").next('ul').children('li').length);

            }
        });
    }//countOnly
    function notifyCount(){
        notify('All');
    }
    $(document).ready(function(){
        setInterval(notifyCount,3000);

    });

</script>
