<?php if ($enviado): ?>
  <!-- Google Code for YoInvierto Conversion Page -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = "<?php echo $google_conversion_id; ?>";
var google_conversion_language = "en";
var google_conversion_format = "3";
var google_conversion_color = "ffffff";
var google_conversion_label = "<?php echo $google_conversion_label; ?>";
var google_remarketing_only = false;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/<?php echo $google_conversion_id; ?>/?label=<?php echo $google_conversion_label; ?>;&amp;guid=ON&amp;script=0"/>
</div>
</noscript>
<?php endif ?>