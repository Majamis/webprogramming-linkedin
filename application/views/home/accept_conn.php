
<div id="lui-panel-body" class="yui-module yui-overlay yui-overlay-hidden" style="z-index: 1007; visibility: hidden;">
</div>
<div id="body" class="" role="main">
	<div class="wrapper hp-nus-wrapper">
		<div id="main" class="grid-c">
			<div id="ad-slot-3" class="textad">
			</div>
			<div id="sidebar" class="sidebar ads-v2">
				<div id="inbox-nav">
					<ul>
						<li class="nav-search ">
						<form action="/inbox/messages/search" method="POST" name="inboxSearchForm" novalidate="novalidate">
							<label for="keywords-inboxSearchForm" id="control_gen_8" style="display: none;">Search Inbox</label>
							<span class="error" id="keywords-inboxSearchForm-error"></span>
							<input type="text" name="keywords" value="" id="keywords-inboxSearchForm" class="text" placeholder="Search Inbox">
							<input class="search-go" type="submit" value="Search" name="search">
							<input type="hidden" name="csrfToken" value="ajax:5346820311404297045" id="csrfToken-inboxSearchForm"><input type="hidden" name="sourceAlias" value="0_1OGuQbpJ2Sj8W18FTrTwHWjSRQXDLtyF2h_RCqGNh5u" id="sourceAlias-inboxSearchForm">
						</form>
						</li>
						<li class="nav-compose notTop">
						<a href="<?php echo base_url('index.php/common/page/accept_connection');?>"><em>Compose Message</em></a>
						</li>
						<li class="nav-inbox active"><a href="<?php echo base_url('index.php/common/page/accept_connection');?>">Inbox</a></li>
						<li class="nav-sent "><a href="<?php echo base_url('index.php/common/page/accept_connection');?>">Sent</a></li>
						<li class="nav-archived "><a href="<?php echo base_url('index.php/common/page/accept_connection');?>">Archived</a></li>
						<li class="nav-trash "><a href="<?php echo base_url('index.php/common/page/accept_connection');?>">Trash</a></li>
					</ul>
				</div>
			</div>
			<div id="content" class="inbox-v2 ads-v2">
				<div id="inbox-tabview" class="inbox-tabview">
					<ul class="tabs-v2 inbox-tabview-nav">
						<li class="">
						<a href="<?php echo base_url('index.php/common/page/accept_connection');?>">
						<em>Messages</em>
						<span class="message-count count null-count">0</span>
						</a>
						</li>
						<li class="selected">
						<a href="<?php echo base_url('index.php/common/page/accept_connection');?>">
						<em>Invitations</em>
						<span class="invitation-count count "></span>
						<span class="blocked-invitation-count count null-count"></span>
						</a>
						</li>
					</ul>
					<div class="content">
						<div id="invitations" class=" ">
							<form action="/inbox/bulk_action" method="POST" name="bulkActionForm" novalidate="novalidate" id="bulk-form">
								<div class="new-bulk">
									<a class="new-link btn-quaternary" href="<?php echo base_url('index.php/common/page/accept_connection');?>">Add connections</a>
									<ul class="bulk">
										<li><input class="btn-quaternary" type="submit" name="bulkInvitationAccept" value="Accept" disabled=""></li>
										<li><input class="btn-quaternary" type="submit" name="bulkInvitationIgnore" value="Ignore" disabled=""></li>
									</ul>
								</div>
								
								<ol class="inbox-list ">
									<li data-gid="I133969686_252" class="inbox-item invitation-item">
									<input class="chk" type="checkbox" name="mboxItemGIDs" value="I133969686_252">
									<img src="http://s.c.lnkd.licdn.com/scds/common/u/img/themes/katy/ghosts/profiles/ghost_profile_40x40_v1.png" class="photo" alt="Omer Zahid" height="40" width="40">
									<div class="item-content">
										<div class="date">
											Nov 4
										</div>
										<span class="participants">
										<span class="new-miniprofile-container /profile/mini-profile-with-connections?id=220597888&amp;context=inbox" data-li-url="/profile/mini-profile-with-connections?id=220597888&amp;context=inbox" data-li-tl="tl/shared/profile/mini_profile_shell"><strong>
										<a href="<?php echo base_url('index.php/common/page/accept_connection');?>">
										Omer Zahid </a>
										</strong></span>
										</span>
										<span class="headline">
										-- </span>
										<p class="meta">
											<span class="note">
											I'd like to add you to my professional network on LinkedIn. - Omer </span>
										</p>
										<div class="inbox-actions">
											<ul>
												<li>
												<div class="primary-actions" id="control_gen_10">
													<span class="btn-menu btn-ternary btn-split"><a data-action="invitationAccept" data-action-url="/inbox/action?mboxItemGID=I133969686_252&amp;actionType=invitationAccept&amp;csrfToken=ajax%3A5346820311404297045&amp;goback=%2Epiv_*1_*1_*1_*1_*1&amp;trk=inbox-invitations-inv-accept" class="accept btn btn-ternary" href="<?php echo base_url('index.php/common/page/accept_connection');?>" data-li-backref="yui-gen0">Accept</a><span class="toggle-btn"></span></span>
													<ul style="display: none;">
														<li id="yui-gen0" style="display: none;">
														</li>
														<li>
														<a class="reply reply-to-invite" href="<?php echo base_url('index.php/common/page/accept_connection');?>">Reply (don’t accept yet)</a>
														</li>
													</ul>
												</div>
												</li>
												<li>
												<a data-action="invitationIgnore" data-action-url="/inbox/action?mboxItemGID=I133969686_252&amp;actionType=invitationIgnore&amp;csrfToken=ajax%3A5346820311404297045&amp;goback=%2Epiv_*1_*1_*1_*1_*1&amp;trk=inbox-invitations-inv-ignore" class="ignore btn-quaternary" href="<?php echo base_url('index.php/common/page/accept_connection');?>">Ignore</a>
												</li>
												<li class="invitation-report-abuse">
												<a data-action="invitationReportAbuse" data-action-url="/inbox/action?mboxItemGID=I133969686_252&amp;actionType=invitationReportAbuse&amp;csrfToken=ajax%3A5346820311404297045&amp;goback=%2Epiv_*1_*1_*1_*1_*1&amp;trk=inbox-invitations-inv-spam" class="report-spam btn-quaternary" href="<?php echo base_url('index.php/common/page/accept_connection');?>">Report Spam</a>
												</li>
											</ul>
										</div>
									</div>
									</li>
								</ol>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>