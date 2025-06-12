const form = document.getElementById("signup-form");

form.addEventListener("submit", async (e)=>{
    e.preventDefault();
    const formData = new FormData(form)
    /*
    full-name-field
    email-field
    password-field
    confirm-field
    */
   const resp = await fetch("./signup-process.php", {
        method: "POST",
        body: formData
   });
   const jdata = resp.json();
   console.log(jdata);
});