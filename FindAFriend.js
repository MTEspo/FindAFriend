function getCurrentDate() {
  let objd = new Date()
  let weekday = String(objd.getDay())
  switch(weekday) {
    case "0": {
      weekday = "Sunday"
      break;
    }
    case "1": {
      weekday = "Monday"
      break;
    }
    case "2": {
      weekday = "Tuesday"
      break;
    }
    case "3": {
      weekday = "Wednesday"
      break;
    }
    case "4": {
      weekday = "Thursday"
      break;
    }
    case "5": {
      weekday = "Friday"
      break;
    }
    case "6": {
      weekday = "Saturday"
      break;
    }
  }
  let month = String(objd.getMonth())
  switch(month) {
    case "0": {
      month = "Jan"
      break;
    }
    case "1": {
      month = "Feb"
      break;
    }
    case "2": {
      month = "Mar"
      break;
    }
    case "3": {
      month = "Apr"
      break;
    }
    case "4": {
      month = "May"
      break;
    }
    case "5": {
      month = "Jun"
      break;
    }
    case "6": {
      month = "Jul"
      break;
    }
    case "7": {
      month = "Aug"
      break;
    }
    case "8": {
      month = "Sep"
      break;
    }
    case "9": {
      month = "Oct"
      break;
    }
    case "10": {
      month = "Nov"
      break;
    }
    case "11": {
      month = "Dec"
      break;
    }
  }
  let date = String(objd.getDate())
  let year = String(objd.getFullYear())

  let hours = objd.getHours();
  let minutes = objd.getMinutes();
  let seconds = objd.getSeconds();
  
  minutes = (minutes < 10) ? "0" + minutes : minutes;
  seconds = (seconds < 10) ? "0" + seconds : seconds;
  let fullDate = weekday + ", " + month + " " + date + ", " + year + "    " + hours + ":" + minutes + ":" + seconds
  let dHTML = document.getElementById("Date")
  dHTML.textContent = fullDate
  return
}

function submitFind() {
  let petType = document.querySelector('input[name="petType"]:checked')
  let petBreed = document.querySelector('input[name="petBreed"]:checked')
  let ageRange = document.querySelector('input[name="ageRange"]:checked')
  let gender = document.querySelector('input[name="gender"]:checked')
  let otherPets = document.querySelector('input[name="otherPets"]:checked')

  if (!petType || !petBreed || !ageRange || !gender || !otherPets) {
    alert("Please fill out all fields.")
    return false;
  }
  return true;
}

function submitGive() {
  let petType = document.querySelector('input[name="petType"]:checked')
  let petBreed = document.querySelector('input[name="petBreed"]:checked')
  let ageRange = document.querySelector('input[name="ageRange"]:checked')
  let gender = document.querySelector('input[name="gender"]:checked')
  let otherDogs = document.querySelector('input[name="otherDogs"]:checked')
  let otherCats = document.querySelector('input[name="otherCats"]:checked')
  let otherChildren = document.querySelector('input[name="otherChildren"]:checked')
  let freeForm = document.querySelector('textarea[name="freeForm"]')
  let name = document.querySelector('input[name="name"]')
  let email = document.querySelector('input[name="email"]')
  
  if (!petType || !petBreed || !ageRange || !gender || !otherDogs || !otherCats || !otherChildren || !freeForm.value.trim() || !name.value || !email.value) {
    alert("Please fill out all fields.")
    return false
  }
    
  const pattern = /^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/
  let Email = email.value;
  const isValidEmail = pattern.test(Email);
  if (!isValidEmail) {
    alert("Invalid email format!");
    return false
  }
    
  return true
}