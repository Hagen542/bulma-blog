<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bulmascores
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area menu">
    <div class="subscribe-box box has-background-grey-darker"> <!-- The sign up for our newsletter -->
        <h2 class="title is-size-5 has-text-white">Sign up to our newsletter</h2>
        <p class="has-margin-b-5 has-text-white">Get the most awesome content delivered straight to your inbox!</p>
        <form action="https://ext.mnm.as/subscribe.asp" accept-charset="utf-8" method="post">
            <input type="hidden" name="f" value="3718" />
            <input type="hidden" name="k" value="11334" />
            <input type="hidden" name="a" value="on" />
            <input type="hidden" name="source" value="embedhtml" />
            <input type="hidden" name="subscriber_list_ids" value="118778" />
            <input type="text" class="mnmemailaddress" name="mnmhoneypot" style="position: absolute; top: -5000px; left: -5000px;"/>
            <div class="field">
                <div clas="controll">
                    <input class="input" type="text" name="email" placeholder="E-mail" required/>
                </div>
            </div>
<!--            <input class="form-control" type="text" name="firstname" value="Fornavn" />-->
<!--            <input class="form-control" type="text" name="lastname" value="Etternavn" />-->
<!--            <input class="form-control" type="text" name="firm" value="Firma" />-->
<!--            <div class="form-group">-->
<!--                <label class="control-label">-->
<!--                    <input type="checkbox" class="form-control checkbox" name="consent_email" value="1" />Ja, send meg informasjon på e-post-->
<!--                </label>-->
<!--            </div>-->
            <div class="field">
                <div class="controll">
                    <input class="button is-action is-fullwidth" type="submit" value="Sign up" />
                </div>
            </div>
        </form>
    </div><!-- The sign up for our newsletter END -->
    <div class="box">
        <?php dynamic_sidebar( 'sidebar-1' ); ?>
    </div>
</aside><!-- #secondary -->
