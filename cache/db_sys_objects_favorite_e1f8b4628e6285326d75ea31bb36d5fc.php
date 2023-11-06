<?php $mixedData=array (
  'bx_persons' => 
  array (
    'id' => 1,
    'name' => 'bx_persons',
    'table_track' => 'bx_persons_favorites_track',
    'table_lists' => '',
    'pruning' => 31536000,
    'is_on' => 1,
    'is_undo' => 1,
    'is_public' => 0,
    'base_url' => 'page.php?i=view-persons-profile&id={object_id}',
    'trigger_table' => 'bx_persons_data',
    'trigger_field_id' => 'id',
    'trigger_field_author' => 'author',
    'trigger_field_count' => 'favorites',
    'class_name' => 'BxPersonsFavorite',
    'class_file' => 'modules/boonex/persons/classes/BxPersonsFavorite.php',
  ),
); ?>