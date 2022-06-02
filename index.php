<?php 
header('Charset: UTF-8', true);
header('Content-Encoding: UTF-8', true);
header('Content-Type: text/html; charset=UTF-8', true);

header('apple-mobile-web-app-capable: yes', true); //mobile friendly hacks
header('apple-mobile-web-app-status-bar-style: translucent black', true); //run in full-screen mode
header('viewport: width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, user-scalable=0', true);
?>
<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>JK Aerostart</title>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<link href="scss/main.scss" rel="stylesheet" type="text/css">
<link href="css/main.css" rel="stylesheet" type="text/css">
<link href="css/fadeIn.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="https://necolas.github.io/normalize.css/3.0.2/normalize.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript" src="js/fadeIn.js"></script>
<script type="text/javascript" src="js/addRemove.js"></script>
<script type="text/javascript" src="js/smoothscroll.js"></script>
<script type="text/javascript" src="js/scrollMenu.js"></script>
<link href="https://fonts.googleapis.com/css?family=Slabo+27px|Source+Sans+Pro" rel="stylesheet"> 
</head>

<body>
	<header id="header">
		<div id="logo">
	    	<img src="images/logo.png" width="279" height="50" alt=""/>
	    </div>
		<div class="hamburgerNav" id="mainHamburger">
			<a href="javascript:void(0);" id="hamburgerCenter"></a>
		</div>
		<nav id="oldFashioned">
				<li><a class="OFnavButton" href="#index">Home</a>
				<li><a class="OFnavButton" href="#row1">About us</a>
				<li><a class="OFnavButton" href="#row2">Services</a>
				<li><a class="OFnavButton" href="#row6">Contact us</a></li>
		</nav>
		<nav id="desktopNav">
		  <ul>
				<li><a class="navButton" href="#index">Home</a>
				<li><a class="navButton" href="#row1">About us</a>
				<li><a class="navButton" href="#row2">Services</a>
				<li><a class="navButton" href="#row6">Contact us</a></li>
			</ul>
		</nav>
			<div class="airplaneSmoker" id="airplaneSmoker1">
		   		<img src="images/airplaneBg.png" />
		    </div>
			<div class="airplaneSmoker" id="airplaneSmoker2">
		   		<img src="images/airplaneBg.png" />
		    </div>
			<div class="airplaneSmoker" id="airplaneSmoker3">
		   		<img src="images/airplaneBg.png" />
		    </div>
		<nav id="mobile">
		</nav>
	</header>
	<main>
		<div class="landingRow" id="index">
			<div class="landingRowIntro">
				<h1>Where Quality Meets Aviation</h1>
				<p>JK Aerostart dream about better future that makes a difference to everyone in the aviation industry.</p>
			</div>
			<div id="fadein">
				<div class="slider-fade" id="fade1"></div>
				<div class="slider-fade" id="fade2"></div>
				<div class="slider-fade" id="fade3"></div>
			</div>
			<div id="bottomLearnMore">
			</div>
		</div>
		<div class="row" id="row1">
			<div id="title"></div>
			<div class="content">
				<h1 style="font-size: 3em;">JK AEROSTART</h1>
				<p>We are an Aircraft and Engine systems certification expert group, specializing in the FAA and other foreign approvals and certifications of Parts Manufacturers Approval, Technical Standard Order Approval, Type Certificate, and Supplemental Type Certificate. We are fully committed to your product realization (from early product development stage to final certification). Based on various different successful aircraft systems and engine systems certification experiences, we strive to obtain the certification (PMA, TSOA, TC and STC) of your product in the most efficient manner through early strategical planning and close negotiation with the certification authority from the very beginning of your project.</p>		
			</div>
		</div>
		<div class="row" id="row2">
			<div class="content">
				<h1 class="rowTitle">SERVICES</h1>
				<p>We are an Aircraft and Engine systems certification expert group, specializing in the FAA and other foreign approvals and certifications of Parts Manufacturers Approval.</p>
			</div>
			<div class="threeColumn">
				<ul class="threeColumnUl">
				  <li class="threeColumnLi" id="service1">
						<div class="threeColumnImageBox" style="background-image: url(images/strategic.jpg)">
							<img src="images/blockerWhite60.png" class="contentBlocker" alt=""/>
							<div class="threeColumnContent" id="serviceContent1">
			  					<h2>Strategic System<br>Certification</h2>
								<a class="button_LearnMore" id="button1" href="#serviceContent1">Learn More</a>
						 	</div>
					</div>
					<li class="threeColumnLi" id="service2">
						<div class="threeColumnImageBox" style="background-image: url(images/business.jpg)">
							<img src="images/blockerWhite60.png" class="contentBlocker" alt=""/>
							<div class="threeColumnContent" id="serviceContent2">
								<h2>Strategic BUSINESS<br>DEVELOPMENT</h2>
								<a class="button_LearnMore" id="button2" href="#serviceContent2">Learn More</a>
							</div>
						</div>
					<li class="threeColumnLi" id="service3">
						<div class="threeColumnImageBox" style="background-image: url(images/education.jpg)">
							<img src="images/blockerWhite60.png" class="contentBlocker" alt=""/>
							<div class="threeColumnContent" id="serviceContent3">
								<h2>AEROSPACE INDUSTRY<br>EDUCATION & TRAINING</h2>
								<a class="button_LearnMore" id="button3" href="#serviceContent3">Learn More</a>
							</div>
						</div>
				</ul>
			</div>
		</div>
		<div class="collapseRow row" id="row3">
			<div class="contentRow" id="serviceContent">
				<div class="contentRowWrapper">
					<div class="twoColumn">
							<div class="columns" id="width60p">
								<h1 class="serviceTitle">STRATEGIC SYSTEM CERTIFICATION</h1>
								<p>We are an Aircraft and Engine systems certification expert group, specializing in the FAA and other foreign approvals and certifications of Parts Manufacturers Approval, Technical Standard Order Approval, Type Certificate, and Supplemental Type Certificate.</br></br>
								We are fully committed to your product realization (from early product development stage to final certification). Based on various different successful aircraft systems and engine systems certification experiences, we strive to obtain the certification (PMA, TSOA, TC and STC) of your product in the most efficient manner through early strategical planning and close negotiation with the certification authority from the very beginning of your project.
									</br></br>
								</p>
									<ul>
										<li>Specialize in FAA PART 23, 25, 27, 29, AND 33 AIRCRAFT AND COMPONENT CERTIFICATION in the most strategic and economical means for the component/system.</li>
										<li>Provide consultation in obtaining the FAA PMA (Parts Manufacturers Approval), TSOA (Technical Standard Order Approval), and STC (Supplemental Type Certificate) Installation approvals of your components and systems of manufacture.</li>
										<li>Provide consultation in obtaining your FAA military certification on military articles thru the FAA MCO(Military Certification Office)</li>
										<li>Provide assistance and consultation in your Component Development and Certification in the fields of engineering, certification and business product realization</li>
										<li>Provide other Foreign Civil Aviation Certifications (Canadian TCCA, Brazilian ANAC, European EASA) as well as marketing your approved articles</li><br><br>
									</ul>
									<p>여러 종류 AIRCRAFT SYSTEM 과 ENGINE SYSTEM 을 처음 콘셉트 설계 부터 FAA AND FOREIGN CIVIL인증 까지 성공인증 경험을 바탕으로 고객님의 PRODUCT 인증에 전념하겟습니다. 미리세워진 전략전 계획 (Based on Project Specific Certification Plan)과 인증기관과의 NEGOTIATION 으로 단기간에 전략적인 PMA, TSO, STC 부품과 장착, 그리고 변형 장착인증으로 고객님의 필요에 마춤형 CONSULTING 을 해드립니다.</p>
									<ul>
										<li>저희 회사는 FAA PART 23, 25, 27, 29, AND 33  법에따른 항공 부품, 시스템, 그리고 항공기 기체 장착 인증을 계획, 체계적이고 가장 효율적인 방법으로 인증기관과의 NEGOTIATION 바탕으로 고객님의 상품인증을획득하는 컨설팅을 제공합니다.</li>
										<li>저희 회사는 고객님의 FAA PMA (Parts Manufacturers Approval), TSOA (Technical Standard Order Approval) 의 부품인증과 STC (Supplemental Type Certificate) 항공기 변형 장착인증설게 를획득하는데 도움을 드림니다</li>
										<li>저희 회사는 고객님의 FAA MCO(Military Certification Office)를 통해 민간기 플랫폼을 가진 군용기 부품과 장착인증 컨설팅을 제공합니다.</li>
										<li>고객님의 항공기 Engineering부품 계발,  인증 그리고 인증됀 상품의 마케팅 컨설팅을 제공합니다.</li>
										<li>미국 FAA 인증 획득을 바탕으로 타주요국들의 인증 (Canadian TCCA, Brazilian ANAC, European EASA) 과 마케팅 컨설팅을 제공합니다.</li>
									</ul><br>
									<h2 class="serviceSubTitle">SYSTEM & PROCESS CERTIFICATION CONSULTING FIELDS</h2>
										<ul>
											<li>Part 21 Quality System Certification based on AS9100</li>
											<li>ARP4761 System Safety Engineering Certification </li>
											<li>ARP5583B HIRF(High Intensity Radiated Fields) Certification</li>
											<li>ARP based Indirect Effects of Lightning Certification </li>
											<li>DO-178 Software Certification</li>
											<li>DO-160F/G Component Qualification Testing</li>
											<li>Aircraft Wiring System (EWIS) Certification based on  AS50881</li>
											<li>Aircraft Bonding and Grounding based on AS1870</li>
											<li>Aircraft Battery MOPS DO-311/ DO-293A</li>
											<li>Aircraft TYPE CERTIFICATE Training</li>
											<li>TSO Process</li>
											<li>PMA Process</li>
											<li>TC/STC PROCESS</li>
										</ul>
							</div>
							<div class="columns" id="contentRowImageBox">
								<div class="contentBox">
									<h2 class="serviceSubTitle">Successful Certification Accomplishment Highlights</h2>
										<ul>
											<li>FAA Approved qualification plans and reports on numerous aircraft and engine system components</li>
											<li>FAA approved compliance inspection plans and reports</li>
											<li>FAA approved software qualification per DO-178</li>
											<li>FAA approved qualification test plan per DO-311</li>
											<li>FAA approved high intensity radiated field plan and reports</li>
											<li>FAA approved indirect lightning test plan and reports</li>
											<li>FAA approved certification plans and reports</li>
											<li>FAA approved substantiation reports on approved design changes</li>
											<li>FAA approved flight test plans and reports</li>
											<li>FAA and foreign CAA validation reports</li>
											<li>FAA approved electrical load analysis</li>
											<li>FAA Type Certification</li>
											<li>Canada TCCA aircraft TYPE Certification</li>
											<li>EASA aircraft Type Certification</li>
											<li>Brazil ANAC Type Certification</li>
										</ul>
								</div>
							</div>

					</div>
				</div>
			</div>
		</div>
		
		<div class="collapseRow row" id="row4">
			<div class="contentRow" id="serviceContent">
				<div class="contentRowWrapper">
				<div class="twoColumn">
							<div class="columns">
								<h1 class="serviceTitle">STRATEGIC BUSINESS DEVELOPMENT</h1>
								<p>미국 케럴라이나에 위치한 저희회사는 새로형성되는 Aerospace 제조 Hub 인 미동남부에 위치해 많은 OEM/Supplier Network으로 고객의 개로운 사업 시작에 도움을 줄수있는 인적 자원을 소요하고있습니다. Market Survey 와 Network 바탕으로 Niche Markey 과 경쟁력있는 비행기부품 / 서비스 항목을찾아 고객님을 돕겠습니다. 미국 항공사업에 전략적 투자상담도 함께 주도하고있습니다.
								</p>
									<ul>
										<li>New Startup 항공 제조회사들의 경험과 지식을 토대로 배운 가장 효율적인 사업구상과 Civil Aviation Authority 에 기초한 계획적인증으로 고객님의 필요맟춤형 Consulting을 제공합니다. </li>
										<li>한국에 사업을 두신 고객은 국토부와 FAA 와의 Bilateral Agreement 통해한 인증으로 다른 Civil Aviation Authority 의 인증들을 구축함으로 한국제조 항공부품을 국제시장 진출을 도와드립니다.</li>
										<li>항공사업에 관심있으신 전문 투자자들께 경쟁력있는 투자품목 Consulting과 투자유치도 하고있습니다.</li>
										<li>미주에 기반을두려고 사업을 이주하거나 시작하시는 회사에 경제적 지원 Local and State Funded Employment Grant, Business Sales Survey 관련 경로 Consulting 을 제공합니다. </li>
										<li>미주 사업기반을 뭔하시는 고객님들에게 경쟁력있는 비지니스 품목 리서치와 파트너싑 형성등 저희회사의 business networks (Aerospace engineering, manufacturing, certification and business services)을 이용한 다양한 컨설팅을 제공합니다.</li>
									</ul>
							</div>		
					</div>
				</div>
			</div>
		</div>
		
		<div class="collapseRow row" id="row5">
			<div class="contentRow" id="serviceContent">
				<div class="contentRowWrapper">
					<div class="twoColumn">
						<div class="columns">
							<h1 class="serviceTitle" style="font-size: 2.3em;">AEROSPACE INDUSTRY EDUCATION & TRAINING</h1>
							<p>항공기 부품/system 제조에 필요한 Engineering TOPIC들을 이해하기쉽게 practical 한 적용에 중점으로 인증기관과 인증 지원자 입장에서의 경험과 SOUND Engineering 바탕으로 만든 course 들입니다. 주 항공 제조 인증 회사들의 교육을 발전 향상시킨내용을 토대로 만든 course 입니다.
							</p>
								<ul>
									<li>AS9100 Quality System</li>
									<li>Part 21 Training </li>
									<li>Configuration Management</li>
									<li>ARP4761 System Safety Engineering Training</li>
									<li>ARP5583B HIRF Training</li>
									<li>ARP based Lightning</li>
									<li>DO-178 Software Certification</li>
									<li>DO-160F/G Training</li>
									<li>Aircraft Wiring System (EWIS) AS50881</li>
									<li>Aircraft Bonding and Grounding AS1870</li>
									<li>Aircraft Battery Qualification based on MOPS DO-311/ DO-293A</li>
									<li>Aircraft TYPE CERTIFICATE Training</li>
									<li>Industry Certification lessons learned</li>
								</ul>
						</div>		
					</div>
				</div>
			</div>
		</div>
		
		
		<div class="row" id="row6">
			<div class="content">
				<h1 class="rowTitle" style="margin-bottom: 0;">Contact Us</h1>
				<p>tyoon@jkaerostart.com<br>203-988-8185<br>4110 Sheraton Ct, Greensboro, NC 27410 USA</p>
				<div id="contactForm">
					<form action="php/mailer.php" method="post" name="form1" id="form1" style="margin:0px;" onsubmit="MM_validateForm('from','','RisEmail','subject','','R','verif_box','','R','message','','R');return document.MM_returnValue">

					<span>Your Name :</span>
					<input class="contactInput" name="name" type="text" id="name" value="<?php echo $_GET['name'];?>"/>
					<br />
					<br />

					<span>Your e-mail :</span>
					<input class="contactInput" name="from" type="text" id="from" value="<?php echo $_GET['from'];?>"/>
					<br />
					<br />

					<span>Subject :</span>
					<input class="contactInput" name="subject" type="text" id="subject" value="<?php echo $_GET['subject'];?>"/>
					<br />
					<br />

					<span>Verification :</span>
					<input class="contactInput" name="verif_box" type="text" id="verif_box"/>
					<img src="php/verificationimage.php?<?php echo rand(0,9999);?>" alt="verification image, type it in the box"/>
					<br />
					<br />

					<!-- if the variable "wrong_code" is sent from previous page then display the error field -->
					<?php if(isset($_GET['wrong_code'])){?>
					<div style="border:1px solid #990000; background-color:#D70000; color:#FFFFFF; padding:4px; padding-left:6px;width:295px;">Wrong verification code</div>
					<?php ;}?>

					<span>Message :</span>
					<textarea name="message" cols="6" rows="5" id="message"><?php echo $_GET['message'];?></textarea>
					<noscript><a href="http://www.thewebhelp.com" style="display:none;">contact form by thewebhelp</a></noscript>
					<input id="contactSubmit" name="Submit" type="submit" value="Send Message" a href="javascript:void(0);"/>
					</form>
				</div>
			</div>
		</div>
		<footer>
			<div id="footerWrapper">
				<div class="twoColumn">
					<ul class="twoColumnUl">
						<li class="twoColumn_R-50p" style="text-align: right; padding-right: 40px;">
						  <img src="images/logo.png" width="279" height="50" alt=""/>
                        <li class="twoColumn_R-50p">
                        	<p>4110 Sheraton Ct<br>Greensboro, NC 27410<br>203-988-8185</p>
						</li>
					</ul>
				</div>
			</div>
		</footer>
	</main>
</body>
</html>
