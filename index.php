<? php  session_start (); ?>
<? php  require_once  "form.php"  ?>
<! doctype html >
< html  lang = " ru " >
< голова >
    < meta  charset = " UTF-8 " >
    < title > Home Work 3 </ title >
    < link  rel = " stylesheet " href = " main.css " >
</ голова >
< тело >
    < form  action = " ./ " method = " post " >
        < label > Name </ label >
        < input  type = " text " name = " firstname " placeholder = " Enter your name " >
        < label > Surname </ label >
        < input  type = " text " name = " lastname " placeholder = " Enter your Surname " >
        < label > Login </ label >
        < input  type = " text " name = " login " placeholder = " Enter your Login " >
        < label > Password </ label >
        < input  type = " password " name = " password " placeholder = " Enter your Password " >
        < button > Send </ button >
        <? php
        if ( $ _SESSION [ 'message' ]) {
            echo  '<p class = "msg">' . $ _SESSION [ 'message' ]. '</p>' ;
        }
        unset ( $ _SESSION [ 'message' ]);
        ?>
    </ форма >
</ body >
</ html >
