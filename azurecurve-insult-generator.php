<?php
/*
Plugin Name: azurecurve Insult Generator
Plugin URI: http://development.azurecurve.co.uk/plugins/insult-generator

Description: Shortcodes which allow user to generate and display modern or medieval insults.
Version: 2.0.1

Author: azurecurve
Author URI: http://development.azurecurve.co.uk

This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301, USA.

The full copy of the GNU General Public License is available here: http://www.gnu.org/licenses/gpl.txt

*/

//include menu
require_once( dirname(  __FILE__ ) . '/includes/menu.php');

function azc_ig_modern_insult($atts, $content = null) {
	global $wp;
	
	$current_url = home_url( add_query_arg( array(), $wp->request ) );
	
	return '<span class="azc_ig_modern">
		<fieldset>
			<form method="post" action="'. $current_url .'">
				<input type="submit" name="modinsult" value="Generate Modern Insult" class="azc_ig_modern"/>
			</form>
		</fieldset>
	</span>';
}
add_shortcode( 'MODERNINSULT', 'azc_ig_modern_insult' );
add_shortcode( 'ModernInsult', 'azc_ig_modern_insult' );
add_shortcode( 'Moderninsult', 'azc_ig_modern_insult' );
add_shortcode( 'moderninsult', 'azc_ig_modern_insult' );

function azc_ig_medieval_insult($atts, $content = null) {
	global $wp;
	
	$current_url = home_url( add_query_arg( array(), $wp->request ) );
	
	return '<span class="azc_ig_medieval">
		<fieldset>
			<form method="post" action="'. $current_url .'">
				<input type="submit" name="medinsult" value="Generate Medieval Insult" class="azc_ig_medieval"/>
			</form>
		</fieldset>
	</span>';
}
add_shortcode( 'MEDIEVALINSULT', 'azc_ig_medieval_insult' );
add_shortcode( 'MedievalInsult', 'azc_ig_medieval_insult' );
add_shortcode( 'Medievalinsult', 'azc_ig_medieval_insult' );
add_shortcode( 'medievalinsult', 'azc_ig_medieval_insult' );

function azc_ig_display_insult($atts, $content = null) {
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if ($_POST["modinsult"]){
			$modinsultone = array("amorphous","annoying","appalling","asanine","atrocious","bad breathed","bad tempered","bewildered","bizarre","blithering","blundering","boring","brainless","bungling","cantakerous","clueless","confused","contemptible","cranky","crooked","crotchety","crude","decrepit","deeply disturbed","demented","deparaved","deranged","despicable","detestable","dim-witted","disdainful","disgraceful","disgusting","dismal","distasteful","distended","double-ugly","dreadful","drivelling","dull","dumb","dumpy","embarrassing","eratic","evil-smelling","facile","feeble-minded","flea-bitten","fractious","frantic","friendless","glutinous","god-awful","good-for-nothing","goofy","grotesque","hallucinating","hopeless","hypocritical","ignorant","illiterate","inadequate","inane","incapable","incompetent","incredible","indecent","indescribable","inept","infantile","infuriating","inhuman","insane","insignificant","insurrerable","irrational","irresponsible","lacklustre","laughable","lazy","loathsome","low budget","malodorous","mentally deficient","misanthropic","miserable","monotonous","nauseating","neurotic","obese","oblivious","obnoxious","obsequious","offensive","opinionated","outrageous","pathetic","perverted","pitiable","pitiful","pointless","pompous","predictable","preposterous","psychotic","pustulant","rabbit-faced","rat-faced","recalcitrant","reprehensible","repulsive","retarded","revolting","ridiculous","rotund","self-exalting","shameless","sick","sickening","sleazy","sloppy","slovenly","spittle-encrusted","stupid","subhuman","superficial","sychophantic","tacky","tiny-brained","ugly","unbelievable","uncouth","uncultivated","uncultured","undisciplined","uneducated","ungodly","unholy","unimpressive","unspeakable","unwelcome","upsetting","useless","vile","violent","vomitous","witless","worthless");
			$modinsulttwo = array("accumulation of","apology for","assortment of","bag of","ball of","barrel of","blob of","bowl of","box of","bucket of","bunch of","cake of","clump of","collection of","container of","contribution of","crate of","crock of","eruption of","excuse for","glob of","heap of","load of","loaf of","lump of","mass of","mound of","mountain of","pile of","sack of","shovel-full of","stack of","toilet-full of","truckload of","tub of","vat of","wheelbarrow-full of");
			$modinsultthree = array("cheesy","clammy","contaminated","crummy","crusty","cute","decaying","decomposed","defective","dehydrated","dirty","dusky","embarrassing","fermenting","festering","filthy","flea-bitten","fly-covered","foreign","fornicating","fossilised","foul","freeze-dried","fresh","fusty","grimy","grisly","gross","gruesome","imitation","industrial-strength","infected","infested","laughable","lousy","malignant","mealy","mildewed","moth-eaten","mouldy","musty","mutilated","nasty","nauseating","noxious","old","petrified","polluted","putrid","radioactive","rancid","raunchy","recycled","reeky","rotten","second-hand","seething","septic","sloppy","sloshy","smelly","soggy","soppy","spoiled","stale","steaming","stenchy","sticky","stinky","sun-ripened","synthetic","unpleasant","wormy","yeasty");
			$modinsultfour = array("aardvark effluent","ape pucke","armpit hairs","baboon arses","bat guano","bile","braised pus","buffalo excrement","bug parts","buzzard barf","buzzard leavings","camel fleas","camel manure","carp guts","carrion","chicken guts","cigar butts","cockroaches","compost","cow cud","cow pies","coyote snot","dandruff flakes","dingo's kidneys","dirty underwear","dog barf","dog meat","dog phlegm","donkey droppings","drain clogs","earwax","eel guts","electric donkeys","elephant plaque","Ewok excrement","expectorant","fish lips","foot fungus","frog fat","garbage","goat carcasses","gutter mud","haemorroids","hippo vomit","hog livers","hog swill","hogswash","jockstraps","kangaroo vomit","knob cheese","larks vomit","leprosy scabs","lizard bums","llama spit","maggot brains","maggot fodder","maggot guts","monkey zips","moose entrails","mule froth","nasal hairs","navel lint","nose hairs","nose pickings","parrot droppings","penguino guano","penile warts","pig bowels","pig droppings","pig slop","pigeon bombs","pimple pus","pimple squeezings","puke lumps","pustulence","rabbit raisins","rat bogies","rat cysts","rodent droppings","rubbish","sewerage","sewer seepage","shark snot","sheep droppings","sinus clots","sinus drainage","skid marks","skunk waste","slime-mould","sludge","slug slime","snake innards","spittoon spillage","stable sweepings","stomach acid","swamp mud","sweat-socks","swine remains","toad tumors","tripe","turkey puke","vulture gizzards","walrus blubber","weasel warts","whale waste","zit cheese");
			$return = '<span class="azc_ig_display">You are ';
			$modinsult = $modinsultone[mt_rand(0, count($modinsultone) - 1)];
			if (ctype_alpha($modinsult) && preg_match('/^[aeiou]/i', $modinsult)){
				$return .= 'an ';
			}else{
				$return .= 'a ';
			}
			$return .= $modinsult.' ';
			$return .= $modinsulttwo[mt_rand(0, count($modinsulttwo) - 1)].' ';
			$return .= $modinsultthree[mt_rand(0, count($modinsultthree) - 1)].' ';
			$return .= $modinsultfour[mt_rand(0, count($modinsultfour) - 1)];
			$return .= '.</span>';
		}elseif ($_POST["medinsult"]){
			$medinsultone = array("artless","bawdy","beslubbering","bootless","brazen","churlish","cloutered","cockered","craven","currish","dankish","dissembling","distempered","droning","errant","fawning","fitting","frobbing","frothing","froward","gleeking","gnarling","goatish","gorbellied","greasy","grizzled","haughty","hideous","impertinent","infectious","jaded","jarring","knavish","lewd","loggerhead","lumpish","mammering","magled","mewling","paunchy","peevish","pernicious","prating","pribling","puking","puny","purpled","qualling","queasey","rank","reeking","rougish","roynish","ruttish","saucy","sottish","spleeny","spongy","surly","tottering","unmuzzled","vacant","vain","venomed","villanous","waggish","wanton","warped","wayward","weeding","wenching","whoreson","yeasty");
			$medinsulttwo = array("base-court","bat-fowling","beef-witted","beetle-headed","boil-brained","bunched-backed","clapper-clawed","clay-brained","common-kissing","crook-pated","dismal-dreaming","dizzy-eyed","dog-hearted","dread-bolted","earth-vexing","elf-skinned","empty-hearted","evil-eyed","fat-kidneyed","fen-sucked","flap-mouthed","fly-bitten","folly-fallen","fool-born","full-gorged","guts-griping","half-faced","half-witted","hasty-witted","heavy-handed","hedge-born","hell-hated","horn-mad","idle-headed","ill-breeding","ill-nurtured","knotty-pated","lean-witted","mad-bread","milk-livered","motley-minded","muddy-mettled","onion-eyed","pale-hearted","paper-faced","pinch-spotted","plume-plucked","pottle-deep","pox-marked","raw-boned","reeling-ripe","rough-hewn","rude-growing","rug-headed","rump-fed","shag-eared","shard-norn","sheep-biting","shril-gorged","sour-faced","spur-galled","swag-bellied","tardy-gaited","tickle-brained","toad-spotted","unchin-snouted","weak-hinged","weather-bitten","white-livered");
			$medinsultthree = array("apple-john","baggage","barnacle","bladder","boar-pig","bugbear","bum-bailey","canker-blossom","clack-dish","clotpole","codpiece","coxcomb","crutch","cutpurse","death-token","dewberry","dogfish","eggshell","flap-dragon","flax-wench","flirt-gill","foot-licker","fustilarian","giglet","gudgeon","gull-catcher","haggard","harpy","hedge-pig","hempseed","horn-beast","hugger-mugger","jack-a-nape","jolthead","lewdster","lout","maggot-pie","malignancy","malkin","malt-worm","mammet","manikin","measle","minimus","minnow","miscreant","moldwarp","mumble-news","nut-hook","pantaloon","pigeon-egg","pignut","pumpion","puttock","rabbit-sucker","rampallion","ratsbane","remnant","rudesby","ruffian","scantling","scullion","scut","skainsmate","snipe","strumpet","varlot","vassal","wagtail","waterfly","whey-face","whipster","younker");
			$return = '<span class="azc_ig">Thou art ';
			$medinsult = $medinsultone[mt_rand(0, count($medinsultone) - 1)];
			if (ctype_alpha($medinsult) && preg_match('/^[aeiou]/i', $medinsult)){
				$return .= 'an ';
			}else{
				$return .= 'a ';
			}
			$return .= $medinsult.' ';
			$return .= $medinsulttwo[mt_rand(0, count($medinsulttwo) - 1)].' ';
			$return .= $medinsultthree[mt_rand(0, count($medinsultthree) - 1)];
			$return .= '.</span>';
		}
		return $return;
	}
	?>
	<?php
}
add_shortcode( 'displayinsult', 'azc_ig_display_insult' );
add_shortcode( 'DisplayInsult', 'azc_ig_display_insult' );
add_shortcode( 'Displayinsult', 'azc_ig_display_insult' );
add_shortcode( 'displayinsult', 'azc_ig_display_insult' );

function azc_ig_load_css(){
	wp_enqueue_style( 'azc_ig', plugins_url( 'style.css', __FILE__ ) );
}
add_action('wp_enqueue_scripts', 'azc_ig_load_css');


// azurecurve menu
function azc_create_ig_plugin_menu() {
	global $admin_page_hooks;
    
	add_submenu_page( "azc-plugin-menus"
						,"Insult Generator"
						,"Insult Generator"
						,'manage_options'
						,"azc-ig"
						,"azc_ig_settings" );
}
add_action("admin_menu", "azc_create_ig_plugin_menu");

function azc_ig_settings() {
	if (!current_user_can('manage_options')) {
		$error = new WP_Error('not_found', __('You do not have sufficient permissions to access this page.' , 'azc_siw'), array('response' => '200'));
		if(is_wp_error($error)){
			wp_die($error, '', $error->get_error_data());
		}
    }
	?>
	<div id="azc-t-general" class="wrap">
			<h2>azurecurve Insult Generator</h2>
			<p>
				<?php _e('This plugin works by providing three shortcodes which can be positioned on a post, page or widget:
<ul><li>moderninsult when clicked will generate a modern insult displayed using the displayinsult shortcode</li>
<li>medievalinsult when clicked will generate a medieval insult displayed using the displayinsult shortcode</li>
<li>displayinsult is used to position the insult generated by one of the other shortcodes</li></ul>', 'azc_ig'); ?>
			</p>
			<p><label for="additional-plugins">
				azurecurve <?php _e('has the following plugins which allow shortcodes to be used in comments and widgets:', 'azc_gpi'); ?>
			</label>
			<ul class='azc_plugin_index'>
				<li>
					<?php
					if ( is_plugin_active( 'azurecurve-shortcodes-in-comments/azurecurve-shortcodes-in-comments.php' ) ) {
						echo "<a href='admin.php?page=azc-sic' class='azc_plugin_index'>Shortcodes in Comments</a>";
					}else{
						echo "<a href='https://wordpress.org/plugins/azurecurve-shortcodes-in-comments/' class='azc_plugin_index'>Shortcodes in Comments</a>";
					}
					?>
				</li>
				<li>
					<?php
					if ( is_plugin_active( 'azurecurve-shortcodes-in-widgets/azurecurve-shortcodes-in-widgets.php' ) ) {
						echo "<a href='admin.php?page=azc-siw' class='azc_plugin_index'>Shortcodes in Widgets</a>";
					}else{
						echo "<a href='https://wordpress.org/plugins/azurecurve-shortcodes-in-widgets/' class='azc_plugin_index'>Shortcodes in Widgets</a>";
					}
					?>
				</li>
			</ul></p>
	</div>
	
<?php
}

?>