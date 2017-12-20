<?php 
$education = 'Education';
$skillstitle = 'Skills';
$adobes = '<p><strong>Adobe CC:</strong><br/>InDesign, Photoshop, Illustrator, Audition, After Effects, Premiere Pro, Experience Design';

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

$experiencetitle = 'Work Experience';
$resume = [
	[
	'jobtitle' => 'Web Production Designer',
	'companyname' => 'Healthy Directions',
	'date' => 'July 2017 - Present',
	'jobdesc' => 'Designs and edits HTML and CSS documents for use on Healthy Directions websites, landing pages, emails, newsletters, and responsive web banners. Also designs web-optimized imagery for site rotators and other non-coded web banners. Manages and maintains product pages and landing pages using Oracle (BCC and Endeca). Tracks and manages job tickets through Salesforce Jobsuite.'
	],
	[
	'jobtitle' => 'Graphic Design Intern',
	'companyname' => 'Textron Systems',
	'date' => 'June 2016 - July 2017',
	'jobdesc' => 'Worked directly with the Unmanned Systems marketing department. Designed a wide variety of material for both internal and external use.
		<ul>
			<li>Spearheaded the 2017 Start Your Mission ad campaign, designed the campaign logo, and developed collateral for its print, digital, and trade show initiatives. </li>
			<li>Designed brand journalism periodical templates, advertising for international defense magazines, and various posters and signage.</li>
			<li>Produced static and animated web ads for company site and outside vendors.</li>
			<li>Wireframed and coded email newsletters.</li>
		</ul>'
	],
	[
	'jobtitle' => 'Graphic Design and Marketing Intern',
	'companyname' => 'UMBC Residential Life Office',
	'date' => 'September 2014 - August 2016',
	'jobdesc' => 'Assisted all Residential Life departments with marketing needs, designing advertisements, promotions, web graphics, motion graphics, booklets, and other printed and electronic material.'
	],
	[
	'jobtitle' => 'Marketing Intern',
	'companyname' => 'Mentor Foundation USA',
	'date' => 'June 2014',
	'jobdesc' => 'One month Internship with the marketing department of an international non-profit. Assisted with social media outreach, website development, graphic design, video production, and database upkeep.'
	]

];


require_once('about.view.php');