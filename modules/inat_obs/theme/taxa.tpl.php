<?php
/**
 * iNaturalist theme for observations
 * Copyright 2014 Projecte Ictineo SCCL (www.projecteictineo.com)
 * aGPLv3
 *
 * All data is recived in $content variable
 * the structure is like the retoruned by
 * inaturalist api
 */
//dsm($observation);
global $base_url;
dsm($taxa);
?>
<div class="inat_project row" id="prj_<?php print($taxa['id']); ?>">
  <div class="photo">
      <img src="<?php print($taxa['photo_url']); ?>"/>
  </div> <!-- /photo -->
  <h2><a href="<?php print($base_url . '/inat/taxa/' . $taxa['id']); ?>"><?php print($taxa['name']); ?></a></h2>
  <div class="description"><?php print($taxa['wikipedia_summary']); ?></div>
  <a href="<?php print($base_url . '/inat/taxa/' . $taxa['parent_id']); ?>"><?php print(t('Parent')); ?></a>

</div>
