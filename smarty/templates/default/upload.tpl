    <div class="wrapper">
        <div class="table">
                <a href="upload.html#" class="show-sidebar show"><i class="fa fa-arrow-right"></i></a>
    
    <script src="https://www.google.com/recaptcha/api.js?" async defer></script>

    <form action="upload.html" method="POST" class="editor-form">
        <input type="hidden" name="_token" value="AQ594fnXzpcKwaCs6DfUxoCaqkfCjKTfWy0SD76b">

<div class="sidebar">
        <a href="home/">
<pre>
  ____            _     _       
 |  _ \  _____  _| |__ (_)_ __  
 | | | |/ _ \ \/ / '_ \| | '_ \ 
 | |_| | (_) >  <| |_) | | | | |
 |____/ \___/_/\_\_.__/|_|_| |_|
                                
</pre>
</a>
        
        <div class="options">
          <p>Title: {$dox.title}</p>
          <p>Created: {$dox.date}</p>
          <p>Views: {$dox.views}</p>
        </div>
        <div class="options">
            <ul>
                <li><a href="add/" class="button new">New (N)</a></li>
                <li><a target="_blank" href="upload/{$dox.id}/raw" class="button raw">Raw (R)</a></li>
            </ul>
        </div>
        <p>Please note that all posted information is publicly available and most follow our <a href="tos/" style="text-decoration: underline;">TOS.</a></p>
    </div>

        <div class="editor-container">
    <p name="pasteContent" class="editor mousetrap"><pre class="predox">{$dox.dox|escape:"html"}</pre></p>
</div>
    </form>
        </div>
    </div>

    <script src="legacy/jquery.min.js"></script>
    <script src="legacy/jquery-ui-1.10.3.custom.min.js"></script>
    <script src="legacy/mousetrap.min.js"></script>
    <script src="legacy/google-code-prettify/prettify.js"></script>
    <script src="legacy/tabby.js"></script>
    <script src="legacy/zclip.min.js"></script>
    <script src="legacy/toastr/toastr.min.js"></script>
    <script src="legacy/bin.js"></script>
</body>
</html>
