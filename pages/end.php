					<!-- END: MAIN CONTENT -->
				
				</main>
				<aside>
					<section>
						<h3>About the site</h3>
						<p>
							This site collects the contents created by Kezeslabas for the game, Space Engineers. This content could include Videos or Steam Workshop items, such as Blueprints or InGame Scripts.  
						</p>
					</section>
					<section>
						<h3>Last Post from Kezeslabas</h3>
						<?php
							for($i=$p_count-1;$i>-1;$i--)
							{
								$a_post=explode(";", $posts[$i]);
								if(array_key_exists($a_post[0],$users))
								{
									echo'
									<p>'.$a_post[0].'
									<span>'.$a_post[1].'</span><p>
									<p>'.$a_post[2].'</p>
									<div class="button_a">
									<a href="index.php?page=Posts">More</a>
									</div>
									';
									break;
								}
							}
						?>
					</section>
				</aside>
			</div>
		</div>
		
		<footer>
			<div class="centerBox">
				<div class="left">
					<ul>
						<a href="https://www.youtube.com/channel/UCGy_no82yG7lqYDk4m7HnCw"><li><img src="media/pics/yt_icon.png" alt="Youtube logo"><p>Kezeslabas's Youtube Channel</p></li></a>
						<a href="https://steamcommunity.com/profiles/76561198084160857/myworkshopfiles/?appid=244850"><li><img src="media/pics/steam_icon.png" alt="Steam logo"><p>Kezeslabas's Steam Workshop</p></li></a>
						<a href="https://twitter.com/Kezeslabas"><li><img src="media/pics/twer_logo.png" alt="Twitter logo"><p>Kezeslabas's Twitter</p></li></a>
						<a href="https://www.spaceengineersgame.com/"><li><img src="media/pics/se_icon.png" alt="Space Engineers logo"><p>Space Engineers Official Website</p></li></a>
					</ul>
				</div>

				<div class="right">
					<h4>Pages</h4>
					<ul>
						<?php printMenu(); ?>
					</ul>
				</div>
			</div>
		</footer>
		

	</body>
</html>