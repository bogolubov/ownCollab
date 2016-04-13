<?php
/**
 * @var OCP\Template $this
 * @var array $_
 */

?>

<div id="h1">Загрузить</div>


<form name="upload" method="post" action="/index.php/apps/files/ajax/upload.php" enctype="multipart/form-data">
    <input id="fileupload" type="file" name="files[]">
    <input type="text" name="requesttoken" hidden value="<?php p($_['requesttoken']) ?>">
    <input type="text" name="dir" hidden value="/">
    <input type="text" name="file_directory" hidden value="">
    <input type="submit" value="Загрузить">
</form>

