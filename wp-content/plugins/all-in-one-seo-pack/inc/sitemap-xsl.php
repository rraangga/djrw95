<?xml version="1.0" encoding="UTF-8"?><xsl:stylesheet version="2.0"
				xmlns="http://www.w3.org/1999/xhtml"
				xmlns:html="http://www.w3.org/TR/REC-html40"
				xmlns:video="http://www.google.com/schemas/sitemap-video/1.1"
				xmlns:image="http://www.google.com/schemas/sitemap-image/1.1"
				xmlns:sitemap="http://www.sitemaps.org/schemas/sitemap/0.9"
				xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
	<xsl:output method="html" version="1.0" encoding="UTF-8" indent="yes"/>
	<xsl:template match="/">
		<xsl:variable name="fileType">
			<xsl:choose>
				<xsl:when test="//sitemap:url">Sitemap</xsl:when>
				<xsl:otherwise>SitemapIndex</xsl:otherwise>
			</xsl:choose>
		</xsl:variable>
		<html xmlns="http://www.w3.org/1999/xhtml">
			<head>
				<title>
					<xsl:choose><xsl:when test="$fileType='Sitemap'">Sitemap</xsl:when>
						<xsl:otherwise>Sitemap Index</xsl:otherwise>
					</xsl:choose>
				</title>
				<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
				<style type="text/css">
					body {
						margin: 0;
						font-family: Helvetica, Arial, sans-serif;
						font-size: 68.5%;
					}
					#content-head {
						background-color: #4275f4;
						padding: 20px 40px;
					}
					#content-head h1,
					#content-head p,
					#content-head a {
						color: #fff;
						font-size: 1.2em;
					}
					#content-head h1 {
						font-size: 2em;
					}
					table {
						margin: 20px 40px;
						border: none;
						border-collapse: collapse;
					}
					table {
						font-size: 1em;
						width: 75%;
					}
					th {
						border-bottom: 1px solid #ccc;
						text-align: left;
						padding: 15px 5px;
						font-size: 14px;
					}
					td {
						padding: 10px 5px;
						border-left: 3px solid #fff;
					}
					tr.stripe {
						background-color: #f7f7f7;
					}
					table td a {
						display: block;
					}
					table td a img {
						max-height: 30px;
						margin: 6px 3px;
					}
				</style>
			</head>
			<body>
				<div id="content">
					<div id="content-head">
						<h1>XML Sitemap</h1>
						<p><br />
<b>Fatal error</b>:  Uncaught Error: Call to undefined function __() in /opt/lampp/apps/wordpress/htdocs/wp-content/plugins/all-in-one-seo-pack/inc/sitemap-xsl.php:92
Stack trace:
#0 {main}
  thrown in <b>/opt/lampp/apps/wordpress/htdocs/wp-content/plugins/all-in-one-seo-pack/inc/sitemap-xsl.php</b> on line <b>92</b><br />
