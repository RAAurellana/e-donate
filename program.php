<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Start of Async Drift Code -->
<script>
"use strict";

!function() {
  var t = window.driftt = window.drift = window.driftt || [];
  if (!t.init) {
    if (t.invoked) return void (window.console && console.error && console.error("Drift snippet included twice."));
    t.invoked = !0, t.methods = [ "identify", "config", "track", "reset", "debug", "show", "ping", "page", "hide", "off", "on" ], 
    t.factory = function(e) {
      return function() {
        var n = Array.prototype.slice.call(arguments);
        return n.unshift(e), t.push(n), t;
      };
    }, t.methods.forEach(function(e) {
      t[e] = t.factory(e);
    }), t.load = function(t) {
      var e = 3e5, n = Math.ceil(new Date() / e) * e, o = document.createElement("script");
      o.type = "text/javascript", o.async = !0, o.crossorigin = "anonymous", o.src = "https://js.driftt.com/include/" + n + "/" + t + ".js";
      var i = document.getElementsByTagName("script")[0];
      i.parentNode.insertBefore(o, i);
    };
  }
}();
drift.SNIPPET_VERSION = '0.3.1';
drift.load('fapgridt935p');
</script>
<!-- End of Async Drift Code -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <title>E-Donate Mo Na</title>
  <style>

/* Reset some default styles */
body, h1, p {
    margin: 0;
    padding: 0;
}

body {
    font-family: Arial, sans-serif;
}

header {
    background-color: #1877f2;
    color: #fff;
    text-align: center;
    padding: 1rem;
}

.timeline {
    padding: 2rem;
}

.timeline-event {
    border-left: 3px solid #1877f2;
    padding-left: 1rem;
    margin-bottom: 1.5rem;
}

.timeline-event h2 {
    margin-top: 0;
}

.timeline-event p {
    margin: 0.5rem 0;
}


</style>
</head>
<body>
   
    <section class="timeline">
        <div class="timeline-event">
            <h2>Event Title 1</h2>
            <p>Event description goes here.</p>
        </div>
        <div class="timeline-event">
            <h2>Event Title 2</h2>
            <p>Another event description.</p>
        </div>
        <!-- Add more timeline events as needed -->
    </section>
    <footer>
        <p>&copy; 2023 Your Organization</p>
    </footer>
    <script src="script.js"></script>
</body>
</html>


    <section class="timeline">
        <!-- Timeline events will be added here -->
    </section>
    <footer>
        <p>&copy; 2023 Your Organization</p>
    </footer>

    <script>
        // Get all timeline events
const timelineEvents = document.querySelectorAll('.timeline-event');

// Add click event to each event
timelineEvents.forEach(event => {
    event.addEventListener('click', () => {
        // Toggle the "active" class to show/hide event details
        event.classList.toggle('active');
    });
});

    </script>

</body>
</html>
