<?php
$keyword=$_POST['ap'];
$sql="SELECT * FROM `games` WHERE `game_name` LIKE :keyword;";
$q=$db->prepare($sql);
$q->bindValue(':keyword','%'.$keyword.'%');
$q->execute();
while($gamecek=$q->fetch(PDO::FETCH_ASSOC)){  ?>								
										<!-- .product -->
								<div class="product">
									<div class="inner-product">
										<div class="figure-image">
											<a href="singlegame.php?game_id=<?php echo $gamecek['game_id'] ?>"><img src="<?php echo $gamecek['game_picurl'] ?>" alt="<?php echo $gamecek['game_name'] ?>"></a>
										</div>
										<h3 class="product-title"><a href="singlegame.php?game_id=<?php echo $gamecek['game_id'] ?>"><?php echo $gamecek['game_name'] ?></a></h3>
										<p><?php echo substr($gamecek['game_description'],0,120);?>...</p>
										<a href="<?php echo $gamecek['game_link'] ?>" class="button">Download</a>
										<a href="singlegame.php?game_id=<?php echo $gamecek['game_id'] ?>" class="button muted">Read Details</a>
									</div>
								</div> <!-- .product --> 
								<?php } ?>