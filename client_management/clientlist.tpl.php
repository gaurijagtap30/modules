<?php
libraries_load('aws-sdk-for-php-master');
require_once('sites/all/libraries/aws-sdk-for-php-master/sdk.class.php');
require_once('sites/all/libraries/aws-sdk-for-php-master/services/ec2.class.php');


if (!class_exists('CFRuntime')) die('No direct access allowed.');
  CFCredentials::set(array(
      '@default' => array(
          'key' => 'AKIAIO4UPFGMFG3P47PA',
          'secret' => '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',
          'default_cache_config' => 'C:\Temp',
          'certificate_authority' => true
      )
  ));

  $ec2 = new AmazonEC2();
 $ec2->set_region(AmazonEC2::REGION_US_E1);
 

  $response = $ec2->create_security_group('my-php-security-group', 'This is a PHP security group.');

  $response = $ec2 -> authorize_security_group_ingress(
    array('GroupName' => 'my-php-security-group', 
         'IpPermissions' => array( 
            array(
                    'IpProtocol' => 'tcp', 
                    'FromPort' => '80', 
                    'ToPort' => '80', 
                    'IpRanges' => array( 
                       array('CidrIp' => '111.111.111.111/32'),
                    )
                 )
             )
        )   
   );

  $response = $ec2->create_key_pair('my-php-key-pair');
  (string) $private_key = $response->body->keyMaterial;

  $response = $ec2 -> run_instances(
	    'ami-b32f08da', 1, 1, 
	     array(
              'InstanceType' => 't1.micro',
		      'KeyName' => 'my-php-key-pair', 
		      'SecurityGroup' => 'quick-start-1'
             ));
         
       $instanceid = $response->body->instancesSet->item->instanceId;
       echo "instance id ".$instanceid;
      
       sleep(4);

        $instances = $ec2->describeInstances(array(
         'InstanceId' => $instanceid,
        ));
      
      while(!isset($instances->body->reservationSet->item->instancesSet->item->dnsName)){
          $instances = $ec2->describeInstances(array(
          'InstanceId' => $instanceid,
          ));
      }
 
 echo "<pre>";
   print_r($instances->body->reservationSet->item->instancesSet->item->dnsName);  
  

?>
