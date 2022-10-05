<?php

$uid = 1;

$author_uids = [1];

$following = \Drupal::entityTypeManager()->getStorage('flagging')->loadByProperties([
  'flag_id' => 'following',
  'uid' => $uid,
]);

foreach ($following as $follow) {
  $author_uids[] = $follow->get('entity_id')->getString();
}

print_r($author_uids);