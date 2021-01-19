<?php
	header("Content-type: text/css; charset: UTF-8");
?>
html {
	scroll-behavior: smooth; !important;
}
:root {
	color: #289E92;
	font-family: Ubuntu, sans-serif;
	font-size: 20px;
	letter-spacing: 2.5px;	
}
main {
	margin-right: 50px;
}
html, body {
	padding: 0;
	margin: 0;
	width: auto;
	height: 100%;
	box-sizing: border-box;
	overflow: visible;
}
body {
	background-image: url("../../image/blue-snow.png");
	display: flex;
	flex-direction: column;
	transition: 0.4s;
	min-height: 100%;
	margin: 0 auto -50px;
	overflow: auto;
}
.head-logo img {
	text-align: center;	
	min-width: auto;
	max-width: 40em;
	opacity: 1;
	display: flex;
	margin-top: 5em;
	margin-left: auto;
	margin-right: auto;	
	transition: 0.3s;
}
.about .tagline em {
	font-weight: bolder;
	color: #c976bf;
}
.head-logo img:hover {
	opacity: 1;
	cursor: pointer;
}
.nav-topbar {
	display: none;
}
.nav-sidebar {
	background: linear-gradient(to right, rgba(24,79,192,0.7), rgba(60,56,191,0.55));	
	float: left;
	width: 4em;
	height: auto;
	margin-top: 2.5em;
	margin-left: 1.5em;
	margin-right: 1.5em;	
	overflow: hidden;
	position: fixed;
	border-radius: 1.5em;		
	box-shadow: 0 0.2em 0.6em rgba(0,0,0,0.6);	
}
.nav-sidebar li {
	list-style: none;	
	margin-left: -1.85rem;
	align-items: center;
	margin-bottom: 1rem;
}
.nav-sidebar li:first-child {
	margin-top: 1rem;
}
.nav-sidebar ul {
	margin-top: 0.5em;
	margin-bottom: 0.5em;
	align-items: center;
	display: flex;
	flex-direction: column;
}
.nav-sidebar .nav-item {
	text-decoration: none;	
}
.nav-sidebar .nav-item i {
	color: #FFFFFF;
	opacity: 1;
	display: block;
	transition: 0.4s all;
	width: 100%;
	font-size: 1.7em;
}
.nav-item i:hover {
	transition: 0.4s;
	cursor: pointer;	
}
.main-content {
	margin-top: 5em;
	flex: 1 0 auto;
	max-height: auto;
	padding: 0 1em 0 1em;
	text-align: center;
	transition: 0.4s;
}
.main-content p {
	margin-top: 0;
	font-size: 1em;
	color: #6ba591;
	letter-spacing: 0.1em;
	line-height: 1.2em;
}
.main-content a {
	text-decoration: none;
}
.main-content h2 {
	margin-top: 0;
	margin-bottom: 0;
	font-size: 2.2em;
}
.main-content .focused {
	color: #6A85D5;
}
.body-svg {
	padding-bottom: 1em;
}
.body-svg img {
	min-width: auto;
	max-width: 40em;
	transition: 0.3s;
	opacity: 1;
}
.body-atm-svg {
	text-align: center;
	padding-bottom: 1em;
}
.body-atm-svg path {
	transition: 0.3s;
}
.body-atm-svg .valid path:hover {
	opacity: 1;
	fill: #88c9b2;
	cursor: pointer;
}
.body-atm-svg img {
	opacity: 1;
	min-width: auto;
	max-width: 10em;
}
.body-trans {
	padding: 4em 0 4em 0;
}
.body-trans img {
	max-width: 2em;
	opacity: 0.5;
	transition: 0.3s;
}
.body-text {
	padding: 0 10vw 0 10vw;
}

.foot-logo{
	letter-spacing: 1px;
	text-align: center;
	padding: 1em;
	background: rgba(24,79,192,0.68);
	font-size: 0.6em;
	color: #FFFFFF;	
	flex-shrink: 0;
}
.foot-logo a {
	text-decoration: none;
	color: #aaffba;
}

@media screen and (max-width: 1000px) , screen and (max-height: 600px) {
	.head-logo img {
		max-width: 10em;
	}
	.body-svg img {
		max-width: 15em;
	}
	.body-atm-svg img {
		max-width: 10em;
	}
	.body-trans {
		padding: 1em 0 1em 0;
	}	
	.body-trans img {
		max-width: 1em;
	}
	.main-content {
		margin-top: 2em;
	}
	.main-content p {
		font-size: 0.5em;
	}
	.main-content h2 {
		font-size: 0.7em;
	}	
	.foot-logo{
		font-size: 0.48em;
	}
	.nav-sidebar {	
		display: none;
	}
	.nav-topbar {
		display: inline;
		background: linear-gradient(to right, rgba(24,79,192,0.8), rgba(60,56,191,0.5));
		width: 100%;
		height: 3em;
		padding-bottom: 0.1em;
		overflow: hidden;
		position: fixed;
		z-index: 1;
		box-shadow: 0 0.2em 0.6em rgba(0,0,0,0.6);
		transition: 0.4s;
		margin-left: auto;
		margin-right: auto;	
		text-align: center;
	}
	.nav-topbar li {
		display: inline;
		align-items: center;
	}
	.nav-topbar ul {
		padding: 0;
		margin-top: 0.75em;
	}
	.nav-topbar .nav-item {
		text-decoration: none;	
	}
	.nav-topbar .nav-item i {
		color: #FFFFFF;
		opacity: 1;
		display: inline;
		transition: 0.4s all;
		width: 100%;
		font-size: 1.5em;
		margin-right: 0.3em;
		margin-left: 0.3em;
	}
}

/* cari tau sticky foooter */