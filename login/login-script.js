const form = document.getElementById("login-form");

form.addEventListener("submit", async (e) => {
    e.preventDefault();
    const formData = new FormData(form);
    const rawResp = await fetch("./login-process.php", {
        method: "POST",
        body: formData
    });
    const resp = await rawResp.json();

    if (resp.data == '1') {
        document.location.href = "../control-panel/dashboard/";
    }
    console.log(resp);
    
});