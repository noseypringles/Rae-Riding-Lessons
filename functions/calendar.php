<?php
  // Calendar modified from Code And Create video. Uploaded May 30, 2020.
  // https://www.youtube.com/watch?v=o1yMqPyYeAo&list=PLhPKOwmzo9sG9x8THn1aLuDbJHah5dyyP&index=7
  function calendar()
  {
    echo "<body>
          <div class='container'>
            <div class='calendar'>
              <div class='month'>
                <i class='fas fa-angle-left prev'></i>
                <div class='date'>
                  <h1></h1>
                  <p></p>
                </div>
                <i class='fas fa-angle-right next'></i>
              </div>
              <div class='weekdays'>
                <div>Sun</div>
                <div>Mon</div>
                <div>Tue</div>
                <div>Wed</div>
                <div>Thu</div>
                <div>Fri</div>
                <div>Sat</div>
              </div>
              <div class='days'></div>
            </div>
          </div>
      
          <script type='text/javascript' src='http://raeridinglessons.infinityfreeapp.com/functions/calendar.js'></script>
        </body>
      </html>";
  }
?>