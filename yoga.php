<!DOCTYPE html>
<html>
<head>
<?php include "style_sheet.php"; ?>
	<title>My Yoga Journey</title>
</head>
<body>
<div>
	<?php include "header.php"; ?>
	<section class = "clearfix">
		<article>
		<p class = "secondary">
			<?php
          class Yoga {
              public $drishti;
              
              public function __construct($drishti){
                  $this->drishti = $drishti;
              }
              public function breathe() {
                  return "Primary ".$this->drishti." ";
              }
          }
          $CodeYoga = new Yoga ("Series is the first series in Ashtanga Yoga. There are six series that are achieved consecutively after the previous series has been completed. This is not to say that yoga is just about the asanas. True enlightment in yoga is achieved through finding the inner path to the spiritual light to find inner peace and happiness and to be an overflowing well of love and light to all. ");
          
          echo $CodeYoga-> breathe();
        ?>
		</p>
		<p class = "secondary">
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		</p>
		<p class = "secondary">
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		</p>
		<p class = "secondary">
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		</p>
		</article>
	</section>
</div>
	<?php include "footer.php"; ?>
</body>
</html>