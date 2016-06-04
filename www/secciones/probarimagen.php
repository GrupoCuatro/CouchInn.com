<html>
<head>
  <!-- Start of Karthik upload plugin -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
  <link href="file_path/kartik-v-bootstrap-fileinput-51ddb7c/css/fileinput.min.css" media="all" rel="stylesheet" type="text/css" />
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="file_path/kartik-v-bootstrap-fileinput-51ddb7c/js/fileinput.js" type="text/javascript"></script>
  <script src="file_path/kartik-v-bootstrap-fileinput-51ddb7c/js/fileinput_locale_fr.js" type="text/javascript"></script>
  <script src="file_path/kartik-v-bootstrap-fileinput-51ddb7c/js/fileinput_locale_es.js" type="text/javascript"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js" type="text/javascript"></script>
</head>

<body>
  <div class="form-group col-md-6 col-xs-12">
  <form>
    <h2>Upload a picture:</h2>
      <!-- Source: http://plugins.krajee.com/file-input -->
      <div class="container kv-main">
        <div enctype="multipart/form-data">
          <div class="row">
            <div class="form-group col-md-6 col-xs-12">
              <input id="file-0a" class="file" type="file" multiple data-min-file-count="1">
            </div>
          </div>
        </div>
      </div>
  </form>
  </div>
</body>
<script>
$('#file-fr').fileinput({
  language: 'fr',
  uploadUrl: '#',
  allowedFileExtensions: ['jpg', 'png', 'gif'],
});
$('#file-es').fileinput({
  language: 'es',
  uploadUrl: '#',
  allowedFileExtensions: ['jpg', 'png', 'gif'],
});
$("#file-0").fileinput({
  'allowedFileExtensions': ['jpg', 'png', 'gif'],
});
$("#file-1").fileinput({
  uploadUrl: '#', // you must set a valid URL here else you will get an error
  allowedFileExtensions: ['jpg', 'png', 'gif'],
  overwriteInitial: false,
  maxFileSize: 1000,
  maxFilesNum: 10,
  //allowedFileTypes: ['image', 'video', 'flash'],
  slugCallback: function(filename) {
    return filename.replace('(', '_').replace(']', '_');
  }
});
/*
$(".file").on('fileselect', function(event, n, l) {
    alert('File Selected. Name: ' + l + ', Num: ' + n);
});
*/
$("#file-3").fileinput({
  showUpload: false,
  showCaption: false,
  browseClass: "btn btn-primary btn-lg",
  fileType: "any",
  previewFileIcon: "<i class='glyphicon glyphicon-king'></i>"
});
$("#file-4").fileinput({
  uploadExtraData: {
    kvId: '10'
  }
});
$(".btn-warning").on('click', function() {
  if ($('#file-4').attr('disabled')) {
    $('#file-4').fileinput('enable');
  } else {
    $('#file-4').fileinput('disable');
  }
});
$(".btn-info").on('click', function() {
  $('#file-4').fileinput('refresh', {
    previewClass: 'bg-info'
  });
});
/*
$('#file-4').on('fileselectnone', function() {
    alert('Huh! You selected no files.');
});
$('#file-4').on('filebrowse', function() {
    alert('File browse clicked for #file-4');
});
*/
$(document).ready(function() {
  $("#test-upload").fileinput({
    'showPreview': false,
    'allowedFileExtensions': ['jpg', 'png', 'gif'],
    'elErrorContainer': '#errorBlock'
  });
  /*
  $("#test-upload").on('fileloaded', function(event, file, previewId, index) {
      alert('i = ' + index + ', id = ' + previewId + ', file = ' + file.name);
  });
  */
});
</script>

</html>