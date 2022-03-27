function update()
{
	var idoc = document.getElementById('iframe').contentWindow.document;

	idoc.open();
	idoc.write(editor.getValue());
	idoc.close();
}

 var checkbox = document.querySelector("#checkbox");

 checkbox.addEventListener('change', function() {
   if (this.checked) {
      editor.setTheme("ace/theme/cobalt");
      
   } else {
      editor.setTheme("ace/theme/iplastic");
   }
 });

function setupEditor()
{
  
  window.editor = ace.edit("editor");
  editor.setTheme("ace/theme/iplastic");
  editor.getSession().setMode("ace/mode/html");
  editor.setValue(`<!DOCTYPE html>
<html>
<head>
</head>

<body>
</body>

</html>`,1); //1 = moves cursor to end

  editor.getSession().on('change', function() {
    update();
  });

  editor.focus();
  
  
  editor.setOptions({
    fontSize: "16pt",
    showLineNumbers: true,
    showGutter: false,
    vScrollBarAlwaysVisible:true,
    enableBasicAutocompletion: true, 
    enableLiveAutocompletion: true,
  });

  editor.setShowPrintMargin(false);
  editor.setBehavioursEnabled(false);
}

setupEditor();
update();