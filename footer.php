<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package avantime
 */

//TODO move all to widget+sidebars
?>

	</div><!-- #content -->

	<footer id="footer">
    <div class="footer-main">
      <div class="container">
        <div class="row">
          <div class="col hidden-md hidden-lg extra-block col-md-3 col-sm-6">
            <div class="logo-hold">
              <!-- <a href="#">
                <img src="images/logo11.png" alt="90 KONTO SVENSK INSAMLINGS KONTROLL" width="347" height="89">
              </a> -->
            </div>
            <strong class="title">Säker insamling</strong>
            <p>
              Radiumhemmets Forskningsfonder har 90-konton som kontrolleras av Svensk Insamlingskontroll.
            </p>
            <p>
              Läs mer om 90-konton <a href="#">här</a>.
            </p>
          </div>
          <div class="col col-md-3 col-sm-6">
            <h3>Om oss</h3>
            <ul class="list-unstyled links">
              <li>
                <a href="#">Mer än 100 år av framstående cancerforskning</a>
              </li>
              <li>
                <a href="#">Radiumhemmets historia</a>
              </li>
              <li>
                <a href="#">Cancerföreningen i Stockholm</a>
              </li>
              <li>
                <a href="#">Kung Gustaf V:s Jubileumsfond</a>
              </li>
            </ul>
          </div>
          <div class="col col-md-3 col-sm-4">
            <h3>Om cancer</h3>
            <ul class="list-unstyled links">
              <li>
                <a href="#">Cancerrådgivning</a>
              </li>
              <li>
                <a href="#">Vanliga frågor om cancer</a>
              </li>
              <li>
                <a href="#">Böcker och skrifter om cancer</a>
              </li>
              <li>
                <a href="#">Länkar om cancer</a>
              </li>
            </ul>
          </div>
          <div class="col col-md-3 col-sm-4">
            <h3>Vår forskning</h3>
            <ul class="list-unstyled links">
              <li>
                <a href="#">Behandlingsmetoder</a>
              </li>
              <li>
                <a href="#">Bröstcancer</a>
              </li>
              <li>
                <a href="#">Cancer i bukspottkörteln</a>
              </li>
              <li>
                <a href="#">Leukemi</a>
              </li>
            </ul>
          </div>
          <div class="col col-md-3 col-sm-4">
            <h3>Sök forskningsanslag</h3>
            <ul class="list-unstyled links">
              <li>
                <a href="#">Reseanslag</a>
              </li>
              <li>
                <a href="#">Denniz Popz Minnesfond</a>
              </li>
              <li>
                <a href="#">Ansökningssystem</a>
              </li>
            </ul>
          </div>
          <div class="col hidden-xs hidden-sm extra-block col-md-3 col-sm-4">
            <div class="logo-hold">
              <a href="#">
                <!-- <img src="images/logo10.png" alt="90 KONTO SVENSK INSAMLINGS KONTROLL" width="279" height="70"> -->
              </a>
            </div>
            <strong class="title">Säker insamling</strong>
            <p>
              Radiumhemmets Forskningsfonder har 90-konton som kontrolleras av Svensk Insamlingskontroll.
            </p>
            <p>
              Läs mer om 90-konton <a href="#">här</a>.
            </p>
          </div>
          <div class="col col-md-6 col-sm-8">
            <h3>Kontakta oss</h3>
            <ul class="list-unstyled contact-points">
              <li>
                <address>
                  <strong>Radiumhemmets forskningsfonder</strong>
                  Box 25 <br>
                  171 11 Solna
                </address>
              </li>
              <li>
                <strong>Telefon</strong>
                <ul class="list-inline list-unstyled contacts">
                  <li>
                    <a href="tel:0854542550" class="tel-link">08 - 545 425 50</a>
                  </li>
                  <li>
                    (Gåvor) 020 - 255 355
                  </li>
                  <li>
                    (Fax) 08 - 31 82 04
                  </li>
                </ul>
              </li>
              <li>
                <strong>E-post</strong>
                <p>
                  <a href="mailto:info@rahfo.se">info@rahfo.se</a>
                </p>
              </li>
              <li>
                <address>
                  <strong>Organisationsnummer</strong>
                  <ul class="list-inline list-unstyled contacts">
                    <li>
                      815200 - 2583 Cancerföreningen i Stockholm
                    </li>
                    <li>
                      802005 - 0947 Konung Gustaf V:s Jubileumsfond
                    </li>
                  </ul>
                </address>
              </li>
              <li>
                <address>
                  <strong>Plusgiro</strong>
                  <ul class="list-inline list-unstyled contacts">
                    <li>90 06 90 - 9 Cancerföreningen i Stockholm</li>
                    <li>90 08 80 - 6 Konug Gustaf V:s Jubileumsfond</li>
                  </ul>
                </address>
              </li>
            </ul>
          </div>
          <div class="col col-md-3 col-sm-4">
            <?php dynamic_sidebar( 'footer-1' ); ?>
            <!-- <h3>Följ oss</h3>
            <ul class="list-unstyled social-networks">
              <li>
                <a href="#">Facebook <span class="icon icon-facebook"></span></a>
              </li>
              <li>
                <a href="#">YouTube
                  <span class="icon icon-youtube"></span>
                </a>
              </li>
            </ul> -->
          </div>
        </div>
      </div>
      <!-- goto top of the page -->
      <div class="goto-top text-center">
        <div class="container">
          <a href="#wrapper" class="smooth-scroll anchor-active">Tillbaka till toppen <span class="icon icon-arrow-up"></span></a>
        </div>
      </div>
    </div>
  </footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
