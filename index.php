<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Dashboard example</title>
<style>
html { font-family: Helvetica, Arial, Sans-Serif; font-size: large; height: 100%; }
body { display: flex; width: 100%; height: 100%; flex-direction: column;}
body > * { flex: 1; flex-grow: 1; }
.box { display: flex; }
.box iframe { flex-grow: 1; overflow: hidden; }
</style>
</head>
<body>

<h1><?php echo date('r'); ?></h1>
<iframe id="foo" src="/time"></iframe>
<div class=box>
<iframe src="http://www.bbc.com/news"></iframe>
<iframe src="https://webconverger.com/"></iframe>
</div>
<p>Simply showing how to reload the entire page after 10 seconds. As well as refreshing an iframe every second.</p>

<script>
window.setInterval("reloadIFrame();", 1000);
window.setInterval("location.reload();", 10000);
function reloadIFrame(){
	var el = document.getElementById('foo');
	el.src = el.src;
}
</script>

</body>
</html>
