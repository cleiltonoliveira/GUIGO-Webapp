<?php
$session=new Classes\ClassSessions();
$session->destructSessions();
echo "<script>
    alert('Você efetuou logout');
    window.location.href='".DIRPAGE."';
</script>";