<%@ page language="java" import="java.util.*" pageEncoding="ISO-8859-1"%>
<%@page import="javax.servlet.http.*" %>
<%@page import="java.sql.Statement"%>
<%@page import="java.sql.ResultSet"%>
<%@page import="java.sql.Connection"%>
<%@page import="java.sql.DriverManager"%>
<%@page import="java.net.InetAddress"%>
<!DOCTYPE html>
<html>

<head>
	<title>Megacorp an Industrial Category Bootstrap responsive WebTemplate | Elements :: w3layouts</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Megacorp a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css' />
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<link href="css/elements.css" rel="stylesheet" type='text/css' media="all" />
	<link href="css/font-awesome.css" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Roboto+Mono:300,300i,400,400i,500,500i,700" rel="stylesheet">
	<link href="css/style1.css" rel='stylesheet' type='text/css' />
	<link href="css/image.css" rel='stylesheet' type='text/css' />
	
<%
String username="";
HttpSession httpSession=request.getSession();


username=(String)httpSession.getAttribute("username");
System.out.println("---------"+username);

%>
<% 
    String date = request.getParameter("date").toString();
 %>
 
 
 <script>
function myFunction() {
    document.getElementById("demo").innerHTML = "YOU CLICKED ME!";
}
</script>


</head>

<body>
	<!--Header-->
	<div class="header" id="home">
		<!--top-bar-->
		<div class="top-bar_w3agileits">
			<div class="top-logo_info_w3layouts">
				<div class="col-md-3 logo">
					<h1><a class="navbar-brand" href="index.html">Crime<span>Criminal Records Management</span></a></h1>
				</div>
				<div class="col-md-9 adrress_top">
					<div class="adrees_info">
						<div class="col-md-6 visit">
							<div class="col-md-2 col-sm-2 col-xs-2 contact-icon">
								<span class="fa fa-home" aria-hidden="true"></span>
							</div>
							<div class="col-md-10 col-sm-10 col-xs-10 contact-text">
								<h4>Visit us</h4>
								<p>Chennai, Inida</p>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="col-md-6 mail-us">
							<div class="col-md-2 col-sm-2 col-xs-2 contact-icon">
								<span class="fa fa-envelope" aria-hidden="true"></span>
							</div>
							<div class="col-md-10 col-sm-10 col-xs-10 contact-text">
								<h4>Mail us</h4>
								<p><a href="mailto:info@example.com">info@example.com</a></p>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="clearfix"></div>
					</div>
					<ul class="top-right-info_w3ls">
						<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					</ul>
					<div class="clearfix"></div>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="header-nav">
				<div class="inner-nav_wthree_agileits">
					<nav class="navbar navbar-default">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
						</div>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
							<nav>
								<ul class="nav navbar-nav">
									
									<li><a href="SeeComps.jsp">complaints</a></li>
									<li><a href="Crimelist">Crime Rate</a></li>
									<li class="active"><a href="fir.jsp">FIR</a></li>
									<li><a href="index.jsp">Logout</a></li>
									
									
								</ul>
							</nav>
						</div>
					</nav>
					<div class="search">
						<div class="cd-main-header">
							<ul class="cd-header-buttons">
								<li><a class="cd-search-trigger" href="#cd-search"> <span></span></a></li>
							</ul>
							<!-- cd-header-buttons -->
						</div>
						<div id="cd-search" class="cd-search">
							<form action="#" method="post">
								<input name="Search" type="search" placeholder="Click enter after typing...">
							</form>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	<!--//Header-->
	<!--/inner_banner-->
	<div class="inner_banner">
	</div>
	<!--//inner_banner-->
	<!--/short-->
	<div class="services-breadcrumb">
		<div class="inner_breadcrumb">

			<ul class="short">
				<li><a href="police.jsp">Home</a><span>|</span></li>
				<li>Welcome&nbsp;<font style="color: blue"><b><%=username %></b></font>...!</li>
				
			</ul>
		</div>
	</div>
	<!--//short-->
	<!-- /inner_content -->
	<div class="banner_bottom">
		<div class="container">
			<h3 class="tittle">Filing FIR</h3><br/>
			<%
							String reg_msg=(String)request.getAttribute("success");  
							if(reg_msg!=null)
							out.println("<font color=red size=4px>"+reg_msg+"</font>");
							%>
		<%
		String ipaddr=InetAddress.getLocalHost().getHostAddress();
		String port=String.valueOf(request.getServerPort());
		String proj=request.getContextPath();
		String url="http://"+ipaddr+":"+port+proj+"/Evidance/";
				Vector fvec=new Vector();
				Connection connection = null;
				connection = (Connection) getServletContext().getAttribute("connection");
				Statement st=connection.createStatement();
				String selectemo="select * from complaints where date='"+date+"'";
				ResultSet rs=st.executeQuery(selectemo);
				int count=0;
				while(rs.next())
				{
					String name=rs.getString("name");
					String cname=rs.getString("comp_name");
					String sub=rs.getString("subject");
					String comp=rs.getString("complaint");
					String evd=rs.getString("evidance");
					String loc=rs.getString("location");
					String add=rs.getString("address");
					String cid=rs.getString("comp_id");
					String status=rs.getString("status");
					
					count++;
					System.out.println("Address IS----->"+add);
					System.out.println("Location IS----->"+loc);
			%>					


<div style="background-color:#f1f1f1;padding:15px;">
  <h1>The FIR Book</h1>
</div>
<form action="Fir" method="post">
<div style="overflow:auto">
  <div class="menu">
    <div class="menuitem"><b>Name</b><label style="margin-left: 140px;color: red;"><%=name %></label></div>
    <div class="menuitem"><b>Complaint Name</b><label style="margin-left: 50px;color: red;" ><%=cname %></label></div>
    <div class="menuitem"><b>Complaint</b> <label style="margin-left: 85px;color: red;"><%=comp %></label></div>
    <div class="menuitem"><b>Address</b> <label style="margin-left: 105px;color: red;"><%=add %></label></div>
    <div class="menuitem"><b>Evidance</b> <img id="myImg" src="<%=url+evd %>" style="margin-left: 105px;color: red;height: 130px"></div>
    <div id="myModal" class="modal">
  	<span class="close">&times;</span>
  	<img class="modal-content" id="img01">
 	<div id="caption"></div>
 	<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
    modal.style.display = "none";
}
</script>
</div>
  </div>

  <div class="right">
    <h2>What?</h2><br/>
    <p><%=cname %></p><br/>
    <h2>Where?</h2><br/>
    <p><%=loc %></p><br/>
    <h2>When?</h2><br/>
    <p ><%=date %></p><br/> 
    <h2>Type?</h2><br/>
    <p><select name="type">
    <option>...CHOOSE HERE...</option>
    <option value="Murder">Murder</option>
    <option value="Attempt to Murder">Atttempt to Murder</option>
    <option value="Robbery">Robbery</option>
    <option value="Dowry">Dowry</option>
    <option value="Women Harassement">Women Harassement</option>
    <option value="Child Harassement">Child Harassement</option>
    <option value="Kidnap">Kidnap</option>
    <option></option>
    
    </select></p>
  </div>
  <input type="hidden" name="name" value="<%=name %>">
    <input type="hidden" name="cname" value="<%=cname %>">
      <input type="hidden" name="sub" value="<%=sub %>">
        <input type="hidden" name="comp" value="<%=comp %>">
          <input type="hidden" name="evd" value="<%=evd %>">
              <input type="hidden" name="loc" value="<%=loc %>">
                <input type="hidden" name="add" value="<%=add %>">
                  <input type="hidden" name="date" value="<%=date %>">
                    <input type="hidden" name="cid" value="<%=cid %>">
                      <input type="hidden" name="status" value="<%=status %>">
                      
</div>
<%}%>
 <div class="row">
      <div class="col-25">
        <label>&nbsp;&nbsp;Actions Taken</label>
      </div>
      <div class="col-75">
        <textarea id="subject" name="actions" placeholder="Write something..." style="height:200px"></textarea>
      </div>
      <input type="submit" value="Submit" >
    </div>
</form>
<div style="background-color:#f1f1f1;text-align:center;padding:10px;margin-top:7px;font-size:12px;">Terms & Conditions.</div>

</div>
</div>

	
	
	<!-- copyright -->
	<div class="copyright">
		<div class="container">
			<div class="copyrighttop">
				<ul>
					<li>
						<h4>Follow us on:</h4>
					</li>
					<li><a class="facebook" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a class="facebook" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					<li><a class="facebook" href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
					<li><a class="facebook" href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
				</ul>
			</div>
			<div class="copyrightbottom">
				<p>©2018 Megacops. All Rights Reserved</a></p>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<!-- //copyright -->
	<!-- js -->
	<script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>
	<!-- //js -->
	<!--search-bar-->
	<script src="js/main.js"></script>
	<!--//search-bar-->
	<script>
		$('ul.dropdown-menu li').hover(function () {
			$(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
		}, function () {
			$(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
		});
	</script>
	<!-- start-smoth-scrolling -->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 900);
			});
		});
	</script>
	<!-- start-smoth-scrolling -->

	<script type="text/javascript">
		$(document).ready(function () {
			/*
									var defaults = {
							  			containerID: 'toTop', // fading element id
										containerHoverID: 'toTopHover', // fading element hover id
										scrollSpeed: 1200,
										easingType: 'linear' 
							 		};
									*/

			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>


</body>

</html>