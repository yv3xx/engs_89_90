
let downloadButton = document.getElementById("downloadButton");
let recording = document.getElementById("download");
let logElement = document.getElementById("log");
let video = document.getElementById('video');

let recordingTimeMS = 5000;

function log(msg) {
  logElement.innerHTML += msg + "\n";
}

function wait(delayInMS) {
  return new Promise(resolve => setTimeout(resolve, delayInMS));
}

function record(stream, lengthInMS){
  let recorder = new MediaRecorder(stream);
  let data = [];

  recorder.ondataavailable = event => data.push(event.data);
  recorder.start();
  log(recorder.state + " for " + (lengthInMS/1000) + " seconds...");

  let stopped = new Promise((resolve, reject) => {
    recorder.onstop = resolve;
    recorder.onerror = event => reject(event.name);
  });

  let recorded = wait(lengthInMS).then(
    () => recorder.state == "recording" && recorder.stop()
  );

  return Promise.all([
    stopped,
    recorded
  ])
  .then(() => data);
}


var start = function(){
  navigator.mediaDevices.getUserMedia({
    video: true,
    audio: true
  }).then(stream => {
    video.srcObject = stream;
    downloadButton.href = stream;
    video.captureStream = video.captureStream || video.mozCaptureStream;
    return new Promise(resolve => video.onplaying = resolve);
  }).then(() => record(video.captureStream(), recordingTimeMS))
  .then (recordedChunks => {
    let recordedBlob = new Blob(recordedChunks, { type: "video/mp4" });
    recording.src = URL.createObjectURL(recordedBlob);
    downloadButton.href = recording.src;
    downloadButton.download = "RecordedVideo.mp4";

    log("Successfully recorded " + recordedBlob.size + " bytes of " +
        recordedBlob.type + " media.");
  })
  .catch(log);
}
var stop = function() {
  var stream = video.srcObject;
  var tracks = stream.getTracks();

  for (var i = 0; i < tracks.length; i++) {
    var track = tracks[i];
    track.stop();
  }

  video.srcObject = null;
}

var preview = function(){
	 vendorUrl = window.URL || window.webkitURL;
	if (navigator.mediaDevices.getUserMedia) {
		navigator.mediaDevices.getUserMedia({ audio:true, video:true })
		.then(function (stream) {
		  video.srcObject = stream;
		}).catch(function (error) {
		  console.log("Something went wrong!");
		});
	}
}
$(function() {
    preview();
});