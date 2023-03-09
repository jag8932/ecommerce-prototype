<?php
require '../aws/aws-autoloader.php';

use Aws\S3\S3Client;
use Aws\Exception\AwsException;

$bucket = '';
$keyname = '';
$filename = $_FILES['file']['name'];
$filetempname = $_FILES['file']['tmp_name'];

$s3 = new Aws\S3\S3Client([
    'version' => 'latest',
    'region' => 'us-east-2'
]);
?>