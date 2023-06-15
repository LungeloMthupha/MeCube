//check if the tray is opened
let isOpen = false;
const tray_key = document.getElementById("tray-key");
const tray = document.getElementById("crud");


//interact with the tray using a click event listener
tray_key.addEventListener("click", () => {
  toggleTray();
  
});

//Open and close the tray window
function toggleTray() {
  if (isOpen === false) {
    closeTray();
  } else {
    openTray();
  }
}

//Pre-check tray state befor the page loads and the decide to open and close the tray
function toggleTrayOnEditMode(trayState) {
  if (isOpen === false) {
    closeTray();
  } else {
    openTray();
  }
}

//Functio to open the tray ans add animation 
function openTray(){
  tray.animate(
    { transform: "translateY(500px)" },
    {
      duration: 500,
      fill: "forwards",
    }
  );
  isOpen = false;
  console.log("Closing tray...");

  tray_key.style.transform = `translateY(0px)`;
  tray_key.style.transition = " 1s ease-in-out";
}


//Funstion to close the tray with a smooth transition
function closeTray(){
  tray.animate(
    { transform: "translateY(0px)" },
    {
      duration: 500,
      fill: "forwards",
    }
  );
  isOpen = true;
  console.log("Opening tray...");
  tray_key.style.transform = `translateY(-${tray.clientHeight + 20}px)`;
  tray_key.style.transition = " 1s ease-in-out";
}