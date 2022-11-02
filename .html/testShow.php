<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p><input type="file"  accept=".mid" name="midi" id="file"  onchange="loadFile(event)" style="display: none;"></p>
    <p><label for="file" style="cursor: pointer;">Upload midi</label></p>
    <p><img id="output" width="200" /></p>
    

<script>
var loadFile = function(event) {
	var midi = document.getElementById('output');
	midi.src = URL.createObjectURL(event.target.files[0]);
};
</script>
</body>
</html>