<?include("../inc/config.php");?>
<!DOCTYPE html>
<html><head>
 <?include("../inc/head.php");?>
</head><body>
 <?include("../inc/header.php");?>
 <div class="content">
  <h2>Groups</h2>
  <p>Hang around with your friends. Make groups and group chat.</p>
  <?
  $inGroups=$OP->getGroups();
  if(count($inGroups)==0){
   ser("<center>No Groups</center>", "You haven't joined any groups or created any groups. <a href='http://open.subinsb.com/groups/new'>Create Group</a>");
  }
  ?>
 </div>
</body></html>