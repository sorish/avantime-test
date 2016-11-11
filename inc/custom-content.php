<?php
/*All custom parts for content blocks*/

//-----------------------HEADER----------------------------------------//
if (!function_exists('avantime_content_logo')){
	function avantime_content_logo(){
		?>
		 <div class="logo">
          <a href="<?php echo get_home_url();?>"><img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>"  alt="RADIUMHEMMETS FORSKNINGS FONDER"></a>
        </div>
        <?php
	}
}

if (!function_exists('avantime_content_header_menu')){
	function avantime_content_header_menu(){
	// TODO make menuWalker
		?>
		<div class="main-nav">
          <nav class="main-menu">
            <div class="visible-xs-block btn-hold">
              <a href="#" class="btn btn-info btn-info1">Ställ en fråga</a>
            </div>
            <ul class="nav-link list-unstyled">
              <li class="visible-xs-block">
                <a href="#">Start</a>
              </li>
              <li class="has-drop-down">
                <a href="#">Om oss</a>
                <!-- dropdown of menu first label -->
                <div class="drop-hold label1">
                  <ul class="drop-label1 list-unstyled">
                    <li>
                      <a href="#">
                        Mer än 100 år av 
                        framstående cancerforskning
                      </a>
                    </li>
                    <li>
                      <a href="#">Radiumhemmets historia</a>
                    </li>
                    <li class="has-drop-down">
                      <a href="#">
                        Cancerföreningen i 
                        Stockholm
                      </a>
                      <!-- dropdown of menu second label -->
                      <div class="drop-hold label2">
                        <ul class="drop-label2 list-unstyled">
                          <li>
                            <a href="#">Styrelsen</a>
                          </li>
                          <li>
                            <a href="#">Vetenskaplig nämnd</a>
                          </li>
                          <li>
                            <a href="#">Valberedning</a>
                          </li>
                          <li>
                            <a href="#">Föreningens stadgar</a>
                          </li>
                          <li>
                            <a href="#">Årsmötesprotokoll 2015</a>
                          </li>
                          <li class="active">
                            <a href="#">Placeringsreglemente</a>
                          </li>
                        </ul>
                      </div>
                    </li>
                    <li class="has-drop-down">
                      <a href="#">
                        Konung Gustaf  V:s 
                        Jubileumsfond
                      </a>
                      <!-- dropdown of menu second label -->
                      <div class="drop-hold label2">
                        <ul class="drop-label2 list-unstyled">
                          <li>
                            <a href="#">Styrelsen</a>
                          </li>
                          <li>
                            <a href="#">Vetenskaplig nämnd</a>
                          </li>
                          <li>
                            <a href="#">Valberedning</a>
                          </li>
                          <li>
                            <a href="#">Föreningens stadgar</a>
                          </li>
                          <li>
                            <a href="#">Årsmötesprotokoll 2015</a>
                          </li>
                          <li class="active">
                            <a href="#">Placeringsreglemente</a>
                          </li>
                        </ul>
                      </div>
                    </li>
                    <li>
                      <a href="#">Kansli</a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="has-drop-down">
                <a href="#">Om cancer</a>
                <!-- dropdown of menu first label -->
                <div class="drop-hold label1">
                  <ul class="drop-label1 list-unstyled">
                    <li>
                      <a href="#">
                        Mer än 100 år av 
                        framstående cancerforskning
                      </a>
                    </li>
                    <li>
                      <a href="#">Radiumhemmets historia</a>
                    </li>
                    <li class="has-drop-down">
                      <a href="#">
                        Cancerföreningen i 
                        Stockholm
                      </a>
                      <!-- dropdown of menu second label -->
                      <div class="drop-hold label2">
                        <ul class="drop-label2 list-unstyled">
                          <li>
                            <a href="#">Styrelsen</a>
                          </li>
                          <li>
                            <a href="#">Vetenskaplig nämnd</a>
                          </li>
                          <li>
                            <a href="#">Valberedning</a>
                          </li>
                          <li>
                            <a href="#">Föreningens stadgar</a>
                          </li>
                          <li>
                            <a href="#">Årsmötesprotokoll 2015</a>
                          </li>
                          <li class="active">
                            <a href="#">Placeringsreglemente</a>
                          </li>
                        </ul>
                      </div>
                    </li>
                    <li class="has-drop-down">
                      <a href="#">
                        Konung Gustaf  V:s 
                        Jubileumsfond
                      </a>
                      <!-- dropdown of menu second label -->
                      <div class="drop-hold label2">
                        <ul class="drop-label2 list-unstyled">
                          <li>
                            <a href="#">Styrelsen</a>
                          </li>
                          <li>
                            <a href="#">Vetenskaplig nämnd</a>
                          </li>
                          <li>
                            <a href="#">Valberedning</a>
                          </li>
                          <li>
                            <a href="#">Föreningens stadgar</a>
                          </li>
                          <li>
                            <a href="#">Årsmötesprotokoll 2015</a>
                          </li>
                          <li class="active">
                            <a href="#">Placeringsreglemente</a>
                          </li>
                        </ul>
                      </div>
                    </li>
                    <li>
                      <a href="#">Kansli</a>
                    </li>
                  </ul>
                </div>
              </li>
              <li>
                <a href="#">Vår forskning</a>
              </li>
              <li>
                <a href="#">Sök</a>
              </li>
            </ul>
          </nav>
        </div>
        <?php
	}
}

if (!function_exists('avantime_content_header_search')){
	function avantime_content_header_search(){
	// TODO make Search button in header	
		?>
		 <div class="search-btn">
          <a href="#" class="icon-search"></a>
        </div>
        <?php
	}
}

if (!function_exists('avantime_content_header_hold')){
	function avantime_content_header_hold(){
	// TODO make Hold button in header	
		?>
		 <div class="btn-hold">
          <a href="#" class="btn btn-primary">
            <span class="txt">
              <span class="icon icon-heart">
              </span>
              Ge en gåva
            </span>
          </a>
        </div>
        <?php
	}
}
