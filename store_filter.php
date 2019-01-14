<?php
function store_filter_spawn($all_filters) {
	echo '<p>Filter:<button type="button">Apply!??????!</button></br>';
	foreach($all_filters as $filter) {
		echo $filter.'<input type="checkbox" name="'.$filter;
		echo '" value="'.$filter.'">';
		echo '<br />';
	}
	echo '</p>';
}

function put_item($file) {
        echo '<div class="item">';
        echo '<h2>' . preg_replace('/database\//', '', $file) . '</h2>';
	$fp = fopen($file, 'r');
	fgets($fp); /* read tags line */
        while (!feof($fp)) {
		echo fgets($fp);
	}
	echo '</div>';
}

function store_filter($filters) {
        $files = glob('database/*');
        foreach($files as $file) {
                $line = fgets(fopen($file, 'r'));
		if (count($filters) == 0) {
			put_item($file);
		} else {
                	foreach ($filters as $filter) {
                	        if (strpos($line, $filter) != FALSE) {
					put_item($file);
                	        }
                	}
		}
	}
}
?>
