<?php
// return [
//   "driver" => "smtp",
//   "host" => "mail.mymonsterlabs.com",
//   "port" => 25,
//   "from" => array(
//       "address" => "info@mymonsterlabs.com",
//       "name" => "Monster"
//   ),
//   "username" => "order@mymonsterlabs.com",
//   "password" => "KKMMPP44d",
//   "sendmail" => "/usr/sbin/sendmail -bs"
// ];

return [
  "driver" => "smtp",
  "host" => "smtp.mailtrap.io",
  "port" => 2525,
  "from" => array(
      "address" => "from@example.com",
      "name" => "Example"
  ),
  "username" => "bc12576113b2f3",
  "password" => "281a68452b5826",
  "sendmail" => "/usr/sbin/sendmail -bs"
];