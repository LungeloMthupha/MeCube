document.onreadystatechange = () => {
    if (document.readyState === 'complete') {
        // document ready
        document.getElementById("preloader").style.display = "none";
        if (window.location.toString().includes("edit")) {
            // alert("EDIT MODE");
            toggleTrayOnEditMode(false);
          }
    }
    };