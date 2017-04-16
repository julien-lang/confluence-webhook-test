<?php

$in = @file_get_contents('php://input');

$data = @json_decode($in, true);

file_put_contents('/tmp/webhook.log', json_encode($data, JSON_PRETTY_PRINT), FILE_APPEND);
