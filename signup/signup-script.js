const form = document.getElementById("signup-form");

form.addEventListener("submit", async (e) => {
     e.preventDefault();
     const formData = new FormData(form)
     /*
     full-name-field
     email-field
     password-field
     check-field
     */
     const rawResp = await fetch("./signup-process.php", {
          method: "POST",
          body: formData
     });
     const resp = await rawResp.json();
     if (resp.data) {
          document.location.href = '/control-panel/dashboard/';
     }
     console.log(resp);
});