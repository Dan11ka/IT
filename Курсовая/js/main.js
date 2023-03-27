let content = document.getElementById("content")
let show = document.getElementById("showContent")

show.addEventListener("click", () => {
	if (content.style.display === "block") {
		content.style.display = "none"
	} else {
		content.style.display = "block"
	}
})