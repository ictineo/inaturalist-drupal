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
?>

<div class="inat_observation row" id="obs_<?php print($observation['id']); ?>">
  <div class="photo">
    <?php if (array_key_exists('photos_count',$observation) && $observation['photos_count'] == 0): ?>
      <span class="no_photo"><?php print(t('No photo')); ?></span>
    <?php elseif(isset($observation['photos'][0])): ?>
      <?php //TODO considere multiple photos ?>
      <img src="<?php print($observation['photos'][0]['small_url']); ?>" alt="<?php print($observation['description']); ?>" />
    <?php endif; ?>
  </div> <!-- /photo -->
  <h2><a href="<?php print($base_url . '/inat/observation/' . $observation['id']); ?>"><?php print($observation['species_guess']); ?></a></h2>
  <div class="description"><?php print($observation['description']); ?></div>
  
 
  <?php if(isset($observation['user']['login'])): ?>
     <div class="observer"><span class="label"><?php print(t('Observer: ') ."</span>". $observation['user']['login']); ?></div> 
  <?php endif; ?>

    <div class="date"><span class="label"><?php if(isset($observation['observed_on'])){ 
        $d = DateTime::createFromFormat('Y-m-d', $observation['observed_on'])->format('l j F Y');
        print(t('Date observed: ')."</span>".$d);
        } ?>
    </div>


  <?php if(isset($observation['place_guess']) && $observation['place_guess'] != ''): ?>
    <div class="place"><span class="label"><?php print(t('Place: ')."</span>".$observation['place_guess']); ?></div>
  <?php endif; ?>
</div>
