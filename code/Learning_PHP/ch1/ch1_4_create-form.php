<?php
print <<<_HTML_
<form method="post" action="$_SERVER[PHP_SELF]">
Your Name: <input type:"text" name="user" /><br/>
<button type="sumbit">Say Hello</button>
</form>
_HTML_;
// here document(heredoc)語法