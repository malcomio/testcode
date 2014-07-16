<style>
  pre { border: 1px solid #000;
    padding: 10px;
    margin: 10px;
  }
</style>
<?php

$code = '
$options = array(
  1,
  2,
  3
);

$output = implode(", ", $options) . ";";
print $output;
';

?>
<h2>Code</h2>
<pre>
  <?php print $code; ?>
</pre>

<h2>Output</h2>
<pre>
  <?php eval($code); ?>
</pre>

