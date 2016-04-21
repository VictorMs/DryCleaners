<?php /* Smarty version Smarty-3.1.8, created on 2013-10-25 07:02:29
         compiled from "mobile\smarty\temp\AboutUs\aboutUsPage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:31922526a178538f166-01787013%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cf40d112d38a8eaa5ee442a993bc5ac48e6f9e71' => 
    array (
      0 => 'mobile\\smarty\\temp\\AboutUs\\aboutUsPage.tpl',
      1 => 1342531009,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31922526a178538f166-01787013',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_526a17856cfd58_33132975',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_526a17856cfd58_33132975')) {function content_526a17856cfd58_33132975($_smarty_tpl) {?>
<script type="text/javascript">
$(function() {
    var mapWidth  = $('body').width();
    var mapHeight = $(window).height();
    var framePos  = $('#AboutUsFrame').position();
    
    var ifrPos   = $('iframe').position();
    
    mapHeight = mapHeight - Math.round(framePos.top);
    
    mapWidth = mapWidth - ifrPos.left - 40 ; 

    if (mapWidth < 100) {
    	mapWidth = 500;
    }
    
    $('iframe').css('width', (mapWidth ));
    $('#AboutUsFrame').css('height', mapHeight)
                      .css('overflow-y','scroll');
    
});
    
</script>

<div id='hiddenUnselectedAction'></div>
<div id='AboutUsFrame'>
<div id='aboutUsTopic' class='actionTopic'>
<div id='aboutUsTitle' class ='titleOfTopic'>About Us:</div>
<div class='submenuContent'>
<p >
&nbsp;&nbsp;Eagle Square Dry Cleaners have provided dry cleaning service for our customers over 20 years. Our senior staff alredy have over 30 years experience on dry cleaning industry. Our professional and qualified staff will provide best service for you.
</p>
</div>
</div>
<div id='locationTopic'>
<div id='locationTitle' class ='titleOfTopic'>Store Location:</div>
<span style="font-size:12px;">Address:Suite 6-2565 Barnet Hwy, Coquitlam, BC V3H 4E2</span>
<div id='map_canvas' style='margib:10px;'>
<iframe width="500" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" 
src="https://maps.google.ca/maps/ms?msa=0&amp;msid=213198322534204275955.0004c1176ecc2c51bf3d0&amp;hl=en&amp;ie=UTF8&amp;ll=49.277974,-122.818366&amp;spn=0,0&amp;t=m&amp;output=embed">
</iframe>
<br /><small>View <a href="https://maps.google.ca/maps/ms?msa=0&amp;msid=213198322534204275955.0004c1176ecc2c51bf3d0&amp;hl=en&amp;ie=UTF8&amp;ll=49.277974,-122.818366&amp;spn=0,0&amp;t=m&amp;source=embed" style="color:#0000FF;text-align:left">My Saved Places</a> in a larger map</small>
</div>
</div>
<div id='openHoursTopic'>
<div id='openHoursTitle' class ='titleOfTopic'>Store Hours:</div>
<span style="font-size:16px;color:black;display:block;">
Our store close at Sunday and Holidays.
</span>
<div id='openHoursTable' class='pricelist' style='width:600px;margin-top:10px'>
<table>
<tr><th>Day</th><th>Open Time</th><th>Close Time</th><th>Note</th>
</tr><tr><td>Monday</td><td>8:00AM</td><td>6:30PM</td><td></td></tr>
<tr><td>Tuesday</td><td>8:00AM</td><td>6:30PM</td><td></td></tr>
<tr><td>Wednesday</td><td>8:00AM</td><td>6:30PM</td><td></td></tr>
<tr><td>Thursday</td><td>8:00AM</td><td>6:30PM</td><td></td></tr>
<tr><td>Friday</td><td>8:00AM</td><td>6:30PM</td><td></td></tr>
<tr><td>Saturday</td><td>9:00AM</td><td>5:30PM</td><td></td></tr>
<tr><td style='color:red'>Sunday</td><td>---</td><td>---</td><td style='color:red'>Closed</td></tr>
</table>
</div>
</div>
<div id='contactUsTopic' >
<div id='contactUsTitle' class ='titleOfTopic'>Contact Us:</div>
<div style="font-size:16px;color:black;display:block;">
<table>
<tr><td> Phone number:</td><td>604-469-7817</td></tr>
<tr><td>Contact Email:</td><td><a href='mailto:info@eaglesquaredrycleaners.com'>info@eaglesquaredrycleaners.com</a></td></tr>
</table>
</div>
</div>
</div>
<?php }} ?>