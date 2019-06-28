<!DOCTYPE html>
<html lang="en">
	<head>
		<?php include "head.php" ?>
		<title>GO: A Personal Organizer</title>
	</head>
	<body>
		<div class="container">
			<div class="row mt-2">
				<?php include "logo.php" ?>
			</div>
			<div class="row mb-5">
				<div class="col-12">
					<div class="grid" data-packery='{ "itemSelector": ".grid-item", "gutter": 15 }'>	
						<div class="grid-item grid-item--width4">
							<p class="goHdr">Go Read</p>
						</div>
						<div class="grid-item grid-item--width2">
							<p class="goHdr">Go Watch</p>
						</div>
						<div class="grid-item grid-item--width1 text-center empty"></div>
						<div id="bingoCard" class="grid-item grid-item--width1 text-center">
							<a id="new" href="new.php" class="pulsate">+</a>
						</div>
						<div class="grid-item grid-item--width2">
							<p class="goHdr"><span class="highb">Go</span> Search</p>
						</div>
						<div class="grid-item">
							<p class="goHdr">Go Eat</p>
						</div>
						<div class="grid-item grid-item--width1 text-center empty"></div>
						<div id="bingoCard" class="bc2 grid-item grid-item--width0 text-center">
							<a id="bingo" href="scbingo.php" class="pulsate">B</a>
						</div>
						<div class="grid-item grid-item--width1 text-center empty"></div>
						<div class="grid-item">
							<p class="goHdr">Go See</p>
						</div>
						<div class="grid-item">
							<p class="goHdr">Go Try</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div>
			<?php include "footer.php" ?>
		</div>
	</body>
</html>
