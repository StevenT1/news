<!DOCTYPE HTML>
<!--
	Landed by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>江西师范大学-迎新服务网站</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<?php include 'conn.php';?>
	</head>
	<body >
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header">
					<h1 id="logo" style="color:black;font-size:25px;font-weight:bolder;"><a href="index.php">师大迎新网</a></h1>
					<nav id="nav">
						<ul style="color:black;font-weight:bolder;">
							<li><a href="index.php">首页</a></li>
							<li>
								<a href="#">校园指引</a>
								<ul>
									<li><a href="left-sidebar.php">入学须知</a></li>
									<li><a href="right-sidebar.php">入学教育</a></li>
									<li><a href="no-sidebar.php">校情总览</a></li>
								</ul>
							</li>
							<li>
								<a href="lead.php">交通指引</a>
							</li>
							<li><a href="#" class="button special">新生登录</a></li>
						</ul>
					</nav>
				</header>


			<!-- Main -->
			<section id="banner2">
				<div id="main" class="wrapper style1"  >
					<div class="container">
						<header class="major">
							<h2>入学须知</h2>
						</header>
						<div class="row 150%">
							<div class="5u 12u$(medium)">

								<!-- Sidebar -->
									<section id="sidebar">
										<section>
										<?php
											error_reporting(E_ALL & ~E_DEPRECATED);
											$sql = "select * from news_rxxz from id=1";
											$res=mysql_query($sql);
@$s=mysql_fetch_row($res);
											echo "<h3>"+$s[1]+"</h3>";
											echo '<p>申请对象<br>.......</p>

											<footer>
												<ul class="actions">
													<li><a href="#" class="button">了解更多</a></li>
												</ul>
											</footer>';
?>
										</section>
										<hr />
										<section>
											<a href="#" class="image fit"><img src="images/pic09.jpg" alt="" /></a>
											<h3>江西师范大学2016年本科新生入学须知</h3>
											<p>在您被录取为我校学生，即将跨入大学校门之际，谨向您表示衷心祝贺和热烈欢迎！现请您阅知以下内容并按要求办理有关入学手续。

一、今年我校普通本科新生入学报到时间为9月10日。新生请按规定时间来校报到，请勿提前或推迟。如有特殊情况须推迟报到入学的，请提前向学校请假。请假时间原则上不超过两周，逾期未来校报到者，将按自动放弃入学资格处理。

</p>
											<footer>
												<ul class="actions">
													<li><a href="#" class="button">了解更多</a></li>
												</ul>
											</footer>
										</section>
									</section>

							</div>
							<div class="7u$ 12u$(medium) important(medium)">

								<!-- Content -->
									<section id="content">
										
										<h3>新生入学十项安全须知</h3>
										<ul style="color:black">
											<li>关于物品安全。出发时请带好录取通知书、身份证、银行卡、党团组织关系证明等相关物品，提高安全防范意识，妥善保管好随身携带的重要证件和行李物品。</li>
											<li>关于资金安全。学校只采用两种方式收缴学杂费，一是通过建行卡网上集中代扣；二是报到当天在学校财务处指定收费点刷卡收取。缴纳学杂费后，较大数额的现金请存入银行卡内，同时谨防短信、电话、QQ诈骗等。</li>
											<li>关于交通安全。要提高交通安全意识；学校在南昌火车站和南昌西客站设有新生接待站，由专人负责接站、引导和接送工作。接待人员均着标有“江西师范大学”字样的统一迎新服装，接待车会标记“江西师范大学迎新专用车”字样。请各位新生同学及家长仔细辨认，切勿上错车。</li>
										</ul>
										<a href="#" class="image fit"><img src="images/pic05.jpg" alt="" /></a>
										<h3>两个值得你关注的微信号</h3>
										<p>江西师范大学微信号：jxsdxcb<br/>功能介绍：服务师生，宣传师大<br/>青春师大微信号：jxsdtw
<br/>功能介绍：江西师范大学校团委官方微信，我们提供最及时的各类通知，发布最实用的校园资讯，还有最好玩的校园新鲜事和激动人心的定期福利。我们的宗旨：只有你想不到的，没有我们做不到的。</p>
										<footer>
												<ul class="actions">
													<li><a href="#" class="button">更多内容</a></li>
												</ul>
											</footer>
									</section>

							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- Footer -->
				<footer id="footer">
					<!--  <ul class="icons">
						<li><a href="#" class="icon alt fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon alt fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon alt fa-linkedin"><span class="label">LinkedIn</span></a></li>
						<li><a href="#" class="icon alt fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="#" class="icon alt fa-github"><span class="label">GitHub</span></a></li>
						<li><a href="#" class="icon alt fa-envelope"><span class="label">Email</span></a></li>
					</ul>-->
					<ul class="copyright">
						<p style="color:rgba(255, 255, 255, 0.5);">地址：江西省南昌市紫阳大道99号江西师范大学（瑶湖校区）招生就业处 . 大学生活动中心二楼招生办公室　　邮编：330022</p><br/>
						<li>Design: <a href="http://html5up.net">HTML5 UP</a></li><li>author: Taoqiupo</li>
					</ul>
				</footer>

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>