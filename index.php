
<?php
echo '{"access_token":"tcaddxplvhjtvlxh6lmckivqqfdamxputnculgc4","expires_in":3600,"token_type":"Bearer","scope":"basic","refresh_token":"ba6cb6r2g2leh3a8nmxvnhimnukqdmupdyxuzqlu"}';

 if( (isset($_GET["access_token"]))){
 echo '{"user_id":"50794","reason":3,"current_app_version":123,"user_registered":"2020-03-23 17:20:38","trial_end_date":"2020-04-06","is_end_trial":true,"trial_duration_min":10}';
 }
 else if( (isset($_GET["oauth"]))){
echo '{"access_token":"tcaddxplvhjtvlxh6lmckivqqfdamxputnculgc4","expires_in":3600,"token_type":"Bearer","scope":"basic","refresh_token":"ba6cb6r2g2leh3a8nmxvnhimnukqdmupdyxuzqlu"}';
}
    ?>
