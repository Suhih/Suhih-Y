<?php
/**
* @package 		Facebook Connect Extension (joomla 1.5.x & 1.6.x)
* @copyright	Copyright (C) Computer - http://www.saaraan.com. All rights reserved.
* @license		http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
* @author		Saran Chamling
* @download URL	http://www.saaraan.com
*/

// No direct access
defined('_JEXEC') or die('Restricted access'); 
$document 			= JFactory::getDocument();
$document->addStyleSheet('components/com_fbconnct/assets/fbbackend.css');

?>
<style type="text/css">
<!--
.style1 {font-weight: bold}
-->
</style>
   
<table width="100%" border="0" cellpadding="5">
  <tr>
    <td width="79%" valign="top"> 
 <h3>Facebook Login Extention (v 3.0)</h3>
  <ol>
  <li>Make sure your host supports supports <a href="http://www.php.net/manual/en/intro.curl.php" target="_blank">PHP curl</a>, Most hosts support this.</li>
  <li><a href="http://www.saaraan.com/2011/11/creating-facebook-application-for-your-site/" target="_blank"><b><u>Setup Application</u></b></a> in facebook for your website.</li>
  <li>When finished, Copy <b><u>App ID</u></b> and <b><u>App secret</u></b> from your facebook app settings.</li>
  <li>Find and Click <b>Parameters or Options</b> on top right of this page -->, and enter your <b><u>app ID</u></b> and <b><u>App Secret.</u></b> </li>
  <li>In <b>Module Manager</b>, <b><u>ENABLE</u></b> <b>FB Login Module</b> on your website sidebar, Select <b><u>PAGES</u></b> where you want login button to appear!</li>
</ol>
    <h4>Without Login Module</h4>
    If you wish to display login button without Facebook login module, follow the steps.
    <ol>
         <li>Copy Code :<br /><textarea style="width:300px;height:50px;background:#FFFFCC;"><a href="#" onclick="window.open('<?php echo JRoute::_(JURI::root().'index.php?option=com_fbconnct&task=login&format=raw'); ?>','name','height=300,width=550');return false;" >Login with Facebook</a></textarea></li>
		 <li>Paste the code in your template or article where you want popup link to appear.!</li>
    </ol> 
    That's it! if you know HTML &amp; CSS you can modify the code to make it look better.
  <p>
    <h3>Changelog</h3>
         <ul>
         <li>3.0  &dagger;&dagger;&dagger; No Facebook JavaScript SDK, less bulky. Updated Facebook PHP SDK (v.3.2.2)</li>
			<li>2.x &dagger;&dagger; No longer supported!</li>
    </ul>    
    </td>
    <td width="21%" align="center" valign="top">
<div align="center" style="width:200px">

<fieldset><legend>Login with Facebook</legend>Login with Facebook is maintained and developed by Saran. <br />
He blogs at <a href="http://www.saaraan.com" target="_blank">saaraan.com</a>. <br />
You can say hi to him at <a href="https://twitter.com/saaraan" target="_blank">Twitter</a>!<br /><br />
This extention is a side project  &amp; he doesn't make any money. Please support him by buying coffee sometimes,
so he can focus more on this extension updates and less on other projects :)
<form name="_xclick" action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
<input type="hidden" name="cmd" value="_xclick">
<input type="hidden" name="business" value="saaraan@gmail.com">
<input type="hidden" name="item_name" value="fbconnectcom">
<input type="hidden" name="currency_code" value="USD">
<table width="200" border="0">
  <tr>
    <td>USD</td>
    <td><input type="text" name="amount" value="10"></td>
  </tr>
  <tr>
    <td colspan="2"><input type="image" src="components/com_fbconnct/assets/paypal-buy.gif" style="border:none" border="0" name="submit"></td>
    </tr>
</table>
<div style="margin-top:5px;" align="center"><span class="style1"><a href="http://extensions.joomla.org/extensions/access-a-security/site-access/authentication-cloud-based/16350" target="_blank">Review it</a> | <a href="http://www.saaraan.com/questions" target="_blank">Support</a> | <a href="http://www.saaraan.com/2012/04/facebook-connect-2-0-for-joomla" target="_blank">Download</a></span></div>
</form>
</fieldset>
</div>

    </td>
  </tr>
</table>
<div id="fb-root"></div>
<div align="center" style="font-size:11px;">Facebook Connect by <a href="http://www.saaraan.com" target="_blank">saaraan.com</a></div>
