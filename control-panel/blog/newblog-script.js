const form = document.getElementById("newblog-form");

form.addEventListener("submit", async (e)=>{
    e.preventDefault();
    const formData = new FormData(form);
    /*
    title-field
    subject-field
    file-field
    */
    const rawResp = await fetch("/control-panel/blog/newblog-process.php", {
        method: "POST",
        body: formData
    });
    const resp = await rawResp.json();
    form.reset();
    console.log(resp);
});