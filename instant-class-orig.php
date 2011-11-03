<?php
  $ids = array('k0gsduLrfSU', 'DIx3aMRDUL4', 'HMnrl0tmd3k');
  $params = 'autoplay=1&loop=1';
?>

<?php foreach ($ids as $id): ?>

<object width="425" height="355">
  <param name="movie"
         value="http://www.youtube.com/v/<?php echo $id ?>?version=3&<?php echo $params ?>"></param>
  <param name="allowScriptAccess" value="always"></param>
  <embed src="http://www.youtube.com/v/k0gsduLrfSU?version=3&<?php echo $params ?>"
         type="application/x-shockwave-flash"
         allowscriptaccess="always"
         width="425" height="355"></embed>
</object>
<br/>
<?php endforeach ?>

<?php
/*

<iframe title="YouTube video player" width="480" height="390" src="http://www.youtube.com/embed/k0gsduLrfSU" frameborder="0" allowfullscreen></iframe>

<iframe title="YouTube video player" width="480" height="390" src="http://www.youtube.com/embed/DIx3aMRDUL4" frameborder="0" allowfullscreen></iframe>

<iframe title="YouTube video player" width="480" height="390" src="http://www.youtube.com/embed/HMnrl0tmd3k" frameborder="0" allowfullscreen></iframe>


 */
