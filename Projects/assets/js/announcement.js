function toggleAnnouncements() {
    var content = document.getElementById("announcementsContent");
    var btn = document.querySelector(".toggle-btn");
    if (content.style.display === "none") {
        content.style.display = "block";
        btn.textContent = "Collapse";
    } else {
        content.style.display = "none";
        btn.textContent = "Expand";
    }
}