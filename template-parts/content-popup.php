<?php
$popup_title = get_theme_mod('popup_title');
$popup_subtitle = get_theme_mod('popup_subtitle');
$popup_link = get_theme_mod('popup_link');
$popup_information = get_theme_mod('popup_information');
$popup_toggle = get_theme_mod('popup_toggle');

// Das Pop-Up anzeigen, wenn der Umschalter auf 'An' steht
if ($popup_toggle === 'on') {
?>
<div id="popup"class="popup fixed top-16 sm:top-1/2 left-1/2 w-10/12 max-w-screen-sm 2xl:max-w-[900px] sm:-translate-y-1/2  -translate-x-1/2 z-40  text-white pb-8 sm:pb-5 bg-secondary shadow-none">

    <div class="flex justify-between items-top ">
      <h2 class="px-5 sm:px-10 pt-12 sm:pt-0 mb-2"><?php echo esc_html($popup_title) ?></h2>
      <div class="absolute top-2 right-2 text-right">
          <div class="flex flex-row-reverse sm:block gap-2 items-center">
            <button id="closeButton">
              <img class="button rotate-45 ml-auto cursor-pointer" src="<?php echo get_template_directory_uri()?>/resources/images/vielfaeltig_Icon_Plus.svg"/>
              <p class="text-[0.5rem] pt-2 font-light">Fenster schließen</p>
            </button>
          </div>
      </div>
    </div>
    <div class="px-5 sm:px-10">
      <p class="pb-2" ><?php echo esc_html($popup_subtitle) ?></p>
      <a href="<?php echo $popup_link?>"><img class="button" src="<?php echo get_template_directory_uri()?>/resources/images/vielfaeltig_Icon_Pfeil_rechts.svg" alt="<?php echo esc_html($popup_information) ?>"/> </a>
      <p class="text-[0.5rem] pt-2 font-light hyphens-auto"><?php echo esc_html($popup_information) ?></p>
    </div>

</div>

<?php
}
?>
