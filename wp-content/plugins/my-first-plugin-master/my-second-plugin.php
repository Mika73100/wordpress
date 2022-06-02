<?php 
// commentaires d’en-tête » avec diverses informations qui seront lues/affichées par WordPress

/*
Plugin Name: Mon deuxième plugin
Description: C'est mon deuxième plugin 
Author: Mika
Version: 0.1
*/

//Inclu mfp-functions.php avec le chemin du répertoire,  require_once pour arrêter le script si mfp-functions.php n'est pas trouvé
//require_once plugin_dir_path(__FILE__) . 'includes/mfp-functions.php';
//require_once plugin_dir_path(__FILE__) . 'includes/mfp-sec-acp-page.php';


// $dupe = $wpdb->get_results( $wpdb->prepare( "SELECT * FROM $wpdb->comments WHERE comment_post_ID = %d AND comment_author_url = %s", $comment_post_ID, $comment_author_url ) );



/**
 * Create the date options fields for exporting a given post type.
 *
 * @global wpdb      $wpdb      WordPress database abstraction object.
 * @global WP_Locale $wp_locale WordPress date and time locale object.
 *
 * @since 3.1.0
 *
 * @param string $post_type The post type. Default 'post'.
 */


/*
Plugin Name: My First Plugin
Description: This is my first plugin! It makes a new admin menu link!
Author: Mika
Text Domain: My First Plugin
*/


//ici je crée une fonction qui me permet de afficher toute les catégory crée dans la base de donnée WP.
function afficher(){
    global $wpdb;
    $categorie=get_the_category();
//    print_r($categorie);


// Include mfp-functions.php, use require_once to stop the script if mfp-functions.php is not found
require_once plugin_dir_path(__FILE__) . 'includes/mfp-functions.php';
//require_once plugin_dir_path(__FILE__) . 'includes/mfp-test.php';

$formulaire = $wpdb->get_results( $wpdb->prepare( "SELECT category_id, nom_champ, type_input
FROM wp_mfp_champ
INNER JOIN wp_mfp_liaison 
ON wp_mfp_champ.Id_champ=wp_mfp_liaison.champ_id 
INNER JOIN wp_mfp_input 
ON wp_mfp_input.Id=wp_mfp_liaison.input_id 
WHERE wp_mfp_liaison.category_id=6" ) );

//echo "<pre>",print_r( $categorie) ,"</pre><br>";
//echo "<pre>",print_r( $formulaire) ,"</pre><br>";

?>

<form action="" method="post">
<input type="hidden" name="category_id" value='6'>
<?php
foreach ($formulaire as $elements) {
// print_r($elements);

?>

<label for="<?=$elements->nom_champ?>"><?=$elements->nom_champ?> :</label>

<?php
if ($elements->type_input=='select') { ?>

<select name="<?=$elements->nom_champ?>">
<?php foreach ($options as $option) { ?>

<option value="<?=$option->option_select?>"><?=$option->option_select?></option>

<?php }?>
</select>

<?php } else { ?>

<input type="<?=$elements->type_input?>" name="<?=$elements->nom_champ?>" id="">

<?php }

}

?>


<button type="submit">Envoyer</button>

</form>
<?php
//error_log("POST : ".print_r($_POST,1));
//print_r($_POST);



$wpdb->insert('wp_donnees_form',
array(
'category_id' => $_POST['category_id'],
'plat' => $_POST['plat'],
'prix' => $_POST['prix'],
), array( '%d', '%s', '%d' ));

    }
add_action('get_post_footer','afficher');


?>