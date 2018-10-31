<?php 
$education = 'Education';
$skillstitle = 'Skills and Proficiencies';
$adobes = '<strong>Adobe CC:</strong><br/>InDesign, Photoshop, Illustrator, Audition, After Effects, Premiere Pro, Experience Design';

$adobelist =[
	'images' => [
		'images/adobe1.png',
		'images/adobe2.png',
		'images/adobe3.png',
		'images/adobe4.png',
		'images/adobe5.png',
		'images/adobe6.png',
		'images/adobe7.png'
		]
];
$webskills = '<strong>Web:</strong><br/>HTML, CSS, SASS, PHP, Bootstrap, CSS Grid, Javascript, jQuery, 				  Oracle<br/>
			  <strong>CMS:</strong><br/>WordPress, Wix, Weebly<br/>
			  <strong>Email Marketing:</strong><br/>Sendgrid, Salesforce<br/>
			  <strong>Other</strong><br/>Keynote, Google Suite, MS Office Suite, Windows OS, Mac OS<br/>';

$experiencetitle = 'Work Experience';
$expand = '+';
$resume = [
	[
	'jobtitle' => 'Content Designer',
	'companyname' => 'Jarrow Formulas',
	'date' => 'March 2018 - Present',
	'jobdesc' => '
		<ul>
			<li>Kickstarted a large-scale landing page project for Jarrow’s probiotics line. Crafted a responsive webpage template from scratch with HTML5, CSS3, and Javascript. Coded a custom framework with CSS Grid for best functionality on all platforms.</li>
			<li>Wrote responsive HTML5 and CSS3 templates for direct-to-consumer email newsletters. </li>
			<li>Redesigned informational booklets and pamphlets detailing Jarrow products for use in brick-and-mortar retailers.</li>
			<li>Collaborated with Creative Director to workshop new designs for the Jarrow Formulas logo.</li>
			<li>Designed visual content for the launch of the new Jarrow Probiotics Shopify website.</li>
			<li>Provided marketing team with any needed visual content for direct-to-consumer advertising and coupons.</li>
		</ul>'
	],
	[
	'jobtitle' => 'Web Production Designer',
	'companyname' => 'Healthy Directions',
	'date' => 'July 2017 - March 2018',
	'jobdesc' => '
		<ul>
			<li>Crafted and edited HTML5 and CSS3 pages with Bootstrap for Healthy Directions’ websites, landing pages, emails, newsletters, and responsive web banners.</li>
			<li>Designed web-optimized graphics for site rotators and other web advertising banners.</li>
			<li>Managed and maintained product pages and landing pages using Oracle (BCC and Endeca).</li>
		</ul>'
	],
	[
	'jobtitle' => 'Graphic Design Intern',
	'companyname' => 'Textron Systems',
	'date' => 'June 2016 - July 2017',
	'jobdesc' => '
		<ul>
			<li>Spearheaded the 2017 Start Your Mission ad campaign, designed the campaign logo, and
			developed collateral for its print, digital, and trade show initiatives. </li>
			<li>Designed brand journalism periodical templates, advertising for international defense magazines, and various posters and signage.</li>
			<li>Produced static and animated web ads for company site and outside vendors.</li>
			<li>Wireframed and coded email newsletters using HTML5 and CSS3. Implemented code with Salesforce.</li>
		</ul>'
	],
	[
	'jobtitle' => 'Graphic Design and Marketing Intern',
	'companyname' => 'UMBC Residential Life Office',
	'date' => 'September 2014 - August 2016',
	'jobdesc' => '
		<ul>
			<li>Designed advertisements, promotions, web graphics, motion graphics, booklets, and other printed and electronic material.</li>
			<li>Led design campaigns that saw increased click rates in email newsletters and greater student participation for on-campus resident events.</li>
		</ul>'
	],
	[
	'jobtitle' => 'Marketing Intern',
	'companyname' => 'Mentor Foundation USA',
	'date' => 'June 2014',
	'jobdesc' => 'One month Internship with the marketing department of an international non-profit. Assisted with social media outreach, website development, graphic design, video production, and database upkeep.'
	],
	[
	'jobtitle' => 'Freelance/Volunteering Work',
	'companyname' => 'Various Project Types',
	'date' => '2011-Present',
	'jobdesc' => '
		<ul>
			<li><b>Emmanuel City of Hope:</b> (Logo/Branding)</li>
			<li><b>Excel Youth:</b> (Mural Work)</li>
			<li><b>Villa Fungi:</b> (Logo/Branding)</li>
		</ul>'
	]

];


require_once('about.view.php');