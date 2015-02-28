<?php
/**
* @package The WP Wingman
* @version 1.0
*/
/*
Plugin Name: The WP Wingman
Plugin URI: http://thecodeisclear.in/the-wp-wingman
Description: Quotes from The Bro Code (a tie-in book from the TV Series - How I Met Your Mother)
Author: Ramesh Vishveshwar
Version: 1.0
Author URI: http://thecodeisclear.in
*/

// Output one of the articles randomly
function wingman_widget_function( $post, $callback_args ) {
	// All Articles
	$brocode[1] = "Bro's before ho's";
	$brocode[2] = "A bro is always entitled to do something stupid, as long as the rest of his Bros are all doing it";
	$brocode[3] = "If a Bro gets a dog, it must be at least as tall as his knee when full-grown";
	$brocode[4] = "A Bro never divulges the existance of The Bro Code to a woman. It is a sacred document not to be shared with chicks for any reason.. no, not even that reason";
	$brocode[5] = "Whether he cares about sports or not, a Bro cares about sports.";
	$brocode[6] = "A Bro shall not lollygag if he must get naked in front of other Bros in a gym locker room";
	$brocode[7] = "A Bro never admits he can't drive, even after an accident.";
	$brocode[8] = "A Bro never sends a greeting card to another Bro";
	$brocode[9] = "Should a Bro lose a body part due to an accident or illness, his fellow Bros will not make lame jokes such as “Gimme three!” or “Wow! quitting your job like that really took a lot of ball”.";
	$brocode[10] = "A Bro will drop whatever he's doing and rush to help his Bro dump a chick";
	$brocode[11] = "A Bro may ask his Bro(s) to help him move, but only after first disclosing an honest estimate on both time commitment and number of large pieces of furniture.";
	$brocode[12] = "Bros do not share dessert.";
	$brocode[13] = "All Bros shall dub one of their bros his wingman";
	$brocode[14] = "If a chick inquires about another Bros sexual history, a Bro shall honour the Brode of Silence and play dumb. Better to have women think all men are stupid than to tell the truth.";
	$brocode[15] = "A Bro never dances with his arms above his head.";
	$brocode[16] = "A Bro should be able, at any time, to recite the following reigning champions: Super Bowl, World Series and Playmate of the Year.";
	$brocode[17] = "A Bro shall be kind and courteous to his co-workers, unless they are beneath him on the pyramid of Screaming.";
	$brocode[18] = "If a Bro spearheads a beer run at a party, he is entitled to any excess monies accrued after can canvassing the group.";
	$brocode[19] = "A Bro shall not sleep with another Bro's sister. However, a Bro shall not get angry of another Bro says, “Dude, your sister's hot!”";
	$brocode[20] = "A Bro respects all his Bros in the military because they've selflessly chose to defend the nation, but more to the point, because they can kick his ass six ways to Sunday.";
	$brocode[21] = "A Bro never shares observations about another Bro’s smoking-hot girlfriend. Even if the Bro with the hot girlfriend attempts to bait the Bro by saying, “She’s smoking-hot, huh?” a Bro shall remain silent, because in this situation, he’s the only one who should be baiting.";
	$brocode[22] = "There is no law that prohibits a woman from being a Bro.";
	$brocode[23] = "When flipping through TV channels with his Bros, a Bro is not allowed to skip past a program featuring boobs. This includes, but is not limited to, exercise shows, women’s athletics, and on some occasions, surgery programs.";
	$brocode[24] = "When wearing a baseball cap, a Bro may position the brim at either 12 or 6 o’ clock. All other angles are reserved for rappers and the handicapped.";
	$brocode[25] = "A Bro doesn’t let another Bro get a tattoo, particularly a tattoo of a girls name.";
	$brocode[26] = "Unless he has children, a Bro shall not wear his cell phone on a belt clip.";
	$brocode[27] = "A Bro never removes his shirt infront of other Bros, unless at a resort pool or the beach.";
	$brocode[28] = "A Bro will, in timely manner, alert his Bro to the existence of a girl fight.";
	$brocode[29] = "If two Bros decide to catch a movie together, they may not attend a screening that begins after 4:40 PM. Also, despite the cost of savings, they shall not split a tub of popcorn, choosing instead to procure individual bags.";
	$brocode[30] = "A Bro doesn’t comparison shop.";
	$brocode[31] = "When on the prowl, a Bro hits on the hottest chick first because you just never know.";
	$brocode[32] = "A Bro doesn't allow another Bro to get married until he's at least thirty.";
	$brocode[33] = "When in a public restroom, a Bro (1) stares straight ahead when using the urinal; (2) makes the obligatory comment, “What is this a chicks” restroom?' if there are more than two dudes waiting to pee; and (3) attempts to shoot his used paper towel into the trash can like a basketball... rebounding is optional.";
	$brocode[34] = "Bros cannot make eye contact during a devil's threeway.";
	$brocode[35] = "A Bro never rents a chick flick.";
	$brocode[36] = "When questioned in the company of women, a Bro always decries fake breasts.";
	$brocode[37] = "A Bro is under no obligation to open a door for anyone. If women insist on having their own professional basketball league, then they can open their own doors. Honestly, they're not that heavy.";
	$brocode[38] = "Even in a fight to the death, a Bro never punches another Bro in the groin.";
	$brocode[39] = "When a Bro gets a chick's number, he waits at least ninety-six hours before calling her.";
	$brocode[40] = "Should a Bro become stricken with engagement, his Bros shall stage an intervention and atempt to heal him. this is more commonly known as 'a bahelor party.'";
	$brocode[41] = "A Bro never cries. Exceptions- Watching Field of Dreams, ET or a sports legend retire (only first time he retires).";
	$brocode[42] = "Upon greeting another Bro, a Bro may engage in a high five, fist bump, or a Bro hug, but never a full embrace.";
	$brocode[43] = "A Bro loves his country, unless that country isn't America.";
	$brocode[44] = "A Bro never applies sunscreen to another Bro.";
	$brocode[45] = "A Bro never wears jeans to a strip club.";
	$brocode[46] = "If a Bro is seated next to some dude who's stuck in the middle seat on an airplane, he shall yield him all of their shared armrest, unless the dude has (a) taken his shoes off, (b) is snoring, (c) makes the bro get up more than once to use the lavatory, or (d) purchased headphones after they announced the on-fligt movie is 27 Dresses. See Article 35.";
	$brocode[47] = "A Bro never wears pink. Not even in Europe.";
	$brocode[48] = "A Bro never publicly reveals how many chicks he’s banged.";
	$brocode[49] = "When asked, 'Do you need some help?' a Bro shall automatically respond, 'I got it,' whether or not he’s actually got it.";
	$brocode[50] = "If a Bro should accidentally strike another Bro’s undercarriage with his arm while walking, both Bros silently agree to continue on as if it never happened.";
	$brocode[51] = "A Bro checks out another Bro’s blind date and reports back with a thumbs-up or thumbs-down.";
	$brocode[52] = "A Bro is not required to remember another Bros birthday, though a phone call every not and again probably wouldn’t kill him.";
	$brocode[53] = "Even in a drought, a Bro flushes twice.";
	$brocode[54] = "A Bro is required to go out with his Bros on St. Paddy’s Day and other official Bro holidays, including Halloween, New Year’s Eve, and Desperation Day (February 13th).";
	$brocode[55] = "Even in an emergency that requires a tourniquet, a Bro never borrows from or lends clothes to another Bro.";
	$brocode[56] = "A Bro is required to alert another Bro if the Bro/chick Ration at a party falls below 1:1. However, to avoid Bro-flation, a Bro is only allowed to alert one Bro. Further, a Bro may not speculate on the anticipated Bro/Chick Ratio of a party or venue without first disclosing the present-time observed ratio.";
	$brocode[57] = "A Bro never reveals the score of a sporting event to another Bro unless that Bro has thrice confirmed he wants to hear it.";
	$brocode[58] = "A Bro doesn’t grow a moustache. Exception – While shaving it’s more than ok for a Bro to keep the whiskers around his mouth till the end so that he might temporarily experiment with different facial hair configurations.";
	$brocode[59] = "A Bro must always post bail for another Bro, unless it’s out of state or, like, crazy expensive [Crazy expensive bail > (years you’ve been bros) x $100]";
	$brocode[60] = "A Bro shall honor they father and mother, for they were once Bro and chick. However, a Bro never thinks of them in that capacity.";
	$brocode[61] = "If a Bro for whatever reason becomes aware of another Bro’s anniversary with a chick, he shall endeavor to make that information available to his Bro, regardless of whether he thinks his Bro already knows.";
	$brocode[62] = "In the event that two Bros lock on to the same target, the Bro who calls dibs first has dibs. If they both call dibs at the same time, the Bro who counts aloud to ten the fastest has dibs. If both arrive at the number ten at the same time, the Bro who brought the last round of drinks has dibs. If they haven't purchased drinks yet, the taller of the two Bros has dibs. If they're the same height, the Bro with the longer dry spell has dibs. Should the dry spells be of equal length, a game of discreet Broshambo* shall determine dibs, provided the chick is still there.";
	$brocode[63] = "A Bro will make any and all efforts to provide his Bro with protection.";
	$brocode[64] = "A Bro must provide his Bro with a ticket to an event if said event involves the second Bro’s favorite sports team in a playoff scenario.";
	$brocode[65] = "A Bro must always reciprocate a round of drinks among Bros. Exception – A Bro is off the hook if a Bro orders a drink with an umbrella in it.";
	$brocode[66] = "If a Bro suffers pain due to the permanent dissolution of a relationship with a lady friend, a Bro shall offer nothing more than a 'that sucks, man' and copious quantities of beer. A Bro will also refrain from pejorative commentary – deserved or not – regarding said lady friend for a period of three months, when the requisite BACKSLIDE WINDOW has closed.";
	$brocode[67] = "Should a Bro pick up a guitar at a party and commence playing, another Bro shall point out that he is a tool.";
	$brocode[68] = "If a Bro be on hot streak, another Bro will do everything possible to ensure its longevity, even if that includes jeopardizing his own records, the missing of work, or, if necessary, generating a realistic fear that the end of the world is imminent. ";
	$brocode[69] = "Duh!";
	$brocode[70] = "A Bro will drive another Bro to the airport or pick him up, but never both for the same trip. He is not expected to be on time, help with luggage, or inquire about his Bro’s trip or general well-being.";
	$brocode[71] = "As a courtesy to Bros the world over, a Bro never brings more than two other Bros to a party.";
	$brocode[72] = "A Bro never spell-checks.";
	$brocode[73] = "When a group of Bros are in a restaurant, each shall engage in the time-honored ritual of jockeying to pay the bill, regardless of affordability. When the group ultimately decides to divide the check, each Bro shall act upset rather that enormously relieved.";
	$brocode[74] = "At a red light, a Bro inches as close as possible to the rear bumper of the car in front of him, and then immediately honks his horn when the light turns green. That way if another Bro is several cars behind, he’ll have a better chance of making it through the intersection before the light turns red again.";
	$brocode[75] = "A Bro automatically enhances another Bro’s job description when introducing him to a chick. Chicks like to stretch the truth about their age, promiscuity and sometimes, with the help of extensive make-up and structural lingerie, even their body shape. As such, it is a fair game for Bros to exaggerate reality when asked about their Bro-fession.";
	$brocode[76] = "If a Bro is on the phone with a chick while in front of his Bros and, for whatever reason, desires to say “I love you” he shall first excuse himself from the room or employ a subsonic barry white-esque tone.";
	$brocode[77] = "Bros don’t cuddle.";
	$brocode[78] = "A Bro shall never rack jack his wingman. Rack jack is to steal your wingman’s chick.";
	$brocode[79] = "At a wedding, Bros shall reluctantly trudge out for the garter toss and feign interest for the benefit of the chicks present.";
	$brocode[80] = "A bro shall make every effort to aid another Bro in riding the tricycle (engaging in a threesome), short of completing the tricycle himself. The total age of all the three should be less than 83.";

	echo "<blockquote>" . "\n";
	echo "<p>" . $brocode[array_rand($brocode, 1)] . "</p> \n";
	echo "</blockquote>" . "\n";
	echo "<div class='bro-attribution'>\n";
	echo "<p class='bro-author'>Barney Stinson</p>\n";
	echo "</div>\n";
}

// Function used in the action hook
// Code taken from http://codex.wordpress.org/Dashboard_Widgets_API
function add_wingman_widget() {
	
	wp_add_dashboard_widget('wingman_widget', 'Remember The Bro Code', 'wingman_widget_function');
	
	// Globalize the metaboxes array, this holds all the widgets for wp-admin
 
 	global $wp_meta_boxes;
 	
 	// Get the regular dashboard widgets array 
 	// (which has our new widget already but at the end)
	
	$normal_dashboard = $wp_meta_boxes['dashboard']['normal']['core'];
 	
 	// Backup and delete our new dashboard widget from the end of the array
 
 	$example_widget_backup = array( 'wingman_widget' => $normal_dashboard['wingman_widget'] );
 	unset( $normal_dashboard['wingman_widget'] );
 
 	// Merge the two arrays together so our widget is at the beginning
 
 	$sorted_dashboard = array_merge( $example_widget_backup, $normal_dashboard );
 
 	// Save the sorted array back into the original metaboxes 
 
 	$wp_meta_boxes['dashboard']['normal']['core'] = $sorted_dashboard;
}

// Register the new dashboard widget with the 'wp_dashboard_setup' action
add_action('wp_dashboard_setup', 'add_wingman_widget' );

add_action( 'admin_enqueue_scripts', 'wingman_widget_enqueue_css' );
function wingman_widget_enqueue_css( $hook ) {
	if( 'index.php' != $hook ) {
		return;
	}
	wp_enqueue_style( 'dashboard-widget-styles', plugins_url( '', __FILE__ ) . '/wingman.css' );
} 
?>