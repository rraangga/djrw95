<br />
<b>Notice</b>:  Use of undefined constant AIOSEOP_PLUGIN_DIR - assumed 'AIOSEOP_PLUGIN_DIR' in <b>/opt/lampp/apps/wordpress/htdocs/wp-content/plugins/all-in-one-seo-pack/admin/class-aioseop-notices.php</b> on line <b>163</b><br />
<br />
<b>Fatal error</b>:  Uncaught UnexpectedValueException: DirectoryIterator::__construct(AIOSEOP_PLUGIN_DIRadmin/display/notices/): failed to open dir: No such file or directory in /opt/lampp/apps/wordpress/htdocs/wp-content/plugins/all-in-one-seo-pack/admin/class-aioseop-notices.php:163
Stack trace:
#0 /opt/lampp/apps/wordpress/htdocs/wp-content/plugins/all-in-one-seo-pack/admin/class-aioseop-notices.php(163): DirectoryIterator-&gt;__construct('AIOSEOP_PLUGIN_...')
#1 /opt/lampp/apps/wordpress/htdocs/wp-content/plugins/all-in-one-seo-pack/admin/class-aioseop-notices.php(149): AIOSEOP_Notices-&gt;autoload_notice_files()
#2 /opt/lampp/apps/wordpress/htdocs/wp-content/plugins/all-in-one-seo-pack/admin/class-aioseop-notices.php(121): AIOSEOP_Notices-&gt;_requires()
#3 /opt/lampp/apps/wordpress/htdocs/wp-content/plugins/all-in-one-seo-pack/admin/class-aioseop-notices.php(858): AIOSEOP_Notices-&gt;__construct()
#4 {main}
  thrown in <b>/opt/lampp/apps/wordpress/htdocs/wp-content/plugins/all-in-one-seo-pack/admin/class-aioseop-notices.php</b> on line <b>163</b><br />
