<?php 

	// check page
	$uri = $_SERVER['REQUEST_URI'];
	$csvFilename = '';
	$pageTitle = '';
	$elementTitle = 'chapter';

	# dpocuments menu underlined
	if(strpos($uri, "/notes") !== false){
		$csvFilename = 'notes';
	} elseif (strpos($uri, "/textbook") !== false) {
		$csvFilename = 'textbook';
	} elseif (strpos($uri, "/workbook") !== false) {
		$csvFilename = 'workbook';
	} elseif (strpos($uri, "/selection") !== false) {
		$csvFilename = 'selection';
		$elementTitle = 'selections';
	} elseif (strpos($uri, "/answerbook") !== false) {
		$csvFilename = 'answerbook';
	}

	// set page title
	$pageTitle = ucfirst($csvFilename);

	# about menu underlined
	$aboutActive = strpos($uri, "/about") !== false ? $active : '';
	# contact menu underlined
	$contactActive = strpos($uri, "/contact") !== false ? $active : '';

	// import Document class
	require_once('class/document.php');

	// open notes.csv (read-only)
	$file = fopen("config/".$csvFilename.".csv","r");

	// define a global variable to store all the document metadata
	$documentArray = array();

	// read all lines in the csv file
	while(! feof($file))
	{
		// read one line at a time and progress through file
		$metadata = fgets($file);

		// explode the CSV values
		$values = explode("¤", $metadata);

		if(count($values) == 1 || strpos($values[0], '#') !== false){
			// empty or commented lines
			continue;
		}

		$document = new Document();
		$document->setName($values[0]);
		$document->setDescription($values[1]);
		$document->setFile($values[2]);

		// push the document object into the array
		array_push($documentArray, $document);	
	}

	// close the file handle
	fclose($file);

	// initialize a document counter
	$docCount = 0;
	// split list count
	$docTotal = count($documentArray);

?>
<div class="element">
				<h3 class="el-title">Click on the <?php echo $elementTitle; ?> to download QA <?php echo $pageTitle; ?> - Level 1</h3>
				<div class="row">
					<div class="col-xl-6">
						<!-- Accordion 1 -->
						<div id="accordion1" class="accordion-area">
							<?php 
							for(;$docCount < $docTotal / 2; $docCount++) {
								$value = $documentArray[$docCount];
							?>
							<div class="panel">
								<div class="panel-header" id="heading-chapter-<?php echo $docCount; ?>">
									<button class="panel-link" data-toggle="collapse" data-target="#collapse-chapter-<?php echo $docCount; ?>" aria-expanded="false" aria-controls="collapse-chapter-<?php echo $docCount; ?>"><?php echo $value->getName(); ?></button>
								</div>
								<div id="collapse-chapter-<?php echo $docCount; ?>" class="collapse" aria-labelledby="heading-chapter-<?php echo $docCount; ?>" data-parent="#accordion1">
									<div class="panel-body">
										<p><?php echo $value->getDescription(); ?></p>
										<a href="<?php echo $value->getFile(); ?>" class="site-btn sb-dark mr-3 mb-3" target="_blank">Download</a>
									</div>
								</div>
							</div>
							<?php } ?>
						</div>
					</div>
					<div class="col-xl-6">
						<!-- Accordion 2 -->
						<div id="accordion2" class="accordion-area">
							<?php 
							for(;$docCount < $docTotal; $docCount++) {
								$value = $documentArray[$docCount];
							?>
							<div class="panel">
								<div class="panel-header" id="heading-chapter-<?php echo $docCount; ?>">
									<button class="panel-link" data-toggle="collapse" data-target="#collapse-chapter-<?php echo $docCount; ?>" aria-expanded="false" aria-controls="collapse-chapter-<?php echo $docCount; ?>"><?php echo $value->getName(); ?></button>
								</div>
								<div id="collapse-chapter-<?php echo $docCount; ?>" class="collapse" aria-labelledby="heading-chapter-<?php echo $docCount; ?>" data-parent="#accordion2">
									<div class="panel-body">
										<p><?php echo $value->getDescription(); ?></p>
										<a href="<?php echo $value->getFile(); ?>" class="site-btn sb-dark mr-3 mb-3" target="_blank">Download</a>
									</div>
								</div>
							</div>
							<?php } ?>
						</div>
					</div>
				</div>
			</div>