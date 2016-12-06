<?php

session_start();


	require_once("DBConnect.php");
	
	$userID  = $_SESSION['user'];
	$eventsID = $_GET['uid'];
//	$q = "insert into attendees(eventsID,userID) values('".$eventsID."','".$userID."')";
		

//	mysqli_query($conn, $q) or die(mysql_error());
	

    //header("Location: alumniViewPerEvents.php?uid=$eventsID");
	
	//header("Location: processGoogleCalendar.php?uid=$eventsID");
	
	$userID  = $_SESSION['user'];
	$eventsID = $_GET['uid'];
	$q = "insert into attendees(eventsID,userID,eventuuid) values('".$eventsID."','".$userID."',REPLACE(UUID(),'-',''))";
		

	mysqli_query($conn, $q) or die(mysql_error());
		

$res=mysqli_query($conn, "SELECT * FROM events WHERE eventsID=".$eventsID );
$eventRows=mysqli_fetch_array($res);

$res1=mysqli_query($conn, "SELECT * FROM attendees WHERE eventsID=".$eventsID." AND userID=".$userID."" );
$attendesRows=mysqli_fetch_array($res1);
?>

<html>
  <head>
  <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
<meta content="utf-8" http-equiv="encoding">
    <script type="text/javascript">
	
      // Your Client ID can be retrieved from your project in the Google
      // Developer Console, https://console.developers.google.com
      var CLIENT_ID = '529374141870-0fa8rtg4cvj7ve4odtoa6rg30kdqebsm.apps.googleusercontent.com';

      var SCOPES = ["https://www.googleapis.com/auth/calendar"];
	  

      /**
       * Check if current user has authorized this application.
       */
      function checkAuth() {
        gapi.auth.authorize(
          {
            'client_id': CLIENT_ID,
            'scope': SCOPES.join(' '),
            'immediate': true
          }, handleAuthResult);
      }

      /**
       * Handle response from authorization server.
       *
       * @param {Object} authResult Authorization result.
       */
      function handleAuthResult(authResult) {
        var authorizeDiv = document.getElementById('authorize-div');
        if (authResult && !authResult.error) {
          // Hide auth UI, then load client library.
          authorizeDiv.style.display = 'none';
          loadCalendarApi();
        } else {
          // Show auth UI, allowing the user to initiate authorization by
          // clicking authorize button.
          authorizeDiv.style.display = 'inline';
        }
      }

      /**
       * Initiate auth flow in response to user clicking authorize button.
       *
       * @param {Event} event Button click event.
       */
      function handleAuthClick(event) {
        gapi.auth.authorize(
          {client_id: CLIENT_ID, scope: SCOPES, immediate: false},
          handleAuthResult);
        return false;
      }

      /**
       * Load Google Calendar client library. List upcoming events
       * once client library is loaded.
       */
      function loadCalendarApi() {
        gapi.client.load('calendar', 'v3', listUpcomingEvents);
      }
		
      /**
       * Print the summary and start datetime/date of the next ten events in
       * the authorized user's calendar. If no events are found an
       * appropriate message is printed.
       */
      function listUpcomingEvents() {var event = {
  'summary': '<?php echo $eventRows['title']; ?>',
      'id': '<?php echo $attendesRows['eventuuid']; ?>',
  'location': '<?php echo $eventRows['location']; ?>',
  'description': '<?php echo $eventRows['further_info']; ?>',
  'start': {
    'dateTime': '<?php echo $eventRows['start_date']; ?>' + 'T' +'<?php echo $eventRows['start_time']; ?>' + ':00',
    'timeZone': 'Singapore'
  },
  'end': {
    'dateTime': '<?php echo $eventRows['end_date']; ?>'+ 'T' +'<?php echo $eventRows['end_time']; ?>' + ':00',
    'timeZone': 'Singapore'
  },
  'recurrence': [
    'RRULE:FREQ=DAILY;COUNT=2'
  ],
  'reminders': {
    'useDefault': false,
    'overrides': [
      {'method': 'email', 'minutes': 24 * 60},
      {'method': 'popup', 'minutes': 10}
    ]
  }
};

var request = gapi.client.calendar.events.insert({
  'calendarId': 'primary',
  'resource': event
});

request.execute(function(event) {
  appendPre('Event created: ' + event.htmlLink);
self.close();
});
      }

      /**
       * Append a pre element to the body containing the given message
       * as its text node.
       *
       * @param {string} message Text to be placed in pre element.
       */
      function appendPre(message) {
        var pre = document.getElementById('output');
        var textContent = document.createTextNode(message + '\n');
        pre.appendChild(textContent); 
      }

    </script>
    <script src="https://apis.google.com/js/client.js?onload=checkAuth">
    </script>
  </head>
  <body>
    <div id="authorize-div" style="display: none">
      <span>You are required to click on below button to access google calendar</span>
      <!--Button for the user to click to initiate auth sequence -->
      <button id="authorize-button" onclick="handleAuthClick(event)">
        Access to google calendar
      </button>
    </div>
    <pre id="output"></pre>
  </body>
</html>