
window.addEventListener("load", () => {
    clock();
    function clock() {
      const today = new Date();
  
      // get time components
      const hours = today.getHours();
      const minutes = today.getMinutes();
      const seconds = today.getSeconds();
  
      //add '0' to hour, minute & second when they are less 10
      const hour = hours < 10 ? "0" + hours : hours;
      const minute = minutes < 10 ? "0" + minutes : minutes;
      const second = seconds < 10 ? "0" + seconds : seconds;
  
      //make clock a 12-hour time clock
      const hourTime = hour > 12 ? hour - 12 : hour;
  
      // if (hour === 0) {
      //   hour = 12;
      // }
      //assigning 'am' or 'pm' to indicate time of the day
      const ampm = hour < 12 ? "AM" : "PM";
  
      // get date components
      const month = today.getMonth();
      const year = today.getFullYear();
      const day = today.getDate();
  
      //declaring a list of all months in  a year
      const monthList = [
        "January",
        "February",
        "March",
        "April",
        "May",
        "June",
        "July",
        "August",
        "September",
        "October",
        "November",
        "December"
      ];
  
      //get current date and time
      const date = monthList[month] + " " + day + ", " + year;
      const time = hourTime + ":" + minute + ":" + second + ampm;
  
      //combine current date and time
      const dateTime = date + " - " + time;
  
      //print current date and time to the DOM
      document.getElementById("clockDisplay").innerHTML = dateTime;
      setTimeout(clock, 1000);
    }
  });
  
 
 let timerInterval;
  let timerRunning = false;
  let startTime;
  let elapsedTime = 0;
  
  function startTimer() {
    if (!timerRunning) {
      timerRunning = true;
      startTime = Date.now() - elapsedTime;
      timerInterval = setInterval(updateTimer, 10); // Update every 10 milliseconds
    }
  }
  
  function stopTimer() {
    if (timerRunning) {
      timerRunning = false;
      clearInterval(timerInterval);
    }
  }
  
  function resetTimer() {
    stopTimer();
    elapsedTime = 0;
    updateTimerDisplay();
  }
  
  function updateTimer() {
    const now = Date.now();
    elapsedTime = now - startTime;
    updateTimerDisplay();
  }
  
  function updateTimerDisplay() {
    const timerDisplay = document.getElementById('timerDisplay');
    const milliseconds = (elapsedTime % 1000).toString().padStart(3, '0');
    const seconds = Math.floor((elapsedTime / 1000) % 60).toString().padStart(2, '0');
    const minutes = Math.floor((elapsedTime / (1000 * 60)) % 60).toString().padStart(2, '0');
    const hours = Math.floor((elapsedTime / (1000 * 60 * 60)) % 24).toString().padStart(2, '0');
  
    timerDisplay.textContent = `${hours}:${minutes}:${seconds}.${milliseconds}`;
  }
  function showWorldClock() {
    document.getElementById('worldClockContent').style.display = 'block';
    document.getElementById('alarmContent').style.display = 'none';
    document.getElementById('timerContent').style.display = 'none';
    
    // Update icon colors
    document.getElementById('worldclock-i').classList.add('icon-active');
    document.getElementById('alarm-i').classList.remove('icon-active');
    document.getElementById('timer-i').classList.remove('icon-active');
}

function showAlarm() {
    document.getElementById('worldClockContent').style.display = 'none';
    document.getElementById('alarmContent').style.display = 'block';
    document.getElementById('timerContent').style.display = 'none';
    
    // Update icon colors
    document.getElementById('worldclock-i').classList.remove('icon-active');
    document.getElementById('alarm-i').classList.add('icon-active');
    document.getElementById('timer-i').classList.remove('icon-active');
}

function showTimer() {
    document.getElementById('worldClockContent').style.display = 'none';
    document.getElementById('alarmContent').style.display = 'none';
    document.getElementById('timerContent').style.display = 'block';
    
    // Update icon colors
    document.getElementById('worldclock-i').classList.remove('icon-active');
    document.getElementById('alarm-i').classList.remove('icon-active');
    document.getElementById('timer-i').classList.add('icon-active');
}


  function setClockHands() {
    const clockDisplay = document.getElementById('clockDisplay');
    const time = clockDisplay.textContent.split(':');
    const hours = parseInt(time[0]);
    const minutes = parseInt(time[1]);
    const seconds = parseInt(time[2]);
  
    const secondsDegrees = ((seconds / 60) * 360) ;
    const minutesDegrees = ((minutes / 60) * 360) ;
    const hoursDegrees = ((hours / 12) * 360) + 90 + (minutes / 60) * 30; // Adding minutes' influence on the hour hand
  
    const secondHand = document.querySelector('.second-hand');
    const minuteHand = document.querySelector('.minute-hand');
    const hourHand = document.querySelector('.hour-hand');
  
    secondHand.style.transform = `rotate(${secondsDegrees}deg)`;
    minuteHand.style.transform = `rotate(${minutesDegrees}deg)`;
    hourHand.style.transform = `rotate(${hoursDegrees}deg)`;
  }
  
  // Run the function initially and update every second
  setClockHands();
  setInterval(setClockHands, 1000);
  


// Function to fetch and display time for a specific country
async function getTimeForCountry(countryCode) {
    try {
      const response = await fetch(`https://worldtimeapi.org/api/timezone/${countryCode}`);
      const data = await response.json();
  
      const countryDiv = document.querySelector('.country-time');
      const countryTime = document.createElement('div');
      countryTime.textContent = `${data.timezone}: ${data.datetime}`;
      countryDiv.appendChild(countryTime);
    } catch (error) {
      console.error('Error fetching country time:', error);
    }
  }
  
  // Function to use a specific timezone for the clockDisplay
  function useTimezone(timezone) {
    // Fetch time based on selected timezone and display in clockDisplay
    fetch(`https://worldtimeapi.org/api/timezone/${timezone}`)
      .then((response) => response.json())
      .then((data) => {
        const clockDisplay = document.getElementById('clockDisplay');
        clockDisplay.textContent = data.datetime;
      })
      .catch((error) => console.error('Error fetching time:', error));
  }
  
  // Fetch and display time for Manila
  getTimeForCountry('Asia/Manila');
  // Fetch and display time for Singapore
  getTimeForCountry('Asia/Singapore');
  // Add more getTimeForCountry calls for other countries here
  
  // Example usage for a 'Use' button to set the clockDisplay to a specific timezone
  function useTimezone(timezone) {
    fetch(`https://worldtimeapi.org/api/timezone/${timezone}`)
      .then((response) => response.json())
      .then((data) => {
        const clockDisplay = document.getElementById('clockDisplay');
        clockDisplay.textContent = data.datetime;
      })
      .catch((error) => console.error('Error fetching time:', error));
  }
  