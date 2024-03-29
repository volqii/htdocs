<?
// ---------------------------------------------------------------------
// GLOBAL
// ---------------------------------------------------------------------

$TEXT['global-xampp']="XAMPP for Linux";
$TEXT['global-xampp-osx']="XAMPP for OS X";

// ---------------------------------------------------------------------
// NAVIGATION
// ---------------------------------------------------------------------

$TEXT['navi-xampp']="XAMPP";
$TEXT['navi-welcome']="欢迎";
$TEXT['navi-status']="状态";
$TEXT['navi-security']="安全";
$TEXT['navi-doc']="文档";
$TEXT['navi-components']="组件";
$TEXT['navi-about']="关于XAMPP";

$TEXT['navi-demos']="演示";
$TEXT['navi-cdcol']="CD集";
$TEXT['navi-bio']="生命周期";
$TEXT['navi-guest']="Guest Book";
$TEXT['navi-perlenv']="MiniPerl";
$TEXT['navi-iart']="Instant Art";
$TEXT['navi-iart2']="Flash艺术";
$TEXT['navi-phonebook']="电话簿";
$TEXT['navi-perlasp']="Perl:ASP";
$TEXT['navi-pear']="PEAR:Excel_Writer";
$TEXT['navi-adodb']="ADOdb";
$TEXT['navi-perl']="Perl";
$TEXT['navi-python']="Python";
$TEXT['navi-jsp']="Java";
$TEXT['navi-phpswitch']="PHP转换器";

$TEXT['navi-tools']="工具";
$TEXT['navi-phpmyadmin']="phpMyAdmin";
$TEXT['navi-webalizer']="Webalizer";
$TEXT['navi-mercury']="Mercury Mail";
$TEXT['navi-filezilla']="FileZilla FTP";
$TEXT['navi-jpgraph']="JpGraph";
$TEXT['navi-phpsqliteadmin']="phpSQLiteAdmin";

$TEXT['navi-specialguest']="当前用户";
$TEXT['navi-guest1']="FCKeditor";

$TEXT['navi-languages']="语言";

// ---------------------------------------------------------------------
// STATUS
// ---------------------------------------------------------------------

$TEXT['status-head']="XAMPP状态";
$TEXT['status-text1']="本页面提供浏览所有有关正在运行以及工作信息.";
$TEXT['status-text2']="有时, 修改配置会造成错误的状态报告. 对于SSL(https://localhost)这一功能可能会不工作!";

$TEXT['status-mysql']="MySQL 数据库";
$TEXT['status-ssl']="HTTPS (SSL)";
$TEXT['status-php']="PHP";
$TEXT['status-perl']="Perl";
$TEXT['status-cgi']="通用网关接口 (CGI)";
$TEXT['status-ssi']="Server Side Includes (SSI)";
$TEXT['status-python']="Python with mod_python";
$TEXT['status-mmcache']="PHP扩展库eAccelerator";
$TEXT['status-mmcache-url']="http://www.apachefriends.org/en/faq-xampp-linux.html#mmcache";
$TEXT['status-smtp']="SMTP 服务";
$TEXT['status-ftp']="FTP 服务";
$TEXT['status-tomcat']="Tomcat 服务";
$TEXT['status-named']="域名解析服务 (DNS)";
$TEXT['status-oci8']="PHP扩展库OCI8/Oracle�";
$TEXT['status-oci8-url']="http://www.apachefriends.org/faq-lampp-en.html#oci8";

$TEXT['status-lookfaq']="查看FAQ";
$TEXT['status-ok']="已激活";
$TEXT['status-nok']="未激活";

$TEXT['status-tab1']="组件";
$TEXT['status-tab2']="状态";
$TEXT['status-tab3']="提示";

// ---------------------------------------------------------------------
// SECURITY
// ---------------------------------------------------------------------

$TEXT['security-head']="XAMPP 安全";
$TEXT['security-text1']="本页提供关于XAMPP安装后安全状态的快速概述. (请不要忘记阅读状态表后面的内容)";
$TEXT['security-text2']="绿色标记的部分表示安全；红色标记的部分表示确实不安全；黄色标记的部分表示无法检查其状态(譬如, 所检查的软件没有运行)<p>To fix or close all these matters simply call<p><b>/opt/lampp/xampp security</b><p>This will start an interactive program.";

$TEXT['security-ok']="安全";
$TEXT['security-nok']="不安全";
$TEXT['security-noidea']="未知";

$TEXT['security-tab1']="标题";
$TEXT['security-tab2']="状态";

$TEXT['security-checkapache-nok']="这些XAMPP页面可以被网络中的任何人访问";
$TEXT['security-checkapache-ok']="这些XAMPP页面不再允许网络中的任何人访问";
$TEXT['security-checkapache-text']="您目前看到的所有XAMPP演示程序页都可以被网络中的任何人访问, 只要他们知道您及其的IP地址.";

$TEXT['security-checkmysqlport-nok']="MySQL可以通过网络访问";
$TEXT['security-checkmysqlport-ok']="MySQL不再允许通过网络访";
$TEXT['security-checkmysqlport-text']="这里存在一些潜在的或理论上的安全漏洞. 如果您非常关注安全问题, 您应该屏蔽掉MySQl的网络接口.";

$TEXT['security-checkpmamysqluser-nok']="phpMyAdmin的用户pma未设置密码";
$TEXT['security-checkpmamysqluser-ok']="phpMyAdmin的用户pma已设置密码";
$TEXT['security-checkpmamysqluser-text']="phpMyAdmin在MySQL中保存了您的参数设置. phpMyAdmin通过pma用户来处理这些数据. 这个用户缺省安装时没有设置密码, 为了避免触发任何安全问题, 您应该为其设置密码.";

$TEXT['security-checkmysql-nok']="没有为MySQL root用户设置密码";
$TEXT['security-checkmysql-ok']="MySQL root用户已设置密码";
$TEXT['security-checkmysql-text']="任何本地用户都能以超级管理员的权限来操作您的MySQl. 您应该设置root密码.";

$TEXT['security-pop-nok']="Mercury Mail 服务器 (POP3) 的测试用户(newuser) 还在使用旧密码 (lampp)";
$TEXT['security-pop-ok']="POP3 服务器(Mercury Mail?) 的测试用户 \"newuser\" 不存在或已设置新密码";
$TEXT['security-pop-out']="POP3 服务器, 譬如Mercury Mail 没有运行或被防火墙组织!";
$TEXT['security-pop-notload']="<I>这一安全测试的重要扩展库 (IMAP) (php.ini)!</I><br>";
$TEXT['security-pop-text']="请检查并尽可能通过Mercury Mail服务器的配置中编辑所有的用户名和密码 !";

$TEXT['security-checkftppassword-nok']="ProFTPD的密码依旧是'xampp'";
$TEXT['security-checkftppassword-ok']="ProFTPD的密码已经改变";
$TEXT['security-checkftppassword-out']="FTP并未运行或被防火墙所阻止!";
$TEXT['security-checkftppassword-text']="如果ProFTPD服务器已经启动, 默认用户'daemon'可以通过默认密码'lampp'登陆系统, 并可以上传或改变您的XAMPP服务器上的文件. 所以, 如果您准备使用ProFTPD服务器, 您应该为'daemon'设置一个新的密码..";

$TEXT['security-phpmyadmin-nok']="PhpMyAdmin可以通过网络被随意访问";
$TEXT['security-phpmyadmin-ok']="PhpMyAdmin密码登录已被启用.";
$TEXT['security-phpmyadmin-out']="PhpMyAdmin: 找不到配置文件 'config.inc.php' ...";
$TEXT['security-phpmyadmin-text']="PhpMyAdmin未设置密码, 可以通过网络被随意访问. 将PhpMyAdmin的配置文件中的'auth_type'设置为'httpd'或者'cookie'可以避免这个问题.";

$TEXT['security-checkphp-nok']="PHP未运行于\"安全模式(safe mode)\"";
$TEXT['security-checkphp-ok']="PHP运行于\"安全模式(safe mode)\"";
$TEXT['security-checkphp-out']="不能控制PHP设置!";
$TEXT['security-checkphp-text']="如果你希望提供他人执行PHP的权利, 请考虑使用 \"安全模式(safe mode)\". 对于独立开发者, 我们推荐不要运行与\"安全模式(safe mode)\"下, 因为那样的话, 一些重要的函数将不能工作. <A HREF=\"http://www.php.net/features.safe-mode\" target=\"_new\"><font size=1>更多细节</font></A>";


// ---------------------------------------------------------------------
// SECURITY SETUP
// ---------------------------------------------------------------------

$TEXT['mysql-security-head']="MySQL 安全控制台 & XAMPP 目录保护";
$TEXT['mysql-rootsetup-head']="MYSQL 部分: \"ROOT\" 密码";
$TEXT['mysql-rootsetup-text1']="";
$TEXT['mysql-rootsetup-notrunning']="MySQL服务器未运行或者被防火墙所阻止! 请先检查 ...";
$TEXT['mysql-rootsetup-passwdnotok']="The new password is identical with the repeat password. Please enter both passwords for new!";
$TEXT['mysql-rootsetup-passwdnull']="空密码 ('') 不被允许!";
$TEXT['mysql-rootsetup-passwdsuccess']="成功: 超级用户 'root' 的密码已设置或更新!
但请注意: 要使用新的\"root\"密码需要重新启动MYSQL !!!! 新的密码信息被保存在下面的文件中:";
$TEXT['mysql-rootsetup-passwdnosuccess']="错误: root密码有错误. MySQL 拒绝了当前登录的root用户密码.";
$TEXT['mysql-rootsetup-passwdold']="当前密码:";
$TEXT['mysql-rootsetup-passwd']="新密码:";
$TEXT['mysql-rootsetup-passwdrepeat']="重复新密码:";
$TEXT['mysql-rootsetup-passwdchange']="改变密码";
$TEXT['mysql-rootsetup-phpmyadmin']="PhpMyAdmin 认证:";

$TEXT['xampp-setup-head']="XAMPP目录保护 (.htaccess)";
$TEXT['xampp-setup-user']="用户:";
$TEXT['xampp-setup-passwd']="密码:";
$TEXT['xampp-setup-start']="保护XAMPP文件夹";
$TEXT['xampp-setup-notok']="<br><br>错误: 用户名以及密码长度为3个字符到15个字符.特殊字符, 譬如 <鲣� (usw.) 以及空字符都不允许!<br><br>";
$TEXT['xampp-config-ok']="<br><br>成功: XAMPP目录已受到保护! 所有的个人数据All personal data was safed in the following file:<br>";
$TEXT['xampp-config-notok']="<br><br>错误: 您的系统不能通过 \".htaccess\" 以及 \"htpasswd.exe\" 来激活目录保护. 也许您的 PHP 运行与 \"安全模式(Safe Mode)下\". <br><br>";

// ---------------------------------------------------------------------
// START
// ---------------------------------------------------------------------

$TEXT['start-head']="欢迎使用XAMPP for Linux";

$TEXT['start-head-osx']="欢迎使用XAMPP for OS X";

$TEXT['start-subhead']="祝贺您:<br>您已经成功安装了XAMPP!";

$TEXT['start-text1']="现在您可以开始使用Apache以及其他的组件. 首先, 您可以通过左侧的导航条上的'状态'功能来查看他们是否工作正常.";

$TEXT['start-text2']="";

$TEXT['start-text3']="";

$TEXT['start-text4']="您可以通过浏览 <a href='https://127.0.0.1' target='_top'>https://127.0.0.1</a> 或者 <a href='https://localhost' target='_top'>https://localhost</a> 来验证OpenSSL";

$TEXT['start-text5']="";

$TEXT['start-text6']="祝您好运, Kai 'Oswald' Seidler + Kay Vogelgesang";

// ---------------------------------------------------------------------
// MANUALS
// ---------------------------------------------------------------------

$TEXT['manuals-head']="在线文档";

$TEXT['manuals-text1']="XAMPP将多种不同的软件包综合为一个包, 下面是其中一些重要软件包标准和参考文档的列表.";


$TEXT['manuals-list1']="
<ul>
<li><a href=http://httpd.apache.org/docs/2.4/>Apache 2 documentation</a>
<li><a href=http://www.php.net/manual/en/>PHP <b>referenz </b>documentation</a>
<li><a href=http://perldoc.perl.org/index.html>Perl documentation</a>
<li><a href=http://dev.mysql.com/doc/refman/5.5/en/>MySQL documentation</a>
<li><a href=http://pdf-php.sourceforge.net/index.php/documentation.html>pdf class documentation</a>
</ul>";

$TEXT['manuals-text2']="一个简单的教程列表以及Apache Friends的文档页:";

$TEXT['manuals-list2']="
<ul>
<li><a href=http://www.apachefriends.org/en/faq-xampp.html>Apache Friends documentation</a>
<li><a href=http://www.freewebmasterhelp.com/tutorials/php>PHP Tutorial</a> by David Gowans
<li><a href=http://www.davesite.com/webstation/html/>HTML - An Interactive Tutorial For Beginners</a> by Dave Kristula
<li><a href=http://www.comp.leeds.ac.uk/Perl/start.html>Perl Tutorial</a> by Nik Silver
</ul>";

$TEXT['manuals-text3']="祝您好运并且玩得开心 :)";

// ---------------------------------------------------------------------
// COMPONENTS
// ---------------------------------------------------------------------

$TEXT['components-head']="XAMPP 组件";

$TEXT['components-text1']="XXAMPP将多种不同的软件包综合为一个包, 下面是所有软件包的概要.";

$TEXT['components-text2']="感谢这些程序的开发人员.";

$TEXT['components-text3']="在<b>/opt/lampp/licenses</b>目录中, 您将找到这些程序的许可证(license)文件以及README文件.";

// ---------------------------------------------------------------------
// CD COLLECTION DEMO
// ---------------------------------------------------------------------

$TEXT['cds-head']="CD集(PHP+MySQL+PDF类)";
$TEXT['cds-head-fpdf']="CD集(PHP+MySQL+FPDF)";

$TEXT['cds-text1']="一个很简单的CD程序.";

$TEXT['cds-text2']="CD list as <a href='?action=getpdf'>PDF document</a>.";

$TEXT['cds-error']="连接数据库失败！<br>您确认MySQL正在运行或者您没有改变密码?";
$TEXT['cds-head1']="我的CD集";
$TEXT['cds-attrib1']="艺术家";
$TEXT['cds-attrib2']="标题";
$TEXT['cds-attrib3']="年";
$TEXT['cds-attrib4']="命令";
$TEXT['cds-sure']="确定?";
$TEXT['cds-head2']="添加CD";
$TEXT['cds-button1']="删除CD";
$TEXT['cds-button2']="添加CD";

// ---------------------------------------------------------------------
// BIORHYTHM DEMO
// ---------------------------------------------------------------------

$TEXT['bio-head']="生命周期(PHP+GD)";

$TEXT['bio-by']="by";
$TEXT['bio-ask']="请填写您的生日";
$TEXT['bio-ok']="OK";
$TEXT['bio-error1']="日期";
$TEXT['bio-error2']="不合法";

$TEXT['bio-birthday']="Birthday";//"生日";
$TEXT['bio-today']="Today";//"今天";
$TEXT['bio-intellectual']="Intellectual";//"智力";
$TEXT['bio-emotional']="Emotional";//"情感";
$TEXT['bio-physical']="Physical";//"体格";

// ---------------------------------------------------------------------
// INSTANT ART DEMO
// ---------------------------------------------------------------------

$TEXT['iart-head']="即时 Art (PHP+GD+FreeType)";
$TEXT['iart-text1']="Font AnkeCalligraph by <a class=blue target=extern href=\"http://www.anke-art.de/\">Anke Arnold</a>";
$TEXT['iart-ok']="OK";

// ---------------------------------------------------------------------
// FLASH ART DEMO
// ---------------------------------------------------------------------

$TEXT['flash-head']="Flash艺术(PHP+MING)";
$TEXT['flash-text1']="";
$TEXT['flash-ok']="OK";

// ---------------------------------------------------------------------
// PHONE BOOK DEMO
// ---------------------------------------------------------------------

$TEXT['phonebook-head']="电话簿(PHP+SQLite)";

$TEXT['phonebook-text1']="一个非常简单的电话簿教本, 但是应用了一个非常先进并且在快速更新的技术: SQLite, 一个没有服务端的SQL数据库.";

$TEXT['phonebook-error']="打开数据库失败!";
$TEXT['phonebook-head1']="我的电话号码集";
$TEXT['phonebook-attrib1']="名";
$TEXT['phonebook-attrib2']="姓";
$TEXT['phonebook-attrib3']="电话号码";
$TEXT['phonebook-attrib4']="命令";
$TEXT['phonebook-sure']="确定?";
$TEXT['phonebook-head2']="添加联系人";
$TEXT['phonebook-button1']="删除";
$TEXT['phonebook-button2']="添加";

// ---------------------------------------------------------------------
// ABOUT
// ---------------------------------------------------------------------

$TEXT['about-head']="关于XAMPP";

$TEXT['about-subhead1']="想法与实现";

$TEXT['about-subhead2']="设计";

$TEXT['about-subhead3']="合作";

$TEXT['about-subhead4']="联系人";

// ---------------------------------------------------------------------
// CODE
// ---------------------------------------------------------------------

$TEXT['srccode-in']="获得源代码";

// ---------------------------------------------------------------------
// MERCURY
// ---------------------------------------------------------------------

$TEXT['mail-head']="使用Mercury Mail SMTP 以及 POP3 Server 发送电子邮件";
$TEXT['mail-hinweise']="一些重要的Mercury使用指南!";
$TEXT['mail-adress']="发件人:";
$TEXT['mail-adressat']="收件人:";
$TEXT['mail-cc']="CC:";
$TEXT['mail-subject']="标题:";
$TEXT['mail-message']="信息:";
$TEXT['mail-sendnow']="信息正在发送 ...";
$TEXT['mail-sendok']="信息发送成功!";
$TEXT['mail-sendnotok']="错误! 信息发送失败!";
$TEXT['mail-help1']="Mercury使用指南:<br><br>";
$TEXT['mail-help2']="<UL>
<LI>Mercury 在启动时需要一个外部连接;</LI>
<LI>在启动时, Mercury 自动将您提供的域名服务作为域名解析服务(DNS);</LI>
<LI>对于所有使用网关服务器的用户: 请通过TCP/IP设置您的DNS (f.e. 198.41.0.4);</LI>
<LI>Mercury 的配置文件名为 MERCURY.INI;</LI>
<LI>您可以发送一个信息到postmaster@localhost 或者 admin@localhost 来做个测试并在下面的文件中查找收到的信息: xampp.../mailserver/MAIL/postmaster 或者 (...)/admin;</LI>
<LI>默认的测试用户名为 \"newuser\" (newuser@localhost), 该用户的密码为 wampp;</LI>
<LI>垃圾邮件以及带有猥亵语言的信息都将被Mercury拒绝!;</LI> 
</UL>";
$TEXT['mail-url']="<a href=\"http://www.pmail.com/overviews/ovw_mercury.htm\" target=\"_top\">http://www.pmail.com/overviews/ovw_mercury.htm</a>";
// ---------------------------------------------------------------------
// FileZilla FTP 
// ---------------------------------------------------------------------

$TEXT['filezilla-head']="FileZilla FTP 服务器";
$TEXT['filezilla-install']="Apache <U>不是</U>一个FTP 服务器 ... 但FileZilla FTP是. 请阅读以下的参考.";
$TEXT['filezilla-install2']="进入xampp的主目录, 执行\"filezilla_setup.bat\"来启动但FileZilla. 注意: 对于Windows NT, 2000 and XP Professional, FileZilla需要安装服务.";
$TEXT['filezilla-install3']="配置 \"FileZilla FTP\". 您可以使用FileZilla 接口(\"FileZilla Server Interface.exe\") . 下面的例子中我们使用了2个用户来进行操作:<br><br>
A: 一个默认用户 \"newuser\", 密码为 \"wampp\". 用户目录为 xampp\htdocs.<br> 
B: 一个匿名用户 \"anonymous\", 密码为空. 用户目录为 xampp\anonymous.<br><br>
默认接口是回环地址 127.0.0.1.";
$TEXT['filezilla-install4']="您可以通过执行 \"FileZillaFTP_stop.bat\" 来停止 FileZilla. 如果希望 FileZilla FTP 作为系统服务, 请直接执行 \"FileZillaServer.exe\". 接着, 您可以配置所有的启动选项.";
$TEXT['filezilla-url']="<br><br><a href=\"http://filezilla.sourceforge.net\" target=\"_top\">http://filezilla.sourceforge.net</a>";

// ---------------------------------------------------------------------
// PEAR
// ---------------------------------------------------------------------

$TEXT['pear-head']="PEAR的Excel库 (PHP)";
$TEXT['pear-text']="简单的<a class=blue target=extern href=\"http://www.contentmanager.de/magazin/artikel_310-print_excel_export_mit_pear.html\">手册</A>(德文版)由来自<a class=blue target=extern href=\"http://www.thinkphp.de/\">ThinkPHP</A>的 Bj鰎n Schotte 提供";
$TEXT['pear-cell']="列的值";

// ---------------------------------------------------------------------
// JPGRAPH
// ---------------------------------------------------------------------

$TEXT['jpgraph-head']="JpGraph - PHP的图形库";
$TEXT['jpgraph-url']="<br><br><a href=\"http://www.aditus.nu/jpgraph/\" target=\"_top\">http://www.aditus.nu/jpgraph/</a>";

// ---------------------------------------------------------------------
// ADODB
// ---------------------------------------------------------------------

$TEXT['ADOdb-head']="ADOdb - 另一个DB操作库 (PHP)";
$TEXT['ADOdb-text']="ADOdb面向于Active数据对象的数据库. 目前支持MySQL, PostgreSQL, Interbase, Firebird, Informix, Oracle, MS SQL 7, Foxpro, Access, ADO, Sybase, FrontBase, DB2, SAP DB, SQLite以及通用ODBC. The Sybase, Informix, FrontBase and PostgreSQL的驱动由社区贡献. 您可以在 \(mini)xampp\php\pear\adodb 找到他.";
$TEXT['ADOdb-example']="例子:";
$TEXT['ADOdb-dbserver']="数据库服务器 (MySQL, Oracle ..?)";
$TEXT['ADOdb-host']="DB服务器主机 (主机名或IP)";
$TEXT['ADOdb-user']="用户名 ";
$TEXT['ADOdb-password']="密码";
$TEXT['ADOdb-database']="当前数据库服务器的数据库";
$TEXT['ADOdb-table']="数据库中的表";
$TEXT['ADOdb-nottable']="<p><B>表不存在!</B>";
$TEXT['ADOdb-notdbserver']="<p><B>您选择的驱动不存在, 也许您需要ODBC, ADO, 或者OLEDB驱动!</B>";


// ---------------------------------------------------------------------
// INFO
// ---------------------------------------------------------------------

$TEXT['info-package']="软件包";
$TEXT['info-pages']="Pages";
$TEXT['info-extension']="扩展";
$TEXT['info-module']="Apache模块";
$TEXT['info-description']="描述";
$TEXT['info-signature']="签名";
$TEXT['info-docdir']="文档根";
$TEXT['info-port']="Default port";
$TEXT['info-service']="服务";
$TEXT['info-examples']="例子";
$TEXT['info-conf']="配置文件";
$TEXT['info-requires']="需要";
$TEXT['info-alternative']="Alternative";
$TEXT['info-tomcatwarn']="警告! Tomcat并未启动于8080端口.";
$TEXT['info-tomcatok']="OK! Tomcat已成功启动于8080端口.";
$TEXT['info-tryjava']="The java example (JSP) with Apache MOD_JK.";
$TEXT['info-nococoon']="警告! Tomcat未启动于8080端口. 不能在Tomcat未启动的状态下安装
\"Cocoon\"!";
$TEXT['info-okcocoon']="Ok! Tomcat已经正常启动. 安装工作将会持续几分钟! 要安装 \"Cocoon\" 请点击这里 ...";

// ---------------------------------------------------------------------
// PHP Switch
// ---------------------------------------------------------------------

$TEXT['switch-head']="PHP Switch 1.0 win32 for XAMPP";
$TEXT['switch-phpversion']="<i><b>当前XAMPP的PHP版本是 ";
$TEXT['switch-whatis']="<B>WPHP switch是什么?</B><br>apachefriends为XAMPP提供的PHP Switch 允许您在PHP4与PHP5之间进行切换. 您可以在不同版本的PHP下测试您的代码.<p>";
$TEXT['switch-find']="<B>PHP Switch在哪里?</B><br>PHP Switch会执行一个名叫\"php-switch.php\"php程序 (在XAMPP的安装目录). 您可以可以通过下面的批处理程序来执行: ";
$TEXT['switch-care']="<B>What can be difficult?</B><br>PHP Switch在以下2种情况下不工作, a) Apache正在运行 b) 在XAMPP安装路径下的\".phpversion\"文件是空白的或有问题. 在文件\".phpversion\"中记录的是当前XAMPP使用的PHP版本数字, 譬如\"4\"或者\"5\". 请先执行Apache的\"shutdown\"程序, 然后再执行\"php-switch.bat\".<p>";
$TEXT['switch-where4']="<B>执行后! 我的旧配置文件在哪里?</B><br><br>对于PHP 4:<br>";
$TEXT['switch-where5']="<br><br>对于PHP 5:<br>";
$TEXT['switch-make1']="<B>我的配置文件改变了哪些?</B><br><br>对于PHP4 或 PHP5 来说他们都在这里! <br>";
$TEXT['switch-make2']="<br><br> .. PHP4 ...<br>";
$TEXT['switch-make3']="<br><br> .. PHP5 ...<br>";
$TEXT['switch-make4']="<br><br>通过PHP switching他们又回到了原来的位置!!<p>";
$TEXT['switch-not']="<B>我的PHP okay了, 我不再需要一个\"switch\"了 !!!</B><br>那么! 忘记这里吧 ... ;-)<br>";

// ---------------------------------------------------------------------
// Cocoon
// ---------------------------------------------------------------------

$TEXT['go-cocoon']="现在您可以浏览 http://localhost/cocoon/ 来访问Cocoon";
$TEXT['path-cocoon']="Cocoon 在您硬盘上正确的路径是: ...\\xampp\\tomcat\\webapps\\cocoon";

// ---------------------------------------------------------------------
// Guest
// ---------------------------------------------------------------------

$TEXT['guest1-name']="当前版本的用户: <i>FCKeditor</i>";
$TEXT['guest1-text1']="一个JavaScript写的非常棒的HTML在线编辑器. 已为IE做了优化. 但并不支持Mozilla FireFox.";
$TEXT['guest1-text2']="FCKeditor的主页: <a href=\"http://www.fckeditor.net\" target=\"_new\">www.fckeditor.net</a>. 注意: 目前不支持Arial字体, 但我不知道为什么!"; 
$TEXT['guest1-text3']="<a href=\"guest-FCKeditor/fckedit-dynpage.php\" target=\"_new\">FCKeditor的例子.</A>"; 

?>
