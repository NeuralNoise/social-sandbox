<td>
  <ul class="sf_admin_td_actions">
    <?php echo $helper->linkToEdit($audio, array(  'label' => $configuration['_edit']['label'],  'params' =>   array(  ),  'class_suffix' => 'edit',)) ?>
    <?php echo $helper->linkToFavlikes($audio, array(  'params' =>   array(  ),  'class_suffix' => 'comments',  'label' => $configuration['comments']['label'])) ?>
    <?php echo $helper->linkToIsDelete($audio, array(  'params' =>   array(  ),  'class_suffix' => 'delete',  'label' => $configuration['_delete']['label'],)) ?>
  </ul>
</td>
