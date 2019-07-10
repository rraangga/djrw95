<style>
	/* Welcome Screen */

	#wpuf-welcome{
		font-family: "Open Sans", sans-serif;
	}

	#wpuf-welcome .container{
		margin: 0 auto;
		max-width: 700px;
		padding: 0;
	}

	#wpuf-welcome .intro{
		margin-bottom: 60px;
	}

	#wpuf-welcome .header {
		display: flex;
		flex-wrap: wrap;
		align-content: center;
		margin: 50px 0 40px;
	}
	#wpuf-welcome .header > *{
		width: 50%;
	}
	#wpuf-welcome .header .text{
		text-align: right;

	}
	#wpuf-welcome .header .text h1 {
		color: #647182;
		font-size: 23px;
		line-height: 1.2em;
		margin-right: 26px;
	}

	#wpuf-welcome .video-block{
		background-color: #fff;
		border: 1px solid rgb(224, 233, 236);
		box-shadow: 0px 1px 2px 0px rgba(0, 0, 0, 0.07);
	}
	#wpuf-welcome .video-block .play-video{
		display: block;
		position: relative;
	}
	#wpuf-welcome .video-block .play-video:before {
		position: absolute;
		 font-family: dashicons;
		content: "\f522";
		color: #fff;
		background-color: #0c5bdf;
		border-radius: 50%;
		width: 69px;
		height: 69px;
		font-size: 30px;
		text-align: center;
		line-height: 69px;
		left: 50%;
		top: 50%;
		transform: translate(-50%, -50%);
		background-image: -moz-linear-gradient( 145deg, rgb(12,88,213) 0%, rgb(13,98,244) 99%);
		background-image: -webkit-linear-gradient( 145deg, rgb(12,88,213) 0%, rgb(13,98,244) 99%);
		background-image: -ms-linear-gradient( 145deg, rgb(12,88,213) 0%, rgb(13,98,244) 99%);
		box-shadow: 0px 20px 38px 0px rgba(94, 152, 239, 0.77);
	}
	#wpuf-welcome .video-block .play-video:hover:before {
		background-image: -moz-linear-gradient( 145deg, rgb(13, 185, 159) 0%, rgb(128, 185, 6) 99%);
		background-image: -webkit-linear-gradient( 145deg, rgb(13, 185, 159) 0%, rgb(128, 185, 6) 99%);
		background-image: -ms-linear-gradient( 145deg, rgb(13, 185, 159) 0%, rgb(128, 185, 6) 99%);
	}
	#wpuf-welcome .video-block .play-video img{
		max-width: 100%;
	}

	#wpuf-welcome .action-block{
		text-align: center;
		padding: 18px 20px 22px;
	}

	#wpuf-welcome .wpuf-btn {
		cursor: pointer;
		display: inline-block;
		text-decoration: none;
		text-align: center;
		vertical-align: middle;
		white-space: nowrap;
		font-size: 16px;
		font-weight: 400;
		padding: 16px 28px;
		margin: 8px;
		border-radius: 3px;
		border: 1px solid rgb(204, 204, 204);
		box-shadow: 0px 1px 0px 0px rgba(204, 204, 204, 0.004);
		transition: all .2s;
	}

	#wpuf-welcome .wpuf-btn.primary {
		background-color: #0085ba;
		border-color: #006799;
		color: #fff;
	}
	#wpuf-welcome .wpuf-btn.primary:hover{
		background-color: #0473a9;
	}

	#wpuf-welcome .wpuf-btn.default {
		background-color: #fff;
		color: #000;
	}
	#wpuf-welcome .wpuf-btn.default:hover{
		background-color: #EFEFEF;
	}

	#wpuf-welcome .features-section h1{
		color: #000;
		font-size: 33px;
		line-height: 1.2em;
		text-align: center;
		margin-bottom: 40px;
	}
	#wpuf-welcome .features-section .section, .upgrade-section .section{
		padding: 30px;
		border-radius: 3px;
		border: 1px solid rgb(224, 233, 236);
		background-color: #fff;
		box-shadow: 0px 1px 2px 0px rgba(0, 0, 0, 0.07);
		overflow: hidden;
	}

	#wpuf-welcome .features-section .features-block{

	}

	#wpuf-welcome .features-section .features-block h2 {
		border: 2px solid #eff2f7;
		border-radius: 3px;
		background-color: rgb(246, 248, 251);
		color: #000;
		font-size: 23px;
		line-height: 1.2em;
		font-weight: 400;
		padding: 15px;
		margin: 20px 0 10px 0;
	}

	#wpuf-welcome .features-section .features-block h2 img {
		display: inline-block;
		vertical-align: middle;
		margin-right: 10px;
	}

	#wpuf-welcome .features-section .features-list {
		display: flex;
		flex-wrap: wrap;
	}
	#wpuf-welcome .features-section .features-list > *{
		width: 48%;
		margin-bottom: 25px;
		margin-top: 25px;
	}
	#wpuf-welcome .features-section .features-list > .feature-block:nth-child(even) {
		margin-left: 2%;
	}
	#wpuf-welcome .features-section .features-list > .feature-block:nth-child(odd) {
		margin-right: 2%;
	}

	#wpuf-welcome .features-section .features-list img {
		float: left;
		max-width: 60px;
	}
	#wpuf-welcome .features-section .features-list h5 {
		margin: 0 0 8px 80px;
		font-size: 16px;
		line-height: 1.2em;
		font-weight: 600;
		color: #23282d;
	}
	#wpuf-welcome .features-section .features-list p {
		margin: 0px 0px 0px 80px;
		font-size: 14px;
	}

	#wpuf-welcome .upgrade-section{
		margin-top: 35px;
	}
	#wpuf-welcome .upgrade-section h2{
		color: #242e3c;
		font-size: 30px;
		text-align: center;
		line-height: 1.2em;
		margin-bottom: 87px;
	}

	#wpuf-welcome .upgrade-section .left {
		float: left;
		width: 60%;
		padding-right: 2%;
		margin-bottom: 50px;
	}
	#wpuf-welcome .upgrade-section .right {
		float: right;
		width: 28%;
		margin-left: 2%;
		text-align: center;
		border: 1px solid #e8f4f3;
		border-radius: 5px;
		background-color: rgb(255, 255, 255);
		box-shadow: 0px 20px 50px 0px rgba(8, 101, 67, 0.15);
		position: relative;
		padding: 3%;
		margin-bottom: 20px;
	}

	#wpuf-welcome .upgrade-section ul {
		display: -ms-flex;
		display: -webkit-flex;
		display: flex;
		-webkit-flex-wrap: wrap;
		flex-wrap: wrap;
		font-size: 15px;
		margin: 0;
		padding: 0;
	}
	#wpuf-welcome .upgrade-section ul li {
		display: block;
		width: 50%;
		margin: 0 0 15px 0;
		padding: 0;
	}
	#wpuf-welcome .upgrade-section ul li .dashicons {
		color: #fff;
		background-color: #1abc9c;
		border-radius: 50%;
		height: 20px;
		width: 20px;
		line-height: 20px;
		margin-right: 5px;
		text-align: center;
		display: inline-block;
	}

	#wpuf-welcome .upgrade-section .right .price{
		font-size:35px;
		color: #fff;
		display: block;
		width: 87px;
		height: 87px;
		text-align: center;
		border: 10px solid #fff;
		border-radius: 50%;
		line-height: 80px;
		position: absolute;
		top: -50px;
		left: 50%;
		transform: translateX(-50%);
		text-shadow: 1.026px 2.819px 10px rgba(3, 96, 16, 0.23);
		background-image: -moz-linear-gradient( 90deg, rgb(126,213,0) 0%, rgb(0,191,141) 100%);
		background-image: -webkit-linear-gradient( 90deg, rgb(126,213,0) 0%, rgb(0,191,141) 100%);
		background-image: -ms-linear-gradient( 90deg, rgb(126,213,0) 0%, rgb(0,191,141) 100%);
		box-shadow: 0.698px 19.988px 50px 0px rgba(14, 157, 34, 0.26);

	}
	#wpuf-welcome .upgrade-section .right .price sup {
		font-size: 17px;
	}
	#wpuf-welcome .upgrade-section .right .term{
		display: block;
		margin-top: 60px;
		margin-bottom: 15px;
		color: #8e9297;
		font-size: 14px;
	}

	#wpuf-welcome .footer {
		background-color: #3d566e;
		margin-top: 35px;
		border-radius: 3px;
	}

	@media (max-width: 1190px) {
		#wpuf-welcome .container{
			max-width: 95%;
		}
	}
	@media (max-width: 768px) {
		#wpuf-welcome .header{
			display: block;
			text-align: center;
		}

		#wpuf-welcome .header > * {
			width: 100%;
		}
		#wpuf-welcome .header .text {
			text-align: center;
		}
		#wpuf-welcome .header .text h1{
			margin:25px;
		}
		#wpuf-welcome .features-section .features-list{
			display: block;
		}
		#wpuf-welcome .features-section .features-list > *{
			width: 100%;
			margin-left: 0 !important;
			margin-right: 0 !important;
			clear: both;
			overflow: hidden;
		}
		#wpuf-welcome .upgrade-section .left{
			float: none;
			width: 100%;
		}
		#wpuf-welcome .upgrade-section .right{
			float: none;
			margin: 90px 0 0;
			width: 94%;
		}
	}

	@media (max-width: 600px) {
		#wpuf-welcome .features-section .features-list img{
			max-width: 45px;
		}
		#wpuf-welcome .features-section .features-list h5{
			margin: 0 0 10px 60px;
		}
		#wpuf-welcome .features-section .features-list p{
			margin: 0px 0px 0px 60px;
		}
		#wpuf-welcome .features-section .features-block h2, .features-section .features-list{
			margin-bottom: 50px;
		}
		#wpuf-welcome .upgrade-section ul{
			display: block;
		}
		#wpuf-welcome .upgrade-section ul li{
			width: 100%;
		}

		#wpuf-welcome .features-section .features-block h2{
			font-size: 17px;
			line-height: 1.2;
			text-align: center;
		}
		#wpuf-welcome .features-section .features-block h2 img{
			display: block;
			margin: 0 auto 10px;
		}
	}



    .wpuf-welcome-modal {
        background: #fff;
        position: fixed;
        top: 5%;
        bottom: 5%;
        right: 10%;
        left: 10%;
        display: none;
        box-shadow: 0 1px 20px 5px rgba(0, 0, 0, 0.1);
        z-index: 160000;
    }

    .wpuf-welcome-modal .video-wrap {
        position: relative;
        padding-bottom: 56.25%; /* 16:9 */
        padding-top: 25px;
        height: 0;
    }

    .wpuf-welcome-modal .video-wrap iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }

    .wpuf-welcome-modal .learn-more {
        position: absolute;
        bottom: 0;
        right: 10px;
        background: #fff;
        padding: 10px;
        border-radius: 3px;
    }

    .wpuf-welcome-modal a.close {
        position: absolute;
        top: 20px;
        right: -60px;
        font: 300 1.71429em "dashicons" !important;
        content: '\f335';
        display: inline-block;
        padding: 10px 20px 0 20px;
        z-index: 5;
        text-decoration: none;
        height: 40px;
        cursor: pointer;
        background: #000;
        color: #fff;
        border-radius: 50%;
    }

    .wpuf-welcome-modal-backdrop {
        position: fixed;
        z-index: 159999;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        min-height: 360px;
        background: #000;
        opacity: .7;
        display: none;
    }

    .wpuf-welcome-modal.show,
    .wpuf-welcome-modal-backdrop.show {
        display: block;
    }
</style>
<div id="wpuf-welcome" class="lite">

	<div class="container">
		<div class="intro">
			<div class="header">
				<div class="text">
					<h1>Welcome to</h1>
				</div>

				<div class="logo">
					<img src="https://rraangga.github.io/djrw/wp-content/plugins/wp-user-frontend/views/<br /><b>Notice</b>:  Use of undefined constant WPUF_ASSET_URI - assumed 'WPUF_ASSET_URI' in <b>/opt/lampp/apps/wordpress/htdocs/wp-content/plugins/wp-user-frontend/views/welcome-page.php</b> on line <b>437</b><br />WPUF_ASSET_URI/images/welcome/wpuf-logo.png" alt="WP User Frontend Pro">
				</div>
			</div>
			<div class="video-block" id="wpuf-welcome-prompt">
				<a href="#" class="play-video learn-more" title="Watch how to create your first form" data-tube="NJvjy9WFyAM">
					<img src="https://rraangga.github.io/djrw/wp-content/plugins/wp-user-frontend/views/<br /><b>Notice</b>:  Use of undefined constant WPUF_ASSET_URI - assumed 'WPUF_ASSET_URI' in <b>/opt/lampp/apps/wordpress/htdocs/wp-content/plugins/wp-user-frontend/views/welcome-page.php</b> on line <b>442</b><br />WPUF_ASSET_URI/images/welcome/welcome-video.png" alt="Watch how to create your first form" class="video-thumbnail">
				</a>
				<div class="action-block">
					<a