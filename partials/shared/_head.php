<meta name="viewport" content="width=device-width,minimum-scale=1.0, maximum-scale=1.0" />

<link href="<?php echo SC::cssPath("sc"); ?>" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="<?php echo SC::jsPath("jquery-1.4.2.min"); ?>"></script>
<script type="text/javascript" src="<?php echo SC::jsPath("jquery.form"); ?>"></script>
<script type="text/javascript" src="<?php echo SC::jsPath("json2"); ?>"></script>
<script type="text/javascript" src="<?php echo SC::jsPath("sc"); ?>"></script>
<script type="text/javascript" src="<?php echo SC::jsPath("sc.board"); ?>"></script>

<script type="text/javascript">

  SC.data.current_user = <?php echo $current_user ? $current_user->jsonify() : "null"; ?>;

</script>
