<div id="container">
<div id="content" style="position: relative" class="clearfix">
    <div class="cbb blue" id="mypage-wrapper">
<div class="box-tabs-container box-tabs-left clearfix">
	<div class="myhabbo-view-tools">
	</div>
    <h2 class="page-owner">
    	Forum de discussion    </h2>
    <ul class="box-tabs">
	
        <li class="selected"><a href="#">Discussions générales</a><span class="tab-spacer"></span></li>
    </ul>
</div>
	<div id="mypage-content">




<!-- AFFICHER LES TOPICS CREEES -->
		
<!-- AFFICHER UN TOPIC -->

        <table border="0" cellpadding="0" cellspacing="0" width="765" class="content-1col">
            <tbody><tr>
                <td valign="top" style="width: 750px;" class="habboPage-col rightmost">
                    <div id="discussionbox">
                        <div id="group-postlist-container">
    <div class="postlist-header clearfix">
	                <a href="#" id="create-post-message" class="create-post-link verify-email">Répondre</a>                <input type="hidden" id="email-verfication-ok" value="1">
				
				                                                						
				        						
					                                        						
				        						 						
        <div class="page-num-list">
	<input type="hidden" id="current-page" value="1">
    Consulter la page: plus tard
    </div>
</div>


<table border="0" cellpadding="0" cellspacing="0" width="100%" class="group-postlist-list" id="group-postlist-list">
<tbody><tr class="post-list-index-even">
<td class="post-list-row-container">
    <a href="{$config->url_site}/home.php?username={$thread.author}" class="post-list-creator-link post-list-creator-info">{$thread.author}</a>
	<div class="post-list-posts post-list-creator-info">Messages: {$owner_messages}</div>
    <div class="clearfix">
        <div class="post-list-creator-avatar"><img src="http://avatar-retro.com/habbo-imaging/avatarimage?figure={$owner.look}&amp;size=b&amp;direction=2&amp;head_direction=3&amp;gesture=sml"></div>
<div class="post-list-group-badge">
			        </div>
        <div class="post-list-avatar-badge"></div>
    </div>
    <div class="post-list-motto post-list-creator-info">{$owner.motto}</div>
</td>
<td class="post-list-message" valign="top" colspan="2">
			<a href="#" class="quote-post-link verify-email" id="quote-post-{$thread.id}-message">Citer</a>			
    <span class="post-list-message-header">{$thread.title}</span><br>
	    <span class="post-list-message-time">&nbsp;{$thread.date_created}</span>

    <div class="post-list-report-element">
	    </div>
    <div class="post-list-content-element">
    {$thread.body}
    </div>
    <div>
    </div>
</td>
</tr>
{foreach from=$comments item=comment}
<tr class="{if $comment.id is even}post-list-index-even{else}post-list-index-odd{/if}">
<td class="post-list-row-container">
    <a href="{$config->url_site}/home.php?username={$comment.username}" class="post-list-creator-link post-list-creator-info">{$comment.username}</a>
    <div class="post-list-posts post-list-creator-info">Messages: {$owner_messages}</div>
    <div class="clearfix">
        <div class="post-list-creator-avatar"><img src="http://avatar-retro.com/habbo-imaging/avatarimage?figure={$comment.look}&amp;size=b&amp;direction=2&amp;head_direction=3&amp;gesture=sml"></div>
<div class="post-list-group-badge">
                    </div>
        <div class="post-list-avatar-badge"></div>
    </div>
    <div class="post-list-motto post-list-creator-info">{$comment.motto}</div>
</td>
<td class="post-list-message" valign="top" colspan="2">
            <a href="#" class="quote-post-link verify-email" id="quote-post-{$thread.id}-message">Citer</a>         
    <span class="post-list-message-header">RE: {$thread.title}</span><br>
        <span class="post-list-message-time">&nbsp;{$comment.date_created}</span>

    <div class="post-list-report-element">
        </div>
    <div class="post-list-content-element">
    {$comment.message}
    </div>
    <div>
    </div>
</td>
</tr>
{/foreach}

<form action="?id=4045&amp;comment=post&amp;categorie=0" method="post"></form> 
<tr id="new-post-entry-message" style="display:none;">
	<td class="new-post-entry-label"><div class="new-post-entry-label" id="new-post-entry-label">Message:</div></td>
	<td colspan="2">
		<table border="0" cellpadding="0" cellspacing="0" style="margin: 5px; width: 98%;">
		<tbody><tr>
		<td>
		<input type="hidden" id="edit-type" value="new">
		<input type="hidden" id="post-id">
        <input type="hidden" id="spam-message" value="Spam-alarm!">
		<ul class="bbcode_toolbar" id="bbcode_toolbar"></ul><textarea id="post-message" class="new-post-entry-message" rows="5" maxlength="15000" name="message"></textarea>
		<input type="hidden" value="4045" name="topicId">
    <script type="text/javascript">
        bbcodeToolbar = new Control.TextArea.ToolBar.BBCode("post-message");
        bbcodeToolbar.toolbar.toolbar.id = "bbcode_toolbar";
        var colors = {
            "blue" : ["#0070d7", "Bleu"],
            "gray" : ["#828282", "Gris"],
            "black" : ["#000000", "Noir"]
        };
        bbcodeToolbar.addColorSelect("Couleurs", colors, false);
    </script>
	    <br><br>
        <a id="post-form-cancel" class="new-button red-button cancel-icon" href="#"><b><span></span>Annuler</b><i></i></a>
        <input id="postcomment" type="image" src="http://habbix.name/v2/images/publier_topic.png">
        </td>
        </tr>
        </tbody></table>
	</td>
</tr></tbody></table>
<div id="new-post-preview" style="display:none;">
</div>
    <div class="postlist-footer clearfix">
		<a href="#" id="create-post-message-lower" class="create-post-link verify-email">Répondre</a>				            <div class="page-num-list">
    Consulter la page:
1
<a href="../viewthread?id=4045&amp;page=2&amp;categorie=0" class="topiclist-page-link">2</a>
<a href="../viewthread?id=4045&amp;page=3&amp;categorie=0" class="topiclist-page-link">3</a>
    </div>
</div>
</div>
            </div></td></tr>
        </tbody></table>
<!-- FIN DE L'AFFICHAGE DU TOPIC -->
</div>

<script type="text/javascript" language="JavaScript">
L10N.put("myhabbo.discussion.error.topic_name_empty", "Le titre de la discussion ne doit pas Ãªtre vide");
Discussions.initialize("0", "forum", null);
</script>
            </div></div></div>
					
                
                
                
    <div class="habblet ">
    
    </div>
                
            
          {literal}
    <script type="text/javascript">
    $(function(){
        $("#postcomment").click(function(){
            alert("ok");
            var textarea = $('#post-message').val();
            $.post('ajax/postcomment.php', {message:textarea}, function(data){
                if(data.result == "error"){
                    $("#discussionbox").append(data.html);
                }
                if(data.result == "success"){
                    $("#discussionbox").append(data.html);
                }
            });
        });
    });
    </script>
    {/literal}
	</div>
    </div>