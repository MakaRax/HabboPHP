<script src="http://code.jquery.com/jquery-latest.js" type="text/javascript"></script>
<div id="container">
	<div id="content" style="position:relative;" class="clearfix">
		<div class="cbb blue" id="mypage-wrapper">
			<div class="box-tabs-container box-tabs-left clearfix">
				<div class="myhabbo-view-tools"></div>
				<h2 class="page-owner">Catégories de discussion :</h2>
				<ul class="box-tabs">
					<li class="selected">
						<a href="#">Discussions globales</a>
						<span class="tab-spacer"></span>
					</li>
				</ul>
				<script>
				jQuery.noConflict();
				jQuery("#newtopic-upper").click(function(){
					jQuery.post("ajax/forum-postthread.php", function(data){
						jQuery("#mypage-content").empty().append(data);
					}, 'json');
				});	
				</script>
				<div id="mypage-content">
						<div id="discussionbox">
							<div id="group-topiclist-container">
								<div class="topiclist-header clearfix">
									<input type="hidden" id="email-verfication-ok" value="1"> 
									<a href="#" id="newtopic-upper" class="new-button verify-email newtopic-icon" style="float:left;">
									<b><span></span> Poster un topic</b>
									<i></i>
									</a>
									<div class="page-num-list" style="margin-right:200px;">
										Consulter les pages : {$html}
									</div>
								</div>
							</div>
						</div>
						<table class="group-topiclist" border="0" cellpadding="0" cellspacing="0" id="group-topiclist-list">
	<tbody><tr class="topiclist-columncaption">
		<td class="topiclist-columncaption-topic">Sujet de départ</td>
		<td class="topiclist-columncaption-lastpost">Dernier message</td>
		<td class="topiclist-columncaption-replies">Réponses</td>
		<td class="topiclist-columncaption-replies">Consultations</td>
	</tr>
{foreach from=$threads item=i}
<tr class="topiclist-row-{if $i.id is even}even{else}odd{/if}">
		<td class="topiclist-rowtopic" valign="top">
			<div class="topiclist-row-content">
			<a class="topiclist-link icon icon-sticky" href="{$config->url_site}/viewthread.php?id={$i.id}">{$i.title}</a>&nbsp;{if $i.closed eq 1}<img src="{$config->url_site}/web-gallery/images/status_closed.gif">{/if}&nbsp;
			<br>
			<span><a class="topiclist-row-openername" href="{$config->url_site}/home.php?username={$i.author}">{$i.author}</a></span>&nbsp;<span class="latestpost">01-01-2014 12:01:44</span>
			</div>
		</td>
		<td class="topiclist-lastpost" valign="top">
		    <a class="lastpost-page-link" href="{$config->url_site}/viewthread.php?id={$i.id}&amp;categorie=0&amp;sp=JumpToLast"><span class="lastpost">{$comments.date}</span>
         </a><br>
			<span class="topiclist-row-writtenby">Par:</span> <a class="topiclist-row-openername" href="{$config->url_site}/home.php?username={$i.author}">{$comments.author}</a>&nbsp;
		</td>
 		<td class="topiclist-replies" valign="top"></td>
		<td class="topiclist-views" valign="top">{$i.views}</td>
	</tr>
	{/foreach}
	</tbody></table>
				</div>
			</div>
		</div>
	</div>
</div>