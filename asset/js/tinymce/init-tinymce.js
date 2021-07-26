tinymce.init({
  selector: "textarea.tinymce",
  statusbar: true,
  theme: "modern",
  skin: "lightgray",
  width: "100%",
  height: 300,
  plugins: ["advlist autolink link image lists charmap print preview hr anchor pagebreak","code image"],
  toolbar: "insertfile undo redo | styleselect | bold italic | bullist numlist outdent indent | link image | print preview media fullpage | image code"
});
