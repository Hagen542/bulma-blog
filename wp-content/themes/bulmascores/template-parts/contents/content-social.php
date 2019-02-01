
<section id="social-share" class="hero is-dark has-padding-l-6 has-padding-r-6">
	<div class="hero-body">
		<h2 class="title is-4"><?php esc_html_e( 'Found this post interesting?', 'bulmascores' ); ?></h2>
		<div class="columns">

            <div class="column is-6">
                <h2 class="title is-size-5">Share it on</h2>
                <a class="title has-margin-r-4" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>"><i class="fab fa-facebook-f"></i></a>
                <a class="title has-margin-r-4" target="_blank" href="https://twitter.com/intent/tweet?text=<?php the_title(); ?>&url=<?php the_permalink(); ?>"><i class="fab fa-twitter"></i></a>
                <a class="title has-margin-r-4" target="_blank" href="https://telegram.me/share/url?url=<?php the_permalink(); ?>"><i class="fab fa-telegram-plane"></i></a>
                <a class="title has-margin-r-4" href="whatsapp://send?text=<?php the_permalink(); ?>" data-action="share/whatsapp/share"><i class="fab fa-whatsapp"></i></a>
            </div>
            <div class="column is-6">
                <h2 class="title is-size-5">Sign up to our newsletter</h2>
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
            </div>

		</div><!-- .level -->
	</div><!--hero-body -->
</section><!-- #social-share -->
