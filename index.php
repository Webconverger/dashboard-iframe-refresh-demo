<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Dashboard example</title>
<style>
html, body { height: 100%; font-family: Helvetica, Arial, Sans-Serif; font-size: large;  }
#foo { width: 100%; height: 30%; }
</style>
</head>
<body>
<h1><?php echo date('r'); ?></h1>
<iframe id="foo" src="/time"></iframe>
<script>
window.setInterval("reloadIFrame();", 1000);
window.setInterval("location.reload();", 10000);
function reloadIFrame(){
	var el = document.getElementById('foo');
	el.src = el.src;
}
</script>

<p>Simply showing how to reload the entire page after 10 seconds. As well as refreshing an iframe every second.</p>



</body>
</html>
