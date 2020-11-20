<?php
$check = "<svg width='1em' height='1em' viewBox='0 0 16 16' class='bi bi-check-circle-fill float-right' fill='currentColor' xmlns='http://www.w3.org/2000/svg'> <path fill-rule='evenodd' d='M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z'/> </svg>";

$x = "<svg width='1em' height='1em' viewBox='0 0 16 16' class='bi bi-x-circle-fill float-right' fill='currentColor' xmlns='http://www.w3.org/2000/svg'> <path fill-rule='evenodd' d='M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z'/> </svg>";

$dash = "<svg width='1em' height='1em' viewBox='0 0 16 16' class='bi bi-dash-circle-fill float-right' fill='currentColor' xmlns='http://www.w3.org/2000/svg'><path fill-rule='evenodd' d='M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h7a.5.5 0 0 0 0-1h-7z'/></svg>";	

$heart = "<svg width='1em' height='1em' viewBox='0 0 16 16' class='bi bi-heart-fill' fill='currentColor' xmlns='http://www.w3.org/2000/svg'><path fill-rule='evenodd' d='M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z'/></svg>";

$gamesJSON = file_get_contents('data/games.json');
$gamesPHP = json_decode($gamesJSON, true);
$games = array_reverse($gamesPHP);
$count = 1;
?>

<?php
foreach ($games as $key => $value) {
	
	$title = $value["title"];
	$platform = $value["platform"];
	$abbr = $value["abbr"];
	$img = "imgs/" . $abbr . ".jpg";
	$modalTitle = $abbr . "Title";
	$descrip = $value["descrip"];
	
	if ($value["status"] == "compl") {
		$status = $check;
	} else if ($value["status"] == "ncompl") {
		$status = $x;
	} else {
		$status = $dash;
	}
	
	if ($value["platform"] == "3DS") {
		$platfbtn = "threeds";
	} else {
		$platfbtn = $value["platform"];
	}

	$card = "<!-- visible -->
	<div class='col-xs-12 col-sm-6 col-lg-4'>
		<div class='card shadow' data-toggle='modal' data-target='#$abbr'>
			<img class='card-img-top' src='$img' alt='Cover art for $title'>
			<div class='card-body'>
				<h5 class='card-title'>$title</h5>
				<p class='card-text'><span class='btn platform $platfbtn'>$platform</span> $status</p>
			</div>
		</div>
	</div>
	<!-- modal -->
	<div class='modal' id='$abbr' tabindex='-1' role='dialog' aria-labelledby='$modalTitle' aria-hidden='true'>
	  <div class='modal-dialog modal-dialog-centered' role='document'>
	    <div class='modal-content shadow animate'>
	      <div class='modal-header'>
	        <h5 class='modal-title' id='$modalTitle'>$title</h5>
	        <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
	          <span aria-hidden='true'>&times;</span>
	        </button>			
	      </div>
	      <div class='modal-body'>
	        <p>$descrip</p>
	      </div>
	    </div>
	  </div>
	</div>
	";
			
	echo $card;
	$count++;
}
?>