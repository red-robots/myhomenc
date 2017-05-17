<!-- live jan 25 -->
<?php
//Get the Author
$author = get_queried_object();
$author_id = $author->ID; 


/*####################################

	Communities

####################################
*/

$favComm = array();
$commLinks = array();

$favComm = get_field('your_favorite_neighborhoods_my_maison', 'user_'.$author_id);

$ballantyne = get_field('ballantyne_my_maison', 'user_'.$author_id);
$barclay_downs = get_field('barclay_downs_my_maison', 'user_'.$author_id);
$brightwalk = get_field('brightwalk_my_maison', 'user_'.$author_id);
$histBel = get_field('historic_belmont_my_maison', 'user_'.$author_id);
$centerCity = get_field('center_city_my_maison', 'user_'.$author_id);
$chantilly = get_field('chantilly_my_maison', 'user_'.$author_id);
$cherry = get_field('cherry_my_maison', 'user_'.$author_id);
$cotswold = get_field('cotswold_my_maison', 'user_'.$author_id);
$davidson = get_field('davidson_my_maison', 'user_'.$author_id);
$dilworth = get_field('dilworth_my_maison', 'user_'.$author_id);
$eastover = get_field('eastover_my_maison', 'user_'.$author_id);
$elizabeth = get_field('elizabeth_my_maison', 'user_'.$author_id);
$fourth_ward = get_field('fourth_ward_my_maison', 'user_'.$author_id);
$madison_park = get_field('madison_park_my_maison', 'user_'.$author_id);
$myers_park = get_field('myers_park_my_maison', 'user_'.$author_id);
$midtown = get_field('midtown_my_maison', 'user_'.$author_id);
$mooresville = get_field('mooresville_my_maison', 'user_'.$author_id);
$north_davidson = get_field('north_davidson_my_maison', 'user_'.$author_id);
$plaza_midwood = get_field('plaza_midwood_my_maison', 'user_'.$author_id);
$sedgefield = get_field('sedgefield_my_maison', 'user_'.$author_id);
$south_park = get_field('south_park_my_maison', 'user_'.$author_id);
$south_charlotte = get_field('south_charlotte_my_maison', 'user_'.$author_id);
$south_park = get_field('south_park_my_maison', 'user_'.$author_id);
$southend = get_field('southend_my_maison', 'user_'.$author_id);
$third_ward = get_field('third_ward_my_maison', 'user_'.$author_id);
$university_area = get_field('university_area_my_maison', 'user_'.$author_id);
$wesley_heights = get_field('wesley_heights_my_maison', 'user_'.$author_id);
$wilmore = get_field('wilmore_my_maison', 'user_'.$author_id);
$testing = get_field('testing_neighborhood_my_maison', 'user_'.$author_id);

$huntersville = get_field('huntersville_my_maison', 'user_'.$author_id);
$mount_holly = get_field('mount_holly_my_maison', 'user_'.$author_id);
$waxhaw = get_field('waxhaw_my_maison', 'user_'.$author_id);
$matthews = get_field('matthews_my_maison', 'user_'.$author_id);
$mint_hill = get_field('mint_hill_my_maison', 'user_'.$author_id);
$villa_heights = get_field('villa_heights_my_maison', 'user_'.$author_id);
$country_club_heights = get_field('country_club_heights_my_maison', 'user_'.$author_id);

if( $favComm != '' ) :
	if(in_array('BALLANTYNE', $favComm)) {$commLinks['BALLANTYNE'] = $ballantyne;}
	if(in_array('BARCLAY DOWNS', $favComm)) {$commLinks['BARCLAY DOWNS'] = $barclay_downs;}
	if(in_array('BRIGHTWALK', $favComm)) {$commLinks['BRIGHTWALK'] = $brightwalk;}
	if(in_array('CENTER CITY', $favComm)) {$commLinks['CENTER CITY'] = $centerCity;}
	if(in_array('CHANTILLY', $favComm)) {$commLinks['CHANTILLY'] = $chantilly;}
	if(in_array('CHERRY', $favComm)) {$commLinks['CHERRY'] = $cherry;}
	if(in_array('COTSWOLD', $favComm)) {$commLinks['COTSWOLD'] = $cotswold;}	
	if(in_array('DAVIDSON', $favComm)) {$commLinks['DAVIDSON'] = $davidson;}
	if(in_array('DILWORTH', $favComm)) {$commLinks['DILWORTH'] = $dilworth;}
	if(in_array('EASTOVER', $favComm)) {$commLinks['EASTOVER'] = $eastover;}
	if(in_array('ELIZABETH', $favComm)) {$commLinks['ELIZABETH'] = $elizabeth;}
	if(in_array('FOURTH WARD', $favComm)) {$commLinks['FOURTH WARD'] = $fourth_ward;}
	if(in_array('HISTORIC BELMONT', $favComm)) {$commLinks['HISTORIC BELMONT'] = $histBel;}
	if(in_array('MADISON PARK', $favComm)) {$commLinks['MADISON PARK'] = $madison_park;}
	if(in_array('MIDTOWN', $favComm)) {$commLinks['MIDTOWN'] = $midtown;}
	if(in_array('MOORESVILLE', $favComm)) {$commLinks['MOORESVILLE'] = $mooresville;}
	if(in_array('MYERS PARK', $favComm)) {$commLinks['MYERS PARK'] = $myers_park;}
	if(in_array('NODA', $favComm)) {$commLinks['NODA'] = $north_davidson;}
	if(in_array('PLAZA MIDWOOD', $favComm)) {$commLinks['PLAZA MIDWOOD'] = $plaza_midwood;}
	if(in_array('SEDGEFIELD', $favComm)) {$commLinks['SEDGEFIELD'] = $sedgefield;}
	if(in_array('SOUTH CHARLOTTE', $favComm)) {$commLinks['SOUTH CHARLOTTE'] = $south_charlotte;}
	if(in_array('SOUTH PARK', $favComm)) {$commLinks['SOUTH PARK'] = $south_park;}
	if(in_array('SOUTHEND', $favComm)) {$commLinks['SOUTHEND'] = $southend;}
	if(in_array('THIRD WARD', $favComm)) {$commLinks['THIRD WARD'] = $third_ward;}
	if(in_array('UNIVERSITY AREA', $favComm)) {$commLinks['UNIVERSITY AREA'] = $university_area;}
	if(in_array('WESLEY HEIGHTS', $favComm)) {$commLinks['WESLEY HEIGHTS'] = $wesley_heights;}
	if(in_array('WILMORE', $favComm)) {$commLinks['WILMORE'] = $wilmore;}
	if(in_array('TESTING', $favComm)) {$commLinks['TESTING'] = $testing_neighborhood;}

	if(in_array('HUNTERSVILLE', $favComm)) {$commLinks['HUNTERSVILLE'] = $huntersville;}
	if(in_array('MOUNT HOLLY', $favComm)) {$commLinks['MOUNT HOLLY'] = $mount_holly;}
	if(in_array('WAXHAW', $favComm)) {$commLinks['WAXHAW'] = $waxhaw;}
	if(in_array('MATTHEWS', $favComm)) {$commLinks['MATTHEWS'] = $matthews;}
	if(in_array('MINT HILL', $favComm)) {$commLinks['MINT HILL'] = $mint_hill;}
	if(in_array('VILLA HEIGHTS', $favComm)) {$commLinks['VILLA HEIGHTS'] = $villa_heights;}
	if(in_array('COUNTRY CLUB HEIGHTS', $favComm)) {$commLinks['COUNTRY CLUB HEIGHTS'] = $country_club_heights;}
endif;


/*####################################

	Get the Anchor List

####################################
*/
?>
<div id="agentlinks">
	<div id="agent-favorite-neighborhoods">
		<h2>FAVORITE NEIGHBORHOODS</h2>
		
		<?php
		
		//  echo '<pre>';
		// print_r($favComm);
		// echo '</pre>';
		$i = 0;
	// Communities
	foreach($commLinks as $key => $link) {
		$i++;
		// sanitize the key(neighborhood) first
		$sanitized = sanitize_text_field( $key );
	  


		  //echo '<li class="question"><a href="#tab' . $i . '" class="iframe">' . $key . '</a></li>'; 
		echo '<li class="question"><a href="' . $link . '" class="iframe">' . $key . '</a></li>';

		} ?>
		
	</div><!-- agent favorite comm -->


</div><!-- #agent links -->






