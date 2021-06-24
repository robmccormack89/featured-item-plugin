<?php

function featured_content_item_section() {
  $context = Timber::context();
  
  $out = Timber::compile('featured-item.twig', $context);
  return $out;
}