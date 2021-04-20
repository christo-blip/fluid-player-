<?php  
  @$id = $_GET['id'];
    if($id==''){
  redirect("index.php");
}
  $lesson = New Lesson();
  $res = $lesson->single_lesson($id);

?> 
<style type="text/css">
  .row iframe {
    width: 100%;
    height: 70%;
  }
</style>
 <h1><?php echo $title;?></h1> 
 <div class="container" >
 <script src="https://cdn.fluidplayer.com/v3/current/fluidplayer.min.js"></script>
   <video id="video-id" width="50%" controls>
		  <source src='<?php echo web_root.'admin/modules/lesson/'.$res->FileLocation; ?>' title='1080p' type="video/mp4">
      <source src='<?php echo web_root.'admin/modules/lesson/'.$res->FileLocation; ?>' title='720p' type="video/mp4">
      <source src='<?php echo web_root.'admin/modules/lesson/'.$res->FileLocation; ?>' title='480p' type="video/mp4">
    
      <script>
    var myFP = fluidPlayer(
        'video-id',	{
	"layoutControls": {
		"controlBar": {
			"autoHideTimeout": 3,
			"animated": true,
			"autoHide": true
		},
	"htmlOnPauseBlock": {
			"html": null,
			"height": null,
			"width": null
		},
		"autoPlay": false,
		"mute": false,
		"allowtheater": true,
		"playPauseAnimation": true,
		"playbackRateEnabled": true,
		"allowDownload": false,
		"playButtonShowing": true,
		"fillToContainer": false,
		"posterImage": 'bakery1.jpg',
    "subtitlesEnabled": true 
  },
	"vastOptions": {
		"adList": [],
		"adCTAText": false,
		"adCTATextPosition": ""
	}
})
</script>

</video>
      
        <div class="col-lg-12">Description</div>
         <div class="col-lg-12">
           <label class="col-md-2" class="control-label">Chapter :</label>
           <label class="col-md-10" class="control-label"><?php echo $res->LessonChapter; ?></label>
         </div>
         <div class="col-lg-12">
           <label class="col-md-2" class="control-label">Title : </label>
           <label class="col-md-10" class="control-label"><?php echo $res->LessonTitle; ?></label>
         </div> 
 </div> 
		