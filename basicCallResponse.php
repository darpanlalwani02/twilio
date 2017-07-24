<?php
    header("content-type: text/xml");
    echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
?>
<Response>
<!-- <Play>http://demo.twilio.com/hellomonkey/monkey.mp3</Play> -->
<Say voice="alice">
Good Morning! Welcome to TECHNOVANZA 2017 Day 2 Tech sessions.
</Say>
<Pause length="1"/>
<Say voice="alice">
Let me know if we can help you in any way during your development. My name is John Chris. See you!!
</Say>
</Response>