<?php 
$return = array();
$return[] = '<table border="0" cellpadding="0" cellspacing="0" width="100%" class="group-postlist-list" id="group-postlist-list">
<form action="?categorie=0&amp;topic=post" method="post"></form> 
<tbody><tr>
    <td class="post-header-link" valign="top" style="width: 148px;"></td>
    <td class="post-header-name" valign="top"></td>
    <td align="right">
</td></tr>
<tr>
	<td colspan="3" class="post-list-row-container"><div id="new-topic-preview"></div></td>
</tr>

<tr class="new-topic-entry-label" id="new-topic-entry-label">
	<td class="new-topic-entry-label">Sujet:</td>
	<td colspan="2">
		<table border="0" cellpadding="0" cellspacing="0" style="margin: 5px; width: 98%;">
		<tbody><tr>
		<td>
	    <div class="post-list-content-element"><input type="text" size="50" id="new-topic-name" name="topicName"></div>
	    </td>
	    </tr>
	    </tbody></table>
    </td>
</tr>
<tr id="new-post-entry-message">
	<td class="new-post-entry-label"><div class="new-post-entry-label" id="new-post-entry-label">Message:</div></td>
	<td colspan="2">
		<table border="0" cellpadding="0" cellspacing="0" style="margin: 5px; width: 98%;">
		<tbody><tr>
		<td>
		<input type="hidden" id="edit-type">
		<input type="hidden" id="post-id">
        <input type="hidden" id="spam-message" value="Spam detected!">
		<ul class="bbcode_toolbar" id="bbcode_toolbar"><li class="control-button"><a href="#" id="bbcode_bold_button"><span>Bold</span></a></li><li class="control-button"><a href="#" id="bbcode_italics_button"><span>Italics</span></a></li><li class="control-button"><a href="#" id="bbcode_underline_button"><span>Underline</span></a></li><li class="control-button"><a href="#" id="bbcode_quote_button"><span>Quote</span></a></li><li class="control-button"><a href="#" id="bbcode_smallsize_button"><span>Small size</span></a></li><li class="control-button"><a href="#" id="bbcode_largesize_button"><span>Large size</span></a></li><li class="control-button"><a href="#" id="bbcode_code_button"><span>Code</span></a></li><li class="control-button"><a href="#" id="bbcode_link_button"><span>Link</span></a></li><li class="control-button"><select><option>Couleurs</option><option value="red" style="color: rgb(216, 0, 0);">Rouge</option><option value="orange" style="color: rgb(254, 99, 1);">Orange</option><option value="yellow" style="color: rgb(255, 206, 0);">Jaune</option><option value="green" style="color: rgb(108, 200, 0);">Vert</option><option value="cyan" style="color: rgb(0, 198, 196);">Cyan</option><option value="blue" style="color: rgb(0, 112, 215);">Bleu</option><option value="gray" style="color: rgb(130, 130, 130);">Gris</option><option value="black" style="color: rgb(0, 0, 0);">Noir</option></select></li></ul><textarea id="post-message" class="new-post-entry-message" rows="5" maxlength="1000" name="message"></textarea>
    <script type="text/javascript">
        bbcodeToolbar = new Control.TextArea.ToolBar.BBCode("post-message");
        bbcodeToolbar.toolbar.toolbar.id = "bbcode_toolbar";
        var colors = { "red" : ["#d80000", "Rouge"],
            "orange" : ["#fe6301", "Orange"],
            "yellow" : ["#ffce00", "Jaune"],
            "green" : ["#6cc800", "Vert"],
            "cyan" : ["#00c6c4", "Cyan"],
            "blue" : ["#0070d7", "Bleu"],
            "gray" : ["#828282", "Gris"],
            "black" : ["#000000", "Noir"]
        };
        bbcodeToolbar.addColorSelect("Couleurs", colors, false);
    </script>
	
	    <br><br>
        <a class="new-button red-button cancel-icon" href="forum"><b><span></span>Annuler</b><i></i></a>
		<input type="image" src="web-gallery/images/forum_post.png">
        </td>
        </tr>
        </tbody></table>
	</td>
</tr>


</tbody></table>'; echo json_encode($return); ?>